---
fecha: 2026-10-18
tipo: "auditoria-web"
estado: "en_accion"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
sitio: "https://www.ismchile.cl"
coordinador: "Cristian"
aprobadora: "Mary Luz Leal Barrera"
desarrolladora: "Antonia Hordern (AH Diseño)"
---

# 14 · Auditoría de Comportamiento Web — Optimización Total

> **Objetivo:** diagnóstico objetivo del comportamiento real de `www.ismchile.cl` bajo la mirada de **optimizarlo todo** para la campaña de Admisión 2027: velocidad, SEO, medición, conversión, seguridad e higiene de contenido.

> [!info] Método y alcance
> **Fecha de medición:** 17–18 octubre 2026. **Tipo:** revisión de solo lectura (sin credenciales, sin modificar nada del sitio): descarga de HTML, cabeceras HTTP, listado de recursos de 4 páginas, análisis SEO de 9 páginas y descarga del contenedor público de Google Tag Manager.
> **Limitaciones:** la ejecución de Lighthouse falló (`gather` abortado) — los Core Web Vitals de laboratorio siguen **pendientes**. Las cifras de rendimiento son pesajes HTTP directos, no métricas de campo (CrUX/PSI).

---

## 1. Resumen ejecutivo

| Área | Semáforo | Diagnóstico en una línea |
|---|---|---|
| **Medición / Tracking** | 🔴 | **No hay Meta Pixel en el sitio** pese a que Meta Ads es canal de captación; Google Ads puede estar contando **doble**. |
| **SEO on-page** | 🔴 | **Cero meta descripciones, cero H1, cero etiquetas Open Graph** en todas las páginas revisadas. |
| **Rendimiento** | 🔴 | ~**11 MB** de recursos por carga, **sin compresión** y sin caché de imágenes; TTFB 1,6–2,1 s. |
| **Conversión / Funnel** | 🟡 | Landings y formularios funcionales, pero el pase **web → Make → secretaría** no es verificable desde el HTML; línea Kommo descontinuada sigue publicada. |
| **Contenido / Higiene** | 🟡 | ~20 páginas `/gracias-*` y páginas de prueba **indexables**; títulos sin keyword. |
| **Seguridad** | 🟡 | Listado de directorios activo, sin cabeceras de seguridad, `wp-login` expuesto. |

**Impacto comercial:** mientras no haya Meta Pixel y evento de conversión, la campaña de matrícula 2027 está **optimizando a ciegas** (sin optimización por eventos ni remarketing), y los títulos/descripciones sin keyword limitan el tráfico orgánico de los programas.

---

## 2. Stack detectado

**WordPress** · tema `vault` + `vault-child` · **Elementor** (326 referencias en `/contacto`) · **Autoptimize** (agrupación JS/CSS) · **Gravity Forms** (formularios en `/contacto`) · **Contact Form 7** (todas las `landing-*`) · **Download Monitor** · **Jetpack Stats** (`stats.wp.com`, blog `257902391`) · widget **Chatfuel** (bot `6945c5a29825ddd43b48c7f7`) · servidor **Apache** (hosting HostGator).

### Componentes de medición activos
| Componente | ID | Dónde se carga |
|---|---|---|
| Google Tag Manager | `GTM-MFW478HP` | `<head>` + `<noscript>` iframe en todas las páginas revisadas |
| Google tag (Site Kit) | `GT-MBNST67` | `gtag("config", ...)` inline |
| Google Ads | `AW-687054614` | inline en HTML **y** como tag de conversión (`awct`) dentro del contenedor GTM |
| Meta Pixel | — | **AUSENTE** (sin `fbq(`, sin `connect.facebook.net`, sin `pixelId` en HTML ni en el contenedor GTM) |
| TikTok / Pinterest / LinkedIn | — | Solo aparecen como **categorías** en la configuración de consentimiento; no hay píxeles reales |

> El contenedor GTM descargado (440 KB) sí contiene tags de conversión Google Ads con **Enhanced Conversions** (`user_data` con hash sha256), lo que confirma que la medición de Google está relativamente armada y la de Meta no.

