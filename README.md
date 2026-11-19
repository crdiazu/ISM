# Instituto Santa María (ISM) — Ecosistema Digital y Marketing

> **Portal de Gestión Integral, Asesoría Tecnológica y Transferencia de Conocimiento**  
> Cliente: Centro de Educación Politécnica y Compañía Limitada · Santiago de Chile (Sedes Maipú y Providencia)

---

## 🌐 Entregables Interactivos en Línea (GitHub Pages)

Puedes explorar las herramientas interactivas directamente desde el navegador en el siguiente portal:

👉 **[Portal Ejecutivo del Proyecto](https://crdiazu.github.io/ISM/)**

* 📋 **[Informe de Avance y Estado de Situación (Fase 1)](https://crdiazu.github.io/ISM/informe-de-avance.html)**: Reporte ejecutivo oficial (85% de avance, semáforo de plataformas y agenda de reuniones).
* 📊 **[Carta Gantt Interactiva](https://crdiazu.github.io/ISM/carta-gantt-interactiva.html)**: Visualizador dinámico de fases de consultoría, tareas por área (Tecnología, Marketing, Operaciones) e hitos clave.
* 🏛️ **[Arquitectura del Stack Tecnológico (Archify)](https://crdiazu.github.io/ISM/archify-stack-ism.html)**: Diagrama interactivo de relaciones, plataformas y flujos de datos del ecosistema institucional.
* 🔄 **[Workflow y Cronograma de Operaciones](https://crdiazu.github.io/ISM/archify-cronograma-ism.html)**: Flujo de trabajo por carriles (Lanes) con trazado interactivo.

---

## 🎯 Visión y Objetivos

Este proyecto consolida la gestión integral del **proceso de marketing, activos digitales, imagen de marca y estrategias de contenido** para el **Instituto Santa María (ISM)**.

Además de la ejecución de marketing, el rol principal abarca la **asesoría en tecnologías e infraestructura de comunicación**, asegurando la estabilidad, escalabilidad y autonomía operativa de la institución.

### Objetivos Principales:
1. **Transferencia de Conocimiento y Control Operativo:** Garantizar que el equipo del Instituto pueda operar y administrar de forma autónoma las herramientas digitales.
2. **Campaña de Matrículas 2027:** Planificación estratégica y ejecución de pauta en Meta Ads, optimización de funnel y conversión comercial.
3. **Seguridad y Resiliencia:** Blindaje de accesos, políticas de respaldo, eliminación de dependencias unipersonales y estandarización de procesos.

---

## ⚙️ Stack Tecnológico Integrado (Estado al 18 de Noviembre de 2026)

| Plataforma | Función Principal | Estado |
|---|---|---|
| **WordPress & Elementor** | Sitio web institucional ([ismchile.cl](https://www.ismchile.cl)) | 🟢 Activo (Cuentas antiguas purgadas; `crdiazu` único Admin; `/contacto/` migrado a CF7; 9/15 formularios CF7 y landings iniciales actualizados a Admisión 2027) |
| **Meta Business Suite** | Gestión centralizada de Facebook, Instagram y Meta Ads | 🟢 Campañas estructuradas y pauta en curso |
| **WhatsApp Business** | Canal de atención directa a alumnos y postulantes (+56 9 9900 59968) | 🟢 Activo con vinculación de escritorios y enrutador |
| **Chatfuel** | Chatbot web, WhatsApp y respuestas automáticas | 🟢 Flujos revisados y actualizados con fechas 2027 |
| **Brevo** | Email marketing masivo y comunicaciones transaccionales | 🟢 Operativo con credenciales centralizadas |
| **Make (Integromat)** | Automatizaciones y webhooks (registro de leads, avisos) | 🟢 Org `4116444` bajo control exclusivo (Cristián + Mary Luz); escenario maestro `2248037` activo procesando cola de leads |
| **Google Sheets** | Base de captura `ism data capture` (`10gwdNWbrI1zwH-PgNtTnf2fJb73QHwLaOSZCsuauVUs`) | 🟢 Conectada al flujo de Make bajo cuenta de Cristián |

---

## 📚 Estructura de Documentación (`docs/`)

- `00-Auditoria-Seguridad-2026.md`: Plan de remediación y auditoría técnica de seguridad institucional.
- `01-Acuerdo-de-Confidencialidad.md`: Modelo de acuerdo para colaboradores y prestadores de servicios.
- `02-Politica-de-Privacidad-SitioWeb.md`: Política de privacidad y tratamiento de datos para el portal web.
- `03-Checklist-Traspaso-Maestro.md`: Inventario integral de sistemas y estado de recepción operativa.
- `04-Inventario-Costos-Servicios.md`: Levantamiento de costos fijos de servidores, licencias y servicios.
- `05-Mapa-Flujos-Comunicacion.md`: Diagrama de flujos y atención comercial de prospectos.
- `06-Carta-de-Trabajo-Plan-de-Accion.md`: Plan de acción detallado para el equipo de marketing.
- `07-Brief-Investigacion-Audiencia.md`: Análisis de buyer personas y perfiles de estudiantes.
- `08-Roadmap-Antonia-Web.md`: Hoja de ruta técnica para mantenciones del sitio web institucional.
- `09-Protocolo-Contenido.md`: Manual de estilo, directrices de imagen y protocolo de publicaciones.
- `10-Plan-Campana-Matricula-2027.md`: Plan estratégico para captación de matrículas 2027.
- `11-Carta-Gantt-Cronograma.md`: Cronograma maestro de hitos y plazos de entrega (Fase 1 y 2).
- `12-Informe-de-Avance-Fase-1.md`: Informe oficial de avance y estado de situación (Cierre Fase 1).
- `13-Informe-de-Avance-Fase-2.md`: Informe ejecutivo de Fase 2 (Apertura Admisión 13 Octubre y Automatizaciones).
- `14-Auditoria-Comportamiento-Web-2026.md`: Auditoría de comportamiento y optimización total de www.ismchile.cl (rendimiento, SEO, tracking, conversión y seguridad, con plan por fases).
- `15-Informe-Estrategico-Arquitectura-Bot-Admision-2027.md`: Arquitectura unificada de bots y atención Admisión 2027.
- `16-Registro-Cambios-Web-Make-Accesos-2027.md`: Bitácora técnica de purga de accesos en WordPress/Make, migración de formularios CF7 y conexión con Google Sheets (18-nov-2026).
- `17-Plan-Migracion-Sin-Download-Monitor-GF-Make.md`: Auditoría completa de `Download Monitor`, plan de redirecciones `301` en WPCode, puente Gravity Forms → Make y plantilla maestra HTML Admisión 2027 (19-nov-2026).
- `snippets/`: Código PHP listo para WPCode (`wpcode-redirecciones-download-monitor.php`, `wpcode-gravityforms-to-make.php`) y plantillas de correo HTML responsive (`plantilla-correo-admision-2027-make.html`, `plantilla-correo-admision-2027-gravityforms.html`).
- `Flujo-Atencion-Whatsapp-Principal.md`: Arquitectura del bot enrutador (Chatfuel) y derivación a sedes.
- `Planilla-Credenciales-Reunion-23-Septiembre.md`: Registro de verificación y toma de control de plataformas.
- `Estudio-Mercado-ISM-Chile-2026.md`: Benchmark de mercado técnico profesional en Santiago.
- `Plan Estratégico - ISM - Q4 2026.md`: Documento rector del plan estratégico para el cuarto trimestre.
- `tutoriales/`: Guías de autoaprendizaje para la administración autónoma de cada plataforma del stack.

