<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="Site keywords here" />
    <meta name="description" content="" />
    <meta name="copyright" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    <title>Quick Fly | Register</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.png" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />

    <!-- icofont CSS -->
    <link rel="stylesheet" href="css/icofont.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Quick Fly CSS-->
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/register.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <?php include 'php/preloader.php'; ?>
    <!-- Get Developer Info -->
    <?php include 'php/developerinfo.php'; ?>
    <!-- Header Area -->
    <?php include 'php/header.php'; ?>
    <!-- Start Appointment Area -->
    <div class="appointment">
        <h2 class="appointment-title text-center pt-2 pb-4 px-2">
            Get <span style="color: #594bf1; font-weight: 600;">Registration</span>
        </h2>
        <div class="appointment-form">
            <form action="./php/create.php" method="POST" id="registration-form">
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Full Name" class="form-input" required />
                    <div id="name-error" class="error-message"></div> <!-- Error message container -->
                </div>
                <div class="mb-3 phone-number">
                    <label for="phone" class="form-label">Phone Number</label>
                    <div class="d-flex align-items-center">
                        <span class="form-span">+880</span>
                        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" class="form-input border-left-0" pattern="[0-9]{10}" required />
                    </div>
                    <div id="phone-error" class="error-message"></div> <!-- Error message container -->
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-input" required />
                    <div id="email-error" class="error-message"></div> <!-- Error message container -->
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select name="gender" id="gender" class="form-input" required>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="prefer_not_to_say">Prefer not to say</option>
                    </select>
                    <div id="gender-error" class="error-message"></div> <!-- Error message container -->
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="form-input" required />
                    <div id="password-error" class="error-message"></div> <!-- Error message container -->
                </div>
                <div class="mb-3 text-center">
                    <h6>Already have an account? <a class="text-danger" href="./signin.php">Sign In</a></h6>
                </div>
                <div>
                    <button class="form-btn" name="submit" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Appointment Area -->

    <!-- Footer Area -->
    <?php include 'php/copyright.php'; ?>


    <!-- jquery Min JS -->
    <script src="js/jquery.min.js"></script>
    <!-- jquery Migrate JS -->
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>

</html>