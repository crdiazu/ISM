---
fecha: 2026-08-19
tipo: "mapa-flujos"
estado: "borrador"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
---

# MAPA DE FLUJOS DE COMUNICACIÓN

## Instituto Santa María (ISM) — Agosto 2026

**Propósito:** Documentar cómo fluye la información entre las diferentes plataformas, líneas telefónicas y canales de comunicación del Instituto.

---

## 1. VISIÓN GENERAL DEL ECOSISTEMA

```
┌─────────────────────────────────────────────────────────────────────┐
│                        ECOSISTEMA ISM                               │
├─────────────────────────────────────────────────────────────────────┤
│                                                                     │
│  ┌──────────┐    ┌──────────┐    ┌──────────┐    ┌──────────┐     │
│  │ SITIO WEB│───→│  KOMMO   │───→│ SECRETARÍA│───→│ ALUMNO   │     │
│  │WordPress │    │   CRM    │    │ (Maipú)  │    │          │     │
│  └──────────┘    └──────────┘    └──────────┘    └──────────┘     │
│       │                │                                             │
│       │                │                                             │
│       ▼                ▼                                             │
│  ┌──────────┐    ┌──────────┐                                       │
│  │ CHATFUEL │    │   MAKE   │                                       │
│  │WhatsApp  │    │  Automat.│                                       │
│  └──────────┘    └──────────┘                                       │
│       │                                                             │
│       ▼                                                             │
│  ┌──────────┐    ┌──────────┐    ┌──────────┐                     │
│  │ WhatsApp │───→│ SECRETA. │───→│ ALUMNO   │                     │
│  │ Business │    │ (Maipú)  │    │ MATRICUL.│                     │
│  └──────────┘    └──────────┘    └──────────┘                     │
│                                                                     │
│  ┌──────────┐    ┌──────────┐                                      │
│  │   META   │───→│ CHATFUEL │                                      │
│  │  Ads     │    │          │                                      │
│  └──────────┘    └──────────┘                                      │
│                                                                     │
│  ┌──────────┐    ┌──────────┐                                      │
│  │  BREVO   │───→│ CORREO   │                                      │
│  │Email Mktg│    │ MASIVO   │                                      │
│  └──────────┘    └──────────┘                                      │
│                                                                     │
└─────────────────────────────────────────────────────────────────────┘
```

---

## 2. FLUJOS DETALLADOS

### 2.1. FLUJO PRINCIPAL: Consulta de Interesado → Matrícula

Este es el flujo más crítico: un interesado contacta al Instituto y debe ser atendido y convertido en alumno.

```
INTERESADO
    │
    ▼
┌─────────────────────────────────────────────────────────────────┐
│ CANAL DE ENTRADA                                                │
│                                                                  │
│  1. Formulario web (ismchile.cl/contacto)                       │
│  2. WhatsApp Sitio → Chatfuel (56952006799)                    │
│  3. Llamada telefónica Maipú (+562 2532 3752)                  │
│  4. Llamada telefónica Providencia (+562 2665 5877)            │
│  5. Instagram DM (@ismchile)                                    │
│  6. Facebook Messenger (facebook.com/ismchile)                  │
│  7. Campaña Meta Ads → WhatsApp/landing                         │
│  8. Correo secretaria@ismchile.cl / secretariamaipu@ismchile.cl │
└─────────────────────────────────────────────────────────────────┘
    │
    ▼
┌─────────────────────────────────────────────────────────────────┐
│ PROCESAMIENTO AUTOMÁTICO                                        │
│                                                                  │
│  Formulario web ──→ Make (escenario) ──→ Kommo (CRM)           │
│                                          └─→ Notificación a    │
│                                              secretaría         │
│                                                                  │
│  WhatsApp web ──→ Chatfuel (bot) ──→ Respuesta automática      │
│                                      └─→ Derivación a          │
│                                          secretaría             │
│                                                                  │
│  Meta Ads ──→ Landing page ──→ Formulario ──→ Kommo/Make       │
│                                                                  │
│  Instagram/Facebook ──→ Meta Business Suite ──→ Notificación   │
└─────────────────────────────────────────────────────────────────┘
    │
    ▼
┌─────────────────────────────────────────────────────────────────┐
│ ATENCIÓN HUMANA                                                 │
│                                                                  │
│  Secretaría Maipú (56990059968) ──→ Atención directa alumnos  │
│  Secretaría Providencia ──→ Atención directa alumnos           │
│                                                                  │
│  Mary Luz Leal ──→ Gestión de leads y campañas                 │
└─────────────────────────────────────────────────────────────────┘
    │
    ▼
┌─────────────────────────────────────────────────────────────────┐
│ CONVERSIÓN                                                      │
│                                                                  │
│  Interesado ──→ Alumno matriculado                              │
│  └─→ Registro en sistema interno                                 │
│  └─→ Envío de información por Brevo (email masivo)             │
│  └─→ Bienvenida por WhatsApp Business                           │
└─────────────────────────────────────────────────────────────────┘
```

