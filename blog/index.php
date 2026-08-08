<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog | Medichikitsa Vijayapura</title>
  <?php include('../header-links.php')?>	
  
  <style>
      :root {
          --med-primary: #214a68;
          --med-secondary: #21b6bc;
          --med-light: #f8fafc;
      }
      .blog-section {
          padding: 80px 0;
          background: var(--med-light);
      }
      .blog-card {
          background: #fff;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 4px 15px rgba(0,0,0,0.05);
          margin-bottom: 30px;
          transition: transform 0.3s ease;
      }
      .blog-card:hover {
          transform: translateY(-5px);
      }
      .blog-img {
          width: 100%;
          height: 250px;
          object-fit: cover;
      }
      .blog-content {
          padding: 25px;
      }
      .blog-date {
          color: var(--med-secondary);
          font-weight: 600;
          font-size: 14px;
          margin-bottom: 10px;
          display: block;
      }
      .blog-title {
          color: var(--med-primary);
          font-size: 22px;
          font-weight: 700;
          margin-bottom: 15px;
      }
      .blog-excerpt {
          color: #64748b;
          line-height: 1.6;
          margin-bottom: 20px;
      }
      .read-more {
          color: var(--med-primary);
          font-weight: 600;
          text-decoration: none;
      }
      .read-more:hover {
          color: var(--med-secondary);
      }
      
      /* Newest Post Styling (Featured) */
      .blog-featured {
          display: flex;
          flex-wrap: wrap;
          background: #fff;
          border-radius: 12px;
          overflow: hidden;
          box-shadow: 0 10px 30px rgba(0,0,0,0.08);
          margin-bottom: 50px;
      }
      .blog-featured .blog-img {
          flex: 1;
          min-width: 300px;
          height: auto;
          min-height: 350px;
      }
      .blog-featured .blog-content {
          flex: 1;
          min-width: 300px;
          padding: 40px;
          display: flex;
          flex-direction: column;
          justify-content: center;
      }
      .blog-featured .blog-title {
          font-size: 32px;
      }
  </style>
</head>

<body>
  <?php include('../header.php')?>

  <section class="breadcrumb-section"> 
      <div class="container">
          <div class="breadcrumb-content">
              <h1 class="breadcrumb-title">Our Latest News & Blogs</h1>
              <nav aria-label="breadcrumb" class="breadcrumb-nav">
                  <ol class="breadcrumb-list">
                      <li class="breadcrumb-item"><a href="../index.php" class="text-dark">Home</a></li>
                      <li class="breadcrumb-item active text-dark">Blog</li>
                  </ol>
              </nav>
          </div>
      </div>
  </section>

  <section class="blog-section">
      <div class="container">
          
          <!-- Newest Blog Post (Featured) -->
          <div class="row">
              <div class="col-12">
                  <article class="blog-featured">
                      <img src="../assets/images/about/1.jpg" alt="Featured Blog" class="blog-img">
                      <div class="blog-content">
                          <span class="blog-date">August 25, 2026</span>
                          <h2 class="blog-title">The Importance of Regular Health Check-ups</h2>
                          <p class="blog-excerpt">Preventive healthcare is key to living a long, healthy life. Learn why scheduling regular health check-ups and laboratory tests can help detect medical conditions early when they're most treatable.</p>
                          <a href="#" class="read-more">Read Full Article <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </article>
              </div>
          </div>
          
          <!-- Older Blog Posts -->
          <div class="row">
              <div class="col-md-6 col-lg-4">
                  <article class="blog-card">
                      <img src="../assets/images/about/2.jpg" alt="Blog 2" class="blog-img">
                      <div class="blog-content">
                          <span class="blog-date">August 15, 2026</span>
                          <h3 class="blog-title">Understanding Your Lab Results</h3>
                          <p class="blog-excerpt">Confused by your recent blood work? We break down the most common parameters and what they mean for your overall health.</p>
                          <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </article>
              </div>
              
              <div class="col-md-6 col-lg-4">
                  <article class="blog-card">
                      <img src="../assets/images/about/1.jpg" alt="Blog 3" class="blog-img">
                      <div class="blog-content">
                          <span class="blog-date">August 02, 2026</span>
                          <h3 class="blog-title">Benefits of Home Sample Collection</h3>
                          <p class="blog-excerpt">Skip the waiting room. Discover how our home sample collection service is making healthcare more accessible and convenient for everyone.</p>
                          <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </article>
              </div>
              
              <div class="col-md-6 col-lg-4">
                  <article class="blog-card">
                      <img src="../assets/images/about/2.jpg" alt="Blog 4" class="blog-img">
                      <div class="blog-content">
                          <span class="blog-date">July 20, 2026</span>
                          <h3 class="blog-title">What to Expect During an MRI Scan</h3>
                          <p class="blog-excerpt">Nervous about an upcoming MRI? Our comprehensive guide explains exactly what will happen during your radiology appointment.</p>
                          <a href="#" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </article>
              </div>
          </div>
          
      </div>
  </section>

  <?php include('../footer.php')?>
  <?php include('../footer-links.php')?>
</body>
</html>
