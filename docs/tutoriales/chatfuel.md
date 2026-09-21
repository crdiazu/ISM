# Tutorial Simple: Chatfuel (Chatbot)

## ¿Qué es y para qué sirve en el ISM?
Chatfuel es nuestra recepcionista robótica. Responde inmediatamente a las personas que escriben a la web, Facebook o Instagram. Su meta principal es filtrar si el prospecto tiene dudas básicas o si ya quiere matricularse, para pedirle sus datos y enviarlos a ventas.

## Tutorial Básico

### 1. Entender los Bloques (Blocks)
Chatfuel se arma con "Bloques" de conversación.
1. Entra a tu bot en Chatfuel.
2. En la sección **Automation** (o Flows), verás el árbol de mensajes.
3. El **Welcome Message** (Mensaje de Bienvenida) es el más importante. Es lo primero que ve el usuario. Ejemplo: *"¡Hola! Bienvenido al Instituto SM. ¿Qué curso buscas?"*.

### 2. Editar un Mensaje
1. Si necesitas cambiar un horario o un precio en una respuesta automática, ve a la pestaña **Flows** o **Automation**.
2. Busca el bloque que tiene ese texto.
3. Haz clic en el texto y edítalo como si fuera un documento de Word.
4. Los cambios se guardan automáticamente.

### 3. Pedir Datos (User Input)
Para que Make y Kommo funcionen, el bot *necesita* pedir datos.
1. En un bloque, se usa la herramienta "User Input" (o "Save User Input").
2. El bot pregunta: *"¿Cuál es tu número de WhatsApp para que un asesor te contacte?"*.
3. La respuesta del usuario se guarda en una "Variable" llamada `telefono`.
4. Make leerá esa variable `telefono` y la enviará al CRM.

## Detalles Adicionales
- **Inteligencia Artificial (IA):** Chatfuel permite conectar IA (como ChatGPT) para que el bot responda de forma natural leyendo un documento PDF (ej. un PDF con todos los cursos y precios). Si usas esto, asegúrate de mantener el PDF actualizado.
- **Intervención Humana:** Siempre debe haber una opción que diga "Hablar con un humano". Cuando el usuario hace clic ahí, el bot debe detenerse para que Fran o Ventas puedan responder desde la bandeja de Meta Business Suite.