---

## 3. Rendimiento (pesaje HTTP directo)

### 3.1 Páginas medidas

| Página | HTML (KB) | Tiempo de descarga (ms) | Requests | Imágenes | CSS | JS |
|---|---:|---:|---:|---:|---:|---:|
| `/` (portada) | 206,0 | 2.173 | 29 | 21 | 1 | 5 |
| `/cursos/` | 93,0 | 1.375 | 20 | 12 | 1 | 5 |
| `/contacto/` | 70,6 | 1.368 | 15 | 5 | 1 | 7 |
| `/landing-pasteleria/` | 174,2 | 1.489 | **75** | **67** | 1 | 5 |

### 3.2 Peso total de recursos

| Tipo | Archivos | Peso total (KB) | Promedio (KB) |
|---|---:|---:|---:|
| JPG | 64 | **5.011** | 78,3 |
| JS | 10 | **3.008** | 300,8 |
| CSS | 4 | **2.848** | 712,0 |
| PNG | 14 | 832 | 59,4 |
| gtag (Google) | 1 | 590,7 | 590,7 |
| SVG | 5 | 32 | 6,3 |
| **TOTAL aprox.** | **~98** | **~12,3 MB** | — |

### 3.3 Hallazgos de rendimiento (ordenado por impacto)

1. **Sin compresión HTTP en ningún recurso propio.** El header `Content-Encoding` está **ausente** en los 14 recursos JS/CSS/HTML verificados. Se sirven ~5,8 MB de JS+CSS **sin gzip ni brotli**. → *Ahorro inmediato estimado: 70–80 % de ese peso.*
2. **CSS/JS enormes por página.** Los bundles de Autoptimize son de 883, 774, 770, 725, 680, 676, 671 y 570 KB (CSS de hasta **770 KB por página**). Están cacheados con `public, max-age=30672000, immutable` ✅, pero la descarga primera es igual de pesada.
3. **Imágenes sin optimizar y sin caché.** 92 recursos **no tienen cabecera `Cache-Control`** (casi todos imágenes). La portada usa `Home-ISM-mobile-1.png` de **490 KB** (PNG en vez de WebP). Más de 30 JPG de `2020/02/` con 90–160 KB a 960×720, todos sin WebP/AVIF.
4. **Portada no cacheable y con sesión.** `Cache-Control: no-store, no-cache, must-revalidate` + `Set-Cookie: PHPSESSID` en la **página pública** → cada visita recalcula el PHP completo. Consistente con el TTFB de **1,6–2,1 s**.
5. **Landing de conversión con 75 requests / 67 imágenes.** Es la página que debe convertir y es la más pesada de todas.
6. **Sin dimensiones declaradas:** 27 imágenes de la portada sin `width`/`height` → riesgo de **CLS** (saltos de layout).
7. **gtag.js de Google (590 KB) carga sin diferir** en la portada, compitiendo con el render.
8. **HTTP/2 disponible** (`Upgrade: h2`) ✅ — el problema no es el protocolo, es el peso y la compresión.

> **Pendiente:** re-ejecutar Lighthouse (falló en la fase de *gather*) para obtener LCP/CLS/INP de laboratorio y comparar antes/después.

---

## 4. SEO on-page

Medición sobre 9 páginas representativas (portada, quiénes somos, cursos, ficha de curso, contacto, landing, gracias, política de privacidad, página de prueba):

| Página | Title (car.) | Meta description | H1 | Open Graph | Canonical | Viewport |
|---|---:|---:|---:|---|---|---|
| `/` | 33 | **0** | **0** | ❌ | ✅ | ✅ |
| `/quienes-somos/` | 43 | **0** | **0** | ❌ | ✅ | ✅ |
| `/cursos/` | 36 | **0** | **0** | ❌ | ✅ | ✅ |
| `/cursos/pasteleria/` | 40 | **0** | **0** | ❌ | ✅ | ✅ |
| `/contacto/` | 38 | **0** | **0** | ❌ | ✅ | ✅ |
| `/landing-pasteleria/` | 48 | **0** | **0** | ❌ | ✅ | ✅ |
| `/gracias-pasteleria/` | 48 | **0** | **0** | ❌ | ✅ | ✅ |
| `/politica-de-privacidad/` | 52 | **0** | **0** | ❌ | ✅ | ✅ |
| `/pagina-de-prueba-de-contact-form-7/` | 64 | **0** | **0** | ❌ | ✅ | ✅ |

