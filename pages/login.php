<?php
$PageTitle = "লগইন | প্রকল্প বাস্তবায়ন কর্মকর্তা - বাতায়ন";
$currentPage = 'login';
include('../inc/header_1.php');
?>

<?php
include('../inc/navbar_1.php');
?>

<section class="container-fluid bg-light">
    <div class="container my-shadow pt-2 pb-2" style="min-height:745px;">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="bg-dark text-center text-white p-2">লগইন</h5>
            </div>
        </div>
        <div class="row justify-content-center p-3 my-login">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
                <p class="text-center text-danger">
                    <u>Admin Login :</u> username = admin; password = 123
                </p>
                <form method="POST" action="../auth.php" class="needs-validation" novalidate style="max-width: 550px;">
                    <div class="row align-items-center p-2">
                        <div class="col-md-12">
                            <label for="email">Email or Username: <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email or username" required>
                            <div class="invalid-feedback">Please provide a valid e-mail or username.</div>
                        </div>
                    </div>
                    <div class="row align-items-center p-2">
                        <div class="col-md-12">
                            <label for="password">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" minlength="3" required>
                        </div>
                    </div>
                    <div class="row align-items-center p-2 pb-0">
                        <div class="col-md-6">
                            <div class="form-check py-2">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="checkbox">Remember me!
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="py-2">
                                <a href="#">Forgate username or password?</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row p-2">
                            <input type="submit" value="Login now" class="btn btn-primary mt-3 bt" name="login">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

<?php include('../inc/footer_1.php'); ?>