<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="Site keywords here" />
  <meta name="description" content="" />
  <meta name="copyright" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Title -->
  <title>Quick Fly | Appointment</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- icofont CSS -->
  <link rel="stylesheet" href="css/icofont.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Quick Fly CSS-->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link rel="stylesheet" href="css/register.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <style>
    html,
    body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>

<body>
  <!-- Preloader -->
  <?php include 'php/preloader.php'; ?>
  <!-- Get Developer Info -->
  <?php include 'php/developerinfo.php'; ?>

  <!-- Header Area -->
  <?php include("./php/header.php"); ?>
  <!-- Start Appointment Area -->
  <div class="appointment">
    <h2 class="appointment-title text-center pt-2 pb-4 px-2">Get an <span style="color: #594bf1; font-weight: 600;">Appointment</span></h2>
    <div class="appointment-form">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" name="name" id="name" placeholder="Full Name" class="form-input" required />
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone Number</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-input" required />
        </div>
        <div class="d-flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="mb-3 w-full">
              <label for="date" class="form-label">Date</label>
              <input type="date" name="date" id="date" class="form-input" required />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="mb-3">
              <label for="time" class="form-label">Time</label>
              <input type="time" name="time" id="time" class="form-input" required />
            </div>
          </div>
        </div>
        <div class="mb-3 pt-1">
          <label class="form-label">Address Details</label>
          <div class="d-flex flex-wrap formbold--mx-3">
            <div class="w-full sm:w-half formbold-px-3">
              <div class="mb-3">
                <input type="text" name="area" id="area" placeholder="Enter area" class="form-input" required />
              </div>
            </div>
            <div class="w-full sm:w-half formbold-px-3">
              <div class="mb-3">
                <input type="text" name="city" id="city" placeholder="Enter city" class="form-input" required />
              </div>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="services" class="form-label">What services are you interested in?</label>
          <textarea name="services" id="services" placeholder="Type here" class="form-input" rows="4" required></textarea>
        </div>
        <div>
          <button class="form-btn" name="submit" type="submit">Book Appointment</button>
        </div>
      </form>
    </div>
  </div>
  <!-- Footer Area -->
  <?php include("./php/footer.php") ?>

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