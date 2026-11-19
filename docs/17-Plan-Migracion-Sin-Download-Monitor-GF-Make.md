---
fecha: 2026-11-19
tipo: "plan-migracion"
estado: "listo-para-desplegar"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
institucion: "Instituto Santa María (ISM)"
responsable: "Cristián Díaz (crdiazu@gmail.com / cristian@ismchile.cl)"
---

# Plan de Migración Sin Download Monitor + Puente Gravity Forms → Make + Correo Maestro Admisión 2027

> [!abstract] Decisión de Arquitectura (19-nov-2026)
> Mantener **Download Monitor desactivado permanentemente** y operar únicamente con herramientas ya activas y pagadas en el stack del Instituto:
> - **Biblioteca de Medios nativa de WordPress** (alojamiento directo de PDFs sin carpetas bloqueadas por `.htaccess`).
> - **WPCode** (redirecciones `301` de `/download/<ID>/` + puente `gform_after_submission` hacia Make).
> - **Gravity Forms Pro** (licencia validada en el sitio) y **Contact Form 7** existentes.
> - **Make.com (Escenario `2248037`)** como orquestador único hacia **Google Sheets** (`ism data capture`) y el **Correo Maestro HTML Admisión 2027**.
> - **Chatfuel** como canal conversacional 24/7 en WhatsApp, Instagram y Web Widget.

---

## 1. Auditoría Completa de Referencias a Download Monitor (`dlm_download` / `[download` / `/download/`)

Auditoría ejecutada sobre el respaldo completo (`28.349` archivos y base de datos SQL con JSON de Elementor y Gravity Forms) más la consulta en vivo de la API de Chatfuel (`ISM`, ID `6945c5a29825ddd43b48c7f7`):

| Origen auditado | Total | Estado al desactivar Download Monitor | Acción / Remediación |
| :--- | :---: | :--- | :--- |
| **Temas (`vault`, `vault-child`, `twentytwentyfive`) y MU-Plugins** | **0** | ✅ Limpio | No requiere cambios en archivos PHP/JS/CSS del tema. |
| **Shortcodes `[download ...]` sueltos** | **0** | ✅ Limpio | No se encontraron shortcodes incrustados en contenido. |
| **Elementor — Páginas publicadas (`_elementor_data`)** | **18 páginas** | 🔴 Enlaces `/download/<ID>/` dan 404 sin redirección | **Cubierto por snippet `301` en WPCode:** incluye las 9 `/gracias-*`, las 5 `/gracias-landing-*`, 3 `/gracias-*-intensivo-segundo-semestre/` y la página legal `/reglamentos_laborales_y_ley_karin/` (`16390`). |
| **Elementor — Plantillas guardadas (`elementor_library`)** | **3 plantillas** | 🔴 `/download/` e histórico `/landing/download/913/` | `Grilla - Perfeccionamiento - Folletos` (`15111`, 10 links) + `gracias` (`12887`) y `gracias 1` (`12889`) redirigidas vía WPCode. |
| **Contact Form 7 (`_mail_2`)** | **14 formularios** | 🔴 Envían correo viejo "Admisión 2026" con `/download/<ID>/` | Apagar `Correo electrónico (2)` en CF7 y centralizar envío en el Correo Maestro de Make (`2248037`). Respaldado igualmente por redirección `301`. |
| **Gravity Forms (`gf_form_meta`)** | **18 formularios** | 🔴 Forms `8`–`30` envían correo antiguo + rutas muertas `agenciaecolecua.cl` | Apagar notificaciones viejas al usuario, activar puente PHP hacia Make (excluyendo `#29` Ley Karin y `#30` Pruebas). |
| **Chatfuel EN VIVO (`goodsCatalog` + `faqs`)** | **26 enlaces** | 🔴 21 ítems de catálogo + 5 FAQs de materiales con `/download/` | Cubierto de inmediato por el `301` en WPCode y listo para actualizar en Chatfuel directo a las URLs limpias `/wp-content/uploads/2026/11/...`. |
| **Documentos del repositorio** | **2 enlaces** | 🟡 Referencias en texto plano | Documentado en `Textos_Flujo_5_Ramas_2027.md`. |

---

## 2. Entregables Creados en `docs/snippets/`

1. **[`wpcode-redirecciones-download-monitor.php`](snippets/wpcode-redirecciones-download-monitor.php):**
   - Intercepta `/download/<ID>/` (ignorando `?tmstv=...`) y `/landing/download/<ID>/` con redirección `301` hacia los archivos nativos en `/wp-content/uploads/2026/11/`.
   - Protege los 7 brochures 2027, Ley Karin / RIOHS (`16390`), Datos Bancarios Maipú (`17465`), Enfermería (`15234`), los 10 talleres de Perfeccionamiento, Estética Corporal (`15231`) y redirige los intensivos 2024 hacia los programas 2027 vigentes.
2. **[`wpcode-gravityforms-to-make.php`](snippets/wpcode-gravityforms-to-make.php):**
   - Conecta `gform_after_submission` con el webhook `https://hook.us2.make.com/9gqxj4it27ro1j51rkgoth6tsnwo8qei` (Escenario `2248037`).
   - **Guardia de privacidad obligatoria:** excluye explícitamente los formularios **`#29` (*Ingreso de denuncias - Ley Karin*)** y **`#30` (*Prueba*)** para que nunca salgan datos confidenciales hacia Make ni Google Sheets.
   - Normaliza `nombre`, `email`, `telefono`, `sede`, `curso`, resuelve `url_pdf`, `correo_sede`, `whatsapp_sede`, `origen` y `fecha`.
