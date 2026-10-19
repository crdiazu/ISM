# Informe Estratégico: Arquitectura y Flujo Unificado Chatfuel — Admisión 2027

**Instituto Santa María**
**Fecha:** 18 de octubre de 2026
**Autor:** Cristian Díaz (Tecnología & Estrategia Digital)
**Destinatarios:** Mary Luz / Dirección General / Equipo Comercial

---

## 1. Resumen Ejecutivo

Para la campaña de **Admisión 2027**, se completó la modernización integral de los canales conversacionales del **Instituto Santa María**, logrando dos hitos fundamentales:

1. **Eficiencia y Ahorro Financiero Radical:** Se eliminaron las suscripciones mensuales de **Kommo CRM** y **Make.com**, prescindiendo de intermediarios frágiles y tarifas recurrentes por usuario. Se consolida todo en la suscripción anual existente de **Chatfuel** (vigente hasta noviembre de 2026), generando un **ahorro neto estimado entre $1.800 y $2.200 USD anuales (~$1.700.000 a $2.100.000 CLP al año)**.
2. **Elevación de la Propuesta de Valor Institucional:** Se erradicó por completo el término *"oficios"* de todas las respuestas y bases de conocimiento. La institución se posiciona firmemente con **«Cursos y programas de formación técnica y laboral con alta empleabilidad y rápida salida laboral»**, utilizando un tono empático, cálido y comercialmente adaptativo.

---

## 2. Diagramas Interactivos de Presentación (Archify)

Para facilitar la visualización del ecosistema al directorio y al equipo comercial, se generaron dos diagramas interactivos en formato web independiente con trazado de flujo, modos claro/oscuro y selector de vistas:

