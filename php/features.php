<?php
// Dynamic data (this could come from a database or other sources)
$features = [
    [
        'icon' => 'img/Civil Aviation.png',
        'alt' => 'Civil Aviation icon',
        'text' => 'Civil Aviation<br />Authorized'
    ],
    [
        'icon' => 'img/bank.png',
        'alt' => 'secure icon',
        'text' => '100% Secure<br />Payments'
    ],
    [
        'icon' => 'img/call-support.png',
        'alt' => 'call support icon',
        'text' => '24/7 Support<br />During tour'
    ],
    [
        'icon' => 'img/bestoffer.png',
        'alt' => 'best choice icon',
        'text' => 'All the best offers<br />in one place'
    ]
];
?>

<section class="features section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You & Your Family</h2>
                    <img src="img/section-img.png" alt="#" />
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($features as $feature) : ?>
                <div class="col-lg-3 col-6 feature-item">
                    <!-- Start Single feature -->
                    <div class="single-feature">
                        <div class="single-icon">
                            <img class="img-fluid" src="<?php echo $feature['icon']; ?>" alt="<?php echo $feature['alt']; ?>" />
                        </div>
                        <p><?php echo $feature['text']; ?></p>
                    </div>
                    <!-- End Single feature -->
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>