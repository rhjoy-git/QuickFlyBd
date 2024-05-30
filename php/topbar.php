<?php
$phone = "+880 1515-264011";
$email = "support@yourmail.com";
$facebook_url = "https://www.facebook.com/quickflylimited";
$whatsapp_url = "https://wa.me/+8801620862832";

function topBar($phone, $email, $facebook_url, $whatsapp_url)
{
?>
    <div class="topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact d-sm-flex justify-content-sm-evenly">
                        <li><i class="fa fa-phone"></i><?php echo $phone; ?></li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                    </ul>
                    <!-- End Top Contact -->
                </div>
                <div class="col-md-6 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li>
                            <a href="<?php echo $facebook_url; ?>" target="_blank"><i class="icofont-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo $whatsapp_url; ?>" target="_blank"><i class="icofont-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="register.php" target="_blank"><i class="icofont-user"></i></a>
                        </li>
                    </ul>
                    <!-- End Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
<?php
}

function displayHeader($phone, $email, $facebook_url, $whatsapp_url)
{
?>
    <header class="header">
        <?php topBar($phone, $email, $facebook_url, $whatsapp_url); ?>
    </header>
<?php
}
?>