* **[Ver Diagrama de Flujo Comercial en HTML](<file:///c:/Users/Cristian/Obsidian/Cristian/CDU/PROYECTOS/Instituto%20SM/ISM/docs/archify-flujo-atencion-chatfuel.html>):** Muestra el recorrido del prospecto desde WhatsApp/Web, la intervención de los especialistas por sede (Maipú y Providencia), el filtro de horario hábil y la derivación inmediata a la app móvil de secretarias.
* **[Ver Diagrama de Arquitectura Unificada en HTML](<file:///c:/Users/Cristian/Obsidian/Cristian/CDU/PROYECTOS/Instituto%20SM/ISM/docs/archify-arquitectura-unificada.html>):** Muestra la interconexión simplificada entre Meta Ads, Sitio Web, Chatfuel Cloud (WhatsApp + IA), Base de Conocimiento y las secretarias comerciales en sus celulares.

---

## 3. Justificación de la Salida de Kommo CRM y Make.com

### ¿Por qué Kommo CRM era insostenible?

- **Cobro abusivo por asiento:** Kommo cobra ~$30 USD por cada usuario al mes. Para dar acceso a Mary Luz, secretaria Maipú y secretaria Providencia, el costo ascendía a ~$90 USD/mes ($1.080 USD/año), encareciendo innecesariamente la operación.
- **Inestabilidad en la IA:** El Salesbot de Kommo presentaba conflictos recurrentes de desconexión y problemas de sincronización de estados.

### ¿Por qué Make.com ya no es necesario?

- Con la **App Móvil oficial de Chatfuel** (iOS y Android), las secretarias reciben **notificaciones push instantáneas** directamente en sus teléfonos cuando un prospecto solicita hablar con un humano o califica para matrícula.
- **Pausa nativa de la IA:** Cuando una asesora contesta un mensaje desde la app móvil, Chatfuel **pausa la IA de manera automática**, evitando que el bot y la secretaria se interrumpan o choquen entre sí.
- No se requiere crear ni mantener escenarios frágiles de Webhooks entre Chatfuel y Google Sheets para las alertas del día a día.

---

## 4. Cuadro Comparativo de Costos y Ahorro Anual

| Componente                      | Esquema Anterior (Legacy)      | Nuevo Esquema Unificado          | Ahorro Anual (USD)              | Ahorro Anual (CLP aprox.)              |
| :------------------------------ | :----------------------------- | :------------------------------- | :------------------------------ | :------------------------------------- |
| **CRM / Live Chat**       | Kommo CRM (~$90 USD/mes)       | App Móvil Chatfuel (Incluida)   | **$1.080 USD**            | ~$1.030.000 CLP                        |
| **Automatización**       | Make.com Pro (~$29 USD/mes)    | Enrutamiento Nativo Chatfuel     | **$348 USD**              | ~$330.000 CLP                          |
| **Mensajería WhatsApp**  | Meta API + Recargos Kommo      | Chatfuel WhatsApp Cloud API      | **$400 - $700 USD**       | ~$380.000 - $660.000 CLP               |
| **IA Conversacional**     | Add-on Kommo IA (limitado)     | Chatfuel AI (`gpt-5.4-nano`)   | **Incluido en créditos** | Optimizado                             |
| **TOTAL AHORRO ESTIMADO** | **~$150 - $190 USD/mes** | **$0 USD costo adicional** | **~$1.800 - $2.200 USD**  | **~$1.700.000 - $2.100.000 CLP** |

> [!TIP]
> **Consumo de IA:** El bot está configurado con el modelo de alta velocidad y ultrabajo costo `gpt-5.4-nano-2026-03-17`. Con el saldo actual disponible en Chatfuel (~$50 USD base), la institución cuenta con un margen de **10.000 a 25.000 mensajes mensuales**, cubriendo holgadamente el tráfico de hasta **3.000 prospectos al mes**.

---

## 5. Arquitectura del Flujo Comercial de Atención

El bot principal opera bajo el número oficial de WhatsApp **+56 9 5200 6799** con la siguiente lógica:

### A. Santa MarIA (Enrutadora General e Identidad)

- **Bienvenida cálida y empática:** Saluda al postulante y le presenta un menú adaptativo de **máximo 3 opciones numeradas** (`1️⃣`, `2️⃣`, `3️⃣`) para evitar mensajes saturados en pantallas de teléfonos móviles.
- **3 Especialistas de Atención Configurados (24/7):**
  1. `Matrículas Maipú` (ID: `6ad504a82f0feccb7c12d94a`): Domina aranceles, mallas, horarios y sede de **General Ordóñez 253 (Metro Plaza de Maipú)**. Fono directo secretaría: `+56 2 2532 3752` / WhatsApp: `+56 9 9005 9968`.
  2. `Matrículas Providencia` (ID: `6ad504b8ac65a5f87ad5c07d`): Domina aranceles, mallas, horarios y sede de **Alarife Gamboa 071 (Metro Santa Isabel)**. Fono directo secretaría: `+56 2 2665 5877` / WhatsApp: `+56 9 7126 6207`.
  3. `Consultas Generales` (ID: `6ad504c22f0feccb7c12d94b`): Asesora sobre financiamiento, facilidades de pago, modalidades y procesos de admisión general para ambas sedes.

### B. Gestión de Horarios y Traspaso Humano

- **Horario Laboral de Secretarias:**
  - Lunes a Jueves: 09:15 a 12:40 y 15:00 a 18:30 hrs.
  - Viernes y Sábado: 09:15 a 13:00 hrs.
  - Domingos y Festivos: Cerrado presencialmente (Atención 100% IA activa).
- **En horario hábil:** La IA ofrece responder consultas técnicas o conectar directamente con secretaría. Al solicitar contacto, la App Móvil de Chatfuel genera un push sonoro inmediato.
- **Fuera de horario hábil:** La IA informa con amabilidad el horario de apertura presencial, resuelve todas las dudas académicas y agenda la visita o reserva de matrícula directamente.

---

## 6. Procedimiento para las Secretarias: Uso de la App Móvil

1. **Instalación:**
   - Descargar **Chatfuel** desde Google Play Store (Android) o App Store (iPhone).
2. **Inicio de Sesión:**
   - Ingresar con el correo institucional y contraseña de operador asignada.
3. **Recepción de Chats:**
   - Al recibir una alerta push, la asesora pulsa sobre la notificación y entra al chat en vivo.
   - Puede revisar el historial previo que la IA mantuvo con el alumno.
4. **Respuesta y Cierre:**
   - Al escribir y enviar un mensaje, **Chatfuel pausa automáticamente la IA** durante la conversación.
   - Una vez finalizada la atención, se cierra la conversación o el bot retoma el control automáticamente tras un periodo de inactividad programado.

---

## 7. Próximos Pasos Operativos

1. **Desactivar Renovación de Kommo:** Asegurarse de que en la cuenta de Kommo no quede activa la tarjeta corporativa de Felipe para renovación automática.
2. **Apagar Escenarios en Make.com:** Colocar en estado `OFF` los escenarios antiguos de Kommo para no generar alertas huérfanas.
3. **Capacitación Flash (15 minutos):** Instalar la app en los teléfonos de secretaría y realizar 2 pruebas de simulación de chat antes del encendido fuerte de pauta en Meta Ads.
