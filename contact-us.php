<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>Contact-Us| Medichikitsa Vijayapura</title>
  
  
  
   <meta name="description" content="Get in touch with Medchikitsa for expert healthcare services. Reach out to our team for consultations, inquiries, and support.">
  <meta name="keywords" content="Contact Medchikitsa, Healthcare Consultation, Medchikitsa Contact, Vijayapura Healthcare, Medical Support">
  <meta name="author" content="Medchikitsa">
  <meta name="publisher" content="Medchikitsa">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="canonical" href="https://www.medchikitsa.com/contact-us">
 <meta name="robots" content="index, follow">
  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Contact Us | Medchikitsa">
  <meta property="og:description" content="Contact Medchikitsa for healthcare inquiries, consultations, and support. Reach our team today for assistance with your medical needs.">
  <meta property="og:url" content="https://medchikitsa.com/contact-us">
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Contact Us | Medchikitsa">
  <meta name="twitter:description" content="Need assistance? Reach out to Medchikitsa for healthcare consultations, inquiries, and support.">

  

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

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--med-text-dark);
            background-color: var(--med-light);
        }

        .page-header {
            background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%);
            padding: 5rem 0;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('/api/placeholder/1200/400') center center/cover;
            opacity: 0.1;
        }

        .page-header h1 {
            font-weight: 700;
            color: white;
            font-size: 3rem;
            position: relative;
        }

        .page-header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
        }

        .contact-info-card {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border-bottom: 4px solid transparent;
        }

        .contact-info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            border-bottom: 4px solid var(--med-accent);
        }

        .contact-icon {
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--med-gray);
            border-radius: 50%;
            margin: 0 auto 1.5rem;
            color: var(--med-primary);
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }

        .contact-info-card:hover .contact-icon {
            background-color: var(--med-primary);
            color: white;
        }

        .form-section {
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            padding: 3rem;
        }

        .form-control {
            border: 2px solid var(--med-gray);
            padding: 0.8rem 1.2rem;
            font-size: 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--med-secondary);
            box-shadow: 0 0 0 0.25rem rgba(33, 182, 188, 0.25);
        }
        
        /* Floating label styles */
        .floating-label-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .floating-label-group input,
        .floating-label-group select,
        .floating-label-group textarea {
            height: 60px;
            padding: 1.25rem 1rem 0.5rem;
            width: 100%;
            border: 2px solid var(--med-gray);
            border-radius: 8px;
            font-size: 1rem;
            color: var(--med-text-dark);
            background-color: white;
            transition: all 0.3s ease;
        }
        
        .floating-label-group textarea {
            min-height: 140px;
            padding-top: 1.5rem;
        }
        
        .floating-label-group select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23334155' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 16px 12px;
            padding-right: 2.5rem;
        }
        
        .floating-label-group label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            padding: 1rem 1rem;
            pointer-events: none;
            border: 1px solid transparent;
            transform-origin: 0 0;
            transition: opacity .15s ease-in-out, transform .15s ease-in-out;
            color: var(--med-text-muted);
        }
        
        .floating-label-group input:focus,
        .floating-label-group select:focus,
        .floating-label-group textarea:focus {
            border-color: var(--med-secondary);
            box-shadow: 0 5px 15px rgba(33, 182, 188, 0.1);
            outline: none;
        }
        
        .floating-label-group input:focus ~ label,
        .floating-label-group select:focus ~ label,
        .floating-label-group textarea:focus ~ label,
        .floating-label-group input:not(:placeholder-shown) ~ label,
        .floating-label-group select:not([value=""]):not([value=null]) ~ label,
        .floating-label-group textarea:not(:placeholder-shown) ~ label {
            transform: scale(0.8) translateY(-0.5rem) translateX(0.15rem);
            opacity: 0.8;
            color: var(--med-secondary);
        }
        
        .floating-label-group select:not([value=""]):not([value=null]) ~ label {
            transform: scale(0.8) translateY(-0.5rem) translateX(0.15rem);
            opacity: 0.8;
        }
        
        .icon-wrapper {
            width: 30px;
            text-align: center;
            font-size: 1.2rem;
        }
        
        /* Additional styles for new contact layout */
        .max-w-md {
            max-width: 700px;
        }
        
        .divider-accent {
            height: 4px;
            width: 60px;
            background-color: var(--med-accent);
            border-radius: 2px;
        }
        
        .contact-icon-circle {
            width: 45px;
            height: 45px;
            background-color: rgba(33, 74, 104, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--med-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover .contact-icon-circle {
            background-color: var(--med-primary);
            color: white;
            transform: translateY(-3px);
        }
        
        .contact-info-box, .form-wrapper, .qr-box {
            transition: all 0.3s ease;
        }
        
        .contact-info-box:hover, .form-wrapper:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0,0,0,0.08);
        }
        
        .qr-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(33, 74, 104, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(33, 74, 104, 0.15);
        }

        .custom-btn {
            background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%);
            border: none;
            padding: 0.8rem 2.5rem;
            font-weight: 600;
            border-radius: 8px;
            color: white;
            transition: all 0.3s ease;
        }

        .custom-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(33, 74, 104, 0.2);
        }

        .map-section {
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
                .compact-tour-section {
            padding: 4rem 0;
            background-color: white;
        }

        .section-title {
            color: var(--med-primary);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: var(--med-text-muted);
            margin-bottom: 2rem;
        }

        .accent-bar {
            width: 50px;
            height: 3px;
            background-color: var(--med-accent);
            margin-bottom: 1.5rem;
        }

        .tour-container {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .tour-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--med-secondary) 0%, var(--med-primary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 20px rgba(33, 74, 104, 0.3);
            transition: all 0.3s ease;
        }

        .play-button:hover {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 15px 30px rgba(33, 74, 104, 0.4);
        }

        .play-button i {
            color: white;
            font-size: 2rem;
        }

        .tour-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: var(--med-accent);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .tour-badge i {
            margin-right: 0.5rem;
        }

        .tour-preview {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
            margin-top: 1.5rem;
        }

        .preview-item {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .preview-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .preview-item img {
            width: 100%;
            height: 70px;
            object-fit: cover;
        }

        .preview-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(33, 74, 104, 0.3);
            opacity: 0;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 0.8rem;
        }

        .preview-item:hover .preview-overlay {
            opacity: 1;
        }

        .preview-item.active {
            border: 2px solid var(--med-accent);
        }

        .preview-item.active .preview-overlay {
            opacity: 1;
            background-color: rgba(179, 205, 72, 0.3);
        }

        .tour-info {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tour-link {
            display: inline-flex;
            align-items: center;
            color: var(--med-primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tour-link:hover {
            color: var(--med-secondary);
        }

        .tour-link i {
            margin-left: 0.5rem;
        }

        .devices-info {
            display: flex;
            align-items: center;
            color: var(--med-text-muted);
            font-size: 0.9rem;
        }

        .devices-info i {
            margin-right: 0.5rem;
            color: var(--med-secondary);
        }
        .breadcrumb-section {
            background-image: url('assets/images/Contact-us.webp');
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
                <h1 class="breadcrumb-title">Contact Us</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.php" class="text-dark">Home</a></li>
                        <li class="breadcrumb-divider"><i class="fas fa-chevron-right"></i></li>
                        <li class="breadcrumb-item active text-dark">Contact-Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    
    <section class="py-5 contact-section" style="background-color: var(--med-light);">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3" style="color: var(--med-primary);">Get In Touch</h2>
                <div class="divider-accent mx-auto mb-4"></div>
                <p class="lead text-muted max-w-md mx-auto">We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
            </div>
            
            <div class="row g-5 align-items-stretch">
                <!-- Left Side: Contact Information & QR Code -->
                <div class="col-lg-5">
                    <!-- Contact Information Box -->
                    <div class="contact-info-box p-4 mb-5" style="background-color: white; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.04); border-top: 5px solid var(--med-accent);">
                        <h3 class="h4 mb-4" style="color: var(--med-primary);">Contact Information</h3>
                        
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon-circle me-3 flex-shrink-0">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1" style="color: var(--med-primary);">Our Location</h4>
                                <p class="mb-0 text-muted">Milan Commercial Complex , Ground Floor , Near Vittal Mandir Road, Beside Federal Bank , Vijayapur ,568101</p>
                            </div>
                        </div>
                        
                        <div class="contact-item d-flex align-items-center mb-4">
                            <div class="contact-icon-circle me-3 flex-shrink-0">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1" style="color: var(--med-primary);">Phone Numbers</h4>
                                <a href="tel:+9173533307006" class="mb-0 text-muted">General: +9173533307006</a>
                                <!--<p class="mb-0 text-muted">Support: (123) 456-7891</p>-->
                            </div>
                        </div>
                        
                        <div class="contact-item d-flex align-items-center">
                            <div class="contact-icon-circle me-3 flex-shrink-0">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1" style="color: var(--med-primary);">Email Address</h4>
                                <a href="mailto:medchikitsa@gmail.com" class="mb-0 text-muted">medchikitsa@gmail.com</a>
                                <!--<p class="mb-0 text-muted">support@medicalcenter.com</p>-->
                            </div>
                        </div>
                    </div>
                    
                    <!-- QR Code Box -->
                    <div class="qr-box p-4 text-center mt-3 " style="background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%); border-radius: 16px; box-shadow: 0 10px 40px rgba(33, 74, 104, 0.2);">
                        <h4 class="text-white mb-3">Find Us With QR Code</h4>
                        <div class="qr-code-wrapper bg-white p-3 d-inline-block rounded-3">
                            <img src="assets/images/QR.jpeg" height="160px" width="160px" alt="Location QR Code" class="img-fluid rounded-2">
                        </div>
                        <p class="text-white mt-3 mb-0 small">Scan for directions to our facility</p>
                    </div>
                </div>
                
                <!-- Right Side: Contact Form -->
                <div class="col-lg-7">
                    <div class="form-wrapper p-5" style="background-color: white; border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.04); height: 100%;">
                        <h3 class="h4 mb-4" style="color: var(--med-primary);">Send Us a Message</h3>
                        
                          <form class="contact-form" accept-charset='UTF-8' action='https://app.formester.com/forms/OwuroVfFc0m_/submissions' method='POST'>
                            <div class="row g-4">
                                <div class="col-12">
                                    <div class="floating-label-group">
                                        <input type="text" class="form-control" name="name" id="fullName" placeholder=" " oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" required>
                                        <label for="fullName">Full Name</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="floating-label-group">
                                        <input type="tel" class="form-control" id="phone" name="mobile" placeholder=" "  oninput="this.value = this.value.replace(/[^0-9+]/g, '')"  required>
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="floating-label-group">
                                        <input type="text" class="form-control" name="address" id="address" placeholder=" " required>
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="g-recaptcha " data-sitekey="6LfBABgrAAAAAP78Pj-SKsQHzp5XwgCbuwUjBkmI"></div>
                                </div>
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary px-5 py-3" style="background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-secondary) 100%); border: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
     <section class="compact-tour-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Take a Virtual Tour</h2>
                    <div class="accent-bar"></div>
                    <p class="section-subtitle">Explore our facility from anywhere, anytime</p>
                    
                    <div class="tour-container">
                        <!--<img src="/api/placeholder/600/350" alt="Medical Center Tour" class="img-fluid w-100">-->
                        <img src="assets/images/video-image.webp" alt="Medical Center Tour" class="img-fluid w-100">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="tour-badge">
                            <i class="fas fa-vr-cardboard"></i>
                            360° Virtual Tour
                        </div>
                    </div>
                    
                    <div class="tour-preview">
                        <div class="preview-item active">
                            <!--<img src="/api/placeholder/150/100" alt="Reception">-->
                            <img src="assets/images/page-titles/reception.webp" alt="Reception">
                            <div class="preview-overlay">Reception</div>
                        </div>
                        <div class="preview-item">
                            <img src="assets/images/page-titles/Laboratory.webp" alt="Laboratory">
                            <div class="preview-overlay">Laboratory</div>
                        </div>
                        <div class="preview-item">
                            <img src="assets/images/page-titles/Radiology.webp" alt="Radiology">
                            <div class="preview-overlay">Radiology</div>
                        </div>
                        <div class="preview-item">
                            <img src="assets/images/page-titles/Waiting-Area.webp" alt="Waiting Area">
                            <div class="preview-overlay">Waiting Area</div>
                        </div>
                    </div>
                    
                    <div class="tour-info">
                        <a href="#" class="tour-link">View full virtual tour <i class="fas fa-arrow-right"></i></a>
                        <div class="devices-info">
                            <i class="fas fa-mobile-alt"></i>
                            Works on all devices
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                    <h2 class="h4 mb-3"  style="color: var(--med-primary); font-size:36px"><b>Why Take Our Virtual Tour?</b></h2>
                    <ul class="mb-4">
                        <li class="mb-2"><b>Explore the Facility Before Your Visit</b>
                            <p>Take a virtual walk through our facility to get comfortable before your appointment.</p>
                            </li>
                        <li class="mb-2"><b>Discover Our Advanced Equipment</b>
                        <p>
                          See the high-tech equipment we use to ensure accurate and efficient tests.  
                        </p>
                        </li>
                        <li class="mb-2">
                        <b>Find the Best Route to Your Appointment</b>
                        <p>
                           Plan your visit by finding the quickest and easiest path to reach us.  
                        </p>
                        </li>
                        <li class="mb-2">
                        <b>Reduce Stress by Knowing What to Expect</b>
                        <p>
                           Familiarize yourself with the layout and services to feel more relaxed on your visit.  
                        </p>
                        </li>
                    </ul>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div style="width: 45px; height: 45px; border-radius: 50%; background-color: rgba(33, 182, 188, 0.1); display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-vr-cardboard" style="color: var(--med-secondary);"></i>
                        </div>
                        <div>
                            <h4 class="h6 mb-1">Immersive 360° Experience</h4>
                            <p class="small text-muted mb-0"> Experience our facility virtually, as if you were physically there.</p>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center">
                        <div style="width: 45px; height: 45px; border-radius: 50%; background-color: rgba(179, 205, 72, 0.1); display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-info-circle" style="color: var(--med-accent);"></i>
                        </div>
                        <div>
                            <h4 class="h6 mb-1">Interactive Information Points</h4>
                            <p class="small text-muted mb-0"> Learn about our various services as you explore the virtual tour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    
     <section class="map py-0">
      <iframe width="100%" height="620" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.9167858129385!2d75.7108957!3d16.8304838!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc655fa6314cbaf%3A0xae1427d253592fd9!2sMEDCHIKITSA!5e0!3m2!1sen!2sus!4v1786188311475!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>  
      <div class="map-container">
        <div class="contact-panel p-0">
        </div>
      </div><!-- /.map-container -->
    </section>
    


     


    
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



 	<?php include('footer-links.php')?> 
</body>

</html>
