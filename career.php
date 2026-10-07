<!DOCTYPE html>
<html lang="en">

<head>
  <title>Careers & Opportunities | Medchikitsa Diagnostic Centre</title>
  <meta name="description" content="Explore exciting healthcare careers and medical job openings at Medchikitsa in Vijayapura. Join our team of passionate doctors, radiologists, pathologists, laboratory technologists, and support staff.">
  <meta name="keywords" content="Medchikitsa Careers, Healthcare Jobs Vijayapura, Lab Technologist Jobs, Radiographer Openings, Pathologist Vacancies, Medical Staff Jobs Karnataka">
  <link rel="canonical" href="https://medchikitsa.com/career">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Medchikitsa Team">
  <meta name="publisher" content="Medchikitsa">

  <!-- Open Graph -->
  <meta property="og:title" content="Careers | Join Our Medical Team at Medchikitsa">
  <meta property="og:description" content="Build a rewarding healthcare career with Vijayapura's premier diagnostic and medical care centre. View open positions and apply today.">
  <meta property="og:url" content="https://medchikitsa.com/career">
  <meta property="og:type" content="website">

  <?php include('header-links.php')?>

  <style>
    :root {
      --med-primary: #214a68;
      --med-secondary: #21b6bc;
      --med-accent: #b3cd48;
      --med-dark: #163248;
      --med-light: #f7fafc;
      --med-gray: #eef2f6;
      --med-border: #e2e8f0;
    }

    /* Hero Section */
    .career-hero-section {
      background: linear-gradient(135deg, rgba(33, 74, 104, 0.95) 0%, rgba(33, 182, 188, 0.92) 100%), 
                  url('assets/images/Contact-us.webp') center/cover no-repeat;
      padding: 100px 0 80px;
      color: #ffffff;
      position: relative;
    }

    .career-hero-badge {
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

    .career-hero-title {
      font-size: 3.2rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 18px;
      color: #ffffff;
    }

    .career-hero-desc {
      font-size: 1.15rem;
      color: rgba(255, 255, 255, 0.9);
      max-width: 650px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .career-breadcrumb-nav {
      margin-bottom: 20px;
    }

    .career-breadcrumb-nav ol {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      padding: 0;
      margin: 0;
      gap: 8px;
      font-size: 0.9rem;
    }

    .career-breadcrumb-nav a {
      color: rgba(255, 255, 255, 0.75);
      text-decoration: none;
      transition: color 0.2s;
    }

    .career-breadcrumb-nav a:hover {
      color: var(--med-accent);
    }

    .career-breadcrumb-nav .separator {
      color: rgba(255, 255, 255, 0.5);
    }

    .career-breadcrumb-nav .active {
      color: var(--med-accent);
      font-weight: 600;
    }

    .hero-stat-card {
      background: rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 14px;
      padding: 22px 18px;
      text-align: center;
      transition: transform 0.3s;
    }

    .hero-stat-card:hover {
      transform: translateY(-4px);
      background: rgba(255, 255, 255, 0.18);
    }

    .hero-stat-num {
      font-size: 1.9rem;
      font-weight: 700;
      color: var(--med-accent);
      margin-bottom: 4px;
    }

    .hero-stat-label {
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.9);
      margin-bottom: 0;
    }

    .btn-hero-action {
      padding: 12px 28px;
      border-radius: 30px;
      font-weight: 600;
      text-decoration: none;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s;
    }

    .btn-hero-white {
      background: white;
      color: var(--med-primary);
    }

    .btn-hero-white:hover {
      background: var(--med-accent);
      color: var(--med-dark);
      transform: translateY(-2px);
    }

    .btn-hero-outline {
      background: transparent;
      border: 2px solid white;
      color: white;
    }

    .btn-hero-outline:hover {
      background: white;
      color: var(--med-primary);
      transform: translateY(-2px);
    }

    /* Section Styles */
    .section-pad {
      padding: 70px 0;
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

    .section-title {
      font-size: 2.3rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 18px;
      line-height: 1.3;
    }

    .section-subtitle {
      color: #64748b;
      font-size: 1.05rem;
      max-width: 650px;
      margin: 0 auto 40px;
      line-height: 1.6;
    }

    /* Pillars / Culture Cards */
    .culture-card {
      background: white;
      border-radius: 16px;
      padding: 30px 25px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
      border: 1px solid var(--med-border);
      height: 100%;
      transition: all 0.3s ease;
      position: relative;
    }

    .culture-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 35px rgba(33, 74, 104, 0.1);
      border-color: var(--med-secondary);
    }

    .culture-icon {
      width: 60px;
      height: 60px;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.5rem;
      margin-bottom: 20px;
      box-shadow: 0 8px 18px rgba(33, 182, 188, 0.25);
    }

    .culture-card h4 {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 12px;
    }

    .culture-card p {
      color: #64748b;
      font-size: 0.95rem;
      line-height: 1.6;
      margin-bottom: 0;
    }

    /* Benefits Grid */
    .benefit-item-card {
      background: white;
      border-radius: 14px;
      padding: 24px;
      border: 1px solid var(--med-border);
      height: 100%;
      display: flex;
      align-items: flex-start;
      gap: 16px;
      transition: all 0.3s ease;
    }

    .benefit-item-card:hover {
      border-color: var(--med-secondary);
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .benefit-icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: rgba(33, 182, 188, 0.12);
      color: var(--med-secondary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      flex-shrink: 0;
    }

    .benefit-info h5 {
      font-size: 1.05rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 6px;
    }

    .benefit-info p {
      font-size: 0.88rem;
      color: #64748b;
      margin-bottom: 0;
      line-height: 1.5;
    }

    /* Job Openings Section */
    .openings-section {
      background: var(--med-light);
    }

    .job-filters-wrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-bottom: 40px;
    }

    .job-filter-btn {
      padding: 8px 20px;
      border-radius: 30px;
      background: white;
      border: 1px solid var(--med-border);
      color: #475569;
      font-weight: 600;
      font-size: 0.9rem;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .job-filter-btn:hover {
      background: var(--med-gray);
      color: var(--med-primary);
    }

    .job-filter-btn.active {
      background: var(--med-primary);
      color: white;
      border-color: var(--med-primary);
      box-shadow: 0 4px 12px rgba(33, 74, 104, 0.25);
    }

    .job-listing-card {
      background: white;
      border-radius: 16px;
      border: 1px solid var(--med-border);
      padding: 28px;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03);
    }

    .job-listing-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 15px 35px rgba(33, 74, 104, 0.1);
      border-color: var(--med-secondary);
    }

    .job-card-header {
      margin-bottom: 16px;
    }

    .job-card-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 12px;
    }

    .job-tag {
      font-size: 0.75rem;
      font-weight: 600;
      padding: 4px 10px;
      border-radius: 20px;
    }

    .job-tag-dept {
      background: rgba(33, 182, 188, 0.12);
      color: var(--med-secondary);
    }

    .job-tag-type {
      background: rgba(179, 205, 72, 0.2);
      color: #556b12;
    }

    .job-tag-exp {
      background: var(--med-gray);
      color: #475569;
    }

    .job-card-title {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 8px;
    }

    .job-card-loc {
      font-size: 0.85rem;
      color: #64748b;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .job-card-desc {
      font-size: 0.92rem;
      color: #4a5568;
      line-height: 1.6;
      margin-bottom: 16px;
    }

    .job-requirements-list {
      list-style: none;
      padding: 0;
      margin: 0 0 24px;
    }

    .job-requirements-list li {
      font-size: 0.88rem;
      color: #64748b;
      margin-bottom: 6px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .job-requirements-list li i {
      color: var(--med-secondary);
      font-size: 0.8rem;
    }

    .btn-apply-job {
      width: 100%;
      padding: 10px 20px;
      border-radius: 30px;
      background: var(--med-primary);
      color: white;
      font-weight: 600;
      border: none;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      transition: all 0.3s;
      text-decoration: none;
    }

    .btn-apply-job:hover {
      background: var(--med-secondary);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(33, 182, 188, 0.3);
    }

    /* Application Form Section */
    .application-box {
      background: white;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
      border: 1px solid var(--med-border);
      padding: 40px;
    }

    .form-group-label {
      font-size: 0.9rem;
      font-weight: 600;
      color: var(--med-primary);
      margin-bottom: 8px;
    }

    .custom-form-input, .custom-form-select, .custom-form-textarea {
      width: 100%;
      border: 2px solid var(--med-gray);
      border-radius: 10px;
      padding: 12px 16px;
      font-size: 0.95rem;
      color: #334155;
      background: #fafbfc;
      transition: all 0.3s;
    }

    .custom-form-input:focus, .custom-form-select:focus, .custom-form-textarea:focus {
      outline: none;
      border-color: var(--med-secondary);
      background: white;
      box-shadow: 0 0 0 4px rgba(33, 182, 188, 0.12);
    }

    .custom-file-upload {
      border: 2px dashed #cbd5e1;
      border-radius: 12px;
      padding: 24px;
      text-align: center;
      background: #f8fafc;
      cursor: pointer;
      transition: all 0.3s;
    }

    .custom-file-upload:hover {
      border-color: var(--med-secondary);
      background: rgba(33, 182, 188, 0.03);
    }

    .hr-contact-card {
      background: linear-gradient(135deg, var(--med-primary) 0%, #173852 100%);
      color: white;
      border-radius: 16px;
      padding: 30px;
      height: 100%;
    }

    .hr-contact-item {
      display: flex;
      align-items: flex-start;
      gap: 16px;
      margin-bottom: 22px;
    }

    .hr-contact-icon {
      width: 44px;
      height: 44px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.15);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      color: var(--med-accent);
      flex-shrink: 0;
    }

    .hr-contact-item h6 {
      color: white;
      font-size: 0.95rem;
      margin-bottom: 4px;
    }

    .hr-contact-item p, .hr-contact-item a {
      color: rgba(255, 255, 255, 0.85);
      font-size: 0.9rem;
      margin-bottom: 0;
      text-decoration: none;
    }

    .hr-contact-item a:hover {
      color: var(--med-accent);
    }

    /* Process Flow Steps */
    .hiring-process-step {
      text-align: center;
      position: relative;
    }

    .process-step-num {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: white;
      border: 3px solid var(--med-secondary);
      color: var(--med-primary);
      font-size: 1.3rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 18px;
      box-shadow: 0 8px 20px rgba(33, 182, 188, 0.18);
    }

    .hiring-process-step h5 {
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--med-primary);
      margin-bottom: 8px;
    }

    .hiring-process-step p {
      font-size: 0.9rem;
      color: #64748b;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .career-hero-title {
        font-size: 2.3rem;
      }
      .application-box {
        padding: 25px;
      }
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <!-- Header -->
    <?php include('header.php')?>

    <!-- Hero Section -->
    <section class="career-hero-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <nav class="career-breadcrumb-nav" aria-label="breadcrumb">
              <ol>
                <li><a href="index.php"><i class="fas fa-home me-1"></i> Home</a></li>
                <li class="separator"><i class="fas fa-chevron-right"></i></li>
                <li class="active">Careers</li>
              </ol>
            </nav>

            <span class="career-hero-badge">
              <i class="fas fa-briefcase"></i> Work With Us
            </span>
            <h1 class="career-hero-title">Shape the Future of Healthcare</h1>
            <p class="career-hero-desc">
              Join Vijayapura's premier diagnostic and multispeciality centre. At Medchikitsa, we empower medical professionals, technologists, and staff with world-class medical technology, clear career pathways, and an inspiring patient-first culture.
            </p>

            <div class="d-flex flex-wrap gap-3 mt-4">
              <a href="#open-positions" class="btn-hero-action btn-hero-white">
                <i class="fas fa-search"></i> View Current Openings
              </a>
              <a href="#apply-form" class="btn-hero-action btn-hero-outline">
                <i class="fas fa-file-upload"></i> Submit Your CV
              </a>
            </div>
          </div>

          <div class="col-lg-5 mt-4 mt-lg-0">
            <div class="row g-3">
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">50+</div>
                  <div class="hero-stat-label">Healthcare Specialists</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">100%</div>
                  <div class="hero-stat-label">Equal Opportunity Employer</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">NABL</div>
                  <div class="hero-stat-label">Standard Quality Environment</div>
                </div>
              </div>
              <div class="col-6">
                <div class="hero-stat-card">
                  <div class="hero-stat-num">48h</div>
                  <div class="hero-stat-label">Fast HR Application Response</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Work With Us Section -->
    <section class="section-pad bg-white">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Life At Medchikitsa</span>
          <h2 class="section-title">Why Build Your Career With Us?</h2>
          <p class="section-subtitle">
            We cultivate a workplace where clinical excellence, continuous learning, and compassion thrive hand-in-hand.
          </p>
        </div>

        <div class="row g-4">
          <!-- Pillar 1 -->
          <div class="col-md-6 col-lg-3">
            <div class="culture-card">
              <div class="culture-icon">
                <i class="fas fa-heartbeat"></i>
              </div>
              <h4>Meaningful Impact</h4>
              <p>
                Every diagnosis you assist directly shapes life-saving treatment plans for thousands of patients across North Karnataka.
              </p>
            </div>
          </div>

          <!-- Pillar 2 -->
          <div class="col-md-6 col-lg-3">
            <div class="culture-card">
              <div class="culture-icon">
                <i class="fas fa-microscope"></i>
              </div>
              <h4>Next-Gen Technology</h4>
              <p>
                Hands-on exposure to cutting-edge 1.5T MRI, 32-slice CT, fully automated biochemistry analyzers, and molecular screening.
              </p>
            </div>
          </div>

          <!-- Pillar 3 -->
          <div class="col-md-6 col-lg-3">
            <div class="culture-card">
              <div class="culture-icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <h4>Professional Growth</h4>
              <p>
                Structured continuing medical education (CME), skill certification workshops, and rapid leadership advancement.
              </p>
            </div>
          </div>

          <!-- Pillar 4 -->
          <div class="col-md-6 col-lg-3">
            <div class="culture-card">
              <div class="culture-icon">
                <i class="fas fa-users"></i>
              </div>
              <h4>Supportive Culture</h4>
              <p>
                Collaborative, respectful workplace with transparent leadership, balanced shift rosters, and employee recognition.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Comprehensive Employee Benefits -->
    <section class="section-pad" style="background-color: var(--med-light);">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Perks & Benefits</span>
          <h2 class="section-title">Rewarding Your Dedication</h2>
          <p class="section-subtitle">
            We ensure our staff members and their families are well taken care of with comprehensive welfare benefits.
          </p>
        </div>

        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-shield-alt"></i></div>
              <div class="benefit-info">
                <h5>Medical & Health Coverage</h5>
                <p>Complimentary diagnostic screenings and discounted healthcare for employees and their immediate family members.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-coins"></i></div>
              <div class="benefit-info">
                <h5>Competitive Compensation</h5>
                <p>Above-industry salary packages with periodic performance appraisals, incentive bonuses, and statutory benefits.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-calendar-check"></i></div>
              <div class="benefit-info">
                <h5>Work-Life Balance</h5>
                <p>Structured, predictable rotational shifts, paid annual leave, festival holidays, and maternity/paternity support.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-certificate"></i></div>
              <div class="benefit-info">
                <h5>Training & Certifications</h5>
                <p>Regular technical training on NABL compliance, infection control, BLS protocols, and advanced instrumentation.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-building"></i></div>
              <div class="benefit-info">
                <h5>State-of-the-Art Facility</h5>
                <p>Work in a fully air-conditioned, ergonomically designed diagnostic centre equipped with the highest safety standards.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="benefit-item-card">
              <div class="benefit-icon-box"><i class="fas fa-award"></i></div>
              <div class="benefit-info">
                <h5>Recognition & Rewards</h5>
                <p>Quarterly Employee of the Month honors, annual awards, and leadership promotion opportunities.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Open Positions Section -->
    <section class="section-pad bg-white" id="open-positions">
      <div class="container">
        <div class="text-center mb-4">
          <span class="section-badge">Current Vacancies</span>
          <h2 class="section-title">Explore Open Roles</h2>
          <p class="section-subtitle">
            Find the perfect opportunity matching your specialization and experience level in Vijayapura.
          </p>
        </div>

        <!-- Filter Buttons -->
        <div class="job-filters-wrapper">
          <button class="job-filter-btn active" data-filter="all">All Positions</button>
          <button class="job-filter-btn" data-filter="medical">Doctors & Specialists</button>
          <button class="job-filter-btn" data-filter="lab">Laboratory & Pathology</button>
          <button class="job-filter-btn" data-filter="radiology">Radiology & Imaging</button>
          <button class="job-filter-btn" data-filter="nursing">Phlebotomy & Nursing</button>
          <button class="job-filter-btn" data-filter="admin">Administration & Front Desk</button>
        </div>

        <!-- Job Grid -->
        <div class="row g-4" id="jobGrid">
          <!-- Job 1: Pathologist -->
          <div class="col-md-6 col-lg-4 job-item" data-category="medical lab">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Laboratory</span>
                    <span class="job-tag job-tag-type">Full Time</span>
                    <span class="job-tag job-tag-exp">2-5 Years Exp</span>
                  </div>
                  <h3 class="job-card-title">Consultant Pathologist</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Oversee clinical pathology, hematology, and histopathological specimen reporting. Lead quality controls and corroborate critical results.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> MD or DNB in Pathology</li>
                  <li><i class="fas fa-check-circle"></i> KMC Medical Registration</li>
                  <li><i class="fas fa-check-circle"></i> Familiarity with NABL protocols</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('Consultant Pathologist')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Job 2: Radiologist -->
          <div class="col-md-6 col-lg-4 job-item" data-category="medical radiology">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Radiology</span>
                    <span class="job-tag job-tag-type">Full Time / Consultant</span>
                    <span class="job-tag job-tag-exp">3+ Years Exp</span>
                  </div>
                  <h3 class="job-card-title">Consultant Radiologist</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Conduct and interpret comprehensive ultrasound scans, Doppler, and read high-resolution MRI and CT investigations.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> MD / DNB / DMRD in Radio-diagnosis</li>
                  <li><i class="fas fa-check-circle"></i> Expert in USG & Color Doppler</li>
                  <li><i class="fas fa-check-circle"></i> Valid Medical Council license</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('Consultant Radiologist')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Job 3: Medical Lab Technologist -->
          <div class="col-md-6 col-lg-4 job-item" data-category="lab">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Laboratory</span>
                    <span class="job-tag job-tag-type">Full Time / Rotational</span>
                    <span class="job-tag job-tag-exp">1-3 Years Exp</span>
                  </div>
                  <h3 class="job-card-title">Medical Lab Technologist (MLT)</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Operate automated hematology, biochemistry, and immunoassay analyzers. Perform routine calibration, controls, and sample prep.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> B.Sc MLT or DMLT qualification</li>
                  <li><i class="fas fa-check-circle"></i> Experience with automated analyzers</li>
                  <li><i class="fas fa-check-circle"></i> Freshers with strong internship welcome</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('Medical Lab Technologist (MLT)')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Job 4: CT / MRI Technologist -->
          <div class="col-md-6 col-lg-4 job-item" data-category="radiology">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Radiology</span>
                    <span class="job-tag job-tag-type">Full Time</span>
                    <span class="job-tag job-tag-exp">2-4 Years Exp</span>
                  </div>
                  <h3 class="job-card-title">CT & MRI Technologist</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Perform diagnostic imaging protocols on 1.5T MRI and CT scanners. Maintain radiation safety standards and patient positioning.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> B.Sc in Medical Imaging Technology</li>
                  <li><i class="fas fa-check-circle"></i> Proven experience in cross-sectional imaging</li>
                  <li><i class="fas fa-check-circle"></i> Patient care and safety focus</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('CT & MRI Technologist')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Job 5: Senior Phlebotomist -->
          <div class="col-md-6 col-lg-4 job-item" data-category="nursing lab">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Home Care / Lab</span>
                    <span class="job-tag job-tag-type">Full Time</span>
                    <span class="job-tag job-tag-exp">1-3 Years Exp</span>
                  </div>
                  <h3 class="job-card-title">Senior Phlebotomist</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Perform gentle blood and fluid sample collections in-centre and via doorstep home visits. Ensure correct vacutainer barcoding and cold-chain transit.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> DMLT or Certified Phlebotomist course</li>
                  <li><i class="fas fa-check-circle"></i> Skilled with pediatric and geriatric draws</li>
                  <li><i class="fas fa-check-circle"></i> Two-wheeler with valid license for visits</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('Senior Phlebotomist')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>

          <!-- Job 6: Front Desk & Patient Care -->
          <div class="col-md-6 col-lg-4 job-item" data-category="admin">
            <div class="job-listing-card">
              <div>
                <div class="job-card-header">
                  <div class="job-card-badges">
                    <span class="job-tag job-tag-dept">Administration</span>
                    <span class="job-tag job-tag-type">Full Time</span>
                    <span class="job-tag job-tag-exp">1-2 Years Exp</span>
                  </div>
                  <h3 class="job-card-title">Patient Care & Billing Executive</h3>
                  <div class="job-card-loc"><i class="fas fa-map-marker-alt text-primary"></i> Vijayapura, Karnataka</div>
                </div>
                <p class="job-card-desc">
                  Welcome patients, manage registration, billing, appointment scheduling, and handle patient inquiries with courtesy and professionalism.
                </p>
                <ul class="job-requirements-list">
                  <li><i class="fas fa-check-circle"></i> Graduate (Any discipline)</li>
                  <li><i class="fas fa-check-circle"></i> Fluency in Kannada, Hindi, and English</li>
                  <li><i class="fas fa-check-circle"></i> Computer literacy & billing software skill</li>
                </ul>
              </div>
              <button class="btn-apply-job" onclick="selectJobAndScroll('Patient Care & Billing Executive')">
                Apply for this Position <i class="fas fa-arrow-right"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Hiring Process Steps -->
    <section class="section-pad" style="background-color: var(--med-light);">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">How We Hire</span>
          <h2 class="section-title">Our Simple 4-Step Hiring Process</h2>
          <p class="section-subtitle">
            A transparent, respectful recruitment journey designed to understand your passion and clinical expertise.
          </p>
        </div>

        <div class="row g-4">
          <div class="col-sm-6 col-lg-3">
            <div class="hiring-process-step">
              <div class="process-step-num">01</div>
              <h5>Apply Online</h5>
              <p>Submit your resume and details through our quick form below or via WhatsApp HR.</p>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="hiring-process-step">
              <div class="process-step-num">02</div>
              <h5>HR Screening</h5>
              <p>Short telephonic discussion regarding your experience, expectations, and role fit.</p>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="hiring-process-step">
              <div class="process-step-num">03</div>
              <h5>Technical Round</h5>
              <p>In-person interaction and practical equipment demonstration with senior doctors.</p>
            </div>
          </div>

          <div class="col-sm-6 col-lg-3">
            <div class="hiring-process-step">
              <div class="process-step-num">04</div>
              <h5>Offer & Onboarding</h5>
              <p>Formal offer letter, benefits briefing, and structured welcoming orientation.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Application Form & HR Contact -->
    <section class="section-pad bg-white" id="apply-form">
      <div class="container">
        <div class="row g-5">
          <!-- Form Left -->
          <div class="col-lg-7">
            <div class="application-box">
              <span class="section-badge">Direct Application</span>
              <h2 class="section-title" style="font-size: 2rem;">Submit Your Application</h2>
              <p class="text-muted mb-4" style="font-size: 0.95rem;">
                Interested in joining Medchikitsa? Fill in your details below and upload your CV. Our recruitment team will review your application within 48 business hours.
              </p>

              <form id="careerApplicationForm" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                  <div class="col-12">
                    <label class="form-group-label" for="applicantPosition">Position Applied For *</label>
                    <select class="custom-form-select" id="applicantPosition" name="position" required>
                      <option value="" disabled selected>Select a job role</option>
                      <option value="Consultant Pathologist">Consultant Pathologist</option>
                      <option value="Consultant Radiologist">Consultant Radiologist</option>
                      <option value="Medical Lab Technologist (MLT)">Medical Lab Technologist (MLT)</option>
                      <option value="CT & MRI Technologist">CT & MRI Technologist</option>
                      <option value="Senior Phlebotomist">Senior Phlebotomist</option>
                      <option value="Patient Care & Billing Executive">Patient Care & Billing Executive</option>
                      <option value="Biochemist">Clinical Biochemist</option>
                      <option value="Microbiologist">Clinical Microbiologist</option>
                      <option value="General Healthcare / Other">General Healthcare / Other Speciality</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <label class="form-group-label" for="applicantName">Full Name *</label>
                    <input type="text" class="custom-form-input" id="applicantName" name="name" placeholder="Dr. / Mr. / Ms. Your Name" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-group-label" for="applicantPhone">Phone / WhatsApp Number *</label>
                    <input type="tel" class="custom-form-input" id="applicantPhone" name="phone" placeholder="+91 98765 43210" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-group-label" for="applicantEmail">Email Address *</label>
                    <input type="email" class="custom-form-input" id="applicantEmail" name="email" placeholder="your.name@email.com" required>
                  </div>

                  <div class="col-md-6">
                    <label class="form-group-label" for="applicantExp">Years of Experience *</label>
                    <select class="custom-form-select" id="applicantExp" name="experience" required>
                      <option value="Fresher / < 1 Year">Fresher / Less than 1 Year</option>
                      <option value="1 - 3 Years">1 - 3 Years</option>
                      <option value="3 - 5 Years">3 - 5 Years</option>
                      <option value="5+ Years">5+ Years</option>
                    </select>
                  </div>

                  <div class="col-12">
                    <label class="form-group-label" for="applicantQualification">Highest Qualification *</label>
                    <input type="text" class="custom-form-input" id="applicantQualification" name="qualification" placeholder="e.g. MBBS, MD / B.Sc MLT / DMLT" required>
                  </div>

                  <div class="col-12">
                    <label class="form-group-label">Upload Resume / CV (PDF or DOC) *</label>
                    <label class="custom-file-upload w-100" for="resumeFile">
                      <i class="fas fa-cloud-upload-alt text-primary fa-2x mb-2 d-block"></i>
                      <span id="fileNameDisplay" style="font-size: 0.95rem; font-weight: 500; color: #475569;">
                        Click here to attach your Resume / CV
                      </span>
                      <small class="d-block text-muted mt-1">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
                      <input type="file" id="resumeFile" name="resume" accept=".pdf,.doc,.docx" style="display: none;" required onchange="handleFileSelected(this)">
                    </label>
                  </div>

                  <div class="col-12">
                    <label class="form-group-label" for="applicantMessage">Brief Message / Cover Note (Optional)</label>
                    <textarea class="custom-form-textarea" id="applicantMessage" name="message" rows="3" placeholder="Tell us briefly about your career aspirations or immediate availability..."></textarea>
                  </div>

                  <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary btn-lg w-100" style="border-radius: 30px; padding: 14px 24px; font-weight: 600;">
                      <i class="fas fa-paper-plane me-2"></i> Submit Application Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <!-- HR Contact Right -->
          <div class="col-lg-5">
            <div class="hr-contact-card">
              <span class="badge mb-3" style="background: rgba(179, 205, 72, 0.3); color: var(--med-accent); font-weight: 600;">HR Helpdesk</span>
              <h3 class="text-white mb-3" style="font-size: 1.8rem;">Have Questions? Talk to Our HR Team</h3>
              <p style="color: rgba(255, 255, 255, 0.85); font-size: 0.95rem; line-height: 1.6; margin-bottom: 30px;">
                Our Human Resources personnel are happy to assist with inquiries regarding current openings, work environments, and walk-in interviews.
              </p>

              <div class="hr-contact-item">
                <div class="hr-contact-icon">
                  <i class="fab fa-whatsapp"></i>
                </div>
                <div>
                  <h6>Direct WhatsApp HR</h6>
                  <p>
                    <a href="https://wa.me/+916360225347?text=Hello%20HR%20Medchikitsa,%20I%20am%20interested%20in%20career%20opportunities" target="_blank">
                      +91 63602 25347 (Chat with HR)
                    </a>
                  </p>
                </div>
              </div>

              <div class="hr-contact-item">
                <div class="hr-contact-icon">
                  <i class="fas fa-envelope"></i>
                </div>
                <div>
                  <h6>Email Your CV Directly</h6>
                  <p>
                    <a href="mailto:medchikitsa@gmail.com">medchikitsa@gmail.com</a>
                  </p>
                </div>
              </div>

              <div class="hr-contact-item">
                <div class="hr-contact-icon">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div>
                  <h6>Walk-In Location</h6>
                  <p>
                    Milan Commercial Complex, Ground Floor, Near Vittal Mandir Road, Beside Federal Bank, Vijayapur - 586101
                  </p>
                </div>
              </div>

              <div class="hr-contact-item">
                <div class="hr-contact-icon">
                  <i class="fas fa-clock"></i>
                </div>
                <div>
                  <h6>HR Office Hours</h6>
                  <p>Monday - Saturday: 9:30 AM to 6:00 PM</p>
                </div>
              </div>

              <div class="p-3 mt-4" style="background: rgba(255, 255, 255, 0.08); border-radius: 12px;">
                <p class="mb-0" style="font-size: 0.85rem; color: rgba(255, 255, 255, 0.85);">
                  <i class="fas fa-shield-alt text-warning me-2"></i>
                  <strong>Fair Hiring Guarantee:</strong> Medchikitsa never charges any recruitment fees or deposits at any stage of application or employment.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Career FAQs -->
    <section class="section-pad" style="background-color: var(--med-light);">
      <div class="container">
        <div class="text-center mb-5">
          <span class="section-badge">Frequently Asked Questions</span>
          <h2 class="section-title">Career FAQ</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="careerFaq">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingC1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC1" aria-expanded="true" aria-controls="collapseC1">
                    Can freshers apply for laboratory or imaging technologist positions?
                  </button>
                </h2>
                <div id="collapseC1" class="accordion-collapse collapse show" aria-labelledby="headingC1" data-bs-parent="#careerFaq">
                  <div class="accordion-body text-muted">
                    Yes! We welcome recent graduates with B.Sc MLT, DMLT, or Radiography degrees who possess a strong foundation, passion to learn, and relevant hospital internship experience. Freshers receive guided orientation from senior mentors.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingC2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC2" aria-expanded="false" aria-controls="collapseC2">
                    How quickly can I expect to hear back after submitting my application?
                  </button>
                </h2>
                <div id="collapseC2" class="accordion-collapse collapse" aria-labelledby="headingC2" data-bs-parent="#careerFaq">
                  <div class="accordion-body text-muted">
                    Our HR team reviews every application within 48 to 72 business hours. If your profile matches our requirements, you will receive a call or WhatsApp message to coordinate the preliminary screening.
                  </div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingC3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC3" aria-expanded="false" aria-controls="collapseC3">
                    Can I submit my resume if there is no immediate vacancy in my specialty?
                  </button>
                </h2>
                <div id="collapseC3" class="accordion-collapse collapse" aria-labelledby="headingC3" data-bs-parent="#careerFaq">
                  <div class="accordion-body text-muted">
                    Absolutely. Select "General Healthcare / Other Speciality" in our form or email your resume to medchikitsa@gmail.com. We maintain an active talent pool and reach out to suitable candidates whenever a matching role opens.
                  </div>
                </div>
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

  <script>
    // Filter Jobs
    document.addEventListener('DOMContentLoaded', function() {
      const filterBtns = document.querySelectorAll('.job-filter-btn');
      const jobItems = document.querySelectorAll('.job-item');

      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => b.classList.remove('active'));
          this.classList.add('active');

          const filter = this.getAttribute('data-filter');
          jobItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category').includes(filter)) {
              item.style.display = 'block';
            } else {
              item.style.display = 'none';
            }
          });
        });
      });
    });

    // Auto-select job & smooth scroll
    function selectJobAndScroll(jobTitle) {
      const selectElem = document.getElementById('applicantPosition');
      if (selectElem) {
        selectElem.value = jobTitle;
      }
      const targetElem = document.getElementById('apply-form');
      if (targetElem) {
        targetElem.scrollIntoView({ behavior: 'smooth' });
      }
    }

    // Display selected filename
    function handleFileSelected(input) {
      const display = document.getElementById('fileNameDisplay');
      if (input.files && input.files[0]) {
        display.innerHTML = '<span class="text-success"><i class="fas fa-check-circle me-1"></i> ' + input.files[0].name + '</span>';
      }
    }

    // Form submission confirmation
    document.getElementById('careerApplicationForm').addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Thank you for applying to Medchikitsa! Your application has been received. Our HR team will reach out to you within 48 hours.');
      this.reset();
      document.getElementById('fileNameDisplay').innerText = 'Click here to attach your Resume / CV';
    });
  </script>
</body>
</html>
