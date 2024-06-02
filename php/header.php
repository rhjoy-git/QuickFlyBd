<?php
// Dynamic data (this could come from a database or other sources)
$logo_url = "img/logov.png";
$menu_items = [
    ['id' => 'home', 'name' => 'Home', 'link' => 'index.php', 'submenu' => []],
    ['id' => 'visaService', 'name' => 'Visa Services', 'link' => '#', 'submenu' => [
        ['name' => 'Malaysia', 'link' => '#malaysia', 'id' => 'malaysia'],
        ['name' => 'Singapore', 'link' => '#singapore', 'id' => 'singapore'],
        ['name' => 'Thailand', 'link' => '#thailand', 'id' => 'thailand'],
        ['name' => 'Dubai', 'link' => '#dubai', 'id' => 'dubai'],
        ['name' => 'China', 'link' => '#china', 'id' => 'china'],
        ['name' => 'Vietnam', 'link' => '#vietnam', 'id' => 'vietnam'],
        ['name' => 'Schengen Area', 'link' => '#schengenarea', 'id' => 'schengenarea']
    ]],
    ['id' => 'hajjUmra', 'name' => 'Hajj & Umrah', 'link' => '#', 'class' => 'sparkle sparkle-blink bg-danger', 'submenu' => []],
    ['id' => 'airTicket', 'name' => 'Air Ticket', 'link' => './airticket.php', 'submenu' => []],
    ['id' => 'tourpackage', 'name' => 'Tour Package', 'link' => 'blog.php', 'submenu' => []],
    ['id' => 'manPower', 'name' => 'Man Power', 'link' => 'blog.php', 'submenu' => []],
    ['id' => 'contact', 'name' => 'Contact', 'link' => 'contact.php', 'submenu' => []]
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
                                        <li class="<?php echo isset($item['class']) ? $item['class'] : ''; ?>" id="<?php echo $item['id'];?>">
                                            <a href="<?php echo $item['link']; ?>"><?php echo $item['name']; ?>
                                                <?php if (!empty($item['submenu'])) : ?><i class="icofont-rounded-down"></i><?php endif; ?>
                                            </a>
                                            <?php if (!empty($item['submenu'])) : ?>
                                                <ul class="dropdown">
                                                    <?php foreach ($item['submenu'] as $submenu) : ?>
                                                        <li><a href="<?php echo $submenu['link']; ?>" id="<?php echo $submenu['id']; ?>"><?php echo $submenu['name']; ?></a></li>
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