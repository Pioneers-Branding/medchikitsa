<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>Medical Laboratory Services | Medichikitsa</title>
  
<meta name="description" content="Discover Medichikitsa's comprehensive medical laboratory services in Vijayapura, Karnataka, offering accurate diagnostics including pathology, biochemistry, microbiology, histopathology, genetics, and newborn screening with expert care.">
<meta name="keywords" content="Medical Laboratory Services, Pathology, Biochemistry, Microbiology, Histopathology, Genetics Testing, Newborn Screening, Diagnostic Centre, Vijayapura, Karnataka, Medichikitsa">
<link rel="canonical" href="https://medchikitsa.com/medical-laboratory-services">
<meta name="robots" content="index, follow">
<meta name="author" content="Medichikitsa Team">
<meta name="publisher" content="Medichikitsa">


 	<?php include('header-links.php')?>  
 	
 	
 <style>
 
  .lab-hero-section {
            position: relative;
            overflow: hidden;
            padding: 0;
            background-color: var(--med-light);
        }
        
        .lab-hero-container {
            position: relative;
            z-index: 2;
        }
        
        .lab-hero-row {
            min-height: 95vh;
            align-items: center;
        }
        
        .lab-hero-content {
            padding: 3rem 0;
            position: relative;
        }
        
        .lab-hero-tagline {
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-weight: 500;
            color: var(--med-secondary);
            margin-bottom: 1.5rem;
            display: inline-block;
            position: relative;
            padding-left: 40px;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 0.2s;
        }
        
        .lab-hero-tagline::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            width: 30px;
            height: 2px;
            background-color: var(--med-secondary);
            transform: translateY(-50%);
        }
        
        .lab-hero-title {
            font-size: 3.5rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--med-primary);
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 0.4s;
        }
        
        .lab-hero-title span {
            color: var(--med-secondary);
            position: relative;
            display: inline-block;
        }
        
        .lab-hero-title span::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 5px;
            width: 100%;
            height: 12px;
            background-color: rgba(179, 205, 72, 0.3);
            z-index: -1;
        }
        
        .lab-hero-subtitle {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 2.5rem;
            color: var(--med-text-muted);
            max-width: 600px;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 0.6s;
        }
        
        .lab-hero-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 0.8s;
        }
        
        .lab-hero-btn {
            padding: 0.8rem 2rem;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-decoration: none;
        }
        
        .lab-hero-btn-primary {
            background: linear-gradient(to right, var(--med-primary), var(--med-secondary));
            color: white;
            border: none;
        }
        
        .lab-hero-btn-primary:hover {
            box-shadow: 0 8px 25px rgba(33, 74, 104, 0.2);
            transform: translateY(-3px);
            color: white;
        }
        
        .lab-hero-btn-secondary {
            background-color: transparent;
            color: var(--med-primary);
            border: 2px solid var(--med-primary);
        }
        
        .lab-hero-btn-secondary:hover {
            background-color: var(--med-primary);
            color: white;
            box-shadow: 0 8px 25px rgba(33, 74, 104, 0.1);
            transform: translateY(-3px);
        }
        
        .lab-hero-btn i {
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .lab-hero-btn:hover i {
            transform: translateX(5px);
        }
        
        .lab-hero-features {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            margin-top: 3rem;
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
            animation-delay: 1s;
        }
        
        .lab-hero-feature {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .lab-hero-feature-icon {
            width: 50px;
            height: 50px;
            min-width: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(33, 74, 104, 0.1), rgba(33, 182, 188, 0.1));
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--med-secondary);
            font-size: 1.3rem;
            transition: all 0.3s ease;
        }
        
        .lab-hero-feature:hover .lab-hero-feature-icon {
            background: linear-gradient(135deg, var(--med-primary), var(--med-secondary));
            color: white;
            transform: rotateY(180deg);
        }
        
        .lab-hero-feature-text {
            font-weight: 500;
            font-size: 0.95rem;
            color: var(--med-text-dark);
        }
        
        .lab-hero-image-container {
            position: relative;
            height: 100%;
        }
        
        .lab-hero-image {
            position: relative;
            z-index: 1;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            animation-delay: 0.5s;
        }
        
        .lab-hero-image img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
        .lab-hero-image-overlay {
            position: absolute;
            top: -30px;
            left: -30px;
            width: 80%;
            height: 80%;
            border-radius: 20px;
            background-color: rgba(179, 205, 72, 0.1);
            z-index: 0;
            opacity: 0;
            animation: fadeIn 1s ease forwards;
            animation-delay: 0.8s;
        }
        
        .lab-hero-stats {
            position: absolute;
            bottom: 30px;
            right: -20px;
            width: 180px;
            height: 180px;
            border-radius: 20px;
            background: white;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            z-index: 2;
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
            animation-delay: 1.2s;
        }
        
        .lab-hero-stats::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--med-primary), var(--med-secondary));
            opacity: 0.05;
            z-index: -1;
        }
        
        .lab-hero-stats-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--med-primary);
            margin-bottom: 0.5rem;
        }
        
        .lab-hero-stats-text {
            font-size: 0.9rem;
            color: var(--med-text-muted);
            text-align: center;
            line-height: 1.4;
        }
        
        .lab-hero-bg {
            position: absolute;
            top: 0;
            right: 0;
            width: 55%;
            height: 100%;
            background: linear-gradient(135deg, rgba(33, 74, 104, 0.03), rgba(33, 182, 188, 0.05));
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
            z-index: 1;
        }
        
        .lab-hero-blob {
            position: absolute;
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            z-index: 0;
        }
        
        .lab-hero-blob-1 {
            background-color: rgba(33, 74, 104, 0.05);
            width: 500px;
            height: 500px;
            top: -250px;
            right: -100px;
            animation: floating 8s ease-in-out infinite;
        }
        
        .lab-hero-blob-2 {
            background-color: rgba(33, 182, 188, 0.05);
            width: 300px;
            height: 300px;
            bottom: -150px;
            left: 10%;
            animation: floating 9s ease-in-out infinite reverse;
        }
        
        .lab-hero-float-1 {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            z-index: 2;
            font-size: 1.5rem;
            color: var(--med-accent);
            top: 20%;
            right: 15%;
            animation: floating 6s ease-in-out infinite;
            opacity: 0;
            animation-delay: 1.5s;
        }
        
        .lab-hero-float-2 {
            position: absolute;
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            z-index: 2;
            font-size: 2rem;
            color: var(--med-secondary);
            bottom: 20%;
            left: 10%;
            animation: floating 7s ease-in-out infinite reverse;
            opacity: 0;
            animation-delay: 1.8s;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes floating {
            0%, 100% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-15px) rotate(5deg);
            }
        }
        
        /* Media Queries */
        @media (max-width: 1199.98px) {
            .lab-hero-title {
                font-size: 3rem;
            }
            
            .lab-hero-stats {
                width: 160px;
                height: 160px;
            }
        }
        
        @media (max-width: 991.98px) {
            .lab-hero-row {
                min-height: auto;
            }
            
            .lab-hero-content {
                padding: 4rem 0 2rem;
            }
            
            .lab-hero-title {
                font-size: 2.5rem;
            }
            
            .lab-hero-bg {
                width: 100%;
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
                opacity: 0.5;
            }
            
            .lab-hero-stats {
                right: 0;
                bottom: 0;
            }
            
            .lab-hero-image-container {
                margin-bottom: 5rem;
            }
        }
        
        @media (max-width: 767.98px) {
            .lab-hero-actions {
                flex-direction: column;
            }
            
            .lab-hero-title {
                font-size: 2.2rem;
            }
            
            .lab-hero-features {
                flex-direction: column;
                gap: 1rem;
            }
            
            .lab-hero-stats {
                width: 140px;
                height: 140px;
            }
            
            .lab-hero-stats-number {
                font-size: 2rem;
            }
        }
 
       .lab-service-link{
           display: list-item;; 
       }
     .rad-cta-section {
            padding: 6rem 0;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, rgba(33, 74, 104, 0.97) 0%, rgba(33, 182, 188, 0.97) 100%);
            
        }
        
        .rad-cta-blob {
            position: absolute;
            background-color: rgba(179, 205, 72, 0.2);
            border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
            z-index: 0;
        }
        
        .rad-cta-blob-1 {
            width: 400px;
            height: 400px;
            top: -200px;
            right: -150px;
            animation: float1 8s ease-in-out infinite;
        }
        
        .rad-cta-blob-2 {
            width: 300px;
            height: 300px;
            bottom: -150px;
            left: -100px;
            animation: float2 9s ease-in-out infinite;
        }
        
        @keyframes float1 {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(20px) rotate(5deg); }
        }
        
        @keyframes float2 {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(-5deg); }
        }
        
        .rad-cta-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }
        
        .rad-cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .rad-cta-text {
            font-size: 1.1rem;
            font-weight: 300;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }
        
        .rad-cta-highlight {
            color: var(--med-accent);
            font-weight: 500;
        }
        
        .rad-cta-actions {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 3rem;
        }
        
        .rad-cta-btn {
            padding: 0.8rem 2rem;
            font-weight: 500;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .rad-cta-btn-primary {
            background-color: var(--med-accent);
            color: var(--med-primary);
            border: 2px solid var(--med-accent);
        }
        
        .rad-cta-btn-primary:hover {
            background-color: var(--med-light);
            color: var(--med-primary);
            transform: translateY(-3px);
        }
        
        .rad-cta-btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }
        
        .rad-cta-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            transform: translateY(-3px);
        }
        
        .rad-cta-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
        }
        
        .rad-cta-features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .rad-cta-feature {
            text-align: center;
            flex: 1;
            min-width: 200px;
            max-width: 300px;
        }
        
        .rad-cta-feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.2rem;
            font-size: 1.6rem;
            color: var(--med-accent);
            transition: all 0.3s ease;
        }
        
        .rad-cta-feature:hover .rad-cta-feature-icon {
            background-color: var(--med-accent);
            color: white;
            transform: translateY(-5px);
        }
        
        .rad-cta-feature-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        
        .rad-cta-feature-text {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        @media (max-width: 768px) {
            .rad-cta-title {
                font-size: 2rem;
            }
            
            .rad-cta-actions {
                flex-direction: column;
                width: 100%;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }
            
            .rad-cta-feature {
                min-width: 100%;
            }
        }
        .breadcrumb-section {
            background-image: url('assets/images/services/medical-laboratory-services/Medical-Laboratory-Services.webp');
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
                <h1 class="breadcrumb-title">Medical Laboratory Services</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php" class="text-dark">Home</a></li>
                        <li class="breadcrumb-divider"><i class="fas fa-chevron-right"></i></li>
                        <li class="breadcrumb-item active text-dark">Medical Laboratary Services </li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
       
         <section class="lab-hero-section">
        <div class="lab-hero-bg"></div>
        <div class="lab-hero-blob lab-hero-blob-1"></div>
        <div class="lab-hero-blob lab-hero-blob-2"></div>
        <div class="lab-hero-float-1">
            <i class="fas fa-flask"></i>
        </div>
        <div class="lab-hero-float-2">
            <i class="fas fa-microscope"></i>
        </div>
        
        <div class="container lab-hero-container">
            <div class="row lab-hero-row">
                <div class="col-lg-6 lab-hero-content">
                    <span class="lab-hero-tagline">Advanced Diagnostics</span>
                    <h1 class="lab-hero-title">Reliable Laboratory <span> Testing </span> For Accurate Results</h1>
                    <p class="lab-hero-subtitle">
                       Our modern medical laboratory provides fast and precise test results using the latest technology. Our expert team ensures quality diagnostics for better health outcomes.

                    </p>
                    
                    <div class="lab-hero-actions">
                        <a href="contact-us" class="lab-hero-btn lab-hero-btn-primary">
                            Book an Appointment <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#services" class="lab-hero-btn lab-hero-btn-secondary">
                            Explore Services <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    
                    <div class="lab-hero-features">
                        <div class="lab-hero-feature">
                            <div class="lab-hero-feature-icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="lab-hero-feature-text">Accurate & Reliable Results</div>
                        </div>
                        
                        <div class="lab-hero-feature">
                            <div class="lab-hero-feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="lab-hero-feature-text">Fast Turnaround Time</div>
                        </div>
                        
                        <div class="lab-hero-feature">
                            <div class="lab-hero-feature-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <div class="lab-hero-feature-text">Expert Medical Staff</div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 lab-hero-image-container">
                    <div class="lab-hero-image">
                        <img src="assets/images/services/medical-laboratory-services/Precision-Laboratory-Services-for-Better-Health.webp" alt="Medical Laboratory">
                    </div>
                    <div class="lab-hero-image-overlay"></div>
                    <div class="lab-hero-stats">
                        <div class="lab-hero-stats-number">98.7%</div>
                        <div class="lab-hero-stats-text">Accuracy Rate in Diagnostic Testing</div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    
     <section class="lab-services-section">
        <div class="lab-services-bg-shape"></div>
        <div class="lab-services-bg-shape-2"></div>
        
        <div class="container">
            <div class="lab-services-header">
                <h2 class="lab-services-title" id="services">Comprehensive Diagnostic Services</h2>
                <p class="lab-services-subtitle">We provide a wide range of advanced laboratory tests using cutting-edge technology. Our skilled professionals ensure precise and dependable results for informed healthcare decisions.</p>
            </div>
            
            <!-- Home Collection - Featured Service with Large Image -->
            <div class="lab-service-card lab-service-large" style="margin-bottom:40px">
                <div class="lab-service-image">
                    <img src="assets/images/services/medical-laboratory-services/Home-Collection.webp" alt="Home collection services">
                    <span class="lab-service-badge">Most Popular</span>
                </div>
                <div class="lab-service-content">
                    <h3 class="lab-service-title">Home Sample Collection</h3>
                    <p class="lab-service-desc">
                        Get lab tests done from home with our easy sample collection service. Our trained team ensures safe collection and quick results.
                    </p>
                    <div class="lab-service-features">
                        <div class="lab-service-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Certified professionals</span>
                        </div>
                        <div class="lab-service-feature">
                            <i class="fas fa-check-circle"></i>
                            <span> Flexible appointment slots</span>
                        </div>
                        <div class="lab-service-feature">
                            <i class="fas fa-check-circle"></i>
                            <span>Hygienic collection process</span>
                        </div>
                        <div class="lab-service-feature">
                            <i class="fas fa-check-circle"></i>
                            <span> Reports in 24-48 hours</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start mt-2">
                        <a href="https://wa.me/+916360225347?text=I'm%20interested%20in%20booking%20a%20home%20collection%20appointment" class="lab-service-link" target="_blank">
                            <i class="fab fa-whatsapp me-2"></i> Book Now <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row g-4" style="row-gap:20px">
                <!-- Pathology -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Pathology.webp" alt="Pathology services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Pathology</h3>
                            <p class="lab-service-desc">
                                Comprehensive tests, including blood and urine analysis, to assess overall health. Helps detect diseases early for better treatment and prevention.

                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-flask me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Biochemistry -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Biochemistry.webp" alt="Biochemistry services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Biochemistry</h3>
                            <p class="lab-service-desc">
                                Examines blood and body fluids to measure chemicals, enzymes, and hormones. Useful for diagnosing metabolic disorders and organ function issues.
                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-microscope me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Microbiology -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Microbiology.webp" alt="Microbiology services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Microbiology</h3>
                            <p class="lab-service-desc">
                                Identifies bacteria, viruses, and fungi causing infections through lab tests.Essential for choosing the right treatment and antibiotics.
                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-bacteria me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Histopathology -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Histopathology.webp" alt="Histopathology services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Histopathology</h3>
                            <p class="lab-service-desc">
                               Examines tissue samples under a microscope to detect diseases like cancer. Helps in understanding tumor characteristics for accurate diagnosis.
                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-vial me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Genetics -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Genetics.webp" alt="Genetics testing services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Genetics</h3>
                            <p class="lab-service-desc">
                                Advanced testing to identify hereditary conditions and disease risks.Useful for family planning and personalized medical care.
                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-dna me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Newborn Screening -->
                <div class="col-md-6 col-lg-4">
                    <div class="lab-service-card">
                        <div class="lab-service-image">
                            <img src="assets/images/services/medical-laboratory-services/Newborn-Screening.webp" alt="Newborn screening services">
                        </div>
                        <div class="lab-service-content">
                            <h3 class="lab-service-title">Newborn Screening</h3>
                            <p class="lab-service-desc">
                                Early testing to detect rare genetic, metabolic, and hormonal disorders. Ensures timely intervention for a healthy future.
                            </p>
                            <a href="contact-us" class="lab-service-link">
                                <i class="fas fa-baby me-2"></i> Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<div class="lab-view-all">-->
            <!--    <a href="#ser" class="lab-view-all-btn">-->
            <!--        View All Services <i class="fas fa-chevron-right"></i>-->
            <!--    </a>-->
            <!--</div>-->
        </div>
    </section>
    
    
        <section class="work-process pt-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="heading-subtitle" style="color: var(--med-accent);">How To Order And Prepare For A Test!</h2>
          </div><!-- /.col-12 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5">
            <h3 class="heading-title">Ensure a Smooth and Hassle-Free Experience</h3>
          </div><!-- /.col-xl-5 -->
          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 offset-xl-1">
            <p class="heading-desc mb-20">To minimize wait times, complete your personal details on the form beforehand.
              While most routine tests are covered by insurance, some may not be—stay informed..</p>
            <p class="heading-desc mb-30">We prioritize direct patient communication to deliver timely and valuable health insights.
            </p>
            <ul class="features-list list-horizontal bg-transparent list-unstyled p-0 mb-60">
              <li class="feature-item">
                <i class="feature-icon"></i>
                <h4 class="feature-title mb-0">Fast and Accurate Test Results</h4>
              </li>
              <li class="feature-item">
                <i class="feature-icon"></i>
                <h4 class="feature-title mb-0">Affordable Testing Options</h4>
              </li>
              <li class="feature-item">
                <i class="feature-icon"></i>
                <h4 class="feature-title mb-0">Expert Medical Support</h4>
              </li>
            </ul>
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- process item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item">
              <span class="process-number">01.</span>
              <div class="process-icon">
                <i class="icon-education3"></i>
              </div><!-- /.process-icon -->
              <h4 class="process-title"> Choose a Service</h4>
              <p class="process-desc">Select the test you need from our wide range of diagnostic services tailored to your health concerns.
            .</p>
              <div class="btn btn-primary btn-link" style="cursor: default; pointer-events: none; text-decoration: none;">
                <i class="icon-arrow-right"></i>
                <span>Contact Us</span>
              </div>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3-->
          <!-- process item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item">
              <span class="process-number">02.</span>
              <div class="process-icon">
                <i class="icon-chemical5"></i>
              </div><!-- /.process-icon -->
              <h4 class="process-title">Schedule Your Visit</h4>
              <p class="process-desc">Book an appointment online or contact us to arrange a convenient time for your test.
               </p>
              <div class="btn btn-primary btn-link" style="cursor: default; pointer-events: none; text-decoration: none;">
                <i class="icon-arrow-right"></i>
                <span>Set Up Appointment</span>
              </div>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3-->
          <!-- process item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item">
              <span class="process-number">03.</span>
              <div class="process-icon">
                <i class="icon-chemical8"></i>
              </div><!-- /.process-icon -->
              <h4 class="process-title">Submit Your Sample</h4>
              <p class="process-desc">Provide your sample at our lab or use our home collection service for added convenience.
               
              </p>
              <div class="btn btn-primary btn-link" style="cursor: default; pointer-events: none; text-decoration: none;">
                <i class="icon-arrow-right"></i>
                <span>Request Home Collection</span>
              </div>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3-->
          <!-- process item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="process-item">
              <span class="process-number">04.</span>
              <div class="process-icon">
                <i class="icon-archive"></i>
              </div><!-- /.process-icon -->
              <h4 class="process-title">Receive Your Report</h4>
              <p class="process-desc">Get your results online within a few days, ensuring a quick and seamless experience.
              </p>
              <div class="btn btn-primary btn-link" style="cursor: default; pointer-events: none; text-decoration: none;">
                <i class="icon-arrow-right"></i>
                <span>Check Reports</span>
              </div>
            </div><!-- /.process-item -->
          </div><!-- /.col-lg-3-->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <a href="about" class="btn btn-primary btn-xl">
              <span>Accreditation & Licensing</span> <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
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
       
       
       
      <section class="ts-section pt-5">
        <div class="ts-pattern"></div>
    
        <div class="container">
            <div class="ts-header">
                <h3 class="ts-subtitle">Testimonials</h3>
                <h2 class="ts-title">What Our Patients Say</h2>
                <p class="ts-description">Real stories from those who trusted us with their health.</p>
            </div>
            <div class="ts-slider-container" style="padding: 20px 0;">
                <!-- Review Pixel -->
                <script type="text/javascript">
                !function(){var e,t=document;e=function(){if(window.EMRPixel)return console.info("EMR: Pixel already loaded");var e=t.createElement("script");e.defer=!0,e.src="https://cdn2.revw.me/js/pixel.js?t="+864e5*Math.ceil(new Date/864e5);var n=t.getElementsByTagName("script")[0];n.charset="utf-8",n.parentNode.insertBefore(e,n),e.onload=function(){EMRPixel.init("reviewmagnet.in",107)}},"interactive"===t.readyState||"complete"===t.readyState?e():t.addEventListener("DOMContentLoaded",e)}();
                </script><emr-simple-slider widget-id="05af3fd7-4a72-4aaf-9435-eb18197fc224"></emr-simple-slider>
                <!-- Review Pixel End -->
            </div>
        </div>
        </div>
    </section>
      
       <section class="rad-cta-section">
        <div class="rad-cta-blob rad-cta-blob-1"></div>
        <div class="rad-cta-blob rad-cta-blob-2"></div>
        
        <div class="container">
            <div class="rad-cta-content">
                <h2 class="rad-cta-title text-white">Experience Reliable Medical Lab Services</h2>
                <p class="rad-cta-text">
                    Our state-of-the-art laboratory offers accurate and timely diagnostic testing with advanced technology and skilled professionals. Book your test today and experience why patients trust us for <span class="rad-cta-highlight"> precise results</span> and <span class="rad-cta-highlight">compassionate care.</span>.
                </p>
                
                <div class="rad-cta-actions">
                    <a href="https://wa.me/+916360225347?text=I'd%20like%20to%20schedule%20a%20radiology%20appointment" class="rad-cta-btn rad-cta-btn-primary" target="_blank">
                        <i class="fab fa-whatsapp"></i> Book Appointment
                    </a>
                    <a href="tel:+916360225347" class="rad-cta-btn rad-cta-btn-secondary">
                        <i class="fas fa-phone-alt"></i> Call Us Now
                    </a>
                </div>
                
                <div class="rad-cta-features">
                    <div class="rad-cta-feature">
                        <div class="rad-cta-feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3 class="rad-cta-feature-title text-white">Fast & Accurate Testing</h3>
                        <p class="rad-cta-feature-text">Get your results quickly with our advanced diagnostic technology</p>
                    </div>
                    
                    <div class="rad-cta-feature">
                        <div class="rad-cta-feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="rad-cta-feature-title text-white">Certified Lab Experts</h3>
                        <p class="rad-cta-feature-text">Experienced professionals ensuring precision and reliability.</p>
                    </div>
                    
                    <div class="rad-cta-feature">
                        <div class="rad-cta-feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="rad-cta-feature-title text-white">Insurance Coverage</h3>
                        <p class="rad-cta-feature-text">We accept most major insurance providers for your convenience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <section class="banner-layout5 pt-5 pb-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="banner-content">
                <div class="heading-layout2 mb-50">
                  <h2 class="heading-title">Frequently Asked Questions</h2>
                  
                </div>
                <div class="accordion" id="accordion1">
                  <div class="accordion-item">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse1">
                      <a class="accordion-title" href="#">What types of tests do you offer?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse1" class="collapse" data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> We provide a wide range of diagnostic tests, including blood work, imaging, pathology, and specialized screenings</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                  <div class="accordion-item">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse2">
                      <a class="accordion-title" href="#">How long does it take to get test results?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse2" class="collapse" data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> Most routine test results are available within 24–48 hours, while specialized tests may take longer.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                  <div class="accordion-item ">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse3">
                      <a class="accordion-title" href="#">Do I need a doctor’s prescription for lab tests?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse3" class="collapse " data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> Some tests require a doctor’s prescription, but many wellness screenings can be done without one.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse4">
                      <a class="accordion-title" href="#">Is home sample collection available?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse4" class="collapse" data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> Yes, we offer home sample collection services for your convenience.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div>
                  <div class="accordion-item">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse5">
                      <a class="accordion-title" href="#">Are my test results confidential?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse5" class="collapse" data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> Absolutely. We ensure complete privacy and follow strict data protection protocols.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div>
                  
                  <div class="accordion-item">
                    <div class="accordion-header" data-toggle="collapse" data-target="#collapse8">
                      <a class="accordion-title" href="#">Do you accept insurance for lab tests?</a>
                    </div><!-- /.accordion-item-header -->
                    <div id="collapse8" class="collapse" data-parent="#accordion1">
                      <div class="accordion-body">
                        <p> Yes, we work with most major insurance providers to cover diagnostic tests.</p>
                      </div><!-- /.accordion-item-body -->
                    </div>
                  </div><!-- /.accordion-item -->
                </div>
                <!-- /.accordion -->
              </div>
            </div><!-- /.col-lg-6 -->
            <div class="col-sm-12 col-md-12 col-lg-7 px-0 d-flex justify-content-end">
              <div class="banner-img"><img src="assets/images/banners/FAQ-iamge.png" alt="banner"></div>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </section><!-- /.Banner Layout 5 -->


  


     


    
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
        const track = document.querySelector('.ts-slider-track');
        const slides = document.querySelectorAll('.ts-slide');
        const dots = document.querySelectorAll('.ts-dot');
        const prevBtn = document.querySelector('.ts-nav-btn.prev');
        const nextBtn = document.querySelector('.ts-nav-btn.next');
        
        let currentSlide = 0;
        let slidesPerView = 1;
    
        // Update slides per view based on screen size
        function updateSlidesPerView() {
            if (window.innerWidth >= 1200) {
                slidesPerView = 3;
            } else if (window.innerWidth >= 768) {
                slidesPerView = 2;
            } else {
                slidesPerView = 1;
            }
        }
    
        function updateSlider() {
            const slideWidth = 100 / slidesPerView;
            const offset = -currentSlide * slideWidth;
            track.style.transform = `translateX(${offset}%)`;
            
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === Math.floor(currentSlide / slidesPerView));
            });
        }
    
        function nextSlide() {
            const maxSlide = slides.length - slidesPerView;
            currentSlide = currentSlide >= maxSlide ? 0 : currentSlide + 1;
            updateSlider();
        }
    
        function prevSlide() {
            const maxSlide = slides.length - slidesPerView;
            currentSlide = currentSlide <= 0 ? maxSlide : currentSlide - 1;
            updateSlider();
        }
    
        // Event Listeners
        window.addEventListener('resize', () => {
            updateSlidesPerView();
            updateSlider();
        });
    
        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);
    
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index * slidesPerView;
                updateSlider();
            });
        });
    
        // Initialize
        updateSlidesPerView();
        updateSlider();
    
        // Auto-play (optional)
        setInterval(nextSlide, 5000);
    });
    </script>



 	<?php include('footer-links.php')?> 
</body>

</html>

