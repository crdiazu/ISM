---
fecha: 2026-08-19
tipo: "roadmap"
estado: "borrador"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
diseñadora: "Antonia Blanca Hordern Vergara (AH Diseño)"
coordinador: "Cristian"
aprobadora: "Mary Luz Leal Barrera"
---

# ROADMAP DE ACTUALIZACIÓN WEB

## Instituto Santa María — Preparación Matrícula 2027

**Diseñadora:** Antonia Hordern (antonia@ahdiseno.com, +56 9 5606 5658)
**Coordinador técnico:** Cristian
**Aprobadora:** Mary Luz Leal Barrera

---

## 1. CONTEXTO

El sitio web **www.ismchile.cl** fue diseñado y desarrollado por Antonia Hordern. Actualmente el sitio presenta:

- Contenido desactualizado (algunos textos mencionan "Admisión 2025")
- Falta de página de Política de Privacidad
- Falta de banner de cookies
- Posibles problemas de acceso para el nuevo administrador
- Necesidad de landing pages para campaña de matrícula 2027

**Objetivo:** Dejar el sitio web completamente actualizado y optimizado para el proceso de admisión 2027 (noviembre 2026).

---

## 2. ACCESO Y PERMISOS

| Perfil | Nivel de acceso | Usuario WordPress | Notas |
|---|---|---|---|
| **Cristian** | Administrador | admin_ism_chile | Acceso total |
| **Antonia Hordern** | Editora / Desarrolladora | [Por crear] | Acceso parcial: edición de contenido y diseño |
| **Mary Luz** | [Por definir] | [Por crear] | Solo lectura o editor limitado |

### 2.1. Monitoreo de actividad de Antonia

Para revisar la interacción de Antonia con WordPress de manera objetiva:

| Método | Cómo acceder | Qué muestra |
|---|---|---|
| **Log de actividad** | WordPress → Herramientas → Activity Log (requiere plugin) | Ediciones, publicaciones, inicio de sesión |
| **Historial de revisiones** | WordPress → Entradas/Páginas → Revisión | Cambios específicos por página |
| **Log de acceso** | WordPress → wp-admin → users → actividad | Cuándo inició sesión |
| **Plugin recomendado** | **WP Activity Log** (gratis) o **Simple History** | Registro completo de acciones |

> **Recomendación:** Instalar el plugin **WP Activity Log** antes de otorgar acceso a Antonia. Esto genera un registro objetivo de todas sus acciones en el sitio.

---

## 3. ESTADO ACTUAL DEL SITIO

### 3.1. Stack tecnológico

| Componente | Estado | Notas |
|---|---|---|
| **CMS** | WordPress (tema `vault` + `vault-child`, Elementor) | Medido 17-10-2026 |
| **Hosting** | HostGator (Apache) | Actualizado (antes Rafael Prato) |
| **Dominio** | www.ismchile.cl | Verificar renovación |
| **Optimización imágenes** | ShortPixel declarado | ⚠️ **Sin efecto real**: sin WebP, PNG de 490 KB en portada, 92 recursos sin `Cache-Control` |
| **Analytics** | Google Tag Manager `GTM-MFW478HP` + Google tag `GT-MBNST67` + Google Ads `AW-687054614` | ⚠️ **Meta Pixel `1073420354461901` ya NO está en el sitio** (verificado 17-10-2026) |
| **Formularios** | Gravity Forms (`/contacto`) + Contact Form 7 (13 landings) | Medido 17-10-2026 |
| **Caché** | Autoptimize (JS/CSS `immutable` 1 año) | ⚠️ Portada `no-store` + cookie `PHPSESSID`; sin compresión HTTP |
| **Seguridad** | Sin cabeceras HSTS/CSP en el sitio público | ⚠️ Listado de directorios activo en `/wp-content/uploads/` |

### 3.2. Páginas actuales

| Página | URL | Estado | Acción requerida |
|---|---|---|---|
| Home | ismchile.cl/ | ⚠️ Textos desactualizados | Actualizar (admisión 2025 → 2027) |
| Cursos | ismchile.cl/cursos/ | ⚠️ Verificar | Revisar precios y disponibilidad |
| Perfeccionamiento | ismchile.cl/perfeccionamiento/ | ⚠️ Verificar | Actualizar si es necesario |
| Quiénes somos | ismchile.cl/quienes-somos/ | ✅ OK | Sin cambios |
| Contacto | ismchile.cl/contacto/ | ✅ OK | Sin cambios |
| **Política de Privacidad** | ismchile.cl/politica-de-privacidad/ | ✅ OK (medida 17-10-2026) | Falta meta descripción y `h1` |
| **Landing Matrícula** | 13 páginas `landing-*` publicadas | ✅ OK (medidas 17-10-2026) | Falta meta descripción, `h1` y evento de conversión |

