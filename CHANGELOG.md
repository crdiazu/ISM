# Changelog

All notable changes to this project will be documented in this file.

## [Unreleased]
- **Auditoría de comportamiento web (`docs/14-Auditoria-Comportamiento-Web-2026.md`):** diagnóstico de solo lectura de `www.ismchile.cl` medido el 17-10-2026. Hallazgos críticos: **sin Meta Pixel** (Meta Ads optimizando a ciegas), **posible doble conteo de Google Ads** (`AW-687054614` inline + tag en `GTM-MFW478HP`), **0 meta descripciones / 0 `h1` / 0 Open Graph** en 9/9 páginas revisadas, ~12,3 MB de recursos **sin compresión** ni caché de imágenes, TTFB 1,6–2,1 s, enlace a la **línea Kommo descontinuada** todavía publicado y ~20 páginas `/gracias-*` indexables. Plan de acción priorizado en 3 fases (A: campaña, B: rendimiento, C: conversión/seguridad) con línea base antes/después.
- **Migración fuera de Kommo:** se deja de usar el CRM de pago para el flujo de Admisión 2027. El registro y seguimiento de prospectos pasa a **Google Sheets (`Leads Admisión 2027`) + Make.com**, con avisos a las asesoras de sede y nutrición por **Brevo**. Actualizados `integrations_map`, `ecosistema_digital`, `Flujo-Atencion-Whatsapp-Principal`, `05-Mapa-Flujos-Comunicacion`, `Flujo-Unico-Integral-2027`, README, ROADMAP y Plan Estratégico Q4 2026.
- Pauta publicitaria masiva y seguimiento de conversión de matrícula en Sedes Providencia y Maipú.
- Despliegue de actualización landing page en WordPress con Antonia Hordern.

## [0.3.0] - 2026-10-11
### Added
- **Arquitectura de Bot Enrutador WhatsApp (`docs/Flujo-Atencion-Whatsapp-Principal.md`):** Mapeo de flujos en Kommo con derivación automática a 10 sub-bots segmentados por sede y carrera.
- **Catálogo y Oferta Académica 2027:** Integración de brochures oficiales para 8 programas (Cosmetología, Estilista, Estética, Maquillaje, Masoterapia, Pastelería y Repostería).
- **Hito Comercial Admisión 2027:** Inicio de preventa/admisión formal fijado para el **13 de Octubre de 2026** con aranceles 2026 congelados hasta el 20 de diciembre de 2026.
- Actualización de Carta Gantt dinámica y paneles de control reflejando avance hacia Fase 2.

## [0.2.0] - 2026-09-21
### Added
- **Informe de Avance y Estado de Situación Fase 1 (`docs/12-Informe-de-Avance-Fase-1.md`):** Diagnóstico de 10 plataformas, semáforo operativo y agenda crítica.
- **Herramientas Interactivas GitHub Pages:** Despliegue de Portal Ejecutivo central (`index.html`), Carta Gantt Interactiva (`carta-gantt-interactiva.html`), Arquitectura del Stack en Archify (`archify-stack-ism.html`) y Workflow de Operaciones (`archify-cronograma-ism.html`).
- **Paquete de Documentación Estratégica:** Plan Estratégico Q4 2026, Plan de Campaña de Admisión 2027, Estudio de Mercado, Protocolo de Contenidos, Acuerdos Legales y Políticas de Privacidad.
- Planilla de captura y verificación de credenciales para reunión presencial.

## [0.1.0] - 2026-08-22
- Added README, CONTRIBUTING, SETUP, CODE_OF_CONDUCT.
- Created initial documentation folder with architecture guide.
- Added GitHub issue and PR templates.

---
*This file follows the conventions of "Keep a Changelog".*

