<?php
// Dynamic data (this could come from a database or other sources)
$slides = [
    [
        'image' => 'img/slider/slider1.jpg',
        'title' => 'We Provide <span>Travel</span> Packages That You Can <span>Trust!</span>',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.',
        'buttons' => [
            ['text' => 'Get Appointment', 'link' => 'contact.html', 'class' => 'btn'],
            ['text' => 'Learn More', 'link' => '#', 'class' => 'btn primary']
        ]
    ],
    [
        'image' => 'img/slider/slider2.jpg',
        'title' => 'We Provide <span>Hajj & Umrah</span> Packages That You Can <span>Trust!</span>',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.',
        'buttons' => [
            ['text' => 'Get Appointment', 'link' => 'contact.html', 'class' => 'btn'],
            ['text' => 'About Us', 'link' => '#', 'class' => 'btn primary']
        ]
    ],
    [
        'image' => 'img/slider/slider3.jpg',
        'title' => 'We Provide <span>Flight Ticket</span> That You Can <span>Trust!</span>',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.',
        'buttons' => [
            ['text' => 'Get Appointment', 'link' => 'contact.html', 'class' => 'btn'],
            ['text' => 'Contact Now', 'link' => '#', 'class' => 'btn primary']
        ]
    ],
    [
        'image' => 'img/slider/slider4.jpg',
        'title' => 'We Provide <span>Man Power</span> Services That You Can <span>Trust!</span>',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.',
        'buttons' => [
            ['text' => 'Get Appointment', 'link' => 'contact.html', 'class' => 'btn'],
            ['text' => 'Contact Now', 'link' => '#', 'class' => 'btn primary']
        ]
    ],
    [
        'image' => 'img/slider/slider5.jpg',
        'title' => 'We Provide <span>Visa & Passport</span> Process services That You Can <span>Trust!</span>',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed nisl pellentesque, faucibus libero eu, gravida quam.',
        'buttons' => [
            ['text' => 'Get Appointment', 'link' => 'contact.html', 'class' => 'btn'],
            ['text' => 'Contact Now', 'link' => '#', 'class' => 'btn primary']
        ]
    ]
];
?>

<!-- Slider Area -->
<section class="slider">
  <div class="hero-slider">
    <?php foreach ($slides as $slide): ?>
      <!-- Start Single Slider -->
      <div class="single-slider" style="background-image: url('<?php echo $slide['image']; ?>')">
        <div class="container">
          <div class="row ">
            <div class="col-xl-7 col-lg-8">
              <div class="text">
                <h1><?php echo $slide['title']; ?></h1>
                <p><?php echo $slide['description']; ?></p>
                <div class="button">
                  <?php foreach ($slide['buttons'] as $button): ?>
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
