# Tutorial Simple: Make (Automatización)

## ¿Qué es y para qué sirve en el ISM?
Make es el puente invisible que conecta todas nuestras plataformas. Sirve para que nadie tenga que hacer trabajo manual aburrido. Por ejemplo, evita que tengas que copiar el nombre de alguien de Facebook y pegarlo en la hoja de leads.

## Tutorial Básico

### 1. Entender los "Escenarios"
En Make, cada automatización se llama **Escenario** (Scenario). Un escenario es como un dominó: tiras una pieza y el resto cae solo.
Un escenario siempre tiene:
- **Un Trigger (Gatillo):** El evento que inicia todo. (Ej: "Llegó un nuevo mensaje a Chatfuel").
- **Acciones:** Lo que Make hace con esa información. (Ej: "Registrar fila en Google Sheets" -> "Añadir a lista en Brevo" -> "Enviar aviso a la asesora").

### 2. Leer un Escenario Existente
Como tu rol es optimizar y configurar, muchas veces solo entrarás a revisar si todo funciona.
1. Ve a **Scenarios** en el menú izquierdo.
2. Abre uno (ej. `Chatfuel -> Leads Admision 2027`).
3. Verás burbujas conectadas por líneas.
4. Si haces clic en la burbuja de la izquierda (el Trigger), verás de dónde viene la información.
5. Si haces clic en la burbuja de la derecha, verás cómo Make está insertando esos datos en la hoja.

### 3. Solucionar un Error (Troubleshooting)
1. Si Make falla, te avisará con un globo rojo.
2. Haz clic en el **History** (Historial) del escenario.
3. Busca la ejecución que dice "Error".
4. Verás exactamente qué burbuja falló. Normalmente es un problema de conexión (ej. "La contraseña de Google cambió" o "Falta el número de teléfono del cliente").

## Detalles Adicionales
- **Conexiones (Connections):** Para que Make pueda hablar con Google Sheets o Facebook, tienes que darle permiso. Esto se hace en la pestaña "Connections". Si cambias la clave de Google, debes actualizarla allí.
- **Cuidado con los Bucles:** Evita crear escenarios infinitos (ej. la hoja manda a Brevo, y Brevo manda de vuelta creando el mismo usuario 100 veces).

## 2026-11-18 — Consolidación de Organización y Escenario Maestro

- **Control de la Organización (`4116444`):** Salida definitiva de `frodriguez@ismchile.cl` (`LUIS RODRIGUEZ`). La administración queda en manos de **Cristián Díaz** (`crdiazu@gmail.com`) y **Mary Luz Leal** (`mluzleal@gmail.com`).
- **Escenario Maestro Unificado (`2248037` — *Ingreso Leads y Contacts de Formularios*):**
  - Se determinó mantener **únicamente activo este escenario** (los otros 10 escenarios secundarios quedan en **OFF**).
  - Conectado al Webhook central de Contact Form 7 (`https://hook.us2.make.com/9gqxj4it27ro1j51rkgoth6tsnwo8qei`, Hook ID `1199945`).
  - Configurado con procesamiento secuencial (`Process data in order = Yes` y `Process old data = ON`) cada **10 minutos** para vaciar los 93 leads de la cola hacia la planilla Google Sheets **`ism data capture`** (`10gwdNWbrI1zwH-PgNtTnf2fJb73QHwLaOSZCsuauVUs`).

## 2026-10-17
### 📊 Resumen de Consumo y Créditos

- **Créditos disponibles:** Tienes **225.468 créditos restantes** de un total de 310.000 en tu plan **Pro** (aproximadamente un **27% utilizado**).
    
- **Restablecimiento del plan:** Quedan **116 días** para que se renueven los créditos.
    
- **Transferencia de datos:** Muy baja utilización (aprox. 25.9 MB de 120 GB permitidos), lo que indica que tus escenarios mueven principalmente texto y datos ligeros (como leads y notificaciones) en lugar de archivos pesados.
    

### ⚙️ Escenarios Activos Destacados

Actualmente mantienes automatizaciones clave operando en segundo plano, enfocadas en la gestión de campañas publicitarias, captura de prospectos y flujos internos:

- **Gestión de Publicidad (Facebook Ads):** Tienes varios escenarios estructurados para automatizar la gestión y optimización de pauta por nichos específicos, configurados originalmente en octubre de 2025:
    
    - Gestión Facebook Ads Estética y Cosme
        
    - Gestión Facebook Ads Estilista y Peluq
        
    - Gestión Facebook Ads Maquillaje
        
    - Gestión Facebook Ads Masoterapia
        
    - Gestión Facebook Ads Pastelería y Rep
        
- **Captura de Leads:**
    
    - Ingreso Leads y Contacts de Formularios: Cuenta con un volumen alto de ejecuciones históricas (858 operaciones), centralizando prospectos que ingresan desde formularios.
        
- **Notificaciones Operativas:**
    
    - Notificación x Correo a Secretaría editado sin correo: Con más de 1.000 ejecuciones y actualmente en estado activo/ejecutándose.
        

¿Te gustaría revisar el detalle de alguno de estos escenarios en particular o necesitas ayuda para optimizar alguna de tus automatizaciones activas?

![[Pasted image 20261017194437.png]]

