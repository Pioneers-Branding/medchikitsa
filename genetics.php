<!DOCTYPE html>
<html lang="en">

<head>
  <title>Medical Genetics & Molecular Testing | Medichikitsa Diagnostic Centre</title>
  <meta name="description" content="State-of-the-art Medical Genetics and Molecular Diagnostics in Vijayapura at Medichikitsa. Karyotyping, NIPT, hereditary cancer panels, carrier screening, and genetic counseling.">
  <meta name="keywords" content="Genetics Testing, Molecular Diagnostics, Karyotyping, NIPT Test, Down Syndrome Screening, Hereditary Cancer, BRCA Gene Test, Vijayapura, Medichikitsa">
  <link rel="canonical" href="https://medchikitsa.com/genetics">
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
      background: white;
      border-radius: 16px;
      border: 1px solid var(--med-border);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      padding: 30px;
      display: flex;
      align-items: center;
      gap: 25px;
      margin-top: 30px;
    }

    .specialist-thumb {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid var(--med-secondary);
      flex-shrink: 0;
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
                <li class="active">Genetics</li>
              </ol>
            </nav>

            <span class="service-hero-badge">
              <i class="fas fa-dna"></i> Molecular Diagnostics
            </span>
            <h1 class="service-hero-title">Medical Genetics & DNA Testing</h1>
            <p class="service-hero-desc">
              State-of-the-art cytogenetics and molecular DNA profiling. Enabling early detection of hereditary conditions, pre-conceptional planning, prenatal insights, and personalized precision medicine.
            </p>

            <div class="d-flex flex-wrap gap-3 mt-4">
              <a href="https://wa.me/+916360225347?text=I%20am%20interested%20in%20Genetics%20or%20NIPT%20testing" class="btn-cta-action btn-cta-white" target="_blank">
                <i class="fab fa-whatsapp"></i> Inquire About Genetics
              </a>
              <a href="contact-us.php" class="btn-cta-action btn-cta-outline">
                <i class="fas fa-user-md"></i> Book Genetic Counseling
              </a>
            </div>
          </div>

          <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="row g-3">
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">NGS</div>
                  <div class="hero-stat-label">Next-Gen Sequencing Support</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">NIPT</div>
                  <div class="hero-stat-label">Non-Invasive Prenatal Testing</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">100%</div>
                  <div class="hero-stat-label">Confidential Genetic Data</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">Carrier</div>
                  <div class="hero-stat-label">Pre-Marital & Prenatal Panels</div>
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
              <img src="assets/images/services/medical-laboratory-services/Genetics.webp" alt="Genetics Testing Services at Medchikitsa">
              <div class="lab-img-overlay-badge">
                <i class="fas fa-fingerprint"></i>
                <div>
                  <strong class="d-block" style="font-size: 1rem;">Personalized Molecular Medicine</strong>
                  <span style="font-size: 0.85rem; opacity: 0.9;">Unlocking Genomic Insights</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <span class="section-badge">Molecular & Genomic Health</span>
            <h2 class="section-heading-title">Unlocking Answers in Your Genetic Blueprint</h2>
            <p class="text-muted" style="line-height: 1.7;">
              Medical genetics is transforming clinical decisions by identifying the hereditary roots of complex diseases before symptoms develop. At Medchikitsa, our molecular genetics wing offers specialized cytogenetic analysis, karyotyping, and advanced sequencing panels for couples, expectant mothers, and high-risk cancer families.
            </p>
            <p class="text-muted" style="line-height: 1.7;">
              Whether investigating recurrent pregnancy loss, assessing hereditary breast or ovarian cancer risk, or undergoing non-invasive prenatal screening, our dedicated team adheres to strict ethical guidelines, strict confidentiality, and certified laboratory protocols.
            </p>

            <ul class="lab-feature-list">
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Constitutional Karyotyping:</strong> High-resolution chromosomal band analysis for Down syndrome, Turner syndrome, and translocation carriers.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>NIPT (Cell-Free Fetal DNA):</strong> Safe maternal blood screen from 10 weeks of pregnancy for chromosomal aneuploidies (Trisomy 21, 18, 13).</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Hereditary Cancer Panels:</strong> BRCA1 & BRCA2 mutation detection guiding prophylactic care and personalized therapeutics.</div>
              </li>
              <li>
                <i class="fas fa-check-circle"></i>
                <div><strong>Couple Carrier Screening:</strong> Pre-marital and pre-conceptional evaluation for Thalassemia minor and Spinal Muscular Atrophy.</div>
              </li>
            </ul>

            <div class="p-3 mt-4" style="background: rgba(33, 182, 188, 0.08); border-left: 4px solid var(--med-secondary); border-radius: 8px;">
              <p class="mb-0 text-muted" style="font-size: 0.95rem;">
                <i class="fas fa-info-circle text-primary me-2"></i>
                <strong>Confidentiality First:</strong> All genetic data, family pedigrees, and molecular reports are safeguarded under strict medical confidentiality protocols.
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
          <span class="section-badge">Diagnostic Menu</span>
          <h2 class="section-heading-title">Key Genetics & Molecular Tests</h2>
          <p class="text-muted mx-auto" style="max-width: 650px;">
            Comprehensive genetic screens and molecular assays providing definitive clarity for family health and therapy planning.
          </p>
        </div>

        <div class="row g-4">
          <!-- Test 1 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Chromosomal Karyotyping</h4>
                  <span class="test-badge">Cytogenetics</span>
                </div>
                <p class="test-desc">
                  G-banded peripheral blood karyotyping diagnosing numeric and structural chromosome aberrations, recurrent miscarriages, and amenorrhea.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> Sodium Heparin Blood</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 10 - 14 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 2 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">NIPT (Non-Invasive Prenatal Test)</h4>
                  <span class="test-badge">Prenatal Screen</span>
                </div>
                <p class="test-desc">
                  Analyzes cell-free fetal DNA from mother's blood with >99% sensitivity for Trisomy 21 (Down), 18 (Edwards), and 13 (Patau) without invasive risk.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> Streck BCT Tube</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 7 - 10 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 3 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Hereditary Breast & Ovarian (BRCA 1 & 2)</h4>
                  <span class="test-badge">Oncogenomics</span>
                </div>
                <p class="test-desc">
                  Next-generation sequencing for pathogenic germline mutations in BRCA1 and BRCA2 genes in individuals with strong family history of cancer.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> EDTA Blood</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 14 - 21 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 4 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Thalassemia HPLC & Mutation Screening</h4>
                  <span class="test-badge">Hematogenomics</span>
                </div>
                <p class="test-desc">
                  High-Performance Liquid Chromatography (HPLC) for HbA2 alongside beta-globin gene mutation tests for Thalassemia minor carrier detection.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> EDTA Whole Blood</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 3 - 5 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 5 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Recurrent Pregnancy Loss (RPL) Panel</h4>
                  <span class="test-badge">Reproductive</span>
                </div>
                <p class="test-desc">
                  Couples karyotyping combined with thrombophilia markers (Factor V Leiden, Prothrombin gene, MTHFR mutation) for repeated miscarriages.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> Blood (Heparin + Citrate)</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 10 - 14 Days</span>
              </div>
            </div>
          </div>

          <!-- Test 6 -->
          <div class="col-md-6 col-lg-4">
            <div class="test-card">
              <div>
                <div class="test-header">
                  <h4 class="test-name">Carrier Screening Panel (Expanded)</h4>
                  <span class="test-badge">Family Planning</span>
                </div>
                <p class="test-desc">
                  Multi-gene carrier test for autosomal recessive inherited conditions (SMA, Cystic Fibrosis, Duchenne Muscular Dystrophy) before marriage or IVF.
                </p>
              </div>
              <div class="test-meta">
                <span class="test-meta-item"><i class="fas fa-vial"></i> EDTA Blood</span>
                <span class="test-meta-item"><i class="fas fa-clock"></i> 2 - 3 Weeks</span>
              </div>
            </div>
          </div>
        </div>

        <div class="text-center mt-5">
          <p class="text-muted mb-3">Questions about interpreting your genetic test or need specialist pre-test counseling?</p>
          <a href="contact-us.php" class="btn btn-secondary btn-lg" style="border-radius: 30px; padding: 12px 32px;">
            Book a Consultation With Our Experts <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section class="lab-faq-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Patient FAQ</span>
          <h2 class="section-heading-title">Genetics Testing Common Questions</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="geneticsFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingGen1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGen1" aria-expanded="true" aria-controls="collapseGen1">
                    What is the advantage of NIPT compared to a Double Marker ultrasound screen?
                  </button>
                </h2>
                <div id="collapseGen1" class="accordion-collapse collapse show" aria-labelledby="headingGen1" data-bs-parent="#geneticsFaq">
                  <div class="accordion-body text-muted">
                    While traditional biochemical screening (Double/Triple marker) has a detection rate of ~80–85% with a 5% false-positive rate, NIPT directly examines cell-free fetal DNA circulating in maternal blood, delivering >99% accuracy for Down syndrome with a false positive rate under 0.1%.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingGen2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGen2" aria-expanded="false" aria-controls="collapseGen2">
                    Does genetic testing require fasting or special preparation?
                  </button>
                </h2>
                <div id="collapseGen2" class="accordion-collapse collapse" aria-labelledby="headingGen2" data-bs-parent="#geneticsFaq">
                  <div class="accordion-body text-muted">
                    No, your DNA sequence does not change based on what you eat or drink, so fasting is not required for DNA or karyotyping tests. However, informed consent and a brief family pedigree questionnaire are completed prior to sample collection.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingGen3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGen3" aria-expanded="false" aria-controls="collapseGen3">
                    Who should consider pre-conceptional carrier screening?
                  </button>
                </h2>
                <div id="collapseGen3" class="accordion-collapse collapse" aria-labelledby="headingGen3" data-bs-parent="#geneticsFaq">
                  <div class="accordion-body text-muted">
                    Carrier screening is especially recommended for consanguineous marriages (marriages between blood relatives), couples with a family history of congenital disorders, or any couple planning a pregnancy who wish to know if they carry silent mutations for conditions like Thalassemia or SMA.
                  </div>
                </div>
              </div>
            </div>

            <!-- CTA Card -->
            <div class="lab-cta-box">
              <h3 class="text-white mb-3" style="font-size: 2rem;">Explore Medical Genetics Services</h3>
              <p class="text-white-50 mb-0 mx-auto" style="max-width: 600px;">
                Find clarity, protect your family's future, and access cutting-edge molecular diagnostics at Medchikitsa Diagnostic Centre.
              </p>
              <div class="lab-cta-actions">
                <a href="https://wa.me/+916360225347?text=Hello%20Medchikitsa,%20I%20have%20an%20inquiry%20regarding%20Genetics%20testing" class="btn-cta-action btn-cta-white" target="_blank">
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
