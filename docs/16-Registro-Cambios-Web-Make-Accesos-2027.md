---
fecha: 2026-11-18
tipo: "registro-implementacion"
estado: "activo"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
institucion: "Instituto Santa María (ISM)"
responsable: "Cristián Díaz (crdiazu@gmail.com / cristian@ismchile.cl)"
---
# REGISTRO DE CAMBIOS WEB, AUTOMATIZACIONES Y PURGA DE ACCESOS (ADMISIÓN 2027)

> \[!abstract\] Resumen Ejecutivo — 18 de Noviembre de 2026 Se ejecutó la intervención técnica sobre el sitio web institucional (`www.ismchile.cl`), la organización de **Make.com** (`4116444`) y la vinculación con **Google Sheets** (`ism data capture`), logrando:
> 
> 1.  **Purga definitiva de cuentas de ex-colaborador** en WordPress y Make.com.
> 2.  **Migración de `/contacto/`** desde Gravity Forms a Contact Form 7 (`Formulario CF7_Contacto`, ID `17516`) con textos Admisión 2027.
> 3.  **Actualización de destinatarios** en 9 de 15 formularios CF7 (`secretaria@ismchile.cl` / `secretariamaipu@ismchile.cl` + `directora@ismchile.cl` + `cristian@ismchile.cl`).
> 4.  **Reactivación controlada del escenario maestro `2248037` en Make.com** y conexión con la nueva planilla Google Sheets de Cristián Díaz.

* * *

## 1\. Purga de Accesos y Seguridad de Cuentas

### 1.1. WordPress (`ismchile.cl/wp-admin`)

-   **Cuentas eliminadas permanentemente:**
    -   `admin_ism_chile` (`luis.felipe.rodriguez74@gmail.com` — Rol: Administrador).
    -   `ism` (`frodriguez@ismchile.cl` — Rol: Suscriptor).
    -   Todo el contenido histórico fue reasignado a `crdiazu`.
-   **Administrador único vigente:** `crdiazu` (`crdiazu@gmail.com`).
-   **Easy WP SMTP (`v2.15.1`):** Auditado y operativo. Autentica mediante `mail.ismchile.cl` (puerto `465` SSL) con la cuenta institucional `form@ismchile.cl` y remitente `noreply@ismchile.cl` (_Instituto Santa Maria_).
-   **Wordfence Security:** Sin referencias a correos de ex-colaborador (alertas técnicas en `hola@agenciaecolecua.cl`).
-   **Feed de Instagram (`/quienes-somos/`):** Identificado shortcode `[ff id="1"]` administrado por el plugin **`Flow-Flow Social Feeds`** (`v5.0.8`).

### 1.2. Make.com (Organización `4116444` — Plan Pro)

-   **Salida del Owner anterior:** La cuenta `frodriguez@ismchile.cl` (`LUIS RODRIGUEZ`, User ID `4332057`) salió formalmente de la organización (`No organization found`).
-   **Administradores vigentes:**
    -   **Cristián Díaz** (`crdiazu@gmail.com` — Admin).
    -   **Mary Luz Leal Barrera** (`mluzleal@gmail.com` — Admin).
-   **Disponibilidad de plan:** Plan Pro activo con ~224.000 operaciones disponibles.

* * *

## 2\. Automatización en Make.com y Conexión con Google Sheets

### 2.1. Escenario Maestro Activo (`2248037`)

-   **Nombre:** `Ingreso Leads y Contacts de Formularios`
-   **Estado:** **ON (Activo)** — Programado cada **10 minutos** con procesamiento secuencial (`Process data in order = Yes` y `Process old data = ON`) para drenar ordenadamente los 93 leads acumulados en la cola del webhook.
-   **Webhook receptor (Módulo 1):**
    -   **Nombre:** `Landing Estética y Cosmetología` (Hook ID `1199945`)
    -   **URL:** `https://hook.us2.make.com/9gqxj4it27ro1j51rkgoth6tsnwo8qei`
-   **Secuencia de módulos:**
    1.  `Webhooks (Custom webhook 1199945)` — Recibe el payload desde WordPress (`CF7 to Webhook`).
    2.  `Kommo (Create a Contact)` — Registra contacto.
    3.  `Tools (Sleep 10s)` — Pausa de seguridad.
    4.  `Kommo (Create a Lead)` — Genera oportunidad comercial.
    5.  `Tools (Set multiple variables)` — Normaliza campos del formulario.
    6.  `Google Sheets (Add a Row - Módulo 10)` — Inserta la fila en la planilla de control.

### 2.2. Planilla Google Sheets Vinculada

