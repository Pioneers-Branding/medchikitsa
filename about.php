<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>About Us | Medichikitsa Diagnostic Centre in Vijayapura, Karnataka</title>
  
  <meta name="description" content="MedChikitsa is a leading diagnostic center in Vijayapura, Karnataka, offering accurate and reliable medical testing services with advanced technology and a commitment to patient care.">

<meta name="keywords" content="MedChikitsa, diagnostic center, medical testing, Vijayapura, Karnataka, laboratory services, health checkups">

<link rel="canonical" href="https://medchikitsa.com/about">

<meta name="robots" content="index, follow">

<meta name="author" content="MedChikitsa Team">

<meta name="publisher" content="MedChikitsa">

  

 	<?php include('header-links.php')?>
 	
 	
 <style>
     .health-section {
            padding: 80px 0;
            background: var(--med-light); 
            position: relative;
            overflow: hidden;
        }

        .health-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 20%, rgba(33, 74, 104, 0.03) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(33, 182, 188, 0.03) 0%, transparent 50%);
            z-index: 0;
        }

        .health-container {
            position: relative;
            z-index: 1;
        }

        .health-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            position: relative;
        }

        .health-header::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 0;
            width: 100%;
            height: 1px;
            background: linear-gradient(90deg, var(--med-secondary) 0%, transparent 100%);
            opacity: 0.3;
        }

        .health-title {
            color: var(--med-primary);
            font-size: 32px;
            font-weight: 700;
            margin: 0;
            position: relative;
            padding-left: 15px;
        }

        .health-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 25px;
            background: var(--med-secondary);
            border-radius: 3px;
        }

        .health-btn {
            background: linear-gradient(135deg, var(--med-secondary), var(--med-secondary) 80%, var(--med-accent));
            color: #ffffff;
            padding: 10px 28px;
            border-radius: 30px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(33, 182, 188, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .health-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(33, 182, 188, 0.3);
            background: var(--med-primary);
        }

        .health-btn i {
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .health-btn:hover i {
            transform: translateX(3px);
        }

        .health-carousel {
            position: relative;
            padding: 10px 5px;
        }

        .health-wrapper {
            overflow: hidden;
            position: relative;
        }

        .health-track {
            display: flex;
            gap: 25px;
            transition: transform 0.5s ease;
        }

        .health-card {
            flex: 0 0 calc(33.333% - 17px);
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            position: relative;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 10px 25px rgba(33, 74, 104, 0.08);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .health-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(33, 74, 104, 0.15);
        }

        .health-badge {
            position: absolute;
            top: 12px;
            left: 0;
            background: var(--med-accent);
            color: #ffffff;
            padding: 6px 15px;
            font-size: 14px;
            font-weight: 700;
            border-radius: 0 30px 30px 0;
            z-index: 5;
            box-shadow: 3px 3px 10px rgba(179, 205, 72, 0.3);
            transition: all 0.3s ease;
        }

        .health-card:hover .health-badge {
            left: 5px;
            background: var(--med-primary);
        }

        .health-inner {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .health-name {
            color: var(--med-primary);
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 15px;
            transition: color 0.3s ease;
            margin-top: 20px; /* Add space for badge */
        }

        .health-card:hover .health-name {
            color: var(--med-secondary);
        }

        .health-count {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: var(--med-text-muted);
            font-size: 14px;
            font-weight: 500;
            background: var(--med-gray);
            padding: 5px 15px;
            border-radius: 20px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .health-card:hover .health-count {
            background: rgba(33, 182, 188, 0.1);
            color: var(--med-secondary);
        }

        .health-count i {
            color: var(--med-secondary);
            font-size: 12px;
        }

        .health-desc {
            color: var(--med-text-muted);
            font-size: 14px;
            line-height: 1.6;
            flex-grow: 1;
            margin-bottom: 20px;
        }

        .health-price-block {
            padding: 20px 25px;
            background: linear-gradient(to right, rgba(33, 74, 104, 0.03), rgba(33, 182, 188, 0.03));
            border-top: 1px solid rgba(33, 74, 104, 0.05);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .health-pricing {
            display: flex;
            flex-direction: column;
        }

        .health-original {
            color: var(--med-text-muted);
            font-size: 14px;
            text-decoration: line-through;
        }

        .health-final {
            color: var(--med-primary);
            font-size: 24px;
            font-weight: 800;
        }

        .health-buy-btn {
            background: linear-gradient(135deg, var(--med-primary), var(--med-primary) 80%, #355e7d);
            color: #ffffff;
            border: none;
            padding: 10px 22px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 5px 10px rgba(33, 74, 104, 0.15);
        }

        .health-buy-btn:hover {
            background: var(--med-secondary);
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(33, 182, 188, 0.2);
        }

        .health-buy-btn i {
            font-size: 14px;
            transition: transform 0.3s ease;
        }

        .health-buy-btn:hover i {
            transform: translateX(3px);
        }

        .health-icon-wrapper {
            position: absolute;
            top: 25px;
            right: 20px;
            z-index: 2;
        }

        .health-icon {
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, rgba(33, 182, 188, 0.1), rgba(33, 182, 188, 0.2));
            color: var(--med-secondary);
            border-radius: 12px;
            transition: all 0.4s ease;
            font-size: 18px;
            box-shadow: 0 5px 15px rgba(33, 182, 188, 0.1);
        }

        .health-card:hover .health-icon {
            transform: rotate(15deg);
            background: var(--med-secondary);
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(33, 182, 188, 0.2);
        }

        .health-icon::after {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: transparent;
            border: 2px solid rgba(33, 182, 188, 0.3);
            border-radius: 12px;
            opacity: 0;
            transition: all 0.4s ease;
        }

        .health-card:hover .health-icon::after {
            opacity: 1;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
        }

        .health-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: #ffffff;
            border: none;
            box-shadow: 0 5px 15px rgba(33, 74, 104, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--med-primary);
            z-index: 2;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .health-arrow:hover {
            background: var(--med-primary);
            color: #ffffff;
            transform: translateY(-50%) scale(1.1);
        }

        .health-prev {
            left: -22px;
        }

        .health-next {
            right: -22px;
        }

        .health-indicators {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 30px;
        }

        .health-dot {
            width: 10px;
            height: 10px;
            background: #e2e8f0;
            border-radius: 50%;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .health-dot.active {
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(to right, var(--med-secondary), var(--med-accent));
            box-shadow: 0 2px 5px rgba(33, 182, 188, 0.2);
        }

        @media (max-width: 991px) {
            .health-card {
                flex: 0 0 calc(50% - 13px);
            }
        }

        @media (max-width: 767px) {
            .health-card {
                flex: 0 0 100%;
            }

            .health-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .health-btn {
                align-self: flex-end;
            }
        }
         .breadcrumb-section {
            background-image: url('assets/images/About-us-Banner-drravi.webp'); 
            background-size: cover;
            background-position: center;
            position: relative;
            padding: 100px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 300px;
        }
        
        .breadcrumb-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /*background: linear-gradient(rgba(33, 74, 104, 0.8), rgba(33, 182, 188, 0.6));*/
        }
        
        .breadcrumb-content {
            position: relative;
            z-index: 1;
            text-align: left;
        }
        
        .breadcrumb-title {
            color: white;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            letter-spacing: 1px;
        }
        
        .breadcrumb-nav {
            display: inline-flex;
            background-color: rgba(255, 255, 255, 0.2);
            padding: 12px 30px;
            border-radius: 50px;
            backdrop-filter: blur(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .breadcrumb-list {
            list-style: none;
            display: flex;
            align-items: center;
            margin: 0;
            padding: 0;
        }
        
        .breadcrumb-item {
            font-size: 1.1rem;
            color: white;
            font-weight: 500;
        }
        
        .breadcrumb-item a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .breadcrumb-item a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -3px;
            left: 0;
            background-color: var(--med-accent);
            transition: width 0.3s ease;
        }
        
        .breadcrumb-item a:hover {
            color: white;
        }
        
        .breadcrumb-item a:hover::after {
            width: 100%;
        }
        
        .breadcrumb-item.active {
            color: var(--med-accent);
        }
        
        .breadcrumb-divider {
            color: rgba(255, 255, 255, 0.7);
            margin: 0 10px;
            font-size: 0.8rem;
        }
         </style>

</head>

<body>
  <div class="wrapper">
    <!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    
       <?php include('header.php')?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">About</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php" class="text-dark">Home</a></li>
                        <li class="breadcrumb-divider"><i class="fas fa-chevron-right"></i></li>
                        <li class="breadcrumb-item active text-dark">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

     
    
    <section class="banner-layout3 py-0">
      <div class="top-shape"></div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-6 banner-img d-flex align-items-center">
            <div class="bg-img">
              <!--<img src="assets/images/banners/2.jpg" alt="backgrounds">-->
              <img src="assets/images/banners/We-Are-Helping-To-Advance-Health-With-Clinical.webp" alt="backgrounds">
            </div>
            <div class="banner-shape" style="display:none;"></div>
          </div>
          <div class="col-12 col-xl-6 banner-content">
            <div class="banner-text">
              <div class="heading-layout2 heading-light">
                <h3 class="heading-title">Your Health is Our Priority, and Accuracy is Our Promise.
                  </h3>
                <p class="heading-desc mb-40">We are dedicated to providing you with fast, precise diagnostic services. Our goal is to empower you with the knowledge you need to live a healthier, happier life.
                </p>
              </div>
              <div class="fancybox-layout2 fancybox-light">
                <div class="fancybox-item">
                  <div class="fancybox-icon">
                    <i class="icon-chemistry"></i>
                  </div>
                  <div class="fancybox-body">
                    <h4 class="fancybox-title">Advanced Diagnostics</h4>
                    <p class="fancybox-desc">We combine compassionate care with state-of-the-art technology to deliver test results you can count on.
                 </p>
                  </div>
                </div>
                <div class="fancybox-item">
                  <div class="fancybox-icon">
                    <i class="icon-drug"></i>
                  </div>
                  <div class="fancybox-body">
                    <h4 class="fancybox-title">Trusted By Doctors</h4>
                    <p class="fancybox-desc">Healthcare professionals rely on us for high-quality and dependable test results.
                    </p>
                  </div>
                </div>
              </div>
              <div class="mx-80 mt-20">
                <a href="about" class="btn btn-white btn-xl">
                  <span>Looking for More Info!</span> <i class="icon-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
          <section class="health-section">
    <div class="health-bg"></div>
    <div class="container health-container">
        <div class="health-header">
            <h2 class="health-title">Popular Health Packages</h2>
            <button onclick="window.location.href='health-packages';"     class="health-btn">
                View All
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        <div class="health-carousel">
            <button class="health-arrow health-prev">
                <i class="fas fa-chevron-left"></i>
            </button>

            <div class="health-wrapper">
                <div class="health-track">
           
                    <div class="health-card">
                        <span class="health-badge">66% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-flask"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Energy Package</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                                Includes 16 Tests
                            </span>
                            <p class="health-desc">
                                Liver Function Test, 25 OH Cholecalciferol (D2+D3), Vitamin B - 12 Level, Fasting Insulin & Glucose.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 4360</span>
                                <span class="health-final">Rs. 1500</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Energy%20Package" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>

                  
                    <div class="health-card">
                        <span class="health-badge">63% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-dumbbell"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Gym Package - TN</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                                Includes 52 Tests
                            </span>
                            <p class="health-desc">
                                Glyco Hemoglobin (HbA1c), Liver Function Test, TSH, Lipid Profile, Urea, Creatinine, Uric Acid, 25 OH Cholecalciferol.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 7815</span>
                                <span class="health-final">Rs. 2899</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Gym%20Package%20-%20TN" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>

                   
                    <div class="health-card">
                        <span class="health-badge">65% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-male"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Men's Health Check-Basic</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                                Includes 50 Tests
                            </span>
                            <p class="health-desc">
                                Glyco Hemoglobin (HbA1c), Liver Function Test, TSH, Lipid Profile, Urea, Creatinine, Uric Acid, 25 OH Cholecalciferol.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 5775</span>
                                <span class="health-final">Rs. 1999</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Men's%20Health%20Check-Basic" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>

              
                    <div class="health-card">
                        <span class="health-badge">60% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-female"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Women's Wellness</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                                Includes 45 Tests
                            </span>
                            <p class="health-desc">
                                Complete Blood Count, Thyroid Profile, Vitamin B12, Vitamin D3, Iron Studies, Calcium, Magnesium, Folic Acid.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 6500</span>
                                <span class="health-final">Rs. 2600</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Women's%20Wellness" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>
                    
                    <div class="health-card">
                        <span class="health-badge">60% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-female"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Gym Package - TN</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                                 Includes 53 Tests
                            </span>
                            <p class="health-desc">
                                 Glyco Hemoglobin (HbA1c), Liver Function Test, TSH, Lipid Profile, Urea, Creatinine, Uric Acid, and more.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 7815</span>
                                <span class="health-final">Rs. 2899</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Gym%20Package%20-%20TN" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>
                    
                    <div class="health-card">
                        <span class="health-badge">60% off</span>
                        <div class="health-inner">
                            <div class="health-icon-wrapper">
                                <div class="health-icon">
                                    <i class="fas fa-female"></i>
                                </div>
                            </div>
                            <h3 class="health-name">Men's Health Check - Basic</h3>
                            <span class="health-count">
                                <i class="fas fa-vial"></i>
                               Includes 50 Tests
                            </span>
                            <p class="health-desc">
                               Glyco Hemoglobin (HbA1c), Liver Function Test, TSH, Lipid Profile, Urea, Creatinine, Uric Acid, and more.
                            </p>
                        </div>
                        <div class="health-price-block">
                            <div class="health-pricing">
                                <span class="health-original">Rs. 5775</span>
                                <span class="health-final">Rs. 1999</span>
                            </div>
                            <a href="https://wa.me/916360225347?text=I%20want%20to%20buy%20this%20medchikitsa%20Men's%20Health%20Check-Basic" target="_blank" class="health-buy-btn">
                                <i class="fab fa-whatsapp"></i> Buy Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <button class="health-arrow health-next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>

        <div class="health-indicators">
            <span class="health-dot active"></span>
            <span class="health-dot"></span>
            <span class="health-dot"></span>
            <span class="health-dot"></span>
        </div>
    </div>
</section>
    
    
    
      <section class="fancybox-layout1 pb-0 pt-3">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-50">
              <!--<h2 class="heading-subtitle">Commitment to Quality</h2>-->
              <h3 class="heading-title">Why Choose Medchikitsa?</h3>
            </div>
          </div>
        </div>
        <div class="row">
        
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-archives"></i>
              </div>
              <div class="fancybox-body">
                <h4 class="fancybox-title">Our Journey</h4>
                <p class="fancybox-desc">Over the years, we’ve steadily grown, expanding our services and technology through smart acquisitions. This growth has allowed us to make high-quality clinical lab services more accessible to all.</p>
              </div>
            </div>
          </div>
    
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-avatar"></i>
              </div>
              <div class="fancybox-body">
                <h4 class="fancybox-title">Dedicated Leadership Team</h4>
                <p class="fancybox-desc">Our leadership team is committed to improving health outcomes by ensuring top-quality diagnostics and patient care. Their expertise drives our mission of improving lives.
                </p>
              </div>
            </div>
          </div>
         
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-class"></i>
              </div>
              <div class="fancybox-body">
                <h4 class="fancybox-title">Accreditation & Licensing</h4>
                <p class="fancybox-desc">We adhere to strict quality control measures at every stage of testing. Our accredited labs follow industry standards to provide you with accurate and trustworthy results.</p>
              </div>
            </div>
          </div>
   
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-clothing"></i>
              </div>
              <div class="fancybox-body">
                <h4 class="fancybox-title">Careers</h4>
                <p class="fancybox-desc">Join our team of dedicated professionals. We offer a dynamic work environment with opportunities for growth and a chance to make a real difference in patient care.</p>
              </div>
            </div>
          </div>
 
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-atom"></i>
              </div>
              <div class="fancybox-body">
                <h4 class="fancybox-title">Commitment to Patient Care</h4>
                <p class="fancybox-desc">We believe in providing not just results but peace of mind. Our team ensures that each patient receives personal care and attention throughout their testing experience.</p>
              </div>
            </div>
          </div>
      
          <div class="col-sm-6 col-d-4 col-lg-4">
            <div class="fancybox-item">
              <div class="fancybox-icon">
                <i class="icon-avatar2"></i>
              </div><!-- /.fancybox-icon -->
              <div class="fancybox-body">
                <h4 class="fancybox-title">Constant Innovation</h4>
                <p class="fancybox-desc">We’re always working on new tests, expanding our genetic research, and building strong partnerships to bring you the latest in diagnostic technology.
</p>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </section>
    
    
    <section class="faq-section">
        <div class="container">
            
            <div class="section-header">
                <h2 class="section-title display-5">Frequently Asked Questions</h2>
                <div class="accent-bar"></div>
                <p class="section-subtitle">Find answers to common questions about our medical services and facilities</p>
            </div>
            
           
            <div class="faq-container">
             
                <div class="faq-item active">
                    <div class="faq-question">What services do you offer?</div>
                    <div class="faq-answer">
                         We offer a comprehensive range of diagnostic services including routine tests, specialized health checkups, and drug development. Our focus is on providing accurate and timely results for better health management.
                    </div>
                </div>
                
            
                <div class="faq-item">
                    <div class="faq-question">How can I book a test?</div>
                    <div class="faq-answer">
                        You can easily book a test by visiting our website and selecting the test you need. Alternatively, you can call or visit one of our centers to book an appointment in person.
                    </div>
                </div>
                

                <div class="faq-item">
                    <div class="faq-question">What insurance plans do you accept?</div>
                    <div class="faq-answer">
                        We accept most major insurance plans, including Medicare and Medicaid. Please contact our billing department or check our website for a complete list of accepted insurance providers. We recommend verifying your coverage before your appointment.
                    </div>
                </div>
                

                <div class="faq-item">
                    <div class="faq-question">Are your tests accurate and reliable?</div>
                    <div class="faq-answer">
                         Yes, we prioritize accuracy and reliability. All tests are conducted in accredited labs that use the latest technology and follow strict quality control procedures to ensure precise results.
                    </div>
                </div>
                
     
                <div class="faq-item">
                    <div class="faq-question">How long does it take to get test results?</div>
                    <div class="faq-answer">
                        Test results are typically delivered within 24 to 48 hours, depending on the complexity of the test. Some specialized tests may take a little longer, but we ensure you are updated about the status.
                    </div>
                </div>
                
           
                <div class="faq-item">
                    <div class="faq-question">Do you offer home sample collection?</div>
                    <div class="faq-answer">
                     Yes, we offer home sample collection services for your convenience. You can book a home visit through our website or customer support, and our team will collect your sample at a time that suits you.                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">Are your labs accredited?</div>
                    <div class="faq-answer">
                   Our labs are fully accredited and follow international standards for diagnostic testing. We continuously adhere to quality benchmarks to maintain the highest level of trust and reliability in our services.
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">How can I contact customer support?</div>
                    <div class="faq-answer">
                         Our customer support team is available through phone, email, or live chat. Feel free to contact us for any inquiries or assistance with your tests, appointments, or results.

                </div>
            </div>
            
 
            <div class="faq-footer">
                <a href="contact-us" class="contact-btn">
                    <i class="fas fa-envelope"></i>
                    Contact Us For More Information
                </a>
            </div>
        </div>
    </section>

    <script>
        // Simple JavaScript to toggle FAQ items
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', () => {
                    // Check if this item is already active
                    const isActive = item.classList.contains('active');
                    
                    // Close all items
                    faqItems.forEach(otherItem => {
                        otherItem.classList.remove('active');
                    });
                    
                    // If the clicked item wasn't active before, open it
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            });
        });
    </script>
    
   
    


     


    
 	<?php include('footer.php')?> 


    

    <svg class="svg-pathes" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">

      <clipPath id="hexagon-clippath" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
        </path>
      </clipPath>
      <clipPath id="hexagon-clippath2" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.701 L1,0.701 C1,0.747,0.972,0.789,0.926,0.812 L0.574,0.989 C0.528,1,0.472,1,0.426,0.989 L0.074,0.812 C0.028,0.789,0,0.747,0,0.701 L0,0.701 L0,0.311 L0,0.311 C0,0.265,0.028,0.223,0.074,0.2 L0.426,0.023 C0.472,0,0.528,0,0.574,0.023 L0.926,0.2 C0.972,0.223,1,0.265,1,0.311 L1,0.311 L1,0.701">
        </path>
      </clipPath>
      <clipPath id="path-direction-right" clipPathUnits="objectBoundingBox">
        <path
          d="M0.006,1 C0.156,1,0.295,0.972,0.371,0.926 L0.95,0.574 C1,0.528,1,0.472,0.95,0.426 L0.371,0.074 C0.295,0.028,0.156,0,0.006,0 L0.006,1">
        </path>
      </clipPath>
      <clipPath id="path-direction-left" clipPathUnits="objectBoundingBox">
        <path
          d="M0.892,1 L0.892,0 L1,0 L1,1 L0.892,1 M0.05,0.574 C-0.017,0.528,-0.017,0.472,0.05,0.426 L0.567,0.074 C0.634,0.028,0.757,0,0.892,0 L0.892,1 C0.757,1,0.634,0.972,0.567,0.926 L0.05,0.574">
        </path>
      </clipPath>
      <clipPath id="path-direction-left2" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0 C0.85,0,0.711,0.028,0.635,0.074 L0.056,0.426 C-0.019,0.472,-0.019,0.528,0.056,0.574 L0.635,0.926 C0.711,0.972,0.85,1,1,1 L1,0">
        </path>
      </clipPath>
      <clipPath id="path-direction-right2" clipPathUnits="objectBoundingBox">
        <path
          d="M0,0 C0.151,0,0.289,0.028,0.365,0.074 L0.944,0.426 C1,0.472,1,0.528,0.944,0.574 L0.365,0.926 C0.289,0.972,0.151,1,0,1 L0,0">
        </path>
      </clipPath>
      <clipPath id="path-direction-up" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.258 C1,0.258,1,0.258,1,0.258 L1,0.258 L1,0.976 C1,0.989,0.993,1,0.983,1 L0.017,1 C0.007,1,0,0.989,0,0.976 L0,0.257 L0,0.257 C0,0.219,0.028,0.183,0.074,0.164 L0.426,0.015 C0.472,-0.005,0.528,-0.005,0.574,0.015 L0.926,0.164 C0.972,0.183,1,0.219,1,0.257 L1,0.257 L1,0.258">
        </path>
      </clipPath>
      <clipPath id="path-direction-down" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.859 C0.998,0.88,0.97,0.898,0.926,0.909 L0.574,0.992 C0.528,1,0.472,1,0.426,0.992 L0.074,0.909 C0.03,0.898,0.002,0.88,0,0.859 L0,0.859 L0,0.857 C0,0.856,0,0.856,0,0.856 L0,0.856 L0,0 L1,0 L1,0.859 L1,0.859">
        </path>
      </clipPath>
      <clipPath id="path-direction-down2" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.743 C1,0.781,0.972,0.817,0.926,0.836 L0.574,0.985 C0.528,1,0.472,1,0.426,0.985 L0.074,0.836 C0.028,0.817,0,0.781,0,0.743 L0,0.743 L0,0.742 C0,0.742,0,0.742,0,0.742 L0,0.742 L0,0.024 C0,0.011,0.007,0,0.017,0 L0.983,0 C0.993,0,1,0.011,1,0.024 L1,0.743 L1,0.743">
        </path>
      </clipPath>
      <clipPath id="path-direction-down-sm" clipPathUnits="objectBoundingBox">
        <path
          d="M1,0.686 C0.997,0.732,0.969,0.773,0.926,0.796 L0.574,0.982 C0.528,1,0.472,1,0.426,0.982 L0.074,0.796 C0.03,0.773,0.003,0.732,0,0.686 L0,0.686 L0,0.681 C0,0.68,0,0.68,0,0.679 L0,0.679 L0,0.042 C0,0.019,0.011,0,0.024,0 L0.976,0 C0.989,0,1,0.019,1,0.042 L1,0.686 L1,0.686">
        </path>
      </clipPath>

      <clipPath id="path-direction-left-large" clipPathUnits="objectBoundingBox">
        <path
          d="M0.301,1 L0.301,0 L1,0 L1,1 L0.301,1 M0.191,0.926 L0.017,0.574 C-0.006,0.528,-0.006,0.472,0.017,0.426 L0.191,0.074 C0.214,0.028,0.256,0,0.301,0 L0.301,1 C0.256,1,0.214,0.972,0.191,0.926">
        </path>
      </clipPath>
      <clipPath id="path-direction-right-large" clipPathUnits="objectBoundingBox">
        <path
          d="M0.983,0.574 L0.809,0.926 C0.786,0.972,0.744,1,0.699,1 L0.699,0 C0.744,0,0.786,0.028,0.809,0.074 L0.983,0.426 C1,0.472,1,0.528,0.983,0.574 M0,0 L0.699,0 L0.699,1 L0,1 L0,0">
        </path>
      </clipPath>
    </svg>

  </div><!-- /.wrapper -->

    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Slider functionality
        const track = document.querySelector('.health-track');
        const cards = document.querySelectorAll('.health-card');
        const dots = document.querySelectorAll('.health-dot');
        const prevBtn = document.querySelector('.health-prev');
        const nextBtn = document.querySelector('.health-next');
        
        let currentIndex = 0;
        let cardsPerView = getCardsPerView();
        let maxIndex = Math.max(0, cards.length - cardsPerView);
        
        function getCardsPerView() {
            return window.innerWidth > 991 ? 3 : window.innerWidth > 767 ? 2 : 1;
        }
        
        function calculateCardWidth() {
            // Get the actual rendered width of a card including gap
            const cardStyle = window.getComputedStyle(cards[0]);
            const marginRight = parseInt(cardStyle.marginRight) || 25; // Default gap is 25px
            return cards[0].offsetWidth + marginRight;
        }

        function updateSlider() {
            const cardWidth = calculateCardWidth();
            track.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === Math.min(Math.floor(currentIndex / Math.ceil(cards.length / dots.length)), dots.length - 1));
            });

            // Update button states
            prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
            nextBtn.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
        }

        function nextSlide() {
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateSlider();
            }
        }

        function prevSlide() {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        }

        // Event Listeners
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const slidesPerDot = Math.ceil(cards.length / dots.length);
                currentIndex = Math.min(maxIndex, index * slidesPerDot);
                updateSlider();
            });
        });

        // Handle window resize
        window.addEventListener('resize', () => {
            cardsPerView = getCardsPerView();
            maxIndex = Math.max(0, cards.length - cardsPerView);
            currentIndex = Math.min(currentIndex, maxIndex);
            updateSlider();
        });

        // Initialize
        updateSlider();
        
        // Optional: Auto slide
        setInterval(() => {
            if (currentIndex < maxIndex) {
                nextSlide();
            } else {
                currentIndex = 0;
                updateSlider();
            }
        }, 6000);
    });
</script>

 	<?php include('footer-links.php')?> 
</body>

</html>

