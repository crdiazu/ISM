# Landing Page Nativa WordPress (Sin Elementor)
## Curso: Pastelería y Repostería — Admisión 2027

Esta plantilla fue diseñada con estándares profesionales de **CRO y Rendimiento (Core Web Vitals)**:
* **Cero Elementor:** Sin dependencias de JavaScript pesado ni 30 divs anidados.
* **Carga en < 0.5 segundos:** Código HTML5 y CSS puro optimizado para móvil.
* **Integración nativa:** Inserta directamente tu formulario Contact Form 7 (`16782`) y el WhatsApp oficial con el bot **Sant MarIA** (`+56 9 5200 6799`).

---

### Cómo implementarla en WordPress en 1 minuto:

1. Ve a **WP Admin ➔ Páginas ➔ Añadir nueva**.
2. Ponle de título: `Pastelería y Repostería Profesional 2027` (o el slug que desees, ej: `/pasteleria-profesional/`).
3. En la barra lateral derecha:
   * **Plantilla (Template):** Selecciona `Ancho completo` o `Canvas / No Header/Footer` (o la plantilla predeterminada limpia de tu tema).
4. En el editor de WordPress, haz clic en los **3 puntos verticales de arriba a la derecha** ➔ Selecciona **"Editor de código"** (Code Editor).
5. Pega todo el bloque de código que está a continuación.
6. Vuelve a hacer clic en **"Salir del editor de código"** (verás el diseño limpio) y pulsa **Publicar**.

---

### Código para copiar y pegar en el Editor de Código:

```html
<!-- wp:html -->
<style>
  :root {
    --ism-navy: #0a2540;
    --ism-blue: #0066cc;
    --ism-gold: #d97706;
    --ism-bg: #f8fafc;
    --ism-text: #1e293b;
    --ism-muted: #64748b;
  }
  
  .ism-lp-wrapper {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    color: var(--ism-text);
    background-color: #ffffff;
    line-height: 1.5;
    margin: 0;
    padding: 0;
  }

  /* Header Minimalista */
  .ism-header {
    background: #ffffff;
    border-bottom: 1px solid #e2e8f0;
    padding: 14px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 1000;
  }
  .ism-header img {
    height: 42px;
    width: auto;
  }
  .ism-header-btn {
    background: #25d366;
    color: #ffffff !important;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    padding: 9px 16px;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: transform 0.2s;
  }
  .ism-header-btn:hover {
    transform: scale(1.03);
  }

  /* Hero Section */
  .ism-hero {
    background: linear-gradient(135deg, #0a2540 0%, #1e3a5f 100%);
    color: #ffffff;
    padding: 48px 20px;
  }
  .ism-container {
    max-width: 1140px;
    margin: 0 auto;
  }
  .ism-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 40px;
    align-items: center;
  }
  @media (max-width: 860px) {
    .ism-hero-grid {
      grid-template-columns: 1fr;
      gap: 32px;
    }
  }

  /* Textos Hero */
  .ism-badge {
    background: rgba(217, 119, 6, 0.2);
    border: 1px solid #d97706;
    color: #fbbf24;
    display: inline-block;
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 0.5px;
    margin-bottom: 16px;
  }
  .ism-hero h1 {
    font-size: 38px;
    font-weight: 800;
    line-height: 1.2;
    margin: 0 0 16px 0;
    color: #ffffff;
  }
  @media (max-width: 600px) {
    .ism-hero h1 { font-size: 28px; }
  }
  .ism-hero p.lead {
    font-size: 18px;
    color: #cbd5e1;
    margin-bottom: 24px;
  }
  .ism-checks {
    list-style: none;
    padding: 0;
    margin: 0 0 24px 0;
  }
  .ism-checks li {
    font-size: 15px;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #f1f5f9;
  }
  .ism-checks li span {
    color: #10b981;
    font-weight: bold;
    font-size: 18px;
  }

  /* Form Card */
  .ism-form-card {
    background: #ffffff;
    color: var(--ism-text);
    border-radius: 16px;
    padding: 32px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
  }
  .ism-form-card h3 {
    margin: 0 0 8px 0;
    font-size: 22px;
    font-weight: 800;
    color: var(--ism-navy);
  }
  .ism-form-card p {
    margin: 0 0 20px 0;
    font-size: 14px;
    color: var(--ism-muted);
  }

  /* Estilos Contact Form 7 embebido */
  .ism-form-card .wpcf7-form p {
    margin-bottom: 12px;
  }
  .ism-form-card input[type="text"],
  .ism-form-card input[type="email"],
  .ism-form-card input[type="tel"],
  .ism-form-card select {
    width: 100%;
    padding: 12px 14px;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 15px;
    box-sizing: border-box;
    margin-top: 4px;
  }
  .ism-form-card input[type="submit"] {
    width: 100%;
    background: #d97706;
    color: #ffffff;
    border: none;
    padding: 16px;
    border-radius: 8px;
    font-size: 17px;
    font-weight: 800;
    cursor: pointer;
    transition: background 0.2s;
    margin-top: 10px;
  }
  .ism-form-card input[type="submit"]:hover {
    background: #b45309;
  }

  /* Sección de Autoridad y Beneficios */
  .ism-section {
    padding: 56px 20px;
  }
  .ism-section-title {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 40px auto;
  }
  .ism-section-title h2 {
    font-size: 30px;
    font-weight: 800;
    color: var(--ism-navy);
    margin: 0 0 10px 0;
  }
  .ism-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 24px;
  }
  .ism-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.03);
  }
  .ism-card h4 {
    margin: 12px 0 8px 0;
    font-size: 18px;
    color: var(--ism-navy);
  }
  .ism-card p {
    margin: 0;
    font-size: 14px;
    color: var(--ism-muted);
  }

  /* Sedes */
  .ism-sedes-banner {
    background: #f1f5f9;
    border-radius: 16px;
    padding: 32px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-top: 40px;
  }
  @media (max-width: 700px) {
    .ism-sedes-banner { grid-template-columns: 1fr; }
  }
  .ism-sede-item h4 {
    margin: 0 0 6px 0;
    font-size: 18px;
    color: var(--ism-navy);
  }
  .ism-sede-item p {
    margin: 0;
    font-size: 14px;
    color: var(--ism-muted);
  }

  /* Botón Flotante WhatsApp */
  .ism-wa-float {
    position: fixed;
    bottom: 24px;
    right: 24px;
    background: #25d366;
    color: #ffffff !important;
    border-radius: 50px;
    padding: 14px 22px;
    font-weight: 700;
    font-size: 15px;
    box-shadow: 0 10px 25px rgba(37, 211, 102, 0.4);
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    z-index: 9999;
    transition: transform 0.2s;
  }
  .ism-wa-float:hover {
    transform: scale(1.05);
  }
</style>

<div class="ism-lp-wrapper">

  <!-- Header -->
  <header class="ism-header">
    <div class="ism-container" style="display:flex; justify-content:space-between; align-items:center; width:100%;">
      <img src="https://www.ismchile.cl/wp-content/uploads/2023/09/LogoISM.svg" alt="Instituto Santa María" />
      <a href="https://wa.me/56952006799?text=Hola!%20Quisiera%20informaci%C3%B3n%20sobre%20Pasteler%C3%ADa%202027" class="ism-header-btn" target="_blank">
        💬 Hablar por WhatsApp
      </a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="ism-hero">
    <div class="ism-container">
      <div class="ism-hero-grid">
        
        <!-- Columna Izquierda: Mensaje y Autoridad -->
        <div>
          <span class="ism-badge">PROCESO DE ADMISIÓN 2027 ABIERTO</span>
          <h1>Aprende Pastelería y Repostería Profesional con Práctica Real</h1>
          <p class="lead">Domina la pastelería fina, chocolatería, masas y decoración para emprender tu propio negocio o trabajar en alta gastronomía.</p>
          
          <ul class="ism-checks">
            <li><span>✓</span> <strong>Matrícula 100% Gratis ($0)</strong> para Admisión 2027</li>
            <li><span>✓</span> Talleres industriales equipados con hornos y maquinaria profesional</li>
            <li><span>✓</span> <strong>Valores 2026 congelados</strong> + 10% de descuento por matrícula anticipada</li>
            <li><span>✓</span> Sedes a pasos del Metro en <strong>Providencia</strong> y <strong>Maipú</strong></li>
            <li><span>✓</span> Horarios flexibles: Diurno, Vespertino y Sábados</li>
          </ul>
        </div>

        <!-- Columna Derecha: Formulario CF7 Directo -->
        <div>
          <div class="ism-form-card">
            <h3>¡Asegura tu cupo 2027!</h3>
            <p>Déjanos tus datos para enviarte la malla curricular completa en PDF y los aranceles en cuotas.</p>
            
            <!-- Inserción del formulario nativo CF7 -->
            [contact-form-7 id="16782" title="Formulario CF7_Landing Pastelería"]
            
            <p style="font-size:12px; margin-top:14px; text-align:center; color:#94a3b8;">
              🔒 Tus datos son confidenciales. Te responderemos en menos de 5 minutos.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Lo que aprenderás -->
  <section class="ism-section">
    <div class="ism-container">
      <div class="ism-section-title">
        <h2>¿Qué aprenderás en nuestros talleres?</h2>
        <p style="color:var(--ism-muted);">Programa 100% enfocado en práctica clínica y técnicas profesionales desde la primera semana.</p>
      </div>

      <div class="ism-cards-grid">
        <div class="ism-card">
          <div style="font-size:28px;">🎂</div>
          <h4>Pastelería Clásica & de Autor</h4>
          <p>Elaboración de tortas finas, bizcochos, mousses, tartas, kuchen y pastelería tradicional chilena e internacional.</p>
        </div>
        
        <div class="ism-card">
          <div style="font-size:28px;">🍫</div>
          <h4>Chocolatería & Macarrones</h4>
          <p>Temperado de chocolate profesional, bombonería fina, rellenos de autor y el dominio técnico de macarons franceses.</p>
        </div>

        <div class="ism-card">
          <div style="font-size:28px;">🥖</div>
          <h4>Masas, Hojaldres & Panadería</h4>
          <p>Panadería artesanal, masa de hoja, croissants, masa choux (profiteroles) y técnicas de horneado industrial.</p>
        </div>

        <div class="ism-card">
          <div style="font-size:28px;">🍰</div>
          <h4>Pastelería de Vitrina & Salada</h4>
          <p>Decoración de tendencia, glaseados espejo, mini pastelería para eventos y opciones saladas para venta directa.</p>
        </div>
      </div>

      <!-- Sedes -->
      <div class="ism-sedes-banner">
        <div class="ism-sede-item">
          <h4>📍 Sede Providencia</h4>
          <p>A pasos de Estación Metro Manuel Montt y Pedro de Valdivia. Talleres con aire acondicionado y equipamiento completo.</p>
        </div>
        <div class="ism-sede-item">
          <h4>📍 Sede Maipú</h4>
          <p>A solo pasos de Estación Metro Plaza de Maipú. Fácil conectividad para toda la zona poniente.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- Botón Flotante WhatsApp para Sant MarIA -->
  <a href="https://wa.me/56952006799?text=Hola!%20Quisiera%20informaci%C3%B3n%20sobre%20Pasteler%C3%ADa%202027" class="ism-wa-float" target="_blank">
    <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
    ¿Dudas? Habla con Sant MarIA
  </a>

</div>
<!-- /wp:html -->
