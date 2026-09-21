# Tutorial Simple: Make (Automatización)

## ¿Qué es y para qué sirve en el ISM?
Make es el puente invisible que conecta todas nuestras plataformas. Sirve para que nadie tenga que hacer trabajo manual aburrido. Por ejemplo, evita que tengas que copiar el nombre de alguien de Facebook y pegarlo en Kommo.

## Tutorial Básico

### 1. Entender los "Escenarios"
En Make, cada automatización se llama **Escenario** (Scenario). Un escenario es como un dominó: tiras una pieza y el resto cae solo.
Un escenario siempre tiene:
- **Un Trigger (Gatillo):** El evento que inicia todo. (Ej: "Llegó un nuevo mensaje a Chatfuel").
- **Acciones:** Lo que Make hace con esa información. (Ej: "Crear contacto en Kommo" -> "Añadir a lista en Brevo").

### 2. Leer un Escenario Existente
Como tu rol es optimizar y configurar, muchas veces solo entrarás a revisar si todo funciona.
1. Ve a **Scenarios** en el menú izquierdo.
2. Abre uno (ej. `Chatfuel -> Kommo`).
3. Verás burbujas conectadas por líneas.
4. Si haces clic en la burbuja de la izquierda (el Trigger), verás de dónde viene la información.
5. Si haces clic en la burbuja de la derecha, verás cómo Make está insertando esos datos en Kommo.

### 3. Solucionar un Error (Troubleshooting)
1. Si Make falla, te avisará con un globo rojo.
2. Haz clic en el **History** (Historial) del escenario.
3. Busca la ejecución que dice "Error".
4. Verás exactamente qué burbuja falló. Normalmente es un problema de conexión (ej. "La contraseña de Kommo cambió" o "Falta el número de teléfono del cliente").

## Detalles Adicionales
- **Conexiones (Connections):** Para que Make pueda hablar con Kommo o Facebook, tienes que darle permiso. Esto se hace en la pestaña "Connections". Si cambias la clave de Kommo, debes actualizarla allí.
- **Cuidado con los Bucles:** Evita crear escenarios infinitos (ej. Kommo manda a Brevo, y Brevo manda de vuelta a Kommo creando el mismo usuario 100 veces).
