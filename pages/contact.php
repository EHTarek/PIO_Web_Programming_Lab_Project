<?php
$PageTitle = "যোগাযোগ | প্রকল্প বাস্তবায়ন কর্মকর্তা - বাতায়ন";
$currentPage = 'contact';
include('../inc/header_1.php');
?>

<?php
include('../inc/navbar_1.php');
?>

<section class="container-fluid bg-light">
    <div class="container my-shadow pt-2 pb-2" style="min-height:745px;">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h5 class="bg-dark text-center text-white p-2">আপনার মতামত লিখুন</h5>
                <form method="POST" action="#" class="needs-validation" novalidate>
                    <div class="form-group px-2">
                        <label for="fname">Full name: *</label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Your full name..." required>
                        <div class="invalid-feedback">Please provide a valid name.</div>
                        <div class="form-group">
                            <label class="mt-3" for="email">E-mail: *</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your e-mail..." required>
                            <div class="invalid-feedback">Please provide a valid e-mail.</div>
                            <div class="form-group">
                                <label class="mt-3" for="phone">Phone: *</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number..." required>
                                <div class="invalid-feedback">Please provide a valid phone number.</div>
                                <div class="form-group">
                                    <label class="mt-3" for="comment">Your comment</label>
                                    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Your comment here" maxlength="255"></textarea>
                                </div>
                                <input value="Submit form" type="submit" class="btn btn-warning bt">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">
                <h5 class="bg-dark text-center text-white p-2">গুগল ম্যাপ</h5>
                <div class="my-map m-2 img-thumbnail">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14604.271186206654!2d90.4019074!3d23.7806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16b8adb9ffe23b9e!2sDepartment%20of%20Disaster%20Management%20(DDM)!5e0!3m2!1sen!2sbd!4v1619852614680!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('../inc/footer_1.php'); ?>