### 4.1 Hallazgos
- **Cero meta descripciones** en el 100 % de las páginas → Google genera el snippet al azar (fragmentado desde el cuerpo).
- **Cero `<h1>`**: la portada tiene 0 `h1`, 5 `h2`, 3 `h3`. Los `h2` detectados contienen el contenido real de la portada: *"Proceso de Admisión 2027 | Inicia en noviembre"*, *"Prestigio y Experiencia desde 1979"*, *"Testimonios"*. → Semántica invertida: lo más importante no es encabezado de nivel 1.
- **Cero etiquetas `og:` / `twitter:`** en la portada → al compartir en **WhatsApp o Instagram** la tarjeta sale **sin imagen ni título** (directo al enlace crudo). Pérdida relevante para un funnel que vive en redes.
- **Títulos sin keyword**: `Instituto Santa Maria – ISM` (33 car.) no incluye "cursos", "carrera", "Santiago", "admisión 2027". El único que roza keyword es el de la política de privacidad.
- **Sitemap con 49 URLs**, incluyendo ~20 páginas `/gracias-*` (indexables) y páginas de prueba: `/pagina-de-prueba-de-contact-form-7/`, `/landing-prueba-modificacion-de-notificacion/`, `/plantilla-banner-imagen/`.
- **Páginas huérfanas** en el sitemap sin curso asociado visible: `gracias-enfermeria-asistencial`, `gracias-estetica-corporal`, `gracias-masofilaxia-corporal`, `gracias-perfeccionamiento`.
- `robots.txt` expone rutas internas: `/gravityexport/`, `/gf-entries-in-excel/`, `/gravityexport-lite/` (hoy responden 404 ✅, pero delatan el plugin de exportación).
- **Sin `og:title`** y `title` de la página de prueba indexado tal cual: `PAGINA DE PRUEBA DE CONTACT FORM 7 – Instituto Santa Maria`.

---

## 5. Comportamiento de conversión y captación

### 5.1 Formularios
| Página | Plugin | Formulario | Notas |
|---|---|---|---|
| `/contacto/` | Gravity Forms | `gform_21`: Nombre, Email, Teléfono, *select*, Mensaje + honeypot | Postea a sí mismo (`action="/contacto/"`) |
| 13 `landing-*` | Contact Form 7 | `wpcf7-f16782-p14733-o1` | Postea a la misma página de landing |

**No se observa webhook ni endpoint de Make/Chatfuel en el HTML de los formularios.** Hipótesis a verificar: el flujo documentado *"web → Make → secretaría / hoja de leads"* puede depender de un plugin no visible o **no estar conectado a estos formularios**. Contradice la nota del registro: *"el flujo web → secretaría es crítico"*.

### 5.2 Páginas de agradecimiento
- Existen ~20 páginas `/gracias-*`, una por programa → patrón correcto para usar como **evento de conversión**.
- **No se detectó** en el HTML de `/gracias-pasteleria/` ningún `gtag('event', ...)`, `send_to` ni `fbq('track', ...)`. Si la conversión ocurre, ocurre **dentro de GTM por triggers** → hay que validar con **GTM Preview**.

