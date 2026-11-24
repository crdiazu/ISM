---
name: Instituto Santa María (ISM Chile)
description: Sistema de diseño institucional creado por Antonia para ismchile.cl — formación técnica práctica desde 1979.
colors:
  periwinkle-slate: "#6274A4"
  royal-cobalt: "#092A9E"
  indigo-support: "#4054B2"
  hero-petrol: "#0E4B63"
  hero-midnight: "#182558"
  whatsapp-green: "#23A455"
  pillar-sage: "#9AC3BF"
  pillar-rose: "#CC8B8E"
  pillar-sky: "#6CBCCC"
  pure-white: "#FFFFFF"
  ice-tint: "#F8FAFE"
  pearl-gray: "#F3F3F3"
  editorial-black: "#000000"
  body-charcoal: "#262626"
  border-light: "#E6E9EC"
  border-focus: "#A3AFB7"
  divider-muted: "#7C7C7C"
  icon-muted: "#868686"
typography:
  display:
    fontFamily: "Work Sans, -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: "4rem"
    fontWeight: 600
    lineHeight: 1.12
    letterSpacing: "-0.027em"
  headline:
    fontFamily: "Work Sans, -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: "2.75rem"
    fontWeight: 600
    lineHeight: 1.15
    letterSpacing: "-0.027em"
  title:
    fontFamily: "Work Sans, -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: "1.4375rem"
    fontWeight: 500
    lineHeight: 1.25
    letterSpacing: "-0.027em"
  body:
    fontFamily: "Work Sans, -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: "1.0625rem"
    fontWeight: 400
    lineHeight: 1.6
    letterSpacing: "0em"
  label:
    fontFamily: "Work Sans, -apple-system, BlinkMacSystemFont, sans-serif"
    fontSize: "0.9375rem"
    fontWeight: 600
    lineHeight: 1.2
    letterSpacing: "0em"
rounded:
  input: "10px"
  photo-mobile: "15px"
  photo: "20px"
  course-card: "30px"
  pill: "100px"
spacing:
  xs: "8px"
  sm: "15px"
  md: "24px"
  lg: "40px"
  xl: "72px"
components:
  button-primary:
    backgroundColor: "{colors.periwinkle-slate}"
    textColor: "{colors.pure-white}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    padding: "18px 36px"
  button-primary-hover:
    backgroundColor: "{colors.royal-cobalt}"
    textColor: "{colors.pure-white}"
  button-ghost-dark:
    backgroundColor: "transparent"
    textColor: "{colors.pure-white}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    padding: "15px 28px"
  card-floating:
    backgroundColor: "{colors.pure-white}"
    textColor: "{colors.editorial-black}"
    rounded: "{rounded.photo}"
    padding: "28px"
  card-course:
    backgroundColor: "{colors.pure-white}"
    textColor: "{colors.editorial-black}"
    rounded: "{rounded.course-card}"
    padding: "0px"
---

# Design System: Instituto Santa María (ISM Chile)

## Overview

**Creative North Star: "El Taller Luminoso de Oficio"**

El sistema visual original diseñado por Antonia para `ismchile.cl` equilibra la seriedad institucional de un centro fundado en 1979 con la calidez cercana del aprendizaje práctico de oficios (Gastronomía, Belleza Integral, Masoterapia y Salud). En lugar de recurrir a estéticas académicas rígidas o corporativas frías, la interfaz combina atmósferas envolventes en tonos petróleo e índigo profundo con amplias superficies blancas respiratorias, cortes diagonales dinámicos y fotografía real de manos trabajando en taller.

Toda la arquitectura visual evita las esquinas duras y los bloques pesados: las fotografías se recortan sistemáticamente con radios suaves (`20px`), los contenedores interactivos adoptan siluetas orgánicas (`30px`) y cada llamada a la acción es una píldora táctil (`100px`). Para landings de conversión (inspiradas en el ritmo editorial de *Escuela Culinaria*), esta identidad se despliega alternando un Hero atmosférico con formulario flotante superpuesto, tiras limpias de datos clave con iconografía lineal fina, bloques editoriales 50/50 en damero y un cierre institucional en negro puro con titulares bicolores.

