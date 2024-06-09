<?php
include('config.php');

// SQL query to select all services
$sql = 'SELECT * FROM `features`';
$result = $conn->query($sql);

$features = [];

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Fetch the results and store them in the $services array
    while ($row = $result->fetch_assoc()) {
        $features[] = $row;
    }
}

// Close the database connection
$conn->close();
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