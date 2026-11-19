<?php
/**
 * WPCode PHP Snippet: Redirecciones 301 desde enlaces antiguos de Download Monitor (/download/<ID>/)
 * hacia archivos nativos en la Biblioteca de Medios de WordPress.
 *
 * Ubicación en WPCode: Nuevo Snippet -> Tipo "PHP Snippet" -> Ubicación: "Run Everywhere".
 * IMPORTANTE: Al pegar este código en WPCode, omite la etiqueta de apertura "<?php" de la línea 1.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'template_redirect', 'ism_redirigir_descargas_legacy', 1 );

function ism_redirigir_descargas_legacy() {
	if ( empty( $_SERVER['REQUEST_URI'] ) ) {
		return;
	}

	$path = (string) wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH );

	// Carpeta base en Medios de WordPress (ajusta año/mes si subes los PDFs en otro mes).
	$base = 'https://www.ismchile.cl/wp-content/uploads/2026/11/';

	// Mapa exacto de IDs de Download Monitor -> Archivos limpios en Medios WP.
	$mapa = array(
		// 7 Brochures Oficiales Admisión 2027
		'15255' => $base . 'Brochure-Cosmetologia-2027.pdf',
		'15252' => $base . 'Brochure-Estetica-Integral-2027.pdf',
		'15249' => $base . 'Brochure-Pasteleria-Reposteria-2027.pdf',
		'15246' => $base . 'Brochure-Masoterapia-Integral-2027.pdf',
		'15243' => $base . 'Brochure-Maquillaje-Integral-2027.pdf',
		'15240' => $base . 'Brochure-Estilista-Unisex-2027.pdf',
		'15237' => $base . 'Brochure-Peluqueria-Unisex-2027.pdf',

		// Documentos institucionales críticos y Enfermería
		'16390' => $base . 'Reglamento-Interno-RIOHS-ISM.pdf', // Ley Karin / RIOHS
		'17465' => $base . 'Datos-Bancarios-Sede-Maipu-ISM.pdf',
		'15234' => $base . 'Brochure-Enfermeria-Asistencial.pdf',
		'15231' => $base . 'Estetica-Corporal.pdf',

		// Cursos y talleres de Perfeccionamiento
		'15207' => $base . 'Pasteleria-para-Diabeticos-2024.pdf',
		'15210' => $base . 'Lifting-Laminado-Cejas-2024.pdf',
		'15213' => $base . 'Masaje-Descontracturante-Espalda-2024.pdf',
		'15216' => $base . 'Maderoterapia-y-Ventosas-2024.pdf',
		'15219' => $base . 'Taller-Masaje-Piedras-Calientes-2024.pdf',
		'16062' => $base . 'Manicure-Integral-2024.pdf',
		'16065' => $base . 'Depilacion-Mixta-Cera-2024.pdf',
		'16313' => $base . 'Taller-Corte-Femenino-2024.pdf',
		'16316' => $base . 'Taller-Colorimetria-Nivel-I-2024.pdf',
		'16319' => $base . 'Taller-Maquillaje-Ojos-Full-Color-2024.pdf',

		// Redirecciones de respaldo desde intensivos 2024 hacia programas 2027 vigentes
		'16102' => $base . 'Brochure-Masoterapia-Integral-2027.pdf',
		'16162' => $base . 'Brochure-Peluqueria-Unisex-2027.pdf',
		'16220' => $base . 'Brochure-Pasteleria-Reposteria-2027.pdf',
	);

	// 1. Enlaces heredados de la landing de agencia (/landing/download/913/, 917, etc.)
	if ( preg_match( '#^/landing/download/\d+/?#i', $path ) ) {
		wp_redirect( 'https://www.ismchile.cl/cursos/', 301 );
		exit;
	}

	// 2. Enlaces de Download Monitor (/download/<ID>/?tmstv=...)
	if ( preg_match( '#^/download/(\d+)/?#i', $path, $matches ) ) {
		$id     = $matches[1];
		$target = isset( $mapa[ $id ] ) ? $mapa[ $id ] : 'https://www.ismchile.cl/cursos/';
		wp_redirect( $target, 301 );
		exit;
	}
}