**Key Characteristics:**
- Monofamilia geométrica humanista (`Work Sans`) en todos los niveles jerárquicos, diferenciada únicamente por peso, escala y tracking negativo en titulares (`-0.027em`).
- Transición diagonal característica (`tilt` SVG) entre el Hero oscuro petróleo-índigo y el lienzo blanco principal, atravesada por fotografías redondeadas o tarjetas flotantes de conversión.
- Botonería 100% píldora (`100px`) en Azul Pizarra Periwinkle con estado activo/hover en Azul Real Profundo.
- Fotografía auténtica de práctica docente en primer plano con esquinas redondeadas (`20px`) y cero bordes rectos en imágenes interiores.
- Contraste dramático de cierre mediante Pre-Footer y Footer en negro editorial con titulares bicolores blanco + periwinkle.

## Colors

La paleta combina azules institucionales serenos y profundos con lienzos blancos luminosos, reservados pasteles desaturados para iconografía de valor y negro puro para el anclaje inferior de marca.

### Primary
- **Periwinkle Slate** (`#6274A4`): Color insignia de interacción y acento de Antonia (`--e-global-color-uicore_primary`). Se aplica en botones primarios rellenos (`Habla con Nosotros`, envío de formularios), enlaces interactivos sobre fondo negro, comillas de testimonios y el segundo hemistiquio de titulares bicolores sobre superficies oscuras.
- **Royal Cobalt** (`#092A9E`): Color institucional de alta intensidad (`--e-global-color-uicore_secondary` y `theme-color` del navegador). Reservado para estados `:hover` y `:focus` de botones primarios, subtítulos de énfasis y acentos de autoridad.

### Secondary
- **Hero Petrol** (`#0E4B63`) & **Hero Midnight** (`#182558`): Par cromático que construye la atmósfera degradada diagonal del Hero (junto con la textura mesh oficial `6-1.jpg` e **Indigo Support** `#4054B2`), otorgando contraste ≥8:1 para titulares blancos sin recurrir a negro plano en la apertura.
- **WhatsApp Action Green** (`#23A455`): Reservado exclusivamente para disparadores flotantes o directos de conversación inmediata con admisión / Sant MarIA.

### Tertiary
- **Pillar Sage** (`#9AC3BF`), **Pillar Rose** (`#CC8B8E`) & **Pillar Sky** (`#6CBCCC`): Trío pastel desaturado empleado únicamente en trazos de iconografía lineal (`75px`) para diferenciar pilares institucionales (*Trayectoria*, *Excelencia*, *Variadas Alternativas*) y barras cromáticas de área formativa sin competir con el CTA primario.

### Neutral
- **Pure White** (`#FFFFFF`): Superficie dominante de lectura, tarjetas de curso, tarjeta flotante de formulario/beneficio y relleno del divisor diagonal `tilt`.
- **Ice Tint** (`#F8FAFE`): Superficie secundaria fría ultra-clara (`--e-global-color-uicore_light`) para agrupar beneficios, tablas de horarios o bloques destacados sin bordes pesados.
- **Pearl Gray** (`#F3F3F3`): Fondo suave dedicado a secciones de prueba social y carruseles de testimonios.
- **Editorial Black** (`#000000`): Color de titulares principales sobre fondos claros (`--e-global-color-uicore_headline`) y superficie de fondo del bloque Pre-Footer + Footer institucional.
- **Body Charcoal** (`#262626`): Gris carbón de lectura para párrafos largos y listas (`--e-global-color-uicore_body`), garantizando legibilidad AAA sin la dureza del negro puro en texto corrido.
- **Light & Focus Borders** (`#E6E9EC`, `#A3AFB7`, `#7C7C7C`, `#868686`): Bordes sutiles de campos de formulario en reposo (`#E6E9EC`) y foco (`#A3AFB7`), línea divisoria horizontal sobre fondo negro (`#7C7C7C`) e íconos secundarios del pie de página (`#868686`).