3. **[`plantilla-correo-admision-2027-make.html`](snippets/plantilla-correo-admision-2027-make.html):**
   - Plantilla maestra HTML responsive para usar en Make.com (SMTP Titan / Brevo) con placeholders `{{nombre}}`, `{{curso}}` y `{{url_pdf}}`, botón directo a WhatsApp Bot 24/7 (`+56 9 5200 6799`), números vigentes de Providencia y Maipú (`+56 9 9005 9968`) y horarios oficiales.
4. **[`plantilla-correo-admision-2027-gravityforms.html`](snippets/plantilla-correo-admision-2027-gravityforms.html):**
   - Variante lista para notificaciones de Gravity Forms (`{Nombre:7}`, `{form_title}`) por si se requiere respaldo directo en WP en algún formulario puntual.

---

## 3. Guía Paso a Paso de Despliegue

### Paso 1: Subir los 21 PDFs limpios a Medios de WordPress
1. Abre la carpeta local **`PDF_Subir_WP_Medios/`** (generada fuera del repo en la raíz del proyecto, con nombres limpios sin tildes ni espacios).
2. Ve a **WP Admin → Medios → Añadir nuevo** y arrastra los **21 archivos PDF**.
3. Abre uno de los PDFs recién subidos y confirma el prefijo de carpeta en la URL (ej. `https://www.ismchile.cl/wp-content/uploads/2026/11/`). Si el mes en el servidor fuera distinto, actualiza la línea `$base` en ambos snippets PHP.

### Paso 2: Activar los 2 Snippets en WPCode
1. Ve a **WP Admin → Fragmentos de código → Añadir nuevo → Agregar tu código personalizado (Nuevo snippet)**.
2. Elige tipo **PHP Snippet** y ubicación **Run Everywhere**:
   - **Snippet 1:** Pega [`wpcode-redirecciones-download-monitor.php`](snippets/wpcode-redirecciones-download-monitor.php) *(omitiendo la primera línea `<?php`)* → Guarda y **Activa**.
   - **Snippet 2:** Pega [`wpcode-gravityforms-to-make.php`](snippets/wpcode-gravityforms-to-make.php) *(omitiendo la primera línea `<?php`)* → Guarda y **Activa**.
3. Verifica en incógnito abriendo `https://www.ismchile.cl/download/15249/` y `https://www.ismchile.cl/download/16390/` que ambos descarguen/abran directo el PDF 2027 de Pastelería y el RIOHS sin error 404.

### Paso 3: Reestructurar Escenario `2248037` en Make.com (con Router y sin Kommo)
1. Abre el escenario `2248037` en Make y **desconecta / elimina los módulos antiguos de Kommo** (para que una falla de licencia en Kommo no bloquee el flujo ni el correo).
2. Inserta un **Router** inmediatamente después del **Custom Webhook (`1199945`)**:
   - **Rama 1 — Registro en Google Sheets:** Conecta directo al módulo **Google Sheets (`Add a Row`)** vinculado a la planilla `ism data capture` (`10gwdNWbrI1zwH-PgNtTnf2fJb73QHwLaOSZCsuauVUs`, pestaña `Hoja 1`), mapeando `nombre`, `email`, `telefono`, `sede`, `curso` y `fecha`.
   - **Rama 2 — Correo Maestro Admisión 2027:** Agrega un módulo **Email (`Send an Email`)** con tu conexión SMTP (`smtp.titan.email` puerto `465`) o **Brevo**:
     - **To:** correo del prospecto desde el webhook.
     - **Subject:** `Tu programa de {{curso}} — Admisión 2027 | Instituto Santa María`
     - **Content:** pega el código de [`plantilla-correo-admision-2027-make.html`](snippets/plantilla-correo-admision-2027-make.html) y reemplaza `{{nombre}}`, `{{curso}}` y `{{url_pdf}}` por las variables reales del webhook.
3. Guarda cambios del escenario y déjalo en **ON**.

### Paso 4: Apagar Correos Viejos en WordPress y Probar de Punta a Punta
1. En **Gravity Forms (`admin.php?page=gf_edit_forms`)**, entra a los formularios activos (`id=10`, `id=17`, etc.) → **Ajustes → Notificaciones** y desactiva la notificación automática antigua al usuario *(manteniendo activas solo las alertas internas que aún dependan de GF mientras migran a CF7/Make)*.
2. En **Contact Form 7 (`admin.php?page=wpcf7`)**, desmarca **"Usar correo electrónico (2)"** en los formularios que ya envían por Make para no duplicar correos.
3. Envía **1 formulario de prueba** real y valida:
   - Correo de respuesta llega con banner, botones HTML funcionales, link al PDF 2027 y botón de WhatsApp Chatfuel.
   - Se registra la nueva fila en `ism data capture` en Google Sheets.
   - Secretaría, `directora@ismchile.cl` y `cristian@ismchile.cl` reciben la notificación interna.

---

## 4. Próximas Correcciones Pendientes en Chatfuel en Vivo (Requiere Confirmación)

Al inspeccionar el bot en vivo `ISM` (`6945c5a29825ddd43b48c7f7`) vía `chatfuel-api`, quedaron detectados 3 ajustes listos para aplicar apenas confirmes:
1. **Actualizar los 26 enlaces `/download/`** (`21` productos de `goodsCatalog` + `5` FAQs de materiales) hacia las URLs definitivas de `/wp-content/uploads/2026/11/...` una vez subidos los PDFs.
2. **Activar `WebWidgetDirectMessage`** (actualmente `enabled: false`), ya que el script del widget web está instalado en `ismchile.cl` vía WPCode pero su automatización base en Chatfuel está apagada.
3. **Corregir cruce de precios en `additionalInstructions` (Sede Maipú):** actualmente indica `Cosmetología: $97.000` y `Masoterapia: $85.000`, invertido respecto al catálogo oficial (`Cosmetología semana $85.000` y `Masoterapia semana $97.000`).
