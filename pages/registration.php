<?php
$PageTitle = "নিবন্ধন | প্রকল্প বাস্তবায়ন কর্মকর্তা - বাতায়ন";
$currentPage = 'registration';
include('../inc/header_1.php');
?>

<?php
include('../inc/navbar_1.php');
?>

<section class="container-fluid bg-light">
    <div class="container my-shadow pt-2 pb-2" style="min-height:745px;">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="bg-dark text-center text-white p-2">নিবন্ধন</h5>
                </h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6 my-reg">
                <form method="POST" action="#" class="needs-validation" novalidate>
                    <div class="row align-items-center p-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your first name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your last name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center p-2">
                        <div class="col-md-12">
                            <label for="email">Email: <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            <div class="invalid-feedback">Please provide a valid e-mail.</div>
                        </div>
                    </div>
                    <div class="row align-items-center p-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone Number:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone number" value="+8801" minlength="11" maxlength="14" required>
                                <div class="invalid-feedback">Please provide a valid phone number.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sex">Gender</label>
                                <select id="sex" class="form-control browser-default custom-select">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="unspesified">Unspecified</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row align-items-center p-2">
                        <div class="col-md-6"><label for="password">Password *</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password min 3 char" minlength="3" required>
                        </div>
                        <div class="col-md-6">
                            <label for="password">Re-Password *</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password" minlength="3" required>
                        </div>
                    </div> -->
                    <div class="row justify-content-start p-2">
                        <div class="col">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="checkbox" required>
                                    I Read and Accept <a href="https://cse.tariqul.xyz/pages/t&c.php">Terms and Conditions</a>
                                </label>
                            </div>
                            <input type="submit" value="Submit" class="btn btn-primary mt-3 bt">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include('../inc/footer_1.php'); ?>