### Named Rules
**The Two-Tone Closing Rule.** En superficies negras de cierre (Pre-Footer), el titular principal divide su frase en dos tonos: la premisa va en blanco puro y la promesa final se destaca en Periwinkle Slate (`Comprometidos con tu esfuerzo, somos tu mejor alternativa.`), nunca usando texto con gradiente CSS.

**The Calm Action Rule.** Ningún botón institucional usa rojos de urgencia agresiva ni amarillos estridentes; la conversión descansa en la confianza del binomio Periwinkle Slate en reposo y Royal Cobalt al interactuar.

## Typography

**Display Font:** `Work Sans` (con fallback `-apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif`)
**Body Font:** `Work Sans` (con fallback `-apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif`)

**Character:** `Work Sans` aporta una geometría abierta, amigable y contemporánea que unifica todo el ecosistema digital de ISM sin mezclar serifas ajenas. La jerarquía se construye apretando el interletraje (`-0.027em`) en tamaños grandes en pesos Medium (`500`) y SemiBold (`600`), manteniendo `Regular (400)` con interlineado amplio (`1.6`) para lectura fluida.

### Hierarchy
- **Display / Hero H1** (`500`–`600`, `clamp(2.35rem, 4.5vw, 4rem)`, `line-height: 1.1`–`1.15`, `letter-spacing: -0.027em`): Nombre de la carrera o proceso de admisión en el Hero principal.
- **Headline / Section H2** (`600`, `clamp(1.85rem, 3.2vw, 2.75rem)`, `line-height: 1.15`, `letter-spacing: -0.027em`): Encabezados de sección (*Malla Curricular*, *Perfil de Egreso*, *Horarios y Valores*, *Testimonios*, *Pre-Footer*).
- **Title / Card H3** (`500`–`600`, `1.375rem`–`1.5rem`, `line-height: 1.25`, `letter-spacing: -0.027em`): Nombres de cursos en tarjetas, títulos de sedes y encabezados de tarjeta de formulario.
- **Body** (`400`, `1rem`–`1.0625rem`, `line-height: 1.6`, `letter-spacing: 0em`): Descripciones de programas, requisitos y respuestas; medida óptima de `60ch`–`72ch` con `font-variant-numeric: tabular-nums` en tablas de aranceles y horarios.
- **Label / UI Controls** (`600`, `0.9375rem`, `line-height: 1.2`, `letter-spacing: 0em`, Sentence case): Texto de botones píldora, pestañas de navegación y etiquetas de campos.

### Named Rules
**The Single-Voice Sans Rule.** Queda prohibido introducir fuentes serif editoriales o caligráficas externas (`DM Serif`, `Erode`, `Satisfy`, `Georgia`) en páginas de ISM; toda distinción expresiva ocurre dentro de `Work Sans` (`400`–`700`).

**The Self-Sufficient Heading Rule.** Los encabezados de sección (`H2`) se presentan directos y contundentes sin anteponer etiquetas pequeñas o *eyebrows* decorativos encima.

## Layout

El sistema opera sobre un contenedor centrado de `1230px` (`--container-max-width: 1230px`, adaptable a `1140px`–`1230px` con `clamp(18px, 4vw, 48px)` de margen lateral en pantallas pequeñas) y breakpoints en `1024px` (tablet) y `767px` (móvil).

En páginas de conversión de cursos, la arquitectura espacial combina el lenguaje visual de Antonia con el flujo de captura de alto rendimiento:
1. **Header limpio de conversión**: Logo `LogoISM.svg` a la izquierda, teléfonos/sedes verificables y botón píldora `Habla con Nosotros` a la derecha.
2. **Hero 2 columnas (`~56% / ~44%`) con traslape inferior**: Titular, propuesta de valor y collage/atmósfera a la izquierda; tarjeta blanca de formulario de contacto a la derecha que se proyecta hacia abajo (`margin-bottom: -100px` en desktop) cruzando el corte diagonal blanco (`tilt`). En móvil (`<=767px`), título y formulario quedan apilados de forma compacta para ser visibles en el primer pantallazo.
3. **Banda de Respaldo + Tira de 4 Datos Clave**: Resumen de trayectoria desde 1979 seguido por 4 columnas horizontales con ícono lineal + dato duro (*Inicio*, *Duración*, *Modalidad*, *Jornadas y Sedes*).
4. **Ritmo alternado de secciones**: Alternancia deliberada entre lienzo blanco (`#FFFFFF`), superficie hielo (`#F8FAFE` para horarios/aranceles y malla interactiva), bloques editoriales 50/50 en damero (*Perfil de Egreso* y *Competencias Prácticas*), mosaico fotográfico asimétrico de Antonia (`20px` radius), gris perla (`#F3F3F3`) para testimonios y cierre negro (`#000000`).

