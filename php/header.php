<?php
include('config.php');

$logo_url = "img/logov.png";

// SQL Query to fetch menu items
$sql = "SELECT * FROM `menu_items`";
$result = $conn->query($sql);

$menu_items = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $menu_items[] = $row;
    }

    foreach ($menu_items as $index => $menu_item) {
        $sql = "SELECT * FROM `sub_menu_items` WHERE `menu_item_id` = " . $menu_item['id'];
        $sub_result = $conn->query($sql);

        $submenu_items = [];
        if ($sub_result->num_rows > 0) {
            while ($sub_row = $sub_result->fetch_assoc()) {
                $submenu_items[] = $sub_row;
            }
        }
        $menu_items[$index]['submenu'] = $submenu_items; // Update the original array
    }
}
$conn->close();
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