### 2.2. FLUJO DE AUTOMATIZACIÓN (MAKE)

```
┌─────────────────────────────────────────────────────────────────┐
│ ESCENARIO CRÍTICO: Respuesta web → Secretaría                  │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  [Formulario web] ──trigger──→ [Make: escenario 1]              │
│       │                          │                               │
│       │                          ├──→ [Kommo: crear lead]       │
│       │                          │                               │
│       │                          ├──→ [Notificación interna]    │
│       │                          │    (email/Slaworking?)       │
│       │                          │                               │
│       │                          └──→ [Log/registro]            │
│       │                                                          │
│       └──→ [Brevo: agregar contacto] (si aplica)                │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────────────┐
│ ESCENARIO: Meta Ads → Chatfuel                                  │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  [Meta Ads] ──click──→ [WhatsApp message]                       │
│       │                    │                                     │
│       │                    ▼                                     │
│       │              [Chatfuel: bot]                             │
│       │                    │                                     │
│       │                    ├──→ [Respuesta automática]          │
│       │                    │                                     │
│       │                    └──→ [Derivar a secretaría]          │
│       │                                                          │
│       └──→ [Pixel: conversión registrada]                       │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

### 2.3. FLUJO DE COMUNICACIÓN MASIVA (BREVO)

```
┌─────────────────────────────────────────────────────────────────┐
│ COMUNICACIÓN MASIVA                                              │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  [Brevo] ──→ [Base de contactos]                                │
│       │         │                                                │
│       │         ├──→ Alumnos actuales                           │
│       │         ├──→ Alumnos egresados                          │
│       │         ├──→ Postulantes pendientes                     │
│       │         └──→ Leads de marketing                         │
│       │                                                          │
│       └──→ [Campañas]                                           │
│              ├──→ Admisión 2027 (noviembre)                     │
│              ├──→ Promociones especiales                        │
│              ├──→ Eventos institucionales                        │
│              └──→ Newsletters                                   │
│                                                                  │
│  PENDIENTE: Enlazar formularios web con Brevo para              │
│             respuesta automática post-formulario                 │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

---

## 3. MAPEO DE LÍNEAS TELEFÓNICAS

### 3.1. Líneas móviles

```
┌─────────────────────────────────────────────────────────────────┐
│ LÍNEA: 56978920810 (Entel)                                     │
│ Uso: Kommo (CRM)                                                │
│ Estado: ✅ Ya contratada por la empresa                         │
│ Función: Línea dedicada para automatización de Kommo            │
│ Cambio titularidad: NO REQUERIDO                                │
├─────────────────────────────────────────────────────────────────┤
│ LÍNEA: 56952006799 (Entel)                                     │
│ Uso: Chatfuel (WhatsApp bot)                                    │
│ Estado: ⚠️ A nombre de Luis Felipe                             │
│ Función: Atención automatizada vía WhatsApp                     │
│ Cambio titularidad: SÍ REQUERIDO (plazo: 30 días)              │
├─────────────────────────────────────────────────────────────────┤
│ LÍNEA: 56990059968 (Entel)                                     │
│ Uso: WhatsApp Business (atención directa)                       │
│ Estado: ⚠️ A nombre de Luis Felipe                             │
│ Función: Atención directa a alumnos matriculados (Maipú)       │
│ Cambio titularidad: SÍ REQUERIDO (plazo: 30 días)              │
│ NOTA: Esta línea está DELIBERADAMENTE SEPARADA para evitar     │
│       bloqueos de Meta por política de 24 horas.                │
└─────────────────────────────────────────────────────────────────┘
```

