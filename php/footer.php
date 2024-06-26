<?php
// Dynamic data (this could come from a database or other sources)
$social_links = [
    ['url' => 'https://www.facebook.com/quickflylimited', 'icon' => 'icofont-facebook'],
    ['url' => 'https://wa.me/+8801620862832', 'icon' => 'icofont-whatsapp'],
    ['url' => 'signin.html', 'icon' => 'icofont-google-plus']
];

$quick_links = [
    ['url' => '#', 'text' => 'Home'],
    ['url' => '#', 'text' => 'About Us'],
    ['url' => '#', 'text' => 'Services'], 
    ['url' => '#', 'text' => 'Consulting'],
    ['url' => '#', 'text' => 'Contact Us']
];

$open_hours = [
    ['day' => 'Monday - Friday', 'time' => '8.00-20.00'],
    ['day' => 'Saturday', 'time' => '9.00-18.30'],
    ['day' => 'Monday - Thursday', 'time' => '9.00-15.00']
];
?>

<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="single-footer px-md-4">
                        <h2>About Us</h2>
                        <p>
                            Lorem ipsum dolor sit am consectetur adipisicing elit do
                            eiusmod tempor incididunt ut labore dolore magna.
                        </p>
                        <!-- Social -->
                        <ul class="social">
                            <?php foreach ($social_links as $link): ?>
                                <li>
                                    <a href="<?php echo $link['url']; ?>"><i class="<?php echo $link['icon']; ?>"></i></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="single-footer f-link px-md-4">
                        <h2>Quick Links</h2>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <?php foreach (array_slice($quick_links, 0, 5) as $link): ?>
                                        <li>
                                            <a href="<?php echo $link['url']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $link['text']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <ul>
                                    <?php foreach (array_slice($quick_links, 5) as $link): ?>
                                        <li>
                                            <a href="<?php echo $link['url']; ?>"><i class="fa fa-caret-right" aria-hidden="true"></i><?php echo $link['text']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="single-footer px-md-4">
                        <h2>Open Hours</h2>
                        <p>
                            Lorem ipsum dolor sit ame consectetur adipisicing elit do
                            eiusmod tempor incididunt.
                        </p>
                        <ul class="time-sidual">
                            <?php foreach ($open_hours as $hours): ?>
                                <li class="day"><?php echo $hours['day']; ?> <span><?php echo $hours['time']; ?></span></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <!--/ End Copyright -->
</footer>
<?php include'copyright.php';?>
