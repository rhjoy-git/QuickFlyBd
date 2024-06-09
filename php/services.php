<?php
include('config.php');

// SQL query to select all services
$sql = 'SELECT * FROM `services`';
$result = $conn->query($sql);

$services = [];

// Check if the query returned any results
if ($result->num_rows > 0) {
    // Fetch the results and store them in the $services array
    while ($row = $result->fetch_assoc()) {
        $services[] = $row;
    }
}

// Close the database connection
$conn->close();
?>

<section class="section services my-4 p-0">
    <div class="container">
        <div class="row">
            <?php foreach ($services as $service): ?>
            <div class="col-lg-3 col-md-3 col-6 mb-3 px-2">
                <a href="<?php echo htmlspecialchars($service['link']); ?>" class="m-1">
                    <img src="<?php echo htmlspecialchars($service['imgSrc']); ?>" class="<?php echo htmlspecialchars($service['class']); ?>" alt="<?php echo htmlspecialchars($service['alt']); ?>">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
