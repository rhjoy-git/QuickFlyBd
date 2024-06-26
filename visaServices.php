<?php
include('./php/config.php');

// SQL query to select all visa information
$sql = 'SELECT * FROM visa_info';
$result = $conn->query($sql);

$visaInfo = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Convert pipe-separated lists to arrays
        $row['fees'] = explode('|', $row['fees']);
        $row['visacontacts'] = explode('|', $row['visacontacts']);
        $row['requirements'] = explode('|', $row['requirements']);

        $visaInfo[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Visa Requirements</title>
    <!-- Favicon -->
    <link rel="icon" href="img/logo.png" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Medipro CSS -->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css" />

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
                        <h2>Visa Requirements</h2>
                        <ul class="bread-list">
                            <li><a href="./index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Visa Requirements</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Visa Requirements Area -->
    <section class="py-4 visa-requirement">
        <div class="container">
            <?php foreach ($visaInfo as $visa) : ?>
                <div id="<?php echo htmlspecialchars($visa['id']); ?>" class="py-4 country-area">
                    <h1 id="country" class="fs-1 text-center mb-5 text-uppercase position-relative">
                        <?php echo htmlspecialchars($visa['country']); ?> Visa
                    </h1>
                    <div class="row">
                        <div class="col-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 p-4">
                            <a href="#" class=""><img class="img-fluid rounded-top" src="<?php echo htmlspecialchars($visa['image']); ?>" alt="<?php echo htmlspecialchars($visa['country']); ?>" /></a>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php echo htmlspecialchars($visa['country']); ?>" aria-expanded="true" aria-controls="collapseOne<?php echo htmlspecialchars($visa['country']); ?>">
                                                Visa Fees & service charge.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne<?php echo htmlspecialchars($visa['country']); ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <?php foreach ($visa['fees'] as $fee) : ?>
                                                    <li><i class="icofont-checked text-success"></i> <?php echo htmlspecialchars($fee); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo<?php echo htmlspecialchars($visa['country']); ?>" aria-expanded="false" aria-controls="collapseTwo<?php echo htmlspecialchars($visa['country']); ?>">
                                                Visa Information Contact
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo<?php echo htmlspecialchars($visa['country']); ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <?php foreach ($visa['visacontacts'] as $contact) : ?>
                                                    <li><i class="icofont-checked text-success"></i> <?php echo htmlspecialchars($contact); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree<?php echo htmlspecialchars($visa['country']); ?>" aria-expanded="false" aria-controls="collapseThree<?php echo htmlspecialchars($visa['country']); ?>">
                                                We Accept
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree<?php echo htmlspecialchars($visa['country']); ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            House No:503,(1st Floor),Road No: 9,Baridhara DOHS, Dhaka
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="p-view-1">
                                    <h4><?php echo htmlspecialchars($visa['country']); ?> Visa</h4>
                                    <p><?php echo htmlspecialchars($visa['description']); ?></p>
                                    <h4><?php echo htmlspecialchars($visa['country']); ?> Visa Requirements.</h4>
                                    <ul>
                                        <?php foreach ($visa['requirements'] as $requirement) : ?>
                                            <li><i class="icofont-checked text-success"></i> <?php echo htmlspecialchars($requirement); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- Visa Requirements Area -->
    <!-- Footer Area -->
    <?php include 'php/footer.php'; ?>

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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
</body>

</html>