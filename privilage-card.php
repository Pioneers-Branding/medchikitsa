<!DOCTYPE html>
<html lang="en">

<head>
 
  <title>Heath Packages | Medichikitsa Vijayapura</title>
  
    <meta name="description" content="Get exclusive healthcare benefits with the Medchikitsa Privilege Card. Enjoy discounts on medical consultations, treatments, and more.">
  <meta name="keywords" content="Medchikitsa Privilege Card, Healthcare Discounts, Medical Privilege Card, Vijayapura Healthcare, Discounted Consultations, Medchikitsa Offers">
  <meta name="author" content="Medchikitsa">
  <meta name="publisher" content="Medchikitsa">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://medchikitsa.com/privilage-card">

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Privilege Card | Medchikitsa">
  <meta property="og:description" content="Unlock exclusive discounts and healthcare benefits with the Medchikitsa Privilege Card. Get discounts on consultations and treatments at Medchikitsa.">
  <meta property="og:url" content="https://medchikitsa.com/privilage-card">
  <meta property="og:type" content="website">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Privilege Card | Medchikitsa">
  <meta name="twitter:description" content="Access exclusive discounts and offers with the Medchikitsa Privilege Card. Save on consultations, treatments, and more at Medchikitsa.">


 	<?php include('header-links.php')?>
 	
 	
 <style>
     
     
          :root {
            --med-primary: #214a68;
            --med-secondary: #21b6bc;
            --med-accent: #b3cd48;
            --med-light: #f8fafc;
            --med-purple: #8a58b7;
        }
        
        body {
            background-color: var(--med-light);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
         .breadcrumb-section {
            background-image: url('assets/images/About-us.webp');
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
         .privilege-section {
            padding: 80px 0;
        }

        .section-title {
            color: var(--med-primary);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-subtitle {
            color: var(--med-secondary);
            font-weight: 500;
            margin-bottom: 40px;
        }

        .card-container {
            perspective: 1000px;
            margin-bottom: 40px;
        }

        .privilege-card {
            background: linear-gradient(135deg, var(--med-primary) 0%, var(--med-purple) 100%);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(33, 74, 104, 0.2);
            color: white;
            padding: 25px;
            position: relative;
            transform-style: preserve-3d;
            transition: all 0.5s ease;
            height: 250px;
        }

        .privilege-card:hover {
            transform: translateY(-10px) rotateY(5deg);
            box-shadow: 0 20px 40px rgba(33, 74, 104, 0.3);
        }

        .card-logo {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-title {
            font-size: 24px;
            font-weight: 700;
            margin-top: 60px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .card-holder {
            font-size: 16px;
            font-weight: 300;
            margin-top: 5px;
            margin-bottom: 25px;
        }

        .card-number {
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: 500;
        }

        .card-valid {
            position: absolute;
            bottom: 25px;
            left: 25px;
            font-size: 14px;
            opacity: 0.8;
        }

        .membership-chip {
            position: absolute;
            bottom: 25px;
            right: 25px;
            width: 40px;
            height: 30px;
            background: linear-gradient(135deg, #f9df7b 0%, #e2c362 100%);
            border-radius: 5px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        .benefit-card {
            border: none;
            border-radius: 12px;
            transition: all 0.3s ease;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .benefit-card:hover {
            transform: translateY(-7px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .benefit-card .card-body {
            padding: 25px;
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }

        .icon-primary {
            background-color: var(--med-primary);
        }

        .icon-secondary {
            background-color: var(--med-secondary);
        }

        .icon-accent {
            background-color: var(--med-accent);
        }

        .icon-purple {
            background-color: var(--med-purple);
        }

        .benefit-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--med-primary);
            margin-bottom: 15px;
        }

        .benefit-text {
            color: #666;
            font-size: 15px;
            line-height: 1.6;
        }

        .ribbon {
            position: absolute;
            top: -5px;
            right: 15px;
            background: var(--med-accent);
            color: white;
            padding: 5px 15px;
            font-size: 12px;
            font-weight: 600;
            clip-path: polygon(0% 0%, 100% 0%, 100% 70%, 50% 100%, 0% 70%);
        }

        .cta-card {
            background: linear-gradient(135deg, var(--med-secondary) 0%, var(--med-primary) 100%);
            color: white;
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            box-shadow: 0 15px 30px rgba(33, 74, 104, 0.3);
        }

        .cta-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .cta-text {
            font-size: 16px;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-accent {
            background-color: var(--med-accent);
            border: none;
            color: white;
            font-weight: 600;
            padding: 12px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-accent:hover {
            background-color: #c2db5c;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(179, 205, 72, 0.3);
        }
               
        
      </style>
    
       <?php include('header.php')?>
       
       
    <!--section 2-->

    <section class="breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-content">
                <h1 class="breadcrumb-title">Privilage Card</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index" class="text-dark">Home</a></li>
                        <li class="breadcrumb-divider"><i class="fas fa-chevron-right"></i></li>
                        <li class="breadcrumb-item active text-dark"><a href="index">Membership Card</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    
    
    
     <section class="privilege-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title">Privilege Health Card</h2>
                    <h5 class="section-subtitle">Exclusive benefits for your healthcare journey</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card-container">
                        <div class="privilege-card">
                            <div class="card-logo">
                                <i class="fas fa-heartbeat fa-2x" style="color: var(--med-accent);"></i>
                            </div>
                            <h3 class="card-title">Premium Health</h3>
                            <p class="card-holder">PRIVILEGE MEMBER</p>
                            <div class="card-number">**** **** **** 5678</div>
                            <div class="card-valid">VALID THRU: 03/28</div>
                            <div class="membership-chip"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h3 style="color: var(--med-primary); font-weight: 600; margin-bottom: 20px;">Your Gateway to Premium Healthcare</h3>
                    <p style="color: #555; line-height: 1.8; margin-bottom: 30px;">
                        Our Privilege Health Card offers members exclusive access to a comprehensive suite of healthcare benefits designed to enhance your diagnostic experience. Enjoy priority appointments, substantial discounts, and personalized care that puts your health first.
                    </p>
                    <div class="d-flex align-items-center mb-4">
                        <div style="width: 40px; height: 40px; background-color: var(--med-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-check" style="color: white;"></i>
                        </div>
                        <p style="margin-bottom: 0; color: #444;">
                            <strong>Immediate Activation</strong> - Start enjoying benefits from day one
                        </p>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div style="width: 40px; height: 40px; background-color: var(--med-accent); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-check" style="color: white;"></i>
                        </div>
                        <p style="margin-bottom: 0; color: #444;">
                            <strong>Family Coverage Available</strong> - Extend benefits to your loved ones
                        </p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 text-center mb-5">
                    <h3 style="color: var(--med-primary); font-weight: 600;">Exclusive Card Benefits</h3>
                    <p style="color: #666; max-width: 700px; margin: 0 auto;">
                        Our privilege members enjoy a comprehensive set of benefits designed to make healthcare more accessible, affordable, and comfortable.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-primary">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <h4 class="benefit-title">Priority Discounts</h4>
                            <p class="benefit-text">
                                Enjoy up to 40% discount on all diagnostic tests and health packages throughout our network.
                            </p>
                        </div>
                        <div class="ribbon">MOST POPULAR</div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-secondary">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h4 class="benefit-title">Priority Scheduling</h4>
                            <p class="benefit-text">
                                Skip the queue with dedicated slots and priority appointments for all diagnostic services.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-accent">
                                <i class="fas fa-home"></i>
                            </div>
                            <h4 class="benefit-title">Home Services</h4>
                            <p class="benefit-text">
                                Complimentary home sample collection for tests and discounted home healthcare services.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-purple">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h4 class="benefit-title">Free Consultations</h4>
                            <p class="benefit-text">
                                Quarterly complimentary physician consultations and free follow-up visits after tests.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-primary">
                                <i class="fas fa-file-medical-alt"></i>
                            </div>
                            <h4 class="benefit-title">Digital Health Records</h4>
                            <p class="benefit-text">
                                Lifetime access to your secure digital health records and test results.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-secondary">
                                <i class="fas fa-bell"></i>
                            </div>
                            <h4 class="benefit-title">Health Reminders</h4>
                            <p class="benefit-text">
                                Personalized health checkup reminders and preventive care notifications.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-accent">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="benefit-title">Family Benefits</h4>
                            <p class="benefit-text">
                                Extended discounts for family members and special family health packages.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3">
                    <div class="benefit-card">
                        <div class="card-body">
                            <div class="benefit-icon icon-purple">
                                <i class="fas fa-gift"></i>
                            </div>
                            <h4 class="benefit-title">Partner Rewards</h4>
                            <p class="benefit-text">
                                Exclusive discounts with our healthcare partners including pharmacies and wellness centers.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row " style="margin-top:30px">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-card">
                        <h3 class="cta-title">Join Our Privilege Club Today</h3>
                        <p class="cta-text">
                            Experience healthcare the way it should be - personalized, convenient, and affordable. Our Privilege Health Card is your ticket to a world of premium healthcare services.
                        </p>
                        <a href="contact-us" class="btn btn-accent btn-lg">
                            Apply Now <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

     
    

    
    
    <!--<section class="faq-section">-->
    <!--    <div class="container">-->
            
    <!--        <div class="section-header">-->
    <!--            <h2 class="section-title display-5">Frequently Asked Questions</h2>-->
    <!--            <div class="accent-bar"></div>-->
    <!--            <p class="section-subtitle">Find answers to common questions about our medical services and facilities</p>-->
    <!--        </div>-->
            
           
    <!--        <div class="faq-container">-->
             
    <!--            <div class="faq-item active">-->
    <!--                <div class="faq-question">What services do you offer?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                     We offer a comprehensive range of diagnostic services including routine tests, specialized health checkups, and drug development. Our focus is on providing accurate and timely results for better health management.-->
    <!--                </div>-->
    <!--            </div>-->
                
            
    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">How can I book a test?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                    You can easily book a test by visiting our website and selecting the test you need. Alternatively, you can call or visit one of our centers to book an appointment in person.-->
    <!--                </div>-->
    <!--            </div>-->
                

    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">What insurance plans do you accept?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                    We accept most major insurance plans, including Medicare and Medicaid. Please contact our billing department or check our website for a complete list of accepted insurance providers. We recommend verifying your coverage before your appointment.-->
    <!--                </div>-->
    <!--            </div>-->
                

    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">Are your tests accurate and reliable?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                     Yes, we prioritize accuracy and reliability. All tests are conducted in accredited labs that use the latest technology and follow strict quality control procedures to ensure precise results.-->
    <!--                </div>-->
    <!--            </div>-->
                
     
    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">How long does it take to get test results?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                    Test results are typically delivered within 24 to 48 hours, depending on the complexity of the test. Some specialized tests may take a little longer, but we ensure you are updated about the status.-->
    <!--                </div>-->
    <!--            </div>-->
                
           
    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">Do you offer home sample collection?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                 Yes, we offer home sample collection services for your convenience. You can book a home visit through our website or customer support, and our team will collect your sample at a time that suits you.                    </div>-->
    <!--            </div>-->
                
    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">Are your labs accredited?</div>-->
    <!--                <div class="faq-answer">-->
    <!--               Our labs are fully accredited and follow international standards for diagnostic testing. We continuously adhere to quality benchmarks to maintain the highest level of trust and reliability in our services.-->
    <!--            </div>-->
    <!--            </div>-->
                
    <!--            <div class="faq-item">-->
    <!--                <div class="faq-question">How can I contact customer support?</div>-->
    <!--                <div class="faq-answer">-->
    <!--                     Our customer support team is available through phone, email, or live chat. Feel free to contact us for any inquiries or assistance with your tests, appointments, or results.-->

    <!--            </div>-->
    <!--        </div>-->
            
 
    <!--        <div class="faq-footer">-->
    <!--            <a href="#" class="contact-btn">-->
    <!--                <i class="fas fa-envelope"></i>-->
    <!--                Contact Us For More Information-->
    <!--            </a>-->
    <!--        </div>-->
            
    <!--    </div>-->
    <!--    </div>-->
    <!--</section>-->

    // <script>
    //     // Simple JavaScript to toggle FAQ items
    //     document.addEventListener('DOMContentLoaded', function() {
    //         const faqItems = document.querySelectorAll('.faq-item');
            
    //         faqItems.forEach(item => {
    //             const question = item.querySelector('.faq-question');
                
    //             question.addEventListener('click', () => {
    //                 // Check if this item is already active
    //                 const isActive = item.classList.contains('active');
                    
    //                 // Close all items
    //                 faqItems.forEach(otherItem => {
    //                     otherItem.classList.remove('active');
    //                 });
                    
    //                 // If the clicked item wasn't active before, open it
    //                 if (!isActive) {
    //                     item.classList.add('active');
    //                 }
    //             });
    //         });
    //     });
    // </script>
    
   
    


     


    
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