## Elevation & Depth

ISM utiliza una elevación híbrida y serena: las secciones se separan principalmente por cambios tonales limpios (`#FFFFFF` ↔ `#F8FAFE` ↔ `#F3F3F3` ↔ `#000000`) y geometría diagonal, reservando sombras difusas con desplazamiento vertical únicamente para elementos que flotan físicamente sobre dos planos (la tarjeta de formulario del Hero, la insignia de *Matrícula Gratis* y las tarjetas interactivas de cursos).

### Shadow Vocabulary
- **Floating Trust / Hero Card Shadow** (`box-shadow: 0 25px 60px rgba(13, 32, 96, 0.08)`): Elevación suave teñida de azul marino para tarjetas blancas que cabalgan entre el Hero oscuro y la sección blanca inferior.
- **Course Card Ambient Shadow** (`box-shadow: 0 14px 34px rgba(13, 32, 96, 0.09)`): Elevación limpia con desplazamiento vertical para tarjetas redondeadas de cursos o sedes sobre fondo claro.

### Named Rules
**The Tinted Offset Shadow Rule.** Nunca usar sombras negras sin desplazamiento (`0 0 10px rgba(0,0,0,0.5)`) ni sombras duras tipo bloque (`4px 4px 0`); toda sombra lleva desplazamiento vertical positivo y tinte azul profundo de baja opacidad.

## Shapes

La geometría de Antonia se define por la suavidad curva sistemática frente a cortes arquitectónicos diagonales de ancho completo:
- **Fotografías individuales y mosaicos (`20px`, `15px` en móvil)**: Todas las fotos de talleres, alumnos y preparaciones llevan `border-radius: 20px` (`overflow: hidden`). Jamás se insertan fotos rectangulares de `0px` dentro de grillas de contenido.
- **Tarjetas contenedoras mayores (`20px`–`30px`)**: Las tarjetas de catálogo usan `30px` y las tarjetas flotantes de formulario o beneficio usan `20px`.
- **Botones píldora (`100px`)**: Todos los botones primarios, secundarios *ghost* y botones de envío de formulario usan `border-radius: 100px`.
- **Campos de entrada (`10px`)**: Inputs y selectores de formulario usan `border-radius: 10px` para diferenciarse táctilmente de los botones píldora (`100px`).
- **Divisor Diagonal `Tilt`**: En la base del Hero se emplea un SVG triangular blanco (`viewBox="0 0 1000 100"`, `path d="M0,6V0h1000v100L0,6z"` invertido) que genera una pendiente ascendente limpia.

## Components

### Buttons
- **Shape:** Píldora completa (`border-radius: 100px`) en todas las variantes.
- **Primary:** Fondo Periwinkle Slate (`#6274A4`), texto blanco (`#FFFFFF`), `Work Sans` `15px`–`16px` `SemiBold (600)`, `padding: 18px 36px` (`12px 24px` en barra superior). En formularios de captación ocupa el `100%` del ancho de la tarjeta.
- **Hover / Focus:** Transición suave (`200ms cubic-bezier(0.22, 1, 0.36, 1)`) hacia Royal Cobalt (`#092A9E`) con anillo `:focus-visible` de `3px` en `#6274A4` y `outline-offset: 2px`.
- **Secondary Ghost (sobre fondos oscuros):** Fondo transparente, borde `2px solid #FFFFFF`, texto `#FFFFFF`, `padding: 15px 28px`, ícono vectorial de WhatsApp o flecha a `12px` del texto; en `:hover` el borde y el texto pasan a `#6274A4` (o fondo `rgba(255,255,255,0.1)`).

