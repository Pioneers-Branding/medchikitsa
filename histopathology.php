<!DOCTYPE html>
<html lang="en">

<head>
  <title>Histopathology & Cytology Services | Medichikitsa Diagnostic Centre</title>
  <meta name="description" content="Expert Histopathology, Biopsy examination, FNAC, and Liquid-Based Pap Smear testing in Vijayapura at Medichikitsa. Certified oncopathology evaluation with microscopic precision.">
  <meta name="keywords" content="Histopathology Lab, Biopsy Test, FNAC, Pap Smear, Cytopathology, Cancer Diagnosis, Tumor Margin, Vijayapura, Medichikitsa">
  <link rel="canonical" href="https://medchikitsa.com/histopathology">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Medichikitsa Team">
  <meta name="publisher" content="Medichikitsa">

  <?php include('header-links.php')?>

  <style>
    :root {
      --med-primary: #214a68;
      --med-secondary: #21b6bc;
      --med-accent: #b3cd48;
      --med-dark: #163248;
      --med-light: #f7fafc;
      --med-border: #e2e8f0;
    }

    .service-hero-section {
      background: linear-gradient(135deg, rgba(33, 74, 104, 0.95) 0%, rgba(33, 182, 188, 0.92) 100%), 
                  url('assets/images/services/medical-laboratory-services/Medical-Laboratory-Services.webp') center/cover no-repeat;
      padding: 100px 0 80px;
      color: #ffffff;
      position: relative;
    }

    .service-hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(179, 205, 72, 0.25);
      border: 1px solid var(--med-accent);
      color: #ffffff;
      padding: 6px 16px;
      border-radius: 30px;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 20px;
    }

    .service-hero-title {
      font-size: 3rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 18px;
      color: #ffffff;
    }

    .service-hero-desc {
      font-size: 1.15rem;
      color: rgba(255, 255, 255, 0.9);
      max-width: 650px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .service-breadcrumb-nav {
      margin-bottom: 20px;
    }

    .service-breadcrumb-nav ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      gap: 8px;
      font-size: 0.9rem;
    }

    .service-breadcrumb-nav a {
      color: rgba(255, 255, 255, 0.75);
      text-decoration: none;
      transition: color 0.2s;
    }

    .service-breadcrumb-nav a:hover {
      color: var(--med-accent);
    }

    .service-breadcrumb-nav .separator {
      color: rgba(255, 255, 255, 0.5);
    }

    .service-breadcrumb-nav .active {
      color: var(--med-accent);
      font-weight: 600;
    }

    .hero-stat-card {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 14px;
      padding: 20px;
      text-align: center;
      transition: transform 0.3s;
    }

    .hero-stat-card:hover {
      transform: translateY(-4px);
      background: rgba(255, 255, 255, 0.18);
    }

    .hero-stat-num {
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--med-accent);
      margin-bottom: 4px;
    }

    .hero-stat-label {
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.85);
      margin-bottom: 0;
    }

    .lab-content-section {
      padding: 70px 0;
      background: #ffffff;
    }

    .section-badge {
      color: var(--med-secondary);
      font-weight: 600;
      font-size: 0.9rem;
      letter-spacing: 1.5px;
      text-transform: uppercase;
      margin-bottom: 10px;
      display: inline-block;
    }

    .section-heading-title {
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 20px;
      line-height: 1.3;
    }

    .lab-img-card {
      position: relative;
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(33, 74, 104, 0.12);
    }

    .lab-img-card img {
      width: 100%;
      height: 420px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }

    .lab-img-card:hover img {
      transform: scale(1.03);
    }

    .lab-img-overlay-badge {
      position: absolute;
      bottom: 20px;
      left: 20px;
      background: rgba(33, 74, 104, 0.9);
      backdrop-filter: blur(8px);
      color: white;
      padding: 12px 20px;
      border-radius: 12px;
      border-left: 4px solid var(--med-accent);
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .lab-img-overlay-badge i {
      font-size: 1.8rem;
      color: var(--med-accent);
    }

    .lab-feature-list {
      list-style: none;
      padding: 0;
      margin: 25px 0;
    }

    .lab-feature-list li {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      margin-bottom: 14px;
      color: #4a5568;
      font-size: 0.98rem;
    }

    .lab-feature-list li i {
      color: var(--med-secondary);
      font-size: 1.1rem;
      margin-top: 3px;
      flex-shrink: 0;
    }

    .tests-catalog-section {
      padding: 70px 0;
      background-color: var(--med-light);
    }

    .test-card {
      background: white;
      border-radius: 14px;
      padding: 24px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
      border: 1px solid var(--med-border);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.3s ease;
    }

    .test-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 28px rgba(33, 74, 104, 0.1);
      border-color: var(--med-secondary);
    }

    .test-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 12px;
    }

    .test-name {
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 6px;
    }

    .test-badge {
      background: rgba(33, 182, 188, 0.12);
      color: var(--med-secondary);
      font-size: 0.75rem;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 20px;
      white-space: nowrap;
    }

    .test-desc {
      color: #64748b;
      font-size: 0.9rem;
      line-height: 1.5;
      margin-bottom: 18px;
    }

    .test-meta {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      padding-top: 14px;
      border-top: 1px dashed var(--med-border);
      font-size: 0.82rem;
      color: #475569;
    }

    .test-meta-item {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .test-meta-item i {
      color: var(--med-secondary);
    }

        .specialist-spotlight-card {
      background: linear-gradient(135deg, #ffffff 0%, #f8fbfa 100%);
      border-radius: 18px;
      border: 1px solid #e2e8f0;
      border-left: 5px solid var(--med-secondary);
      box-shadow: 0 10px 30px rgba(33, 74, 104, 0.08);
      padding: 24px 28px;
      display: flex;
      align-items: center;
      gap: 22px;
      margin-top: 32px;
      transition: all 0.3s ease;
    }

    .specialist-spotlight-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 40px rgba(33, 74, 104, 0.12);
      border-left-color: var(--med-accent);
    }

    .specialist-avatar-wrap {
      width: 95px;
      height: 95px;
      border-radius: 50%;
      background: linear-gradient(135deg, rgba(33, 182, 188, 0.15) 0%, rgba(33, 74, 104, 0.1) 100%);
      border: 3px solid var(--med-secondary);
      padding: 3px;
      flex-shrink: 0;
      box-shadow: 0 6px 18px rgba(33, 182, 188, 0.25);
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .specialist-thumb {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      object-fit: cover;
      object-position: top center;
      display: block;
    }

    .specialist-badge {
      display: inline-block;
      background: rgba(33, 182, 188, 0.12);
      color: var(--med-primary);
      font-size: 0.76rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      padding: 3px 12px;
      border-radius: 20px;
      margin-bottom: 6px;
    }

    .specialist-name {
      color: var(--med-primary);
      font-size: 1.28rem;
      font-weight: 700;
      margin-bottom: 3px;
      line-height: 1.25;
    }

    .specialist-name a {
      color: inherit;
      text-decoration: none;
      transition: color 0.2s;
    }

    .specialist-name a:hover {
      color: var(--med-secondary);
    }

    .specialist-qual {
      color: #64748b;
      font-size: 0.9rem;
      font-weight: 500;
      margin-bottom: 12px;
    }

    .specialist-card-actions {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 10px;
    }

    .btn-specialist-profile {
      background: var(--med-primary);
      color: white;
      font-size: 0.82rem;
      font-weight: 600;
      padding: 7px 18px;
      border-radius: 25px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all 0.25s ease;
      box-shadow: 0 3px 8px rgba(33, 74, 104, 0.2);
    }

    .btn-specialist-profile:hover {
      background: var(--med-secondary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(33, 182, 188, 0.3);
    }

    .btn-specialist-appoint {
      background: white;
      color: var(--med-primary);
      border: 1px solid #cbd5e1;
      font-size: 0.82rem;
      font-weight: 600;
      padding: 6px 16px;
      border-radius: 25px;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 6px;
      transition: all 0.25s ease;
    }

    .btn-specialist-appoint:hover {
      border-color: var(--med-secondary);
      color: var(--med-secondary);
      background: rgba(33, 182, 188, 0.05);
      transform: translateY(-2px);
    }

    .lab-faq-section {
      padding: 70px 0;
      background: #ffffff;
    }

    .accordion-item {
      border: 1px solid var(--med-border);
      border-radius: 10px !important;
      margin-bottom: 14px;
      overflow: hidden;
    }

    .accordion-button {
      font-weight: 600;
      color: var(--med-primary);
      background-color: white;
      padding: 18px 22px;
    }

    .accordion-button:not(.collapsed) {
      color: var(--med-secondary);
      background-color: rgba(33, 182, 188, 0.05);
    }

    .lab-cta-box {
      background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%);
      border-radius: 20px;
      padding: 50px 40px;
      color: white;
      text-align: center;
      position: relative;
      overflow: hidden;
      margin: 60px 0 20px;
    }

    .lab-cta-actions {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 25px;
    }

    .btn-cta-action {
      padding: 12px 28px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s;
    }

    .btn-cta-white {
      background: white;
      color: var(--med-primary);
    }

    .btn-cta-white:hover {
      background: var(--med-accent);
      color: var(--med-dark);
      transform: translateY(-2px);
    }

    .btn-cta-outline {
      background: transparent;
      border: 2px solid white;
      color: white;
    }

    .btn-cta-outline:hover {
      background: white;
      color: var(--med-primary);
      transform: translateY(-2px);
    }

    @media (max-width: 768px) {
      .service-hero-title {
        font-size: 2.2rem;
      }
      .specialist-spotlight-card {
        flex-direction: column;
        text-align: center;
      }
      .lab-img-card img {
        height: 280px;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Header -->
    <?php include('header.php')?>

    <!-- Hero / Banner Section -->
    <section class="service-hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <nav class="service-breadcrumb-nav" aria-label="breadcrumb">
              <ol>
                <li><a href="index.php"><i class="fas fa-home me-1"></i> Home</a></li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li><a href="medical-laboratory-services.php">Medical Laboratory Services</a></li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li class="active">Histopathology</li>
              </ol>
            </nav>

            <span class="service-hero-badge">
              <i class="fas fa-vial"></i> Cellular Pathology
            </span>
            <h1 class="service-hero-title">Histopathology & Cytopathology</h1>
            <p class="service-hero-desc">
              Comprehensive tissue biopsy evaluation, tumor margin assessment, Fine Needle Aspiration Cytology (FNAC), and Liquid-Based Pap smears with senior oncopathologist review.
            </p>

            <div class="d-flex flex-wrap gap-3 mt-4">
              <a href="https://wa.me/+916360225347?text=I%20would%20like%20to%20submit%20a%20Biopsy%20or%20book%20an%20FNAC%20test" class="btn-cta-action btn-cta-white" target="_blank">
                <i class="fab fa-whatsapp"></i> Book Biopsy / FNAC
              </a>
              <a href="contact-us.php" class="btn-cta-action btn-cta-outline">
                <i class="fas fa-microscope"></i> Pathology Consultation
              </a>
            </div>
          </div>

          <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="row g-3">
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">Gold</div>
                  <div class="hero-stat-label">Standard Cancer Diagnosis</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">FNAC</div>
                  <div class="hero-stat-label">Ultrasound-Guided Cytology</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">LBC</div>
                  <div class="hero-stat-label">Liquid-Based Pap Smear</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">Dual</div>
                  <div class="hero-stat-label">Independent Pathologist Check</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Department Overview Section -->
    <section class="lab-content-section">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="lab-img-card">
              <img src="assets/images/services/medical-laboratory-services/Histopathology.webp" alt="Histopathology Services at Medchikitsa">
              <div class="lab-img-overlay-badge">
                <i class="fas fa-search-plus"></i>
                <div>
                  <strong class="d-block" style="font-size: 1rem;">Definitive Histological Staging</strong>
                  <span style="font-size: 0.85rem; opacity: 0.9;">Benign vs. Malignant Differentiation</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <span class="section-badge">Tissue & Cellular Diagnostics</span>
            <h2 class="section-heading-title">Microscopic Certainty When It Matters Most</h2>
            <p class="text-muted" style="line-height: 1.7;">
              Histopathology is the undisputed foundation of surgical oncology and precision medicine. When a physician discovers an abnormal lesion, lump, or ulcer, tissue biopsy analysis is required to determine whether it is inflammatory, benign, or malignant.
            </p>
            <p class="text-muted" style="line-height: 1.7;">
              At Medchikitsa, every biopsy specimen is processed with modern tissue microtomes and stained using automated protocols. Suspected neoplastic cases undergo meticulous microscopic evaluation, including tumor typing, histological grading, depth of invasion, and margin clearance.
            </p>

            <ul class="lab-feature-list">
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Biopsy Evaluation (Small to Large Resections):</strong> Detailed grossing, tissue embedding, serial sectioning, and H&E reporting.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>FNAC (Fine Needle Aspiration):</strong> Safe, outpatient diagnostic sampling of breast, thyroid, and salivary lumps.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Liquid-Based Cytology (LBC):</strong> Superior cervical cancer screening with higher detection rates than conventional Pap smears.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Special Cytochemical Stains:</strong> Periodic acid-Schiff (PAS), Giemsa, Ziehl-Neelsen, and mucin stains for rare lesions.</div>
              </li>
            </ul>

                        <!-- Department Specialist Highlight -->
            <div class="specialist-spotlight-card">
              <div class="specialist-avatar-wrap">
                <img src="assets/images/team/dr-vijayalaxmi-patil.png" alt="Dr. Vijayalaxmi S. Patil" class="specialist-thumb" onerror="this.onerror=null; this.src='assets/images/team/dr-vijayalaxmi-patil.png';">
              </div>
              <div>
                <span class="specialist-badge"><i class="fas fa-microscope me-1"></i> Lead Oncopathologist</span>
                <h4 class="specialist-name"><a href="doctor/dr-vijayalaxmi-patil.php">Dr. Vijayalaxmi S. Patil</a></h4>
                <p class="specialist-qual">MBBS, MD - Consultant Pathologist</p>
                <div class="specialist-card-actions">
                  <a href="doctor/dr-vijayalaxmi-patil.php" class="btn-specialist-profile">
                    View Doctor Profile <i class="fas fa-arrow-right"></i>
                  </a>
                  <a href="https://wa.me/+916360225347?text=I%20would%20like%20to%20consult%20with%20Dr.%20Vijayalaxmi%20S.%20Patil" class="btn-specialist-appoint" target="_blank">
                    <i class="fab fa-whatsapp text-success"></i> Book Consultation
                  </a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- Key Investigations Menu -->
    <section class="tests-catalog-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Diagnostic Menu</span>
          <h2 class="section-heading-title">Key Histopathology & Cytology Tests</h2>
          <p class="text-muted mx-auto" style="max-width: 650px;">
            Expert tissue and cell examinations providing essential diagnostic and prognostic guidance.
          </p>
        </div>

        <div class="row g-4">
          <!-- Test 1 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Small Biopsy (Punch / Endoscopic / Tru-Cut)</h4>
                  <span class="test-badge">Histology</span>
                </div>
                <p class="test-desc">
                  Microscopic exam of endoscopic, gastric, colon, skin punch, or breast core needle biopsies for inflammatory and neoplastic diagnoses.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-prescription-bottle"></i> 10% Formalin</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 3 - 5 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 2 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Large Surgical Resection Specimen</h4>
                  <span class="test-badge">Oncopathology</span>
                </div>
                <p class="test-desc">
                  Complete grossing and histological staging of appendix, gallbladder, uterus, breast lump, or bowel resections including resection margin review.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-prescription-bottle"></i> Formalin Fixed</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 5 - 7 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 3 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Fine Needle Aspiration (FNAC)</h4>
                  <span class="test-badge">Cytopathology</span>
                </div>
                <p class="test-desc">
                  Quick, minimally invasive outpatient needle aspiration for evaluating swelling of thyroid nodules, lymph nodes, salivary glands, and breast masses.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-syringe"></i> Outpatient Aspiration</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 24 - 48 Hours</span>
              </div>
            </div>
          </div>

          <!-- Test 4 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Liquid-Based Pap Smear (LBC)</h4>
                  <span class="test-badge">Women's Health</span>
                </div>
                <p class="test-desc">
                  Modern thin-layer cervical screening providing high diagnostic clarity for precancerous dysplasias, HPV changes, and cervical cancer.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> Preservative Vial</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 2 - 3 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 5 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Body Fluid Cytology (Pleural / Ascitic)</h4>
                  <span class="test-badge">Fluids</span>
                </div>
                <p class="test-desc">
                  Centrifugation and cytospin microscopic analysis of chest, abdominal, and pericardial effusions for malignant cells and tuberculosis.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Fresh Fluid</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 24 - 48 Hours</span>
              </div>
            </div>
          </div>

          <!-- Test 6 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Second Opinion & Slide Review</h4>
                  <span class="test-badge">Expert Review</span>
                </div>
                <p class="test-desc">
                  Independent expert histopathological review of paraffin blocks and prepared microscopic slides from external surgical centres.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-microscope"></i> Slides / Blocks</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 48 - 72 Hours</span>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <p class="text-muted mb-3">Submitting a biopsy sample or surgical specimen from an operation?</p>
          <a href="contact-us.php" class="btn btn-secondary btn-lg" style="border-radius: 30px; padding: 12px 32px;">
            Consult with Our Histopathology Lab <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="lab-faq-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Patient FAQ</span>
          <h2 class="section-heading-title">Histopathology Instructions & FAQ</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="histoFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingHisto1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHisto1" aria-expanded="true" aria-controls="collapseHisto1">
                    How should a surgical biopsy specimen be stored before submitting to the lab?
                  </button>
                </h2>
                <div id="collapseHisto1" class="accordion-collapse collapse show" aria-labelledby="headingHisto1" data-bs-parent="#histoFaq">
                  <div class="accordion-body text-muted">
                    Tissue specimens must be immediately placed in a container filled with <strong>10% neutral buffered formalin</strong> at a volume roughly 10 to 20 times the size of the tissue. Never store biopsy samples in plain water, saline, alcohol, or freezer containers without formalin.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingHisto2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHisto2" aria-expanded="false" aria-controls="collapseHisto2">
                    Is FNAC painful, and is anesthesia required?
                  </button>
                </h2>
                <div id="collapseHisto2" class="accordion-collapse collapse" aria-labelledby="headingHisto2" data-bs-parent="#histoFaq">
                  <div class="accordion-body text-muted">
                    FNAC uses a very thin needle (even thinner than a normal blood collection needle). It takes only 2–3 minutes, causes very minimal discomfort like a pinprick, and requires no stitches or general anesthesia. Patients can immediately resume normal activities.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingHisto3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHisto3" aria-expanded="false" aria-controls="collapseHisto3">
                    Why does a biopsy report take 3 to 5 days?
                  </button>
                </h2>
                <div id="collapseHisto3" class="accordion-collapse collapse" aria-labelledby="headingHisto3" data-bs-parent="#histoFaq">
                  <div class="accordion-body text-muted">
                    Histopathology involves intricate multi-stage laboratory processing: tissue fixation (24 hrs), dehydration, paraffin wax embedding, ultra-thin microtome slicing (3–4 microns), and specialized multi-step chemical staining before a senior pathologist reviews every cellular layer under high magnification.
                  </div>
                </div>
              </div>
            </div>

            <!-- CTA Card -->
            <div class="lab-cta-box">
              <h3 class="text-white mb-3" style="font-size: 2rem;">Accurate Oncopathology & Biopsy Services</h3>
              <p class="text-white-50 mb-0 mx-auto" style="max-width: 600px;">
                Submit your biopsy tissue or schedule an FNAC appointment with our experienced oncopathologists today.
              </p>
              <div class="lab-cta-actions">
                <a href="https://wa.me/+916360225347?text=Hello%20Medchikitsa,%20I%20have%20a%20Biopsy%20Specimen%20for%20examination" class="btn-cta-action btn-cta-white" target="_blank">
                  <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                </a>
                <a href="tel:+916360225347" class="btn-cta-action btn-cta-outline">
                  <i class="fas fa-phone-alt"></i> Call +91 63602 25347
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php')?>
  </div>

  <?php include('footer-links.php')?>
</body>
</html>