### 3.2. Líneas fijas

```
┌─────────────────────────────────────────────────────────────────┐
│ LÍNEA: +562 2532 3752 (Movistar)                               │
│ Ubicación: Sede Maipú (General Ordóñez 253)                    │
│ Uso: Teléfono institucional Maipú                               │
│ Estado: ✅ Activo                                               │
├─────────────────────────────────────────────────────────────────┤
│ LÍNEA: +562 2665 5877 (Movistar)                               │
│ Ubicación: Sede Providencia (Alarife Gamboa 071)               │
│ Uso: Teléfono institucional Providencia                         │
│ Estado: ✅ Activo                                               │
└─────────────────────────────────────────────────────────────────┘
```

---

## 4. MAPEO DE CUENTAS DE CORREO

```
┌─────────────────────────────────────────────────────────────────┐
│ CORREO: secretaria@ismchile.cl                                  │
│ Uso: Sede Providencia                                           │
│ Hosting: Rafael Prato (servidor propio)                         │
│ Estado: ✅ Activo                                               │
├─────────────────────────────────────────────────────────────────┤
│ CORREO: secretariamaipu@ismchile.cl                             │
│ Uso: Sede Maipú                                                 │
│ Hosting: Rafael Prato (servidor propio)                         │
│ Estado: ✅ Activo                                               │
├─────────────────────────────────────────────────────────────────┤
│ CORREO: frodriguez@ismchile.cl                                  │
│ Uso: Personal de Luis Felipe                                    │
│ Hosting: Rafael Prato (servidor propio)                         │
│ Estado: ⚠️ Pendiente INHABILITAR                               │
│ Acción: Solicitar a Rafael Prato que desactive esta cuenta      │
└─────────────────────────────────────────────────────────────────┘
```

---

## 5. FLUJO DE ATENCIÓN POR SEDE

### 5.1. Sede Maipú

