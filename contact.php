<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="Site keywords here" />
  <meta name="description" content="" />
  <meta name="copyright" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>Quick Fly | Contact</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- icofont CSS -->
  <link rel="stylesheet" href="css/icofont.css" />
  <!-- Slicknav -->
  <link rel="stylesheet" href="css/slicknav.min.css" />

  <!-- Medipro CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/responsive.css" />


</head>

<body>
  <!-- Preloader -->
  <?php include 'php/preloader.php'; ?>
  <!-- Get Developer Info -->
  <?php include 'php/developerinfo.php'; ?>
  <!-- Header Area -->
  <?php include 'php/header.php'; ?>

  <!-- Breadcrumbs -->
  <div class="breadcrumbs overlay">
    <div class="container">
      <div class="bread-inner">
        <div class="row">
          <div class="col-12">
            <h2>Contact Us</h2>
            <ul class="bread-list">
              <li><a href="index.html">Home</a></li>
              <li><i class="icofont-simple-right"></i></li>
              <li class="active">Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumbs -->

  <!-- Start Contact Us -->
  <section class="contact-us section py-lg-5">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-lg-6">
            <!--Start Google-map -->
            <div id="myMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.5514245252365!2d90.41284996962887!3d23.81128342561463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c65546673f2b%3A0xd1ddd5cca84a2b2e!2s503%20Lane%20-%209%2C%20Dhaka%201206!5e0!3m2!1sen!2sbd!4v1716411412795!5m2!1sen!2sbd" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--/End Google-map -->
          </div>
          <div class="col-lg-6">
            <div class="contact-us-form">
              <h2>Contact With Us</h2>
              <p>
                If you have any questions please fell free to contact with us.
              </p>
              <!-- Form -->
              <form class="form" method="post" action="mail/mail.php">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" placeholder="Name" required="" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email" placeholder="Email" required="" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="phone" placeholder="Phone" required="" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="subject" placeholder="Subject" required="" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea name="message" placeholder="Your Message" required=""></textarea>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group login-btn">
                      <button class="btn" type="submit">Send</button>
                    </div>
                    <div class="checkbox">
                      <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" />Do you
                        want to subscribe our Newsletter ?</label>
                    </div>
                  </div>
                </div>
              </form>
              <!--/ End Form -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="p-lg-5">
    <div class="container-fluid">
      <div class="contact-info">
        <div class="row">
          <!-- single-info -->
          <div class="col-md-4 col-12 p-2">
            <div class="single-info">
              <i class="icofont icofont-ui-call"></i>
              <div class="content">
                <h3>+(000) 1234 56789</h3>
                <p>info@company.com</p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
          <!-- single-info -->
          <div class="col-md-4 col-12 p-2">
            <div class="single-info">
              <i class="icofont-google-map"></i>
              <div class="content">
                <h3>House# 503<sub>(1st Floor)</sub>, Road# 09</h3>
                <p>Baridhara DOHS, Dhaka</p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
          <!-- single-info -->
          <div class="col-md-4 col-12 p-2">
            <div class="single-info">
              <i class="icofont icofont-wall-clock"></i>
              <div class="content">
                <h3>Mon - Sat: 8am - 5pm</h3>
                <p>Sunday Closed</p>
              </div>
            </div>
          </div>
          <!--/End single-info -->
        </div>
      </div>
    </div>
  </section>
  <!--/ End Contact Us -->

  <!-- Footer Area -->
  <?php include 'php/copyright.php'; ?>

  <!-- jquery Min JS -->
  <script src="js/jquery.min.js"></script>
  <!-- jquery Migrate JS -->
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
</body>

</html>