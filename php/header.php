<?php
// Dynamic data (this could come from a database or other sources)
$logo_url = "img/logov.png";
$menu_items = [
    ['name' => 'Home', 'link' => 'index.php', 'submenu' => []],
    ['name' => 'Visa Services', 'link' => './visaServices.php', 'submenu' => [
        ['name' => 'Malaysia', 'link' => './visaServices.php#malaysia'],
        ['name' => 'Singapore', 'link' => './visaServices.php#singapore'],
        ['name' => 'Thailand', 'link' => './visaServices.php#thailand',],
        ['name' => 'Dubai', 'link' => './visaServices.php#dubai'],
        ['name' => 'China', 'link' => './visaServices.php#china'],
        ['name' => 'Vietnam', 'link' => './visaServices.php#vietnam'],
        ['name' => 'Schengen Area', 'link' => './visaServices.php#schengenarea']
    ]],
    ['name' => 'Hajj & Umrah', 'link' => './umrahajj.php', 'class' => 'sparkle sparkle-blink bg-danger', 'submenu' => []],
    ['name' => 'Air Ticket', 'link' => './airticket.php', 'submenu' => []],
    ['name' => 'Tour Package', 'link' => 'blog.php', 'submenu' => []],
    ['name' => 'Man Power', 'link' => 'blog.php', 'submenu' => []],
    ['name' => 'Contact', 'link' => 'contact.php', 'submenu' => []]
];
?>

<!-- Header Area -->
<header class="header">
    <!-- Topbar -->
    <?php include './php/topbar.php';
    topBar($phone, $email, $facebook_url, $whatsapp_url); ?>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="inner">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="index.php"><img src="<?php echo $logo_url; ?>" alt="#" /></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-xl-9 col-lg-10 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav justify-content-end align-item-center menu">
                                    <?php foreach ($menu_items as $item) : ?>
                                        <li class="<?php echo isset($item['class']) ? $item['class'] : ''; ?>">
                                            <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?>
                                                <?php if (!empty($item['submenu'])) : ?><i class="icofont-rounded-down"></i><?php endif; ?>
                                            </a>
                                            <?php if (!empty($item['submenu'])) : ?>
                                                <ul class="dropdown">
                                                    <?php foreach ($item['submenu'] as $submenu) : ?>
                                                        <li><a href="<?php echo $submenu['link']; ?>"><?php echo $submenu['name']; ?></a></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->