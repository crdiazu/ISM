# Tutorial Simple: Base de Leads en Google Sheets (`Leads Admisión 2027`)

## ¿Qué es y para qué sirve en el ISM?
Es el "embudo de ventas" del Instituto, pero en una planilla de Google. Aquí Make deja registrado a cada persona interesada en los cursos (prospectos). Sirve para que el equipo sepa exactamente en qué estado está cada persona (¿Preguntó? ¿Está pensando? ¿Se matriculó?) sin pagar una licencia de CRM por usuario.

> Reemplaza a Kommo desde el 17-oct-2026.

## Estructura de la hoja

| Columna | Descripción |
|---|---|
| **Fecha/Hora** | Cuándo entró el lead (lo pone Make automáticamente). |
| **Nombre** | Nombre del prospecto. |
| **Teléfono/WhatsApp** | Número de contacto. |
| **Curso** | Carrera de interés (`{{curso}}`). |
| **Sede** | Maipú o Providencia (`{{sede}}`). |
| **Canal de origen** | WhatsApp, web, IG, FB, Meta Ads, formulario. |
| **Estado** | `Nuevo` · `Contactado` · `En seguimiento` · `Matriculado` · `Perdido`. |
| **Asesora asignada** | Nataly (Providencia) o Karin (Maipú). |
| **Notas** | Observaciones del seguimiento. |

## Tutorial Básico

### 1. Revisar un prospecto nuevo
1. Cuando Make recibe un lead del bot, agrega una fila nueva con Estado = `Nuevo`.
2. La asesora de la sede recibe además un aviso (correo/WhatsApp) desde Make.
3. Haz clic en la fila y revisa Nombre, Teléfono, Curso y Sede.

### 2. Gestionar el seguimiento
1. Al contactar al prospecto, cambia la columna **Estado** a `Contactado`.
2. Escribe en **Notas** lo relevante (ej: "Hablará con su mamá para ver cómo pagar").
3. Al cerrar la venta, cambia el **Estado** a `Matriculado` (o `Perdido`).
4. Mantén la columna **Asesora asignada** correcta para saber quién atiende cada lead.

### 3. No olvidar a nadie
- Filtra por **Estado = Nuevo** o **Contactado** para ver los pendientes del día.
- Puedes usar una vista/filtro por **Sede** para que cada asesora vea solo lo suyo.
- Deja siempre la fecha del último contacto en **Notas** si el seguimiento se extiende.

## Detalles Adicionales
- **Automatización:** Make escribe las filas automáticamente; no es necesario digitar nada a mano.
- **Importancia Vital:** La base solo sirve si **todos** actualizan el Estado y las Notas. Si la información se queda en la cabeza del vendedor, el sistema falla.
- **Nutrición:** Los contactos nuevos también se agregan a Brevo para enviarles correos automáticos.

## Ver también
- [[make]] — cómo funciona la automatización que llena la hoja.
- [[brevo]] — email marketing y nutrición.
- [[chatfuel]] — el bot que captura los datos del prospecto.
