<div class="appointment">
    <h2 class="appointment-title text-center pt-2 pb-4 px-2">Get an <span style="color: #594bf1; font-weight: 600;">Appointment</span></h2>
    <div class="appointment-form">
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Full Name" class="form-input" required />
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="form-input" required />
            </div>
            <div class="d-flex flex-wrap formbold--mx-3">
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="mb-3 w-full">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" name="date" id="date" class="form-input" required />
                    </div>
                </div>
                <div class="w-full sm:w-half formbold-px-3">
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" name="time" id="time" class="form-input" required />
                    </div>
                </div>
            </div>
            <div class="mb-3 pt-1">
                <label class="form-label">Address Details</label>
                <div class="d-flex flex-wrap formbold--mx-3">
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="mb-3">
                            <input type="text" name="area" id="area" placeholder="Enter area" class="form-input" required />
                        </div>
                    </div>
                    <div class="w-full sm:w-half formbold-px-3">
                        <div class="mb-3">
                            <input type="text" name="city" id="city" placeholder="Enter city" class="form-input" required />
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="services" class="form-label">What services are you interested in?</label>
                <textarea name="services" id="services" placeholder="Type here" class="form-input" rows="4" required></textarea>
            </div>
            <div>
                <button class="form-btn" name="submit" type="submit">Book Appointment</button>
            </div>
        </form>
    </div>
</div>