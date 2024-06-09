<?php
include("./php/config.php");

$update_date = date("d M Y"); // Dynamic update date

// Fetch flights from the database
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);

$flights = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $flights[] = $row;
  }
}

$conn->close();
?>


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
  <title>Quick Fly</title>

  <!-- Favicon -->
  <link rel="icon" href="img/logo.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Medipro CSS -->
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- Nice Select CSS -->
  <link rel="stylesheet" href="css/nice-select.css" />
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- icofont CSS -->
  <link rel="stylesheet" href="css/icofont.css" />
  <!-- Slicknav -->
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <!-- Owl Carousel CSS -->
  <link rel="stylesheet" href="css/owl-carousel.css" />
  <!-- Datepicker CSS -->
  <link rel="stylesheet" href="css/datepicker.css" />
  <!-- Animate CSS -->
  <link rel="stylesheet" href="css/animate.min.css" />
  <!-- Magnific Popup CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css" />
</head>

<body class="d-flex flex-column">
  <!-- Preloader -->
  <?php include 'php/preloader.php'; ?>
  <!-- Get Developer Info -->
  <?php include 'php/developerinfo.php'; ?>
  <!-- Header Area -->
  <?php include 'php/header.php'; ?>

  <section class="section air-ticket">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="h1 text-center py-3">TOP FLIGHT DEALS</h1>
          <p class="h4 pb-2">Update: <?php echo $update_date; ?></p>
          <table class="table-striped">
            <thead>
              <tr>
                <th>Destination</th>
                <th>One Way</th>
                <th>Round Trip</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($flights as $flight) : ?>
                <tr>
                  <td>
                    <p><?php echo $flight["origin"] . " - " . $flight["destination"]; ?></p>
                  </td>
                  <td>
                    <p><?php echo $flight["price1"]; ?></p>
                  </td>
                  <td>
                    <p><?php echo $flight["price2"]; ?></p>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <p class="h5">* All prices subject to availability<br>* Lowest prices mentioned</p>
          <p><br><br></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer Area -->
  <?php include 'php/copyright.php'; ?>

  <!-- jquery Min JS -->
  <script src="js/jquery.min.js"></script>
  <!-- jquery Migrate JS -->
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <!-- jquery Ui JS -->
  <script src="js/jquery-ui.min.js"></script>
  <!-- Easing JS -->
  <script src="js/easing.js"></script>
  <!-- Color JS -->
  <script src="js/colors.js"></script>
  <!-- Popper JS -->
  <script src="js/popper.min.js"></script>
  <!-- Bootstrap Datepicker JS -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Jquery Nav JS -->
  <script src="js/jquery.nav.js"></script>
  <!-- Slicknav JS -->
  <script src="js/slicknav.min.js"></script>
  <!-- ScrollUp JS -->
  <script src="js/jquery.scrollUp.min.js"></script>
  <!-- Niceselect JS -->
  <script src="js/niceselect.js"></script>
  <!-- Tilt Jquery JS -->
  <script src="js/tilt.jquery.min.js"></script>
  <!-- Owl Carousel JS -->
  <script src="js/owl-carousel.js"></script>
  <!-- counterup JS -->
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Steller JS -->
  <script src="js/steller.js"></script>
  <!-- Wow JS -->
  <script src="js/wow.min.js"></script>
  <!-- Magnific Popup JS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- Counter Up CDN JS -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Main JS -->
  <script src="js/main.js"></script>
  <!-- Font awesome -->
  <script src="https://kit.fontawesome.com/9bf593570c.js" crossorigin="anonymous"></script>
</body>

</html>