### 5.3 Enlaces a canales publicados en el sitio
| Destino | Valor | Estado |
|---|---|---|
| WhatsApp Chatfuel | `56952006799` | ✅ Vigente |
| **WhatsApp Kommo** | `56978920810` | 🔴 **Sigue publicado y Kommo se descontinuó el 17-10-2026** → leads a un canal muerto |
| WhatsApp Providencia | `56971266207` (`wa.me`) | ✅ |
| WhatsApp Maipú | `56990059968` (`wa.me`) | ✅ |
| Instagram / Facebook | `ismchile` | ✅ |
| WhatsApp con dígito extra | `phone=569520067990` | 🐛 12 dígitos → enlace roto |
| Query strings de WhatsApp | `&text&type=phone_number` | 🐛 parámetros sin valor → sin texto pre-rellenado (Elementor) |
| Widget Chatfuel | cargado en todas las páginas | ✅ bot `6945c5a29825ddd43b48c7f7` |

### 5.4 Banner de consentimiento
La configuración inyectada declara categorías y *prior consent* para: `facebook`, `analytics`, `google_ads`, `tiktok`, `pinterest`, `bing`, `reddit`, `openai`. Integraciones con Cookiebot / Real Cookie Banner / Cookie Notice aparecen **deshabilitadas**. → Verificar **visualmente** si el banner real se renderiza y si bloquea tags antes del consentimiento.

---

## 6. Seguridad e higiene (superficie expuesta)

| Hallazgo | Estado | Riesgo |
|---|---|---|
| Listado de directorios activo en `/wp-content/uploads/` (árbol 2019→2026) | 🟡 Activo | Expone estructura de medios y volcados históricos |
| Sin `Strict-Transport-Security` | 🟡 Ausente | Sin protección HSTS |
| Sin `Content-Security-Policy` en el sitio público | 🟡 Ausente | Mayor superficie XSS (solo `wp-login` tiene CSP) |
| Sin `X-Content-Type-Options` en portada | 🟡 Ausente | Sniffing de tipos MIME |
| Sin `Referrer-Policy` / `Permissions-Policy` | 🟡 Ausente | Fuga de referencias |
| `Set-Cookie: PHPSESSID` en página pública | 🟡 Activo | Sesión innecesaria + impide cachear |
| `/wp-json/` abierto (627 KB) | 🟡 Abierto | Enumeración de contenido (usuarios 401 ✅, `xmlrpc` 405 ✅) |
| `wp-login.php` público | 🟡 Abierto | Superficie de fuerza bruta (normal, pero conviene limitar) |
| `/gravityexport/` y variantes en `robots.txt` | 🟡 404 ✅ | El `Disallow` delata el plugin |

---

## 7. Plan de optimización priorizado

### 🔴 Fase A — Inmediato (impacto en la campaña de Admisión 2027) · 1–3 días
| # | Acción | Responsable | Evidencia |
|---|---|---|---|
| A1 | **Instalar Meta Pixel** en GTM y crear evento **`Lead`** disparado en las ~20 páginas `/gracias-*` | Cristian | Sin `fbq` en HTML ni en contenedor |
| A2 | **Resolver duplicidad de Google Ads**: `AW-687054614` está inline *y* como tag GTM → dejar una sola vía | Cristian | `gtag("config","AW-…")` + tag `awct` |
| A3 | **Validar con GTM Preview** los triggers de conversión en `/gracias-*` | Cristian | No hay evento en el HTML |
| A4 | **Quitar el enlace a la línea Kommo** `56978920810` del sitio | Antonia | Kommo descontinuado 17-10-2026 |
| A5 | **Arreglar links WhatsApp rotos** (dígito extra `569520067990` y query strings sin valor) | Antonia | Ver §5.3 |
| A6 | **Meta descripciones** en las ~49 páginas (keyword + CTA + sede) | Antonia | 0 descripciones |
| A7 | **Un `h1` por página** con keyword de programa | Antonia | 0 `h1` en 9/9 páginas |
| A8 | **Etiquetas Open Graph + Twitter Card** (plugin o Elementor) para compartir en WhatsApp/IG | Antonia | 0 `og:` |
| A9 | **`noindex`** en `/gracias-*` y páginas de prueba; purgar sitemap | Antonia | 49 URLs indexables |