-   **Documento:** [`ism data capture`](https://docs.google.com/spreadsheets/d/10gwdNWbrI1zwH-PgNtTnf2fJb73QHwLaOSZCsuauVUs/edit)
-   **Spreadsheet ID:** `10gwdNWbrI1zwH-PgNtTnf2fJb73QHwLaOSZCsuauVUs`
-   **Hoja destino:** `Hoja 1`
-   **Columnas configuradas:** `nombre` | `email` | `telefono` | `sede` | `curso` | `fecha`
-   **Conexión OAuth:** `Cristián's Google connection` (`crdiazu@gmail.com`).

### 2.3. Depuración de Escenarios Secundarios (10 en OFF)

Se auditó la totalidad de los 11 escenarios de la cuenta, determinando que **basta con el escenario `2248037`** para cubrir el 100% de los formularios del sitio web. Los 10 escenarios restantes permanecen apagados (**OFF**) para evitar consumo innecesario de créditos:

-   `2644908` — _Notificación x Correo a Secretaría editado sin correo_ (obsoleto; WordPress despacha vía SMTP).
-   `4459315` — _Respaldo Notificación por correo_ (0 ops).
-   `3155122`, `3156232`, `3156243`, `3156249`, `3156254` — _Gestión Facebook Ads por carrera_ (0 ops; solo aplicables si se usaran Lead Ads nativos dentro de Meta).
-   `2386426` — _Integration Email_ (0 ops).
-   `6856306` y `6676893` — Escenarios de prueba independientes de Cristián Díaz.

* * *

## 3\. Formularios Contact Form 7 (WordPress)

### 3.1. Esquema de Destinatarios por Sede

Todos los avisos de nuevos prospectos se envían simultáneamente a secretaría de sede, dirección y consultoría para trazabilidad completa del proceso:

-   **Maipú:** `secretariamaipu@ismchile.cl, directora@ismchile.cl, cristian@ismchile.cl`
-   **Providencia:** `secretaria@ismchile.cl, directora@ismchile.cl, cristian@ismchile.cl`

### 3.2. Formularios Actualizados y Limpios (9 de 15)

1.  ✅ `17516` — `Formulario CF7_Contacto` _(Nuevo formulario creado e incrustado en `/contacto/` reemplazando Gravity Forms `gform_21`)_.
2.  ✅ `16747` — `Formulario CF7_Landing Cosmetología y Estética`
3.  ✅ `16838` — `Formulario CF7_Landing Enfermería`
4.  ✅ `16753` — `Formulario CF7_Landing Estilista y Peluquería`
5.  ✅ `16761` — `Formulario CF7_Landing Maquillaje`
6.  ✅ `16767` — `Formulario CF7_Landing Masoterapia`
7.  ✅ `16782` — `Formulario CF7_Landing Pastelería`
8.  ✅ `16786` — `Formulario CF7_Página Cosmetología`
9.  ✅ `16757` — `Formulario CF7_Página Enfermería`

### 3.3. Formularios Pendientes de Actualizar Destinatario (6 de 15)

-    `16802` — `Formulario CF7_Página Estética`
-    `16807` — `Formulario CF7_Página Estilista`
-    `16813` — `Formulario CF7_Página Maquillaje`
-    `16842` — `Formulario CF7_Página Masoterapia`
-    `16852` — `Formulario CF7_Página Pastelería`
-    `16846` — `Formulario CF7_Página Peluquería`

* * *

## 4\. Estado de Páginas y Landings Admisión 2027

### 4.1. Actualizadas a Admisión 2027

-   ✅ **`/contacto/` (ID `12352`):** Título actualizado a `Contáctanos`, copy renovado para Admisión 2027 y migración completa de Gravity Forms a `[contact-form-7 id="1f18ee7" title="Formulario CF7_Contacto"]`.
-   ✅ **`/landing-pasteleria/` (ID `14733`):** Actualizada a `PROCESO DE ADMISION 2027 | ABIERTO`.
-   ✅ **`/landing-cosmetologia-esteticaintegral/` (ID `14185`):** Actualizada a `PROCESO DE ADMISION 2027 | ABIERTO`.

### 4.2. Pendientes en WordPress

-    Actualizar texto `2026` ➔ `2027` en `/landing-estilista-peluqueria/` (`14702`), `/landing-maquillaje-integral/` (`14711`), `/landing-masoterapia-masofilaxia/` (`14720`) y `/landing-enfermeria/` (`14686`).
-    Migrar formulario de `/perfeccionamiento/` (`13092`, usa `gform_17`) a Contact Form 7.
-    Pasar a borrador las landings antiguas de Intensivos 2024 (`16101`, `16232`, `16176`).
-    Actualizar los archivos PDF en **Download Monitor** (`15255`, `15252`, `15249`, `15246`, `15243`, `15240`, `15237`, `15234`) cuando estén listos los folletos de diseño 2027.
