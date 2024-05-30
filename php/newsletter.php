<?php
// Newsletter section content (could be fetched from a database if needed)
$newsletterTitle = "Sign up for newsletter";
$newsletterText = "Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu, homero alterum.";
$newsletterPlaceholder = "Your email address";
$newsletterButtonText = "Subscribe";
?>

<section class="newsletter section pt-lg-5 pb-lg-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-text">
                    <h6><?php echo $newsletterTitle; ?></h6>
                    <p class="">
                        <?php echo $newsletterText; ?>
                    </p>
                </div>
                <!-- End Newsletter Form -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Newsletter Form -->
                <div class="subscribe-form">
                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                        <input name="EMAIL" placeholder="<?php echo $newsletterPlaceholder; ?>" class="common-input" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = '<?php echo $newsletterPlaceholder; ?>'" required="" type="email" />
                        <button class="btn"><?php echo $newsletterButtonText; ?></button>
                    </form>
                </div>
                <!-- End Newsletter Form -->
            </div>
        </div>
    </div>
</section>