---

## 4. FASES DEL ROADMAP

### FASE 1: Auditoría y Acceso (19-31 AGO)

**Responsable:** Cristian + Antonia
**Entregable:** Informe de auditoría web

| # | Tarea | Responsable | Plazo | Estado |
|---|---|---|---|---|
| 1.1 | Verificar acceso de Cristian a WordPress | Cristian | 20 AGO | ⬜ |
| 1.2 | Crear usuario para Antonia con nivel "Editora" | Cristian | 21 AGO | ⬜ |
| 1.3 | Instalar plugin WP Activity Log | Cristian | 21 AGO | ⬜ |
| 1.4 | Reunión Cristian-Antonia: revisar estado del sitio | Ambos | 25 AGO | ⬜ |
| 1.5 | Auditoría de plugins activos | Antonia | 28 AGO | ⬜ |
| 1.6 | Auditoría de seguridad (actualizaciones pendientes) | Antonia | 28 AGO | ⬜ |
| 1.7 | Verificar funcionamiento del formulario de contacto | Cristian | 28 AGO | ⬜ |

### FASE 2: Correcciones Críticas (01-15 SEP)

**Responsable:** Antonia (ejecución) + Cristian (supervisión)
**Entregable:** Sitio funcional y seguro

| # | Tarea | Responsable | Plazo | Estado |
|---|---|---|---|---|
| 2.1 | Actualizar WordPress y todos los plugins | Antonia | 04 SEP | ⬜ |
| 2.2 | Corregir problemas de acceso de Cristian | Antonia | 04 SEP | ⬜ |
| 2.3 | Revisar y optimizar rendimiento (velocidad) | Antonia | 11 SEP | ⬜ |
| 2.4 | Verificar responsive en móviles | Antonia | 11 SEP | ⬜ |
| 2.5 | Corregir errores de contenido (textos rotos, links) | Antonia | 15 SEP | ⬜ |
| 2.6 | Actualizar texto "Admisión 2025" → "Admisión 2027" | Antonia | 15 SEP | ⬜ |

### FASE 3: Contenido Nuevo (15 SEP - 15 OCT)

**Responsable:** Antonia (diseño) + Cristian (contenido) + Profe 1/2 (material)
**Entregable:** Sitio actualizado para campaña

| # | Tarea | Responsable | Plazo | Estado |
|---|---|---|---|---|
| 3.1 | Crear Política de Privacidad (contenido de Cristian) | Antonia (publicar) | 22 SEP | ⬜ |
| 3.2 | Crear landing page de Matrícula 2027 | Antonia | 06 OCT | ⬜ |
| 3.3 | Actualizar fotos de cursos (material de Profe 1/2) | Antonia | 06 OCT | ⬜ |
| 3.4 | Actualizar testimonios de alumnos | Antonia | 13 OCT | ⬜ |
| 3.5 | Crear página de "Proceso de Admisión 2027" | Antonia | 13 OCT | ⬜ |
| 3.6 | Integrar formularios de la landing con Make / hoja de leads | Cristian + Antonia | 15 OCT | ⬜ |

### FASE 4: Optimización para Campaña (15 OCT - 01 NOV)

**Responsable:** Antonia + Cristian
**Entregable:** Sitio listo para campaña de matrícula

| # | Tarea | Responsable | Plazo | Estado |
|---|---|---|---|---|
| 4.1 | Optimizar landing para conversiones (CTAs claros) | Antonia | 20 OCT | ⬜ |
| 4.2 | Configurar eventos de conversión en Facebook Pixel | Cristian | 20 OCT | ⬜ |
| 4.3 | Implementar banner de cookies | Antonia | 27 OCT | ⬜ |
| 4.4 | Prueba final de todo el sitio | Antonia + Cristian | 01 NOV | ⬜ |
| 4.5 | **SITIO LISTO PARA CAMPAÑA** | — | **01 NOV** | ⬜ |

---

## 5. PRESUPUESTO DE DISEÑO (ANTONIA)

> **Nota:** Los costos de Antonia deben ser acordados directamente con ella. Este es un estimado basado en sus tarifas públicas (desde USD 1.000 por proyecto web).

| Servicio | Estimado | Notas |
|---|---|---|
| Auditoría y correcciones | [Por cotizar] | Fase 1-2 |
| Landing page matrícula | [Por cotizar] | Fase 3 |
| Actualización de contenido | [Por cotizar] | Fase 3 |
| Optimización y cookies | [Por cotizar] | Fase 4 |
| **Total estimado** | **[Por cotizar]** | |

