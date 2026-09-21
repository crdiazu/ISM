---
fecha: 2026-09-16
tipo: "requerimiento-reunion"
estado: "listo-para-enviar"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
destinataria: "Mary Luz Leal Barrera (Directora de Sedes)"
remitente: "Cristian (Tecnología y Marketing Digital)"
reunion: "Martes 22 de Septiembre de 2026 — Sede Providencia (Presencial)"
---

# AGENDA TÉCNICA Y REQUERIMIENTO DE ACCESOS
## Preparación Reunión Presencial — Martes 22 de Septiembre (Sede Providencia)

> [!important] Objetivo de este documento
> Llegar a la reunión del **martes 22 de septiembre** con todo el material preparado para destrabar en 30 minutos el control operativo de las plataformas, sin depender de trámites posteriores ni perder tiempo administrativo.

---

## 1. LO QUE DEBEMOS TENER FÍSICAMENTE EN LA REUNIÓN (CLAVE)

Para completar las validaciones de seguridad en dos pasos (2FA) y vinculación de dispositivos en vivo, **es indispensable contar en la reunión con los teléfonos móviles de las sedes**:

1. **Teléfono WhatsApp Business Maipú (+56 9 9900 59968):** Para escanear código QR y vincular la consola web de escritorio.
2. **Teléfono con chip Kommo (+56 9 9789 20810):** Para recibir el SMS de autenticación de administrador.
3. **Teléfono con chip Chatfuel (+56 9 9520 06799):** Para validar titularidad y códigos de confirmación.

*Nota de gestión:* Todas las líneas telefónicas se mantendrán formalmente **bajo la titularidad/custodia de Mary Luz**, con supervisión técnica y operativa de Cristian.

---

## 2. INVENTARIO DE ACCESOS A FORMALIZAR EN LA MESA

| # | Plataforma | Tipo de Acceso a Entregar / Configurar | Estado Actual | Acción en la Reunión del 22 |
|---|---|---|---|---|
| **1** | **Meta Business Suite** (Facebook / Instagram / Ads) | Rol de Control Total (Admin) a Cristian y Mary Luz | En posesión de Mary Luz / Felipe | Mary Luz entra a `business.facebook.com` y asigna permisos de Control Total. |
| **2** | **Kommo (CRM)** | Usuario Administrador (email corporativo) | Bloqueado / Bot con errores | Login en la plataforma, desactivar 2FA temporal, cambiar email a cuenta oficial y reactivar 2FA seguro. |
| **3** | **Make (Integromat)** | Transferencia de Organización o invitación Admin | A nombre de tarjeta personal | Ingresar a `make.com > Organization` y agregar a Cristian como Co-Admin. |
| **4** | **Brevo** (Email Marketing) | Co-Administrador | En posesión de Mary Luz | Asignar nuevo correo de gestión y validar dominio `@ismchile.cl`. |
| **5** | **Chatfuel** | Acceso vía Meta / Facebook Login | Vinculado a Facebook anterior | Traspasar credencial o vincular al Meta Business Suite actualizado. |
| **6** | **BSale** | Confirmación de usuario y emisión de facturación | Activo con Mary Luz | Verificar credencial operativa de consulta. |

---

## 3. ESTRUCTURA DE CORREOS CORPORATIVOS (@ismchile.cl)

Para profesionalizar las cuentas y que las plataformas no queden amarradas a personas particulares, **Cristian dejará creados previamente desde el cPanel del servidor los siguientes correos institucionales**:

- `secretaria@ismchile.cl` (Atención, leads y recepción general)
- `marketing@ismchile.cl` (Para registro maestro de Meta, Google, Brevo y Make)
- `direccion@ismchile.cl` (Para notificaciones directas a Mary Luz)

---

## 4. DELIMITACIÓN CLARA DE ALCANCE (SERVICIOS FÍSICOS VS DIGITALES)

Para total transparencia del servicio:
- **Incluido en el servicio:** Estrategia digital, redes sociales, sitio web, CRM, automatización de consultas y campaña de captación de matrículas 2027.
- **Servicio aparte (Infraestructura física):** La mantención de **cámaras de seguridad (Camsys / Manuel Cofré)**, **alarmas (Federal / Guadalupe Paredes)** y cableado/Wi-Fi de recintos físicos corresponden a soporte de seguridad perimetral. Quedan debidamente catastrados en el archivo histórico del Instituto, pero fuera de la operación de marketing.

---

## 5. PROPUESTA TÉCNICA: EVALUACIÓN DE GOOGLE WORKSPACE INSTITUCIONAL

Actualmente el correo opera en un hosting compartido que acumula **18 GB de almacenamiento** con riesgo de saturación y limitaciones en herramientas colaborativas.

* **Propuesta técnica:** Evaluar la migración a **Google Workspace** institucional con el dominio `@ismchile.cl`.
* **Dimensión:** Estimado para **10 casillas corporativas** (Dirección, Secretarías ambas sedes, Docencia, Marketing).
* **Beneficios operativos:** 30 GB de almacenamiento en la nube por usuario, Google Meet corporativo, Google Drive compartido seguro y eliminación definitiva de rebotes y caídas de correo. Se presentará el alcance técnico en la reunión.

---

## 6. GESTIÓN DEL SITIO WEB Y ANEXO PARA ANTONIA HORDERN

Cristian ya mantiene el superusuario de **cPanel** y **WordPress**. Para el trabajo con Antonia Hordern:
- Se le creará un perfil específico de **Diseño y Desarrollo / Edición** en WordPress para que ejecute cambios visuales y de contenido sin riesgo sobre el núcleo del sistema.
- Se adjunta a continuación la minuta técnica lista para que Mary Luz se la remita a Antonia.

***

### ANEXO: REQUERIMIENTOS WEB URGENTES PARA ANTONIA HORDERN
*(Documento listo para reenvío de Mary Luz a Antonia)*

**Estimada Antonia:**  
Junto con saludarte, te compartimos la lista de actualizaciones prioritarias que requerimos implementar en **www.ismchile.cl** de cara al inicio de la campaña de Matrícula 2027:

1. **Reemplazo de Textos Desactualizados:** Barrer todo el sitio web reemplazando cualquier mención a procesos antiguos (ej. "Admisión 2025") por **"Proceso de Admisión 2027"**.
2. **Landing Page de Captura 2027:** Habilitar una página de aterrizaje limpia con el formulario de postulación conectado a la secretaría para recibir los prospectos de la pauta.
3. **Página de Política de Privacidad y Cookies:** Publicar la página legal formal del Instituto (el texto redactado ya se encuentra disponible para carga).
4. **Optimización de Carga y Formularios:** Verificar que los formularios de contacto de ambas sedes (Maipú y Providencia) envíen copia inmediata a `secretaria@ismchile.cl` sin fallas de envío.

Tus accesos como editora técnica en WordPress están listos para ser entregados.
