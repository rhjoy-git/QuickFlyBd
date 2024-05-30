<?php
// Dynamic data (this could come from a database or other sources)
$schedules = [
    [
        'title' => 'Travel Packages',
        'image' => 'img/schedule/travel1.png',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, consequatur vero sint dolorum eos quod.',
        'class' => 'blue'
    ],
    [
        'title' => 'Flight Ticket',
        'image' => 'img/schedule/ticket3.png',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, consequatur vero sint dolorum eos quod.',
        'class' => 'yellow'
    ],
    [
        'title' => 'Visa & Passport',
        'image' => 'img/schedule/passport2.png',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, consequatur vero sint dolorum eos quod.',
        'class' => 'dark-blue'
    ],
    [
        'title' => 'Man Power',
        'image' => 'img/schedule/manpower4.png',
        'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, consequatur vero sint dolorum eos quod.',
        'class' => 'green'
    ]
];
?>

<section class="schedule">
  <div class="container-fluid">
    <div class="schedule-inner">
      <div class="row justify-content-center align-items-center">
        <?php foreach ($schedules as $schedule): ?>
          <div class="col-xl-3 col-lg-6 col-md-6 col-12 p-md-1">
            <!-- single-schedule -->
            <div class="single-schedule <?php echo $schedule['class']; ?>">
              <div class="schedule-title text-center">
                <h3><?php echo $schedule['title']; ?></h3>
              </div>
              <div class="schedule-content">
                <div class="schedule-img">
                  <img src="<?php echo $schedule['image']; ?>" alt="<?php echo $schedule['title']; ?>" />
                </div>
                <div class="schedule-text">
                  <p id="card-text">
                    <?php echo $schedule['description']; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
