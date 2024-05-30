<?php

$facebook_url = "https://www.facebook.com/quickflylimited";
$google_url = "#"; 

?>

<div class="login-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 mt-lg-5 pt-lg-3 contents">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="form-block">
                            <div class="mb-3">
                                <h3>Sign In to <a href="#"><span class="text-primary">Quick</span> <span class="text-danger">Fly</span></a></h3>
                            </div>
                            <form action="#" method="post">
                                <div class="form-group first">
                                    <label for="email">Email Address</label>
                                    <input type="email" name="email" class="form-control" id="email" required />
                                </div>
                                <div class="form-group last mb-3">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required />
                                </div>

                                <div class="d-flex mb-5 align-items-center">
                                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                                        <input type="checkbox" name="remember_me" checked="checked" />
                                        <div class="control__indicator"></div>
                                    </label>
                                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
                                </div>

                                <input type="submit" value="Log In" class="btn btn-pill text-white btn-block btn-primary" style="background-color: #24ec70; font-size: 1rem;" />

                                <span class="d-block text-center my-4 text-muted">or sign in with</span>

                                <div class="social-login text-center">
                                    <a href="<?php echo $facebook_url; ?>" class="facebook">
                                        <span class="icon-facebook mr-3"></span>
                                    </a>
                                    <a href="<?php echo $google_url; ?>" class="google">
                                        <span class="icon-google mr-3"></span>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>