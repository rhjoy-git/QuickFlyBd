<?php
// Array of clients (this could come from a database)
$clients = [
    'italy.png',
    'china.png',
    'palestine.png',
    'philippine.png',
    'turkey.png',
    'qatar.png',
    'spain.png',
    'brazil.png',
    'india.png',
    'germany.png'
];
?>

<div class="clients overlay-pic mt-lg-5">
    <div class="container-fluid">
        <h2 class="clients-title">We Work With</h2>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel clients-slider">
                    <?php foreach ($clients as $client): ?>
                    <div class="single-clients">
                        <img src="img/countryflag/<?php echo $client; ?>" alt="#" />
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
