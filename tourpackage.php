<?php
include('./php/config.php');

// SQL Query to fetch tour packages
$sql = "SELECT * FROM `tourPackages`";
$result = $conn->query($sql);

$tour_packages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $tour_packages[] = $row;
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
    <title>Quick Fly | Tour Packages</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/favicon.png" />

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
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:wght@100..900&display=swap');
    </style>
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
                        <h2>Tour Package</h2>
                        <ul class="bread-list">
                            <li><a href="./index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Tour Package</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($tour_packages as $package) : ?>
                    <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <div class="card border-0 tour-pack-item h-100">
                            <img class="card-img-top img-fluid rounded" src="<?php echo $package['image']; ?>" alt="Card image cap" />
                            <div class="card-body">
                                <a href="#">
                                    <h5 class="card-title">
                                        <?php echo $package['title']; ?>
                                    </h5>
                                </a>
                                <div class="content-box p-3">
                                    <p class="price-text text-danger mb-2">
                                        <?php echo $package['price']; ?>
                                    </p>
                                    <div class="mb-1">
                                        <?php foreach (json_decode($package['badges'], true)['countries'] as $country) : ?>
                                            <span class="badge bg-blue-2"><?php echo $country; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="mb-0">
                                        <span class="badge bg-light-blue"><?php echo json_decode($package['badges'], true)['type']; ?></span>
                                    </div>
                                </div>
                                <a href="<?php echo $package['link']; ?>" class="btn btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer Area -->
    <?php include 'php/copyright.php'; ?>

    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Main JS -->
    <script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>