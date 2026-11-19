<?php
/**
 * WPCode PHP Snippet: Puente directo desde Gravity Forms hacia Webhook de Make (Escenario 2248037).
 *
 * Ubicación en WPCode: Nuevo Snippet -> Tipo "PHP Snippet" -> Ubicación: "Run Everywhere".
 * IMPORTANTE: Al pegar este código en WPCode, omite la etiqueta de apertura "<?php" de la línea 1.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'gform_after_submission', 'ism_gf_enviar_a_make', 10, 2 );

function ism_gf_enviar_a_make( $entry, $form ) {
	$form_id = isset( $form['id'] ) ? (int) $form['id'] : 0;

	// Guardia de privacidad y pruebas:
	// NUNCA enviar a Make ni a Google Sheets el formulario #29 (Denuncias Ley Karin) ni #30 (Pruebas).
	if ( in_array( $form_id, array( 29, 30 ), true ) ) {
		return;
	}

	$nombre   = trim( (string) rgar( $entry, '7' ) );
	$email    = trim( (string) rgar( $entry, '3' ) );
	$telefono = trim( (string) rgar( $entry, '4' ) );
	$sede_raw = trim( (string) rgar( $entry, '6' ) );
	$curso_8  = trim( (string) rgar( $entry, '8' ) );

	$form_title = isset( $form['title'] ) ? trim( (string) $form['title'] ) : '';
	$curso      = '' !== $curso_8 ? $curso_8 : trim( (string) preg_replace( '/\bLanding\b/i', '', $form_title ) );
	$curso      = trim( (string) preg_replace( '/\s+/', ' ', $curso ) );

	// Normalización de sede y datos de contacto por sede
	$es_maipu      = ( false !== stripos( $sede_raw, 'maip' ) );
	$sede_nombre   = $es_maipu ? 'Maipú' : ( '' !== $sede_raw ? $sede_raw : 'Providencia' );
	$correo_sede   = $es_maipu ? 'secretariamaipu@ismchile.cl' : 'secretaria@ismchile.cl';
	$whatsapp_sede = $es_maipu ? '+56 9 9005 9968' : '+56 9 7126 6207';

	// Resolución de URL limpia de PDF 2027 en Biblioteca de Medios WP
	$base    = 'https://www.ismchile.cl/wp-content/uploads/2026/11/';
	$url_pdf = 'https://www.ismchile.cl/cursos/';
	$needle  = function_exists( 'mb_strtolower' ) ? mb_strtolower( $curso . ' ' . $form_title, 'UTF-8' ) : strtolower( $curso . ' ' . $form_title );

	if ( false !== strpos( $needle, 'cosmetolog' ) ) {
		$url_pdf = $base . 'Brochure-Cosmetologia-2027.pdf';
	} elseif ( false !== strpos( $needle, 'estet' ) || false !== strpos( $needle, 'estét' ) ) {
		$url_pdf = $base . 'Brochure-Estetica-Integral-2027.pdf';
	} elseif ( false !== strpos( $needle, 'pastel' ) || false !== strpos( $needle, 'repost' ) ) {
		$url_pdf = $base . 'Brochure-Pasteleria-Reposteria-2027.pdf';
	} elseif ( false !== strpos( $needle, 'masoterap' ) || false !== strpos( $needle, 'masofilax' ) ) {
		$url_pdf = $base . 'Brochure-Masoterapia-Integral-2027.pdf';
	} elseif ( false !== strpos( $needle, 'maquill' ) ) {
		$url_pdf = $base . 'Brochure-Maquillaje-Integral-2027.pdf';
	} elseif ( false !== strpos( $needle, 'estilist' ) ) {
		$url_pdf = $base . 'Brochure-Estilista-Unisex-2027.pdf';
	} elseif ( false !== strpos( $needle, 'peluquer' ) ) {
		$url_pdf = $base . 'Brochure-Peluqueria-Unisex-2027.pdf';
	} elseif ( false !== strpos( $needle, 'enfermer' ) ) {
		$url_pdf = $base . 'Brochure-Enfermeria-Asistencial.pdf';
	} elseif ( false !== strpos( $needle, 'perfeccion' ) ) {
		$url_pdf = 'https://www.ismchile.cl/perfeccionamiento/';
	}

	$payload = array(
		'nombre'        => $nombre,
		'email'         => $email,
		'telefono'      => $telefono,
		'sede'          => $sede_nombre,
		'curso'         => $curso,
		'url_pdf'       => $url_pdf,
		'correo_sede'   => $correo_sede,
		'whatsapp_sede' => $whatsapp_sede,
		'origen'        => 'Gravity Forms #' . $form_id . ' - ' . $form_title,
		'fecha'         => current_time( 'Y-m-d H:i:s' ),
	);

	wp_remote_post(
		'https://hook.us2.make.com/9gqxj4it27ro1j51rkgoth6tsnwo8qei',
		array(
			'method'   => 'POST',
			'timeout'  => 10,
			'blocking' => false,
			'headers'  => array(
				'Content-Type' => 'application/json; charset=utf-8',
			),
			'body'     => wp_json_encode( $payload ),
		)
	);
}
