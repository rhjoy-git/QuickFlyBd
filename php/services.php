<?php
$services = [
    ["title" => "visa","link" => "./visaservice.php" , "imgSrc" => "./img/services/visa.jpg", "class" => "w-100 rounded zoom-on-hover shadow border", "alt" => "visa service"],
    ["title" => "air-ticket","link" => "./airticket.php" , "imgSrc" => "./img/services/air-ticket.jpg", "class" => "w-100 rounded zoom-on-hover shadow border", "alt" => "air ticket service"],
    ["title" => "umrah","link" => "./umrahajj.php" , "imgSrc" => "./img/services/umrah.jpg", "class" => "w-100 rounded zoom-on-hover shadow border", "alt" => "umrah service"],
    ["title" => "hajj","link" => "./umrahajj.php" , "imgSrc" => "./img/services/hajj.jpg", "class" => "w-100 rounded zoom-on-hover shadow border", "alt" => "hajj service"]
];
?>

<section class="section services my-4 p-0">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-lg-3 col-md-3 col-6 mb-3 px-2">
                <a href="<?php echo $service['link'] ?>" class="m-1">
                    <img src="<?php echo $service['imgSrc'] ?>" class="<?php echo $service['class'] ?>" alt="<?php echo $service['alt'] ?>">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>