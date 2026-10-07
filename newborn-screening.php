<!DOCTYPE html>
<html lang="en">

<head>
  <title>Newborn Screening Services | Medichikitsa Diagnostic Centre</title>
  <meta name="description" content="Comprehensive Newborn Screening (NBS) in Vijayapura at Medichikitsa. Early detection of Congenital Hypothyroidism, G6PD, CAH, and 50+ Inborn Errors of Metabolism (IEM) via heel prick test.">
  <meta name="keywords" content="Newborn Screening, NBS Test, Heel Prick Test, Congenital Hypothyroidism, G6PD Test, Inborn Errors of Metabolism, Tandem Mass Spectrometry, Vijayapura, Medichikitsa">
  <link rel="canonical" href="https://medchikitsa.com/newborn-screening">
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
                <li class="active">Newborn Screening</li>
              </ol>
            </nav>

            <span class="service-hero-badge">
              <i class="fas fa-baby"></i> Neonatal Care
            </span>
            <h1 class="service-hero-title">Newborn Screening (NBS)</h1>
            <p class="service-hero-desc">
              Vital early screening within 48 to 72 hours of birth. Detecting serious hidden metabolic, hormonal, and genetic disorders early to safeguard your newborn baby's healthy growth and normal development.
            </p>

            <div class="d-flex flex-wrap gap-3 mt-4">
              <a href="https://wa.me/+916360225347?text=I%20would%20like%20to%20book%20a%20Newborn%20Screening%20(NBS)%20test" class="btn-cta-action btn-cta-white" target="_blank">
                <i class="fab fa-whatsapp"></i> Book Newborn Screen
              </a>
              <a href="home-visit-contact.php" class="btn-cta-action btn-cta-outline">
                <i class="fas fa-home"></i> Home Heel Prick Sample
              </a>
            </div>
          </div>

          <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="row g-3">
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">50+</div>
                  <div class="hero-stat-label">Inborn Disorders Screened</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">48-72h</div>
                  <div class="hero-stat-label">Ideal Testing Window</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">Few Drops</div>
                  <div class="hero-stat-label">Minimally Invasive Heel Prick</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">Life Saving</div>
                  <div class="hero-stat-label">Early Clinical Intervention</div>
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
              <img src="assets/images/services/medical-laboratory-services/Newborn-Screening.webp" alt="Newborn Screening at Medchikitsa">
              <div class="lab-img-overlay-badge">
                <i class="fas fa-heartbeat"></i>
                <div>
                  <strong class="d-block" style="font-size: 1rem;">Early Detection Saves Lives</strong>
                  <span style="font-size: 0.85rem; opacity: 0.9;">Preventing Irreversible Neurological Damage</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <span class="section-badge">Pediatric Diagnostic Excellence</span>
            <h2 class="section-heading-title">Giving Every Baby the Healthiest Start in Life</h2>
            <p class="text-muted" style="line-height: 1.7;">
              Babies born with inborn metabolic disorders frequently appear completely healthy at birth. However, without timely intervention, accumulated toxic metabolites or severe hormone deficiencies can cause permanent intellectual disability, physical stunted growth, or life-threatening crises.
            </p>
            <p class="text-muted" style="line-height: 1.7;">
              Medchikitsa's Newborn Screening panel utilizes just a few drops of dried blood spotted on specialized filter paper. Using advanced <strong>Tandem Mass Spectrometry (TMS / LC-MS/MS)</strong> and fluorometric enzyme assays, we screen for conditions such as Congenital Hypothyroidism, G6PD deficiency, CAH, and Galactosemia — enabling pediatricians to start corrective therapies before any symptoms arise.
            </p>

            <ul class="lab-feature-list">
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Gentle Heel-Prick Collection:</strong> Safe, fast, and virtually painless collection by pediatric phlebotomists.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Screening for 50+ Inborn Errors of Metabolism:</strong> Amino acidopathies, fatty acid oxidation defects, and organic acidurias.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Congenital Hypothyroidism (CH) Protection:</strong> Immediate detection prevents irreversible developmental and cognitive impairment.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Prompt Pediatrician Alert System:</strong> Rapid notification for critical cutoff values to initiate immediate confirmatory protocols.</div>
              </li>
            </ul>

            <!-- Department Specialist Highlight -->
            <div class="specialist-spotlight-card">
              <div class="specialist-avatar-wrap">
                <img src="assets/images/team/dr-sangmesh.png" alt="Dr. Sangmesh" class="specialist-thumb" onerror="this.onerror=null; this.src='assets/images/team/dr-vijayalaxmi-patil.png';">
              </div>
              <div>
                <span class="specialist-badge"><i class="fas fa-baby me-1"></i> Neonatal Diagnostic Consultant</span>
                <h4 class="specialist-name"><a href="doctor/dr-sangmesh.php">Dr. Sangmesh</a></h4>
                <p class="specialist-qual">MD (General Medicine) - Pediatric Metabolic Screening</p>
                <div class="specialist-card-actions">
                  <a href="doctor/dr-sangmesh.php" class="btn-specialist-profile">
                    View Doctor Profile <i class="fas fa-arrow-right"></i>
                  </a>
                  <a href="https://wa.me/+916360225347?text=I%20would%20like%20to%20consult%20regarding%20Newborn%20Screening" class="btn-specialist-appoint" target="_blank">
                    <i class="fab fa-whatsapp text-success"></i> Book Consultation
                  </a>
                </div>
              </div>
            </div>

            <div class="p-3 mt-4" style="background: rgba(179, 205, 72, 0.12); border-left: 4px solid var(--med-accent); border-radius: 8px;">
              <p class="mb-0" style="color: var(--med-primary); font-size: 0.95rem;">
                <i class="fas fa-stethoscope me-2"></i>
                <strong>Recommended Globally:</strong> Supported by the World Health Organization (WHO) and Indian Academy of Pediatrics (IAP) as a standard of newborn care.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Key Investigations Menu -->
    <section class="tests-catalog-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Screening Panels</span>
          <h2 class="section-heading-title">Key Conditions Screened in Newborns</h2>
          <p class="text-muted mx-auto" style="max-width: 650px;">
            Targeted panels and comprehensive tandem mass spectrometry options customized for neonatal care.
          </p>
        </div>

        <div class="row g-4">
          <!-- Test 1 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Congenital Hypothyroidism (CH)</h4>
                  <span class="test-badge">Essential Screen</span>
                </div>
                <p class="test-desc">
                  Screens neonatal TSH levels. The most common preventable cause of intellectual disability; treated simply and effectively with daily thyroid hormone drops.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Dried Blood Spot</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 2 - 3 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 2 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">G6PD Enzyme Deficiency</h4>
                  <span class="test-badge">Enzyme Screen</span>
                </div>
                <p class="test-desc">
                  Identifies deficiency in Glucose-6-Phosphate Dehydrogenase enzyme, preventing severe hemolytic anemia and prolonged neonatal hyperbilirubinemia.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Dried Blood Spot</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 2 - 3 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 3 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Congenital Adrenal Hyperplasia (CAH)</h4>
                  <span class="test-badge">Endocrine Panel</span>
                </div>
                <p class="test-desc">
                  Measures 17-Hydroxyprogesterone (17-OHP) to detect adrenal hormone imbalances and prevent life-threatening salt-wasting crises in newborns.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Dried Blood Spot</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 3 - 4 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 4 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Galactosemia Screening</h4>
                  <span class="test-badge">Metabolic Defect</span>
                </div>
                <p class="test-desc">
                  Screens Total Galactose (GALT) to detect baby's inability to metabolize milk sugar, preventing cataract development, liver failure, and sepsis.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Dried Blood Spot</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 3 - 4 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 5 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Phenylketonuria (PKU)</h4>
                  <span class="test-badge">Amino Acid Disorder</span>
                </div>
                <p class="test-desc">
                  Detects phenylalanine accumulation in baby's blood; prevented simply by prescribing a special phenylalanine-free dietary formula from infancy.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Dried Blood Spot</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 3 - 4 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 6 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Comprehensive TMS Panel (50+ Disorders)</h4>
                  <span class="test-badge">Expanded NBS</span>
                </div>
                <p class="test-desc">
                  Advanced Tandem Mass Spectrometry screening for Maple Syrup Urine Disease (MSUD), MCAD deficiency, organic acidemias, and fatty acid oxidation defects.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-tint"></i> Filter Paper DBS</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 5 - 7 Days</span>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <p class="text-muted mb-3">Planning your baby's delivery or just brought your newborn home?</p>
          <a href="contact-us.php" class="btn btn-secondary btn-lg" style="border-radius: 30px; padding: 12px 32px;">
            Inquire About Newborn Screening Packages <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="lab-faq-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Parent FAQ</span>
          <h2 class="section-heading-title">Newborn Screening Common Questions</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="nbsFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNbs1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbs1" aria-expanded="true" aria-controls="collapseNbs1">
                    When is the best time to perform the newborn screening test?
                  </button>
                </h2>
                <div id="collapseNbs1" class="accordion-collapse collapse show" aria-labelledby="headingNbs1" data-bs-parent="#nbsFaq">
                  <div class="accordion-body text-muted">
                    The ideal window is between <strong>48 and 72 hours after birth</strong> (after the infant has been fed milk for at least 24 hours). If sample collection is delayed, it can still be performed safely within the first 1 to 2 weeks of life.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNbs2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbs2" aria-expanded="false" aria-controls="collapseNbs2">
                    Does the heel-prick test hurt the baby?
                  </button>
                </h2>
                <div id="collapseNbs2" class="accordion-collapse collapse" aria-labelledby="headingNbs2" data-bs-parent="#nbsFaq">
                  <div class="accordion-body text-muted">
                    A tiny, specialized neonatal spring-loaded lancet makes a shallow pinprick on the outer edge of the baby's heel. It takes only a few seconds to blot a few drops onto filter paper. Breastfeeding or comforting the baby immediately calms them.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNbs3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNbs3" aria-expanded="false" aria-controls="collapseNbs3">
                    Can Medchikitsa collect the sample at our home after hospital discharge?
                  </button>
                </h2>
                <div id="collapseNbs3" class="accordion-collapse collapse" aria-labelledby="headingNbs3" data-bs-parent="#nbsFaq">
                  <div class="accordion-body text-muted">
                    Yes! Many parents prefer home collection once they return home from the maternity ward. Our experienced pediatric phlebotomist visits your home anywhere in Vijayapura with sterile collection kits.
                  </div>
                </div>
              </div>
            </div>

            <!-- CTA Card -->
            <div class="lab-cta-box">
              <h3 class="text-white mb-3" style="font-size: 2rem;">Protect Your Baby's Tomorrow</h3>
              <p class="text-white-50 mb-0 mx-auto" style="max-width: 600px;">
                Schedule a gentle newborn screening heel-prick test at our centre or right in the comfort of your home.
              </p>
              <div class="lab-cta-actions">
                <a href="https://wa.me/+916360225347?text=Hello%20Medchikitsa,%20I%20want%20to%20schedule%20a%20Newborn%20Screening%20(NBS)%20test" class="btn-cta-action btn-cta-white" target="_blank">
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
