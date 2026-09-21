---
fecha: 2026-09-16
tipo: "auditoria-seguridad"
estado: "activo"
empresa: "Centro de Educación Politécnica y Compañía Limitada"
auditor: "Cristian Díaz - MarketingCloud Chile"
reunion_remediacion: "2026-09-24 (Miércoles, 2 horas)"
---

# ANÁLISIS DE SEGURIDAD — INSTITUTO SANTA MARÍA (ISM)

> [!info] Contexto
> Reunión de remediación: **Miércoles 24 de septiembre** (2 horas). Al salir de esta reunión, se debe tener toda la información disponible para manejar el stack tecnológico completo.

---

## 1. ESTADO ACTUAL — LO QUE SABEMOS

### ✅ Resuelto / En control
- **Contraseñas en el vault:** El vault es privado y seguro. Las contraseñas se manejan aquí.
- **Cuentas personales desvinculadas:** La desvinculación está hecha, pero **F. Rodríguez es la más crítica** y debe verificarse.
- **Titularidad de líneas:** Todo está a cargo de Marilú. Se mejorará post-reunión.

### ⚠️ Pendiente para el 24 de septiembre
- **2FA:** Se configura en vivo durante la reunión
- **Contraseñas:** Se rotan y crean archivos compartidos
- **Hosting:** Se blinda con 3 accesos (Cristian, Marilú, Antonia)
- **Wi-Fi:** Se revisa en sitio y se cambian credenciales
- **Auditoría:** Se crean procedimientos para registrar actividad

### 📅 Pendiente para después
- **Cámaras:** Revisión en enero 2027
- **Google Pixel:** Crear tutorial de acceso y configuración

---

## 2. BRECHAS Y PLAN DE REMEDIACIÓN

### 🔴 CRÍTICAS

#### 2.1. Cuenta frodriguez@ismchile.cl — MÁXIMA PRIORIDAD
- **Estado:** Desvinculada pero puede tener acceso residual
- **Acción:** Verificar que no tenga sesión activa, cambiar contraseña, inhabilitar completamente
- **Responsable:** Cristian + Marilú
- **Fecha:** 24 de septiembre (reunión)

#### 2.2. 2FA sin configurar
- **Plataformas:** WordPress, Meta, Kommo, Brevo, Make
- **Acción:** Configurar 2FA en vivo durante la reunión con los 3 teléfonos físicos
- **Responsable:** Cristian (coordinador)
- **Fecha:** 24 de septiembre (reunión)

---

### 🟠 ALTAS

#### 2.3. Contraseñas no rotadas post-traspaso
- **Acción:** Cambiar TODAS las contraseñas y crear archivo compartido
- **Formato:** Archivo maestro de credenciales con:
  - Plataforma
  - URL de acceso
  - Usuario
  - Contraseña (en vault)
  - 2FA configurado (Sí/No)
  - Último cambio
- **Responsable:** Cristian
- **Fecha:** 24 de septiembre (reunión)

#### 2.4. Acceso compartido sin control
- **Estado:** Cristian y Marilú deben tener acceso a todas las plataformas
- **Acción:** Verificar que ambos tengan acceso completo a cada plataforma
- **Responsable:** Cristian
- **Fecha:** 24 de septiembre (reunión)

#### 2.5. Falta de registro de auditoría
- **Acción:** Crear procedimiento para documentar:
  - Qué se hizo
  - Cuándo se hizo
  - Quién lo hizo
  - Resultado
- **Formato:** Bitácora semanal en el vault
- **Responsable:** Cristian
- **Fecha:** Post-reunión (primera semana de octubre)

---

### 🟡 MEDIAS

#### 2.6. Hosting sin blindaje
- **Estado:** Cristian tiene todos los datos del hosting
- **Acción:**
  1. Verificar que el hosting esté actualizado
  2. Configurar 3 accesos: Cristian, Marilú, Antonia
  3. Activar backups automáticos
  4. Verificar certificado SSL
- **Responsable:** Cristian + Rafael Prato
- **Fecha:** Post-reunión (primera semana de octubre)

#### 2.7. Wi-Fi con contraseñas débiles
- **Acción:** Revisar en sitio todas las redes Wi-Fi y cambiar credenciales
- **Redes:** Recepción, Línea 2ISM, ISM_PISO2, ISM_245
- **Responsable:** Cristian + Manuel Cofré
- **Fecha:** Post-reunión (cuando se visite sede)

#### 2.8. Falta de política de contraseñas
- **Acción:** Crear documento de política que defina:
  - Mínimo 12 caracteres
  - Mezcla de mayúsculas, minúsculas, números, símbolos
  - Cambio cada 90 días
  - No reutilizar contraseñas anteriores
- **Responsable:** Cristian
- **Fecha:** Post-reunión

---

### 🟢 MEJORAS

#### 2.9. Backup de información crítica
- **Acción:** Identificar y respaldar:
  - Documentos del vault
  - Base de datos de WordPress
  - Contactos de Kommo/CRM
  - Configuraciones de plataformas
- **Responsable:** Cristian
- **Fecha:** Post-reunión

#### 2.10. Tutorial Google Analytics / Pixel
- **Acción:** Crear tutorial paso a paso para:
  - Acceder a Google Analytics
  - Configurar Google Pixel
  - Revisar métricas básicas