### Cards / Containers
- **Corner Style:** `20px` en tarjetas de formulario, sedes y beneficios flotantes; `30px` en tarjetas de catálogo de cursos.
- **Background:** `#FFFFFF` sobre fondos oscuros o grises; `#F8FAFE` cuando se agrupa información sobre lienzo blanco.
- **Course Card Signature:** Fotografía superior con `aspect-ratio: 4 / 3`, línea de acento cromático inferior de `4px` según escuela/área y título centrado en `Work Sans` `500` (`23px`).

### Inputs / Fields
- **Style:** Fondo `#FFFFFF` o `#F8FAFE`, borde `1px solid #E6E9EC`, `border-radius: 10px`, altura mínima `48px`, texto `16px` `#262626` (evita auto-zoom en iOS).
- **Focus:** Borde `#6274A4` (`1.5px`) y halo sutil `0 0 0 3px rgba(98, 116, 164, 0.18)`.

### Navigation & Institutional Footer
- **Header:** Barra limpia sobre el Hero con `LogoISM.svg` (versión blanca sobre fondo oscuro o bicolor sobre barra blanca fija), teléfonos/accesos directos y CTA píldora `#6274A4`.
- **Pre-Footer & Footer (`#000000`):** Bloque superior dividido en 2 columnas (titular bicolor `43px` a la izquierda + párrafo blanco y botón píldora *outline* blanco a la derecha), separado por línea `1px solid #7C7C7C` de la grilla inferior de 4 columnas (`LogoISM.svg` + WhatsApp 24/7 `+56 9 5200 6799`, *Sede Providencia* en Alarife Gamboa 071, *Sede Maipú* en General Ordóñez 253 y enlaces institucionales en `#6274A4`).

### Signature Collage ("Mosaico Bento de Antonia")
- Composición asimétrica de 2 columnas con `gap: 18px`–`20px`: una columna presenta 1 retrato vertical alto de práctica docente (`aspect-ratio: 3 / 4`, `border-radius: 20px`) y la columna contigua apila 2 fotografías horizontales (`aspect-ratio: 16 / 10`, `border-radius: 20px`) junto con 1 tarjeta blanca de confianza (`border-radius: 20px`) con ícono check circular en `#6274A4`.

## Do's and Don'ts

### Do:
- **Do** usar exclusivamente `Work Sans` (`400`, `500`, `600`, `700`) con `letter-spacing: -0.027em` en titulares para preservar el ADN exacto diseñado por Antonia.
- **Do** aplicar `border-radius: 20px` (`15px` en móvil) a todas las fotografías de talleres, collages y bloques editoriales 50/50, mostrando manos reales en práctica de oficio.
- **Do** usar botones píldora (`border-radius: 100px`) en `#6274A4` con hover `#092A9E`, y de ancho `100%` dentro del formulario de conversión del Hero.
- **Do** mantener siempre las direcciones reales verificadas: **Alarife Gamboa 071 (Metro Santa Isabel)** para Providencia y **General Ordóñez 253 (Metro Plaza de Maipú)** para Maipú.
- **Do** entregar en WordPress Classic Editor cualquier bloque HTML/CSS personalizado minificado en una sola línea sin saltos `\n` dentro de `<style>` o `<script>` para impedir que `wpautop` inyecte `<p>` y `<br />`.

### Don't:
- **Don't** usar fuentes serif (`Erode`, `DM Serif Display`, `Georgia`) ni tipografías cursivas decorativas (`Satisfy`) que pertenecen a otras marcas y rompen la coherencia con `ismchile.cl`.
- **Don't** usar paletas ajenas (rojos carmesí `#E00B2F`, marrones cacao `#191412` o cremas amarillentas) ni botones rectangulares de `0px`–`4px` de radio.
- **Don't** colocar *eyebrows* o etiquetas en mayúsculas encima de los encabezados `H2` ni abusar de grillas repetitivas de tarjetas idénticas en cada sección.
- **Don't** reemplazar íconos vectoriales lineales (`stroke` uniforme `1.5px`–`1.75px`) por emojis Unicode.