```
┌─────────────────────────────────────────────────────────────────┐
│ SEDE MAIPÚ                                                      │
│ Dirección: General Ordóñez 253, Metro Plaza de Maipú           │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  WhatsApp: 56990059968 (Business) ──→ Atención directa         │
│  Teléfono: +562 2532 3752 ──→ Atención directa                 │
│  Correo: secretariamaipu@ismchile.cl ──→ Consultas generales    │
│                                                                  │
│  Instagram: @ismchile ──→ DMs ──→ Meta Business Suite           │
│  Facebook: facebook.com/ismchile ──→ Messenger ──→ Meta Suite   │
│                                                                  │
│  Horario: L-V 9:30-13:00 / 15:00-19:00, S 9:30-12:30          │
│                                                                  │
│  Alarmas: Federal (Guadalupe Paredes)                           │
│  Cámaras: Manuel Cofré (camsys.cl)                              │
│  Wi-Fi: 4 redes (verificar claves)                              │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

### 5.2. Sede Providencia

```
┌─────────────────────────────────────────────────────────────────┐
│ SEDE PROVIDENCIA                                                │
│ Dirección: Alarife Gamboa 071, Metro Santa Isabel               │
├─────────────────────────────────────────────────────────────────┤
│                                                                  │
│  WhatsApp: +56 9 7126 6207 ──→ Atención directa                │
│  Teléfono: +562 2665 5877 ──→ Atención directa                 │
│  Correo: secretaria@ismchile.cl ──→ Consultas generales         │
│                                                                  │
│  Horario: L-J 9:30-13:00 / 15:00-19:00, V 9:30-13:00,         │
│           S 9:30-12:30                                          │
│                                                                  │
│  NOTA: No se mentionan alarmas, cámaras ni Wi-Fi para          │
│        esta sede en el checklist original.                      │
│                                                                  │
└─────────────────────────────────────────────────────────────────┘
```

---

## 6. INTEGRACIONES ENTRE PLATAFORMAS

| Plataforma origen | Plataforma destino | Tipo de integración | Estado |
|---|---|---|---|
| Formulario web (WordPress) | Make | Webhook | ✅ Activo (verificar) |
| Make | Kommo | API | ✅ Activo (verificar) |
| Make | Brevo | API | ⚠️ Pendiente configurar |
| Meta Ads | Chatfuel | API nativa | ✅ Activo (verificar) |
| Chatfuel | WhatsApp Business API | API | ✅ Activo (verificar) |
| Kommo | WhatsApp (56978920810) | API | ✅ Activo (verificar) |
| Meta Business Suite | Facebook/Instagram | Nativo | ✅ Activo |
| Facebook Pixel | Meta Ads | Nativo | ✅ Activo (verificar) |
| ShortPixel | WordPress | Plugin | ✅ Activo |

---

## 7. PUNTOS CRÍTICOS A VERIFICAR

### 7.1. Integridad del flujo

- [ ] Verificar que el formulario de contacto web llega correctamente a Make
- [ ] Verificar que Make envía correctamente los datos a Kommo
- [ ] Verificar que Kommo genera notificaciones a secretaría
- [ ] Verificar que Chatfuel responde correctamente en WhatsApp
- [ ] Verificar que las campañas de Meta Ads llegan a la audiencia correcta
- [ ] Probar el flujo completo: formulario → Make → Kommo → secretaría → alumno

### 7.2. Segregación de líneas

- [ ] Confirmar que la línea 56990059968 (WhatsApp Business) NO está conectada a Kommo ni Chatfuel
- [ ] Confirmar que la línea 56952006799 (Chatfuel) NO recibe atención directa
- [ ] Confirmar que la línea 56978920810 (Kommo) NO recibe atención directa

### 7.3. Respuesta automática

- [ ] Verificar tiempo de respuesta del bot de Chatfuel
- [ ] Verificar si el bot de Kommo está funcionando correctamente (problema conocido)
- [ ] Verificar que Make no tiene errores en sus escenarios

---

## 8. ESCENARIOS DE MAKE (A DOCUMENTAR)

> **Pendiente:** Se requiere acceder a Make para documentar todos los escenarios activos.

| Escenario | Trigger | Acciones | Estado |
|---|---|---|---|
| [Por documentar] | Formulario web | [Por verificar] | ⬜ Pendiente |
| [Por documentar] | Meta Ads | [Por verificar] | ⬜ Pendiente |
| [Por documentar] | [Otro trigger] | [Por verificar] | ⬜ Pendiente |

---

## 9. RECOMENDACIONES

### 9.1. Documentación de escenarios Make

Se recomienda acceder a Make y documentar cada escenario activo con:
- Nombre del escenario
- Trigger (qué lo activa)
- Acciones (qué hace)
- Variables de entorno
- Logs de ejecución recientes

### 9.2. Diagrama visual

Se recomienda crear un diagrama visual completo usando herramientas como:
- Mermaid (para documentación en Obsidian)
- Draw.io / diagrams.net (para diagramas editables)
- Lucidchart (para diagramas colaborativos)

### 9.3. Testing end-to-end

Realizar una prueba completa del flujo principal:
1. Enviar un formulario de prueba desde el sitio web
2. Verificar que llega a Make
3. Verificar que Make lo envía a Kommo
4. Verificar que Kommo notifica a secretaría
5. Responder desde secretaría
6. Verificar que el "alumno" recibe la respuesta

---

*Documento generado el 19 de agosto de 2026. Requiere acceso a las plataformas para completar la documentación.*
