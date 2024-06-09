<?php
include('config.php');

// SQL query to select the video data
$sql = 'SELECT * FROM video LIMIT 1';
$result = $conn->query($sql);

$video = [];

if ($result->num_rows > 0) {
    $video = $result->fetch_assoc();
    
    // Convert pipe-separated lists to arrays
    $video['list1'] = explode('|', $video['list1']);
    $video['list2'] = explode('|', $video['list2']);
}

$conn->close();
?>

<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Latest Blog Video</h2>
                    <img src="<?php echo $video['video_img']; ?>" alt="#" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <!-- Start Choose Left -->
                <div class="choose-left">
                    <h3><?php echo $video['title']; ?></h3>
                    <p><?php echo $video['description1']; ?></p>
                    <p><?php echo $video['description2']; ?></p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list">
                                <?php foreach ($video['list1'] as $item): ?>
                                    <li><i class="fa fa-caret-right"></i><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list">
                                <?php foreach ($video['list2'] as $item): ?>
                                    <li><i class="fa fa-caret-right"></i><?php echo $item; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Choose Left -->
            </div>
            <div class="col-lg-6 col-12">
                <!-- Start Choose Rights -->
                <div class="choose-right">
                    <div class="video-image">
                        <!-- Video Animation -->
                        <div class="promo-video">
                            <div class="waves-block">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                        <!--/ End Video Animation -->
                        <a href="<?php echo $video['video_url']; ?>" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <!-- End Choose Rights -->
            </div>
        </div>
    </div>
</section>
