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
                <h6>Already have an account <a class="text-danger" href="./signin.php">Sign In</a></h6>
            </div>
            <div>
                <button class="form-btn" name="submit" type="submit">Register</button>
            </div>
        </form>
    </div>
</div>