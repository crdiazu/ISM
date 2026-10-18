# Tutorial: Kommo (CRM) — ⛔ DESCONTINUADO

> [!danger] Este tutorial ya no aplica (17-oct-2026)
> Se **deja de usar Kommo** para el flujo de Admisión 2027. El CRM de pago se reemplaza por una base de leads en **Google Sheets** orquestada con **Make**.
>
> - Para el seguimiento comercial, ver: [[base_leads_sheets]] (Tutorial Simple: Base de Leads en Google Sheets).
> - Para la automatización, ver: [[make]].
>
> Este archivo se conserva solo como referencia histórica del stack anterior.

## ¿Qué era Kommo y por qué se dejó de usar?
Kommo era el "embudo de ventas" del Instituto: ahí llegaban los prospectos y el equipo comercial marcaba en qué etapa estaba cada uno (Lead Nuevo → Contactado → En Seguimiento → Matriculado / Perdido).

**Motivos de la baja:**
- Costo de licencia por usuario (cupos limitados y caros para las sedes).
- La gestión se resolvía por fuera (avisos por correo/WhatsApp a las asesoras), por lo que el CRM no aportaba seguimiento real.
- El bot nativo (Salesbot) era rígido y daba errores.

**Reemplazo:** base `Leads Admisión 2027` en Google Sheets + Make.com para registro y avisos, y **Brevo** para nutrición.

## Historial (para no repetir errores)
- Cuando se usaba Kommo, los prospectos llegaban vía Make y se movían manualmente por columnas.
- La disciplina de mover tarjetas y escribir notas era clave; sin eso, el CRM "no servía".
- Importante: en el nuevo esquema, el seguimiento depende de mantener la **hoja** actualizada (columna *Estado* y *Asesora asignada*).
