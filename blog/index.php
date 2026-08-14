<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog & Health Insights | Medchikitsa Diagnostic Centre Vijayapura</title>
  <meta name="description" content="Explore medical insights, health tips, and diagnostic news from Medchikitsa Diagnostic Centre in Vijayapura. Stay informed on lab tests, health packages, and radiology.">
  <meta name="keywords" content="Medchikitsa Blog, Diagnostic Tips, Lab Test Guide, Health Articles Vijayapura, Radiology Insights">
  
  <base href="../">
  <?php include('header-links.php')?>	
  
  <style>
      :root {
          --med-primary: #214a68;
          --med-secondary: #21b6bc;
          --med-accent: #b3cd48;
          --med-light: #f8fafc;
          --med-gray: #f1f5f9;
          --med-text-dark: #334155;
          --med-text-muted: #64748b;
      }

      .blog-page-section {
          padding: 70px 0;
          background-color: var(--med-light);
          position: relative;
      }

      .blog-card {
          background: #ffffff;
          border-radius: 16px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(33, 74, 104, 0.06);
          margin-bottom: 30px;
          transition: all 0.35 ease;
          border: 1px solid rgba(226, 232, 240, 0.8);
          display: flex;
          flex-direction: column;
          height: calc(100% - 30px);
      }

      .blog-card:hover {
          transform: translateY(-8px);
          box-shadow: 0 18px 40px rgba(33, 74, 104, 0.12);
          border-color: rgba(33, 182, 188, 0.3);
      }

      .blog-img-wrapper {
          position: relative;
          width: 100%;
          height: 230px;
          overflow: hidden;
          background: #e2e8f0;
      }

      .blog-img-wrapper img {
          width: 100%;
          height: 100%;
          object-fit: cover;
          transition: transform 0.5s ease;
      }

      .blog-card:hover .blog-img-wrapper img {
          transform: scale(1.08);
      }

      .blog-category-badge {
          position: absolute;
          top: 15px;
          left: 15px;
          background: linear-gradient(135deg, var(--med-primary), var(--med-secondary));
          color: #ffffff;
          font-size: 12px;
          font-weight: 600;
          padding: 6px 14px;
          border-radius: 20px;
          text-transform: uppercase;
          letter-spacing: 0.5px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
      }

      .blog-content-body {
          padding: 25px;
          display: flex;
          flex-direction: column;
          flex-grow: 1;
      }

      .blog-meta-info {
          display: flex;
          align-items: center;
          gap: 15px;
          font-size: 13px;
          color: var(--med-text-muted);
          margin-bottom: 12px;
          font-weight: 500;
      }

      .blog-meta-info i {
          color: var(--med-secondary);
          margin-right: 4px;
      }

      .blog-card-title {
          color: var(--med-primary);
          font-size: 20px;
          font-weight: 700;
          line-height: 1.4;
          margin-bottom: 12px;
          transition: color 0.3s ease;
      }

      .blog-card:hover .blog-card-title {
          color: var(--med-secondary);
      }

      .blog-excerpt-text {
          color: var(--med-text-muted);
          font-size: 14px;
          line-height: 1.6;
          margin-bottom: 20px;
          flex-grow: 1;
      }

      .blog-card-footer {
          border-top: 1px solid #f1f5f9;
          padding-top: 15px;
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      .blog-read-more-btn {
          color: var(--med-primary);
          font-weight: 700;
          font-size: 14px;
          text-decoration: none;
          display: inline-flex;
          align-items: center;
          gap: 8px;
          transition: all 0.3s ease;
      }

      .blog-read-more-btn i {
          font-size: 12px;
          transition: transform 0.3s ease;
          color: var(--med-secondary);
      }

      .blog-card:hover .blog-read-more-btn {
          color: var(--med-secondary);
      }

      .blog-card:hover .blog-read-more-btn i {
          transform: translateX(5px);
      }

      /* Pagination */
      .blog-pagination {
          display: flex;
          justify-content: center;
          align-items: center;
          gap: 8px;
          margin-top: 40px;
      }

      .blog-pagination a, .blog-pagination span {
          width: 42px;
          height: 42px;
          display: flex;
          align-items: center;
          justify-content: center;
          border-radius: 50%;
          background: #ffffff;
          color: var(--med-primary);
          font-weight: 600;
          text-decoration: none;
          box-shadow: 0 4px 10px rgba(0,0,0,0.05);
          border: 1px solid #e2e8f0;
          transition: all 0.3s ease;
      }

      .blog-pagination a:hover, .blog-pagination .active {
          background: var(--med-primary);
          color: #ffffff;
          border-color: var(--med-primary);
          box-shadow: 0 6px 15px rgba(33, 74, 104, 0.2);
      }
  </style>
</head>

<body>
  <div class="wrapper">
    <?php include('header.php')?>

    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section"> 
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">Our Health & Medical Blogs</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php" class="text-dark">Home</a></li>
                        <li class="breadcrumb-divider"><i class="fas fa-chevron-right"></i></li>
                        <li class="breadcrumb-item active text-dark">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <!-- Main Blog Grid Section (3x3 Layout) -->
    <section class="blog-page-section">
        <div class="container">
            
            <div class="row">
                
                <!-- Blog Post 1 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/1.jpg" alt="Regular Health Checkups">
                            <span class="blog-category-badge">Preventive Care</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Aug 14, 2026</span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-card-title">The Importance of Regular Full-Body Health Checkups</h3>
                            <p class="blog-excerpt-text">Preventive healthcare is key to living a long, healthy life. Discover why scheduling routine lab tests helps detect underlying conditions before symptoms arise.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/2.jpg" alt="CBC Lab Results Guide">
                            <span class="blog-category-badge">Lab Diagnostics</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Aug 10, 2026</span>
                                <span><i class="far fa-clock"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-card-title">Understanding Your Complete Blood Count (CBC) Report</h3>
                            <p class="blog-excerpt-text">Confused by RBCs, WBCs, and Hemoglobin levels? Our comprehensive guide simplifies your CBC report parameters for easy understanding.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/3.jpg" alt="Home Sample Collection">
                            <span class="blog-category-badge">Patient Care</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Aug 05, 2026</span>
                                <span><i class="far fa-clock"></i> 3 min read</span>
                            </div>
                            <h3 class="blog-card-title">Top 5 Benefits of Home Sample Collection Services</h3>
                            <p class="blog-excerpt-text">Skip travel hassle and long clinic queues. Learn how certified phlebotomists deliver safe, hygienic home blood collection directly to your doorstep.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/4.jpg" alt="MRI and CT Scan Guide">
                            <span class="blog-category-badge">Radiology</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jul 28, 2026</span>
                                <span><i class="far fa-clock"></i> 6 min read</span>
                            </div>
                            <h3 class="blog-card-title">What You Need to Know Before Your First MRI & CT Scan</h3>
                            <p class="blog-excerpt-text">Nervous about your upcoming imaging procedure? We walk you through prep tips, metallic safety precautions, and what to expect inside the scanner.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/5.jpg" alt="Thyroid Screening">
                            <span class="blog-category-badge">Endocrinology</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jul 22, 2026</span>
                                <span><i class="far fa-clock"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-card-title">Role of Advanced Thyroid Screening in Daily Energy</h3>
                            <p class="blog-excerpt-text">Feeling constantly fatigued or experiencing sudden weight changes? Uncover how T3, T4, and TSH levels regulate your metabolism and overall vitality.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/blog/grid/6.jpg" alt="HbA1c Diabetes Testing">
                            <span class="blog-category-badge">Diabetes Care</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jul 15, 2026</span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-card-title">Managing Diabetes: Crucial Insights from HbA1c Testing</h3>
                            <p class="blog-excerpt-text">Why is HbA1c more reliable than daily fasting blood sugar tests? Learn how 3-month average glucose monitoring aids effective diabetes management.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 7 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/features/1.jpg" alt="Heart Health and Lipid Profile">
                            <span class="blog-category-badge">Cardiology</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jul 08, 2026</span>
                                <span><i class="far fa-clock"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-card-title">Heart Health 101: Lipid Profile & Early Heart Checks</h3>
                            <p class="blog-excerpt-text">Distinguish between HDL (good) and LDL (bad) cholesterol. Learn how early lipid profiling protects against silent cardiovascular conditions.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 8 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/features/2.jpg" alt="Vitamin D and B12 Deficiency">
                            <span class="blog-category-badge">Nutrition & Wellness</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jun 30, 2026</span>
                                <span><i class="far fa-clock"></i> 5 min read</span>
                            </div>
                            <h3 class="blog-card-title">Vitamin D & B12 Deficiency: Signs, Symptoms & Fixes</h3>
                            <p class="blog-excerpt-text">Bone pain, muscle weakness, or numbness? Explore why Vitamin D and B12 deficiencies are widespread and how timely diagnostic testing helps.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Blog Post 9 -->
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <article class="blog-card">
                        <div class="blog-img-wrapper">
                            <img src="assets/images/features/3.jpg" alt="Ultrasonography Imaging">
                            <span class="blog-category-badge">Radiology & USG</span>
                        </div>
                        <div class="blog-content-body">
                            <div class="blog-meta-info">
                                <span><i class="far fa-calendar-alt"></i> Jun 22, 2026</span>
                                <span><i class="far fa-clock"></i> 4 min read</span>
                            </div>
                            <h3 class="blog-card-title">Ultrasonography (USG): Safe Imaging for All Ages</h3>
                            <p class="blog-excerpt-text">Radiation-free and painless, ultrasound scans are essential for abdominal, pelvic, and vascular evaluations. Here is how USG technology works.</p>
                            <div class="blog-card-footer">
                                <a href="blog/index.php" class="blog-read-more-btn">
                                    Read Article <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

            </div>

            <!-- Pagination Bar -->
            <div class="blog-pagination">
                <span class="active">1</span>
                <a href="blog/index.php">2</a>
                <a href="blog/index.php">3</a>
                <a href="blog/index.php"><i class="fas fa-chevron-right"></i></a>
            </div>

        </div>
    </section>

    <?php include('footer.php')?>
    <?php include('footer-links.php')?>
  </div>
</body>
</html>
