<?php
// Dynamic data (this could come from a database or other sources)
include("config.php");

// Fetch slides
$sql = "SELECT * FROM slides";
$result = $conn->query($sql);

$slides = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $slide_id = $row['id'];
        $row['buttons'] = []; // Initialize buttons array for each slide
        $slides[$slide_id] = $row;
    }

    // Fetch buttons for each slide
    $sql = "SELECT * FROM slide_buttons";
    $button_result = $conn->query($sql);

    if ($button_result->num_rows > 0) {
        while ($button_row = $button_result->fetch_assoc()) {
            $slide_id = $button_row['slide_id'];
            $slides[$slide_id]['buttons'][] = $button_row;
        }
    }
}

$conn->close();
?>

<!-- Slider Area -->
<section class="slider">
    <div class="hero-slider">
        <?php foreach ($slides as $slide) : ?>
            <!-- Start Single Slider -->
            <div class="single-slider" style="background-image: url('<?php echo $slide['image']; ?>')">
                <div class="container">
                    <div class="row ">
                        <div class="col-xl-7 col-lg-8">
                            <div class="text">
                                <h1><?php echo $slide['title']; ?></h1>
                                <p><?php echo $slide['description']; ?></p>
                                <div class="button">
                                    <?php foreach ($slide['buttons'] as $button) : ?>
                                        <a href="<?php echo $button['link']; ?>" class="<?php echo $button['class']; ?>"><?php echo $button['text']; ?></a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Slider -->
        <?php endforeach; ?>
    </div>
</section>
<!--/ End Slider Area -->
