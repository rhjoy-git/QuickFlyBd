<?php
$offers = [
    "Premium Offers 1",
    "Premium Offers 2",
    "Premium Offers 3",
    "Premium Offers 4",
    "Premium Offers 5",
    "Premium Offers 6",
    "Premium Offers 7",
    "Premium Offers 8",
    "Premium Offers 9",
    "Premium Offers 10"
];

$packages = [
    [
        "title" => "Economy Umrah Package",
        "image" => "./img/user.jpg",
        "details" => [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet."
        ],
        "price" => "Begins 1,20,000 bdt",
        "link" => "#"
    ],
    [
        "title" => "Economy Umrah Package",
        "image" => "./img/user.jpg",
        "details" => [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet."
        ],
        "price" => "Begins 1,20,000 bdt",
        "link" => "#"
    ]
];
?>


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
    <title>Quick Fly | Umrah & Hajj</title>

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


</head>

<body>

    <section id="umrahajj" class="py-5 " style="background-color: #f7f7f7;">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="package-offers p-1 bg-white rounded">
                        <h4 class="offers-title bg-success rounded p-1">Hajj Management</h4>
                        <ul>
                            <?php foreach ($offers as $offer) : ?>
                                <li><a href="#"><i class="icofont-bubble-right"></i> <?= $offer ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <!--  ========   ==========  -->
                <div class="col-9">
                    <div class="banner">
                        <img src="img/hajj.jpg" class="w-100 rounded" alt="Hajj Banner" />
                    </div>
                    <?php foreach ($packages as $package) : ?>
                        <div class="package py-2">
                            <div class="row align-items-center rounded p-3">
                                <div class="col-3">
                                    <div class="package-img">
                                        <a href="<?= $package['link'] ?>">
                                            <img src="<?= $package['image'] ?>" class="img-fluid rounded" alt="<?= $package['title'] ?>" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 align-self-start">
                                    <div class="package-title">
                                        <a href="<?= $package['link'] ?>">
                                            <h3 class="text-success mb-2"><?= $package['title'] ?></h3>
                                        </a>
                                        <ul>
                                            <?php foreach ($package['details'] as $detail) : ?>
                                                <li class="fs-1"><i class="icofont-swoosh-right"></i> <?= $detail ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="package-price">
                                        <h6><?= $package['price'] ?></h6>
                                        <a href="<?= $package['link'] ?>" class="btn btn-success">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>