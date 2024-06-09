<?php
$offers = [
    "Umra Offers 1",
    "Umra Offers 2"
];

$packages = [
    [
        "title" => "Economy Umrah Package",
        "image" => "./img/user.jpg",
        "details" => [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet."
        ],
        "price" => "Begins 1,20,000/-bdt",
        "link" => "#"
    ],
    [
        "title" => "Economy Hajj Package",
        "image" => "./img/user.jpg",
        "details" => [
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet.",
            "Lorem ipsum dolor sit amet."
        ],
        "price" => "Begins 1,20,000/-bdt",
        "link" => "#"
    ]
];
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
                        <h2>Umrah and Hajj</h2>
                        <ul class="bread-list">
                            <li><a href="./index.php">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Umrah and Hajj</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->


    <section id="umrahajj" class="py-2" style="background-color: #f7f7f7;">
        <div class="container">
            <div class="row">
                <div class="col-12 p-3">
                    <p class="umrahajj-title">Cheap & Affordable Umrah Packages 2024 | All-in-one Umrah Offers from Bangladesh</p>
                    <div class="banner py-2">
                        <img src="img/hajj.jpg" class="w-100 rounded" alt="Hajj Banner" />
                    </div>
                </div>
                <!--  ========  Packages  ==========  -->
                <div class=" col-12 col-md-4 col-lg-3">
                    <div class="package-offers p-1 bg-white rounded mb-3">
                        <a href="#hajjcollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="hajjcollapse">
                            <h4 class="link offers-title bg-success rounded ">Hajj Packages <i class="icofont-stylish-down"></i></h4>
                        </a>
                        <ul id="hajjcollapse" class="collapse">
                            <?php foreach ($offers as $offer) : ?>
                                <li><a href=""><i class="icofont-hand-right"></i><?= $offer ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="package-offers p-1 bg-white rounded mb-3">
                        <a href="#umracollapse" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="umracollapse">
                            <h4 class="link offers-title bg-success rounded ">Umrah Packages <i class="icofont-stylish-down"></i></h4>
                        </a>
                        <ul id="umracollapse" class="collapse">
                            <?php foreach ($offers as $offer) : ?>
                                <li><a href=""><i class="icofont-hand-right"></i><?= $offer ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
                <!--  ========  ==========  -->
                <div class="col-md-8 col-lg-9">
                    <?php foreach ($packages as $package) : ?>
                        <div class="package py-2 pt-md-0 pb-md-2">
                            <div class="row align-items-center justify-content-center rounded p-3">
                                <div class="col-md-12 col-lg-3">
                                    <div class="package-img">
                                        <a href="<?= $package['link'] ?>">
                                            <img src="<?= $package['image'] ?>" class="w-100 img-fluid rounded" alt="<?= $package['title'] ?>" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-lg-6 align-self-start">
                                    <div class="package-title">
                                        <a href="<?= $package['link'] ?>" class="title">
                                            <h3 class="text-success mb-2"><?= $package['title'] ?></h3>
                                        </a>
                                        <ul>
                                            <?php foreach ($package['details'] as $detail) : ?>
                                                <li><i class="icofont-hand-drawn-right"></i> <?= $detail ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="package-price">
                                        <h6 class="my-3"><?= $package['price'] ?></h6>
                                        <a href="<?= $package['link'] ?>" class="btn btn-success text-center">Details</a>
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
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Main JS -->
    <script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>