> **Acción:** Solicitar cotización formal a Antonia para cada fase.

---

## 6. MECANISMO DE COORDINACIÓN

| Frecuencia | Participantes | Formato | Propósito |
|---|---|---|---|
| **Al inicio** | Cristian + Antonia | Reunión virtual/presencial | Definir alcance y prioridades |
| **Semanal** | Cristian + Antonia | WhatsApp/email | Actualización de avances |
| **Quincenal** | Cristian + Antonia + Mary Luz | Reunión 30 min | Revisión de avances, aprobaciones |
| **Al finalizar cada fase** | Cristian + Antonia | Entrega formal | Revisión y aprobación |

---

## 7. MÉTRICAS DE ÉXITO

| Métrica | Meta | Cómo se mide |
|---|---|---|
| Tiempo de carga del sitio | < 3 segundos | Google PageSpeed Insights |
| Responsive (móvil) | 100% funcional | Prueba manual + Google Mobile Test |
| Formularios funcionales | 100% | Prueba de envío |
| Landing page lista | Antes del 01/11 | Verificación visual |
| Plugins actualizados | 100% | WordPress dashboard |
| Sin errores 404 | 0 errores | Screaming Frog / manual |
| Política de Privacidad publicada | Sí | Verificación en sitio |

---

## 8. MONITOREO DE ACTIVIDAD DE ANTONIA

### 8.1. Plugin WP Activity Log

Una vez instalado, permite ver:

- **Inicio de sesión:** Cuándo y desde dónde accedió Antonia
- **Ediciones:** Qué páginas/entradas modificó
- **Creaciones:** Qué contenido nuevo publicó
- **Cambios de configuración:** Si modificó ajustes del sitio
- **Subida de archivos:** Qué imágenes o documentos cargó

### 8.2. Cómo revisar

1. WordPress → WP Activity Log → Activity Log
2. Filtrar por usuario: "Antonia" o su usuario específico
3. Filtrar por fecha: rango de interés
4. Exportar registro si es necesario para documentación

### 8.3. Reporte para Mary Luz

Cristian puede generar un reporte mensual simplificado:

```
Actividad de Antonia en ismchile.cl (Septiembre 2026)
- Inicios de sesión: 12
- Páginas editadas: 8
- Contenido nuevo publicado: 2 landing pages
- Plugins actualizados: 3
- Imágenes subidas: 15
```

---

## 9. AUDITORÍA DE COMPORTAMIENTO (17-10-2026)

El resultado de la medición de solo lectura del sitio está en **[[14-Auditoria-Comportamiento-Web-2026]]**. Resumen de lo que este roadmap debe incorporar:

**🔴 Fase A (urgente, impacta la campaña de Admisión 2027):**

| # | Tarea | Responsable | Estado |
|---|---|---|---|
| A1 | Reinstalar **Meta Pixel** en GTM + evento `Lead` en las páginas `/gracias-*` | Cristian | ⬜ |
| A2 | Resolver **doble conteo de Google Ads** (`AW-687054614` inline + tag GTM) | Cristian | ⬜ |
| A3 | Validar triggers de conversión con **GTM Preview** | Cristian | ⬜ |
| A4 | Quitar el enlace a la **línea Kommo** (`56978920810`) del sitio | Antonia | ⬜ |
| A5 | Arreglar **links WhatsApp rotos** (dígito extra y query strings vacíos) | Antonia | ⬜ |
| A6 | Crear **meta descripciones** en las ~49 páginas | Antonia | ⬜ |
| A7 | Un **`h1` por página** con keyword de programa | Antonia | ⬜ |
| A8 | Etiquetas **Open Graph / Twitter Card** para compartir en WhatsApp e IG | Antonia | ⬜ |
| A9 | **`noindex`** de `/gracias-*` y páginas de prueba | Antonia | ⬜ |

**🟡 Fase B (rendimiento):** gzip/brotli, cachear la portada (quitar `no-store` y `PHPSESSID`), imágenes a WebP, `Cache-Control` en medios, lazy loading + dimensiones, reducir las 67 imágenes de las landings y re-ejecutar Lighthouse.

**🟢 Fase C (conversión y seguridad):** verificar el flujo **web → Make**, desactivar listado de directorios en `uploads`, cabeceras de seguridad y limpieza de páginas de prueba.

---

*Roadmap generado el 19 de agosto de 2026. Requiere aprobación de Mary Luz y cotización de Antonia. Sección 9 agregada el 18 de octubre de 2026 a partir de [[14-Auditoria-Comportamiento-Web-2026]].*