- **Responsable:** Cristian
- **Fecha:** Post-reunión

#### 2.11. Calendario de capacitación en ciberseguridad
- **Acción:** Crear calendario con temas para:
  - Marilú: Uso seguro de plataformas, reconocimiento de phishing
  - Antonia: Seguridad en WordPress, backups
  - Secretaría: Manejo seguro de correos, WhatsApp
- **Responsable:** Cristian
- **Fecha:** Post-reunión

---

## 3. GUIÓN PARA LA REUNIÓN DEL 24 DE SEPTIEMBRE

### Estructura (2 horas)

| Hora | Actividad | Entregable |
|------|-----------|------------|
| 0:00 - 0:15 | Revisión de cuentas y accesos | Verificar que Cristian y Marilú tengan acceso a todo |
| 0:15 - 0:45 | Configuración de 2FA en vivo | 2FA activo en WordPress, Meta, Kommo, Brevo, Make |
| 0:45 - 1:15 | Rotación de contraseñas | Todas las contraseñas cambiadas |
| 1:15 - 1:30 | Verificación de cuenta F. Rodríguez | Inhabilitación completa |
| 1:30 - 1:45 | Documentación de credenciales | Archivo maestro actualizado en vault |
| 1:45 - 2:00 | Próximos pasos y calendario | Lista de tareas post-reunión |

### Materiales a llevar
- [ ] Laptop con acceso al vault
- [ ] Los 3 teléfonos físicos para validar WhatsApp Business
- [ ] Documento de credenciales impreso (respaldo)
- [ ] Acceso a todas las plataformas desde el laptop

### Salida esperada
Al salir de la reunión se debe tener:
1. ✅ 2FA activo en todas las plataformas críticas
2. ✅ Contraseñas rotadas y documentadas
3. ✅ Acceso verificado para Cristian y Marilú
4. ✅ Cuenta F. Rodríguez completamente inhabilitada
5. ✅ Archivo maestro de credenciales actualizado

---

## 4. CHECKLIST DE VERIFICACIÓN POST-REUNIÓN

### Credenciales
- [ ] Todas las contraseñas rotadas
- [ ] 2FA activo en WordPress
- [ ] 2FA activo en Meta Business Suite
- [ ] 2FA activo en Kommo
- [ ] 2FA activo en Brevo
- [ ] 2FA activo en Make
- [ ] Cuenta frodriguez@ismchile.cl inhabilitada
- [ ] Archivo maestro de credenciales creado

### Accesos
- [ ] Cristian tiene acceso a WordPress (Admin)
- [ ] Cristian tiene acceso a Meta Business Suite
- [ ] Cristian tiene acceso a Kommo
- [ ] Cristian tiene acceso a Brevo
- [ ] Cristian tiene acceso a Make
- [ ] Cristian tiene acceso a BSale
- [ ] Marilú tiene acceso a todas las plataformas
- [ ] Antonia tiene acceso a WordPress

### Hosting
- [ ] Acceso al panel de hosting verificado
- [ ] Backups automáticos activados
- [ ] Certificado SSL vigente
- [ ] WordPress y plugins actualizados

### Documentación
- [ ] Archivo de credenciales en vault
- [ ] Procedimiento de auditoría creado
- [ ] Política de contraseñas definida

---

## 5. PRÓXIMOS PASOS (POST-REUNIÓN)

| Semana | Acción | Responsable |
|--------|--------|-------------|
| 29 Sep - 3 Oct | Blindar hosting (3 accesos, backups) | Cristian |
| 29 Sep - 3 Oct | Cambiar contraseñas Wi-Fi en sitio | Cristian |
| 6 - 10 Oct | Crear política de contraseñas | Cristian |
| 6 - 10 Oct | Crear procedimiento de auditoría | Cristian |
| 13 - 17 Oct | Crear tutorial Google Analytics/Pixel | Cristian |
| 20 - 24 Oct | Calendario de capacitación en ciberseguridad | Cristian |
| Enero 2027 | Revisión de cámaras de seguridad | Cristian |

---

## 6. SCORING ACTUALIZADO

| Dominio | Peso | Score Antes | Score Después (estimado) |
|---------|------|-------------|--------------------------|
| Credenciales y Accesos | 25% | 30/100 | 80/100 |
| Autenticación | 20% | 25/100 | 75/100 |
| Monitoreo y Logs | 15% | 10/100 | 50/100 |
| Infraestructura | 15% | 40/100 | 70/100 |
| Protección de Datos | 15% | 50/100 | 60/100 |
| Cumplimiento Legal | 10% | 60/100 | 70/100 |

**SCORE ESTIMADO POST-REUNIÓN: 68/100** — ⚠️ APROBADO CON RESERVAS

> [!note] Objetivo
> Con la ejecución completa del plan post-reunión, el score debe superar **70/100** para considerarse operativo.

---

> [!warning] Recordatorio
> La reunión es el **miércoles 24 de septiembre**. Todas las fechas y acciones se actualizan después de esta reunión.

---

## ANEXOS

- [[00-Auditoria-Seguridad-2026]] (este documento)
- [[01-Acuerdo-de-Confidencialidad]]
- [[03-Checklist-Traspaso-Maestro]]
- [[Registro de Claves y Accesos]]
- [[02-Politica-de-Privacidad-SitioWeb]]
- [[Plan Estratégico - ISM - Q4 2026]]