### 🟡 Fase B — Rendimiento · 1 semana
| # | Acción | Responsable | Impacto esperado |
|---|---|---|---|
| B1 | **Activar gzip/brotli** en Apache (módulo `mod_deflate`/`mod_brotli`) o vía `.htaccess` | Hostgator / Rafael Prato | −70 % peso JS+CSS (≈4 MB) |
| B2 | **Cachear la portada** (quitar `no-store` y el `PHPSESSID` de páginas públicas) o poner caché de página | Antonia / hosting | Reduce TTFB 1,6–2,1 s |
| B3 | **Comprimir y convertir imágenes a WebP/AVIF**; reemplazar el PNG de 490 KB de portada | Antonia | −2–3 MB |
| B4 | **`Cache-Control` en imágenes** (1 año, con versionado) | Antonia / hosting | 92 recursos sin caché |
| B5 | **Lazy loading + declarar `width`/`height`** en todas las imágenes (reduce CLS) | Antonia | 27 sin dimensiones |
| B6 | **Reducir las 67 imágenes de las landings** y diferir `gtag.js` | Antonia / Cristian | 75 requests en landing |
| B7 | Re-ejecutar **Lighthouse** y dejar el baseline de LCP/CLS/INP | Cristian | Medición antes/después |

### 🟢 Fase C — Conversión, seguridad e higiene · 2 semanas
| # | Acción | Responsable |
|---|---|---|
| C1 | **Verificar/crear el flujo web → Make** desde Gravity Forms y Contact Form 7 (webhook + prueba real con captura) | Cristian |
| C2 | **Auditar los formularios**: validación, antispam, destino correcto por sede, aviso inmediato al lead | Antonia / Cristian |
| C3 | **Desactivar el listado de directorios** en `uploads` (`Options -Indexes`) | Hosting / Antonia |
| C4 | **Cabeceras de seguridad**: HSTS, `X-Content-Type-Options`, `Referrer-Policy`, `Permissions-Policy` | Hosting |
| C5 | **Borrado de páginas de prueba** y revisión de páginas huérfanas | Antonia / Mary Luz |
| C6 | Revisar **`robots.txt`** (eliminar `Disallow` de plugins que no se usan) | Cristian |

---

## 8. Línea base (medición antes/después)

| Métrica | Estado **17-10-2026** | Objetivo Fase A+B |
|---|---|---|
| Meta Pixel | ❌ Ausente | ✅ Activo + evento `Lead` |
| Duplicidad Google Ads | ⚠️ Sí (2 vías) | ❌ Ninguna |
| Meta descriptions | 0 / 9 páginas | 100 % |
| `h1` por página | 0 / 9 páginas | 1 por página |
| Open Graph | ❌ Ausente | ✅ Presente |
| Compresión JS/CSS | ❌ Sin `Content-Encoding` | ✅ gzip/brotli |
| Peso JS+CSS por carga | ~5,8 MB sin comprimir | < 1,5 MB comprimido |
| TTFB portada | 1,6–2,1 s | < 800 ms |
| Requests landing | 75 (67 imágenes) | < 40 |
| Imágenes sin `Cache-Control` | 92 | 0 |
| Páginas `/gracias-*` indexables | ~20 | 0 (noindex) |
| Enlaces a línea Kommo | Presentes | 0 |
| Lighthouse / Core Web Vitals | ⏳ Falló la ejecución | Baseline + después |

---

## 9. Enlaces relacionados

- [[08-Roadmap-Antonia-Web]] — hoja de ruta técnica del sitio (quién ejecuta cada fase)
- [[10-Plan-Campana-Matricula-2027]] — campaña que depende de la medición de este informe
- [[ecosistema_digital]] — mapa del flujo digital y del funnel de captación
- [[integrations_map]] — arquitectura de integraciones (web → Chatfuel/Make → Sheets/Brevo)
- [[Registro de Claves y Accesos]] — accesos necesarios para ejecutar los cambios (WordPress, hosting, Meta)
- [[00-Auditoria-Seguridad-2026]] — auditoría de seguridad institucional complementaria
