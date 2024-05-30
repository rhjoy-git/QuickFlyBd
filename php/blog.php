<?php
// Array of blog posts (this could come from a database)
$blogs = [
    [
        'date' => '22 Aug, 2020',
        'title' => 'Masjid al-Haram',
        'link' => 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%B8%E0%A6%9C%E0%A6%BF%E0%A6%A6%E0%A7%87_%E0%A6%B9%E0%A6%BE%E0%A6%B0%E0%A6%BE%E0%A6%AE',
        'image' => 'img/blog1.jpg',
        'description' => 'The Prophet\'s Mosque is the second mosque built by the Islamic prophet Muhammad in Medina, after that of Quba, as well as the second largest mosque and holiest site in Islam, after the Masjid al-Haram in Mecca, in the Saudi region of the Hejaz.'
    ],
    [
        'date' => '15 Apr, 2022',
        'title' => 'Al Masjid an Nabawi',
        'link' => 'https://bn.wikipedia.org/wiki/%E0%A6%AE%E0%A6%B8%E0%A6%9C%E0%A6%BF%E0%A6%A6%E0%A7%87_%E0%A6%A8%E0%A6%AC%E0%A6%AC%E0%A7%80',
        'image' => 'img/blog2.jpg',
        'description' => 'The Prophet\'s Mosque is the second mosque built by the Islamic prophet Muhammad in Medina, after that of Quba, as well as the second largest mosque and holiest site in Islam, after the Masjid al-Haram in Mecca, in the Saudi region of the Hejaz.'
    ],
    [
        'date' => '05 Jun, 2024',
        'title' => 'Al-Aqsa Mosque',
        'link' => 'https://bn.wikipedia.org/wiki/%E0%A6%86%E0%A6%B2-%E0%A6%86%E0%A6%95%E0%A6%B8%E0%A6%BE_%E0%A6%AE%E0%A6%B8%E0%A6%9C%E0%A6%BF%E0%A6%A6',
        'image' => 'img/blog3.jpg',
        'description' => 'Masjid al-Haram, also known as the Sacred Mosque or the Great Mosque of Mecca, is considered to be the most significant mosque in Islam. It encloses the vicinity of the Kaaba in Mecca, in the Mecca Province of Saudi Arabia.'
    ]
];
?>

<section class="blog section" id="blog">
    <div class="container">
        <div class="row">
            <?php foreach ($blogs as $blog): ?>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Blog -->
                <div class="single-blog">
                    <div class="blog-head">
                        <img src="<?php echo $blog['image']; ?>" alt="#" />
                    </div>
                    <div class="blog-body">
                        <div class="blog-content">
                            <div class="date"><?php echo $blog['date']; ?></div>
                            <h2>
                                <a href="<?php echo $blog['link']; ?>"><?php echo $blog['title']; ?></a>
                            </h2>
                            <p id="blog-text" class="text">
                                <?php echo $blog['description']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
