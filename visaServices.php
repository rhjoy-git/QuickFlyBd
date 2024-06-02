<?php
$visaInfo = [
    [
        'country' => 'Thailand',
        'image' => './img/thailand.jpg',
        'fees' => [
            '30 days regular visa : BDT 14,500 (Male)',
            '30 days regular visa : BDT 14,500 (Female)',
            '30 days regular visa : BDT 2,500 (Child)',
            '60 days regular visa : BDT 19,500 (Male)',
            '60 days regular visa : BDT 19,500 (Child)',
            '60 days regular visa : BDT 19,500 (Female)'
        ],
        'description' => 'UTTL is one of the most compliant and renowned Visa supporting agents in Bangladesh. UTTL is having well expert, skilled hands who have sound knowledgeable in processing Visa formalities. Our clients include Banks, Diplomats, Foreign Missions, NGOs, top corporate offices, and Travel Trade Partners.',
        'requirements' => [
            'Passport Validity Minimum 06 Month.',
            '2 copy recent white background photo (35mmx45mm)',
            'Last 6 months Bank statement (Minimum Balance 65,000/= per person)',
            'Bank solvency certificate.',
            'Salary certificate or pay slip (if job holder).',
            'Company trade license photocopy with notarized for the businessman.',
            'NOC and ID card copy (jobholder or student).',
            'Company Letterhead pad (02 copies) & visiting card (02 copies).',
            'Marriage certificate (required if not mention the spouse in the passport).',
            'Birth certificate (if child).'
        ]
    ],
    [
        'country' => 'Malaysia',
        'image' => './img/malaysia.jpg',
        'fees' => [
            '30 days regular visa : BDT 4,500 (Male)',
            '30 days regular visa : BDT 4,500 (Female)',
            '30 days regular visa : BDT 2,500 (Child)',
            '60 days regular visa : BDT 9,500 (Male)',
            '60 days regular visa : BDT 9,500 (Child)',
            '60 days regular visa : BDT 9,500 (Female)'
        ],
        'description' => 'Union Tours and Travels Ltd worked as an authorized visa agent of High Commission of Malaysia for 10 years. It maintains very experienced and skilled team to process Malaysia visa. Our clients are Banks, Diplomats, Foreign Missions, NGOs, Top Corporate offices, and Travel Trade Partners.',
        'requirements' => [
            'Passport Validity Minimum 07 Month.',
            '2 copy recent white background photo matt paper (35mmx50 mm).',
            'Last 6 months bank statement.',
            'Bank solvency certificate.',
            'Company trade license photocopy for the businessman (Notarized required for the first time travelling).',
            'Leave letter and ID card (jobholder & student).',
            'Company pad and visiting card. (02 copies each).',
            'Birth certificate for child & marriage certificate (required if not mention the spouse in the passport or new couple).'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visa Requirements</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <section class="section visa-requirement">
        <div class="container">
            <?php foreach ($visaInfo as $visa) : ?>
                <div id="country-area" class="py-4">
                    <h1 id="country" class="fs-1 text-center mb-5 text-uppercase position-relative">
                        <?= $visa['country'] ?> Visa
                    </h1>
                    <div class="row">
                        <div class="col-12"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12 p-4">
                            <a href="#" class=""><img class="img-fluid rounded-top" src="<?= $visa['image'] ?>" alt="<?= $visa['country'] ?>" /></a>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?= $visa['country'] ?>" aria-expanded="true" aria-controls="collapseOne<?= $visa['country'] ?>">
                                                Visa Fees & service charge.
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne<?= $visa['country'] ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <ul>
                                                <?php foreach ($visa['fees'] as $fee) : ?>
                                                    <li><?= $fee ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo<?= $visa['country'] ?>" aria-expanded="false" aria-controls="collapseTwo<?= $visa['country'] ?>">
                                                Visa Information Contact
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo<?= $visa['country'] ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree<?= $visa['country'] ?>" aria-expanded="false" aria-controls="collapseThree<?= $visa['country'] ?>">
                                                We Accept
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree<?= $visa['country'] ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="p-view-1">
                                    <h4><?= $visa['country'] ?> Visa</h4>
                                    <p><?= $visa['description'] ?></p>
                                    <h4><?= $visa['country'] ?> Visa Requirements.</h4>
                                    <ul>
                                        <?php foreach ($visa['requirements'] as $requirement) : ?>
                                            <li><i class="fa fa-check"></i> <?= $requirement ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>