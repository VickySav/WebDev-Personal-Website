<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vicky's Personal Website</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/hope-star.gif" rel="icon">
  <link href="assets/img/hope-star.gif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
<?php
   if (!isset($_GET["action"])) {
   ?>
   <form action="contact.php?action=submit" method="post">
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    <h1>Hi, I'm Vicky!</h1>
    <h2>I am a student of Information Systems for Business</h2>
    <a href="#contact" class="btn-get-started scrollto"><i class="bi bi-chevron-double-down"></i></a>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Personal Website</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html">About</a></li>
          <li><a class="nav-link scrollto" href="portfolio.html">Portfolio</a></li>
          <li><a class="nav-link scrollto active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>Get in touch with me! I'm here to address any inquiries or collaborate on exciting projects. Feel free to reach out via email or connect with me on social media. I look forward to hearing from you!</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-4">
              <div class="contact-about">
                <h3>Social Media</h3>
                <p>Find me on Whatsapp, LINE, Twitter, and LinkedIn! Follow for updates, engage in discussions, and explore my professional profile. Let's connect!</p>
                <div class="social-links">
                  <a href="https://wa.me/6281238939034" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
                  <a href="https://line.me/ti/p/6QylSSX2vz" class="line"><i class="bi bi-line"></i></a>
                  <a href="https://instagram.com/vi.kyy" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.linkedin.com/in/tjok-istri-vicky-savitri-8024b62ba/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-4">
              <div class="info">
                <div class="d-flex align-items-center">
                  <i class="bi bi-geo-alt"></i>
                  <p>Universitas Ciputra<br>Surabaya, Jawa Timur</p>
                </div>
  
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-envelope"></i>
                  <p>tistrivicky@student.ciputra.ac.id</p>
                </div>
  
                <div class="d-flex align-items-center mt-4">
                  <i class="bi bi-phone"></i>
                  <p>+62 8123 8939 034</p>
                </div>
  
              </div>
            </div>
  
            <div class="col-lg-5 col-md-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>

                <br>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->


  <?php
   }
   else {
    
      $serverName = "localhost";
      $userName = "root";
      $password = "root";

      $conn = new mysqli($serverName, $userName, $password, 'message');

      if ($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
      }
    //  echo "Connected succesfully";

      // insert
      $name = $_POST['name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];
   

      $query = "INSERT INTO saveMsg(nama, email, sbj, msg)
                VALUES ('$name', '$email', '$subject', '$message')";
      if ($conn->query($query) === TRUE)
      {
        //  echo "Done";
        echo "<script type ='text/javascript'>";
     
        echo "alert('Thank you for sending your message! We will get back to you shortly.');";
        echo "window.location.href='contact.php';";
       
        echo "</script>";
      } else
      {
         echo "Error";
      }

      $conn->close();
   }
   ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

       <!-- ======= Footer ======= -->
       <footer id="footer">
    <div class="container">
      <div class="credits">
        <div class="social-links">
          <a href="https://wa.me/6281238939034" class="whatsapp" style="margin: 5px"><i class="bi bi-whatsapp" style="font-size: 30px;"></i></a>
          <a href="https://line.me/ti/p/6QylSSX2vz" class="line" style="margin: 5px;"><i class="bi bi-line" style="font-size: 30px;"></i></a>
          <a href="https://instagram.com/vi.kyy" class="instagram" style="margin: 5px;"><i class="bi bi-instagram" style="font-size: 30px;"></i></a>
          <a href="https://www.linkedin.com/in/tjok-istri-vicky-savitri-8024b62ba/" class="linkedin" style="margin: 5px;"><i class="bi bi-linkedin" style="font-size: 30px;"></i></a>
        </div> 
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  

</body>

</html>