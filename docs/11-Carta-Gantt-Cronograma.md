---
fecha: 2026-08-19
tipo: "carta-gantt"
estado: "activo"
proyecto: "Tecnología y Marketing Digital — Instituto Santa María"
contratista: "Cristian"
supervisora: "Mary Luz Leal Barrera"
periodo: "19/08/2026 - 30/11/2026"
---
# Carta Gantt — Plan de Acción y Despliegue Digital (ISM)

Visualización cronológica del proyecto de **Tecnología y Marketing Digital** para el **Instituto Santa María (ISM)**, cubriendo el diagnóstico inicial, consolidación del stack tecnológico, preparación y ejecución de la **Campaña de Admisión y Matrícula 2027**.

> 📊 **Visor Interactivo Completo (HTML):** [Abrir Carta Gantt Interactiva](file:///c:/Users/Cristian/Obsidian/Cristian/CDU/PROYECTOS/Instituto%20SM/ISM/docs/carta-gantt-interactiva.html) *(Incluye escala por días/semanas/meses, filtros por responsable, barra de avance de tareas e indicador de hoy).*

---

## 1. Diagrama de Carta Gantt (Mermaid)

```mermaid
gantt
    title Plan de Acción ISM: Diagnóstico, Optimización y Campaña Admisión 2027
    dateFormat  YYYY-MM-DD
    axisFormat  %d %b

    section Fase 1: Diagnóstico y Control
    Reunión inicial con Mary Luz & levantamiento      :done, d1, 2026-08-19, 2026-08-20
    Recepción y auditoría de accesos/plataformas     :done, d2, 2026-08-20, 2026-08-28
    Diagnóstico técnico Kommo, Make & Chatfuel       :active, d3, 2026-08-24, 2026-09-04
    Auditoría Meta Business Suite & Brevo            :active, d4, 2026-08-25, 2026-09-04
    Entrega Informe Consolidado de Diagnóstico       :milestone, m1, 2026-09-04, 0d
    Cambio y securización de credenciales            :sec1, 2026-09-04, 2026-09-11
    Coordinación web con Antonia (Roadmap Web)       :web1, 2026-09-04, 2026-09-11
    Alineación redes (Profe 1, Profe 2, Fran)        :red1, 2026-09-04, 2026-09-11

    section Fase 1.2: Optimización e Hitos
    Ajustes de bot en Kommo y flujos Make            :opt1, 2026-09-14, 2026-09-18
    Fiestas Patrias (Pausa operacional)              :crit, hol, 2026-09-17, 2026-09-18
    Borrador de campaña Matrícula 2027               :camp1, 2026-09-21, 2026-09-25
    Cierre de Fase 1 & Presentación a Mary Luz       :milestone, m2, 2026-09-30, 0d

    section Fase 2: Campaña y Activación (Octubre)
    Lanzamiento pauta digital (Meta Ads / Google)    :ads1, 2026-10-01, 2026-10-04
    Optimización semanal de pauta y flujo de leads   :ads2, 2026-10-05, 2026-10-31
    Actualización sitio web para matrícula (Antonia) :web2, 2026-10-12, 2026-10-18
    Email Marketing (Brevo) + Flujos WhatsApp        :crm1, 2026-10-19, 2026-10-25
    Preparación final landings, bots y formularios   :ready1, 2026-10-26, 2026-10-31
    Hito: Sistemas listos para Admisión 2027         :milestone, m3, 2026-10-31, 0d

    section Fase 3: Admisión 2027 (Noviembre)
    Lanzamiento oficial Proceso Admisión 2027        :milestone, m4, 2026-11-01, 0d
    Pauta y captación intensiva de matrículas        :live1, 2026-11-01, 2026-11-15
    Seguimiento diario y cierre primera ronda        :live2, 2026-11-08, 2026-11-21
    Consolidación métricas y entrega informe final   :rep1, 2026-11-22, 2026-11-30
    Cierre contractual y traspaso consolidado        :milestone, m5, 2026-11-30, 0d
```

---

## 2. Detalle de Fases e Hitos Clave


| Fase                              | Período         | Foco Principal                                                                                                                             | Entregable Clave                                  |
| ----------------------------------- | ------------------ | -------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------- |
| **Fase 1: Diagnóstico y Acceso** | 19 Ago – 11 Sep | Inventario de accesos, auditoría técnica de plataformas (Kommo, Make, Meta, Brevo, Chatfuel, WordPress) y securización de credenciales. | Informe de Diagnóstico + Ficha de Accesos Segura |
| **Fase 1.2: Optimización**       | 14 Sep – 30 Sep | Reparación de flujos rotos, roadmap web con Antonia, protocolo de contenidos y borrador de campaña matrícula 2027.                      | Informe Final Fase 1 + Borrador Campaña          |
| **Fase 2: Activación y Pauta**   | 01 Oct – 31 Oct | Encendido de campañas pagadas preliminares, actualización web y campañas por correo/WhatsApp.                                           | Campañas activas + Sitio web actualizado         |
| **Fase 3: Admisión 2027**        | 01 Nov – 30 Nov | Ejecución intensiva de matrícula, seguimiento diario de leads en CRM Kommo, reportes de conversión y cierre de ciclo.                   | Informe Final + Alumnos Matriculados              |

---

## 3. Matriz de Responsables

- **Luis A. Rodríguez Abarca:** Aprobación estratégica y presupuestaria.
- **Mary Luz Leal Barrera:** Supervisión, aprobaciones operativas y definición de prioridades.
- **Cristian (Tú):** Coordinación integral, auditoría técnica, Make, Kommo, pauta digital y reportes.
- **Antonia Hordern:** Diseño y desarrollo web WordPress/Elementor.
- **Fran / Profe 1 / Profe 2:** Generación y publicación diaria de contenidos (Providencia y Maipú).
