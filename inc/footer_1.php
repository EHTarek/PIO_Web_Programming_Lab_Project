    <!-- Footer  Start-->
    <footer class="container-fluid bg-dark my-footer">
        <div class="container ">
            <button onclick="scrollToTop()" id="to-top" title="Go to top"><i class="fas fa-arrow-alt-circle-up"></i></button>
            <div class="row  row-no-gutters" id="bottom-footer">
                <div class="col-md-12 col-lg-6 text-center">
                    <ul class="vertical-links small">
                        <li><a href="privacy.php" class="<?php echo $currentPage == 'privacy' ? 'active_footer' : '' ?>">গোপনীয়তা</a></li>
                        <li><a href="t&c.php" class="<?php echo $currentPage == 't&c' ? 'active_footer' : '' ?>">শর্তাবলী</a></li>
                        <li><a href="sitemap.php" class="<?php echo $currentPage == 'sitemap' ? 'active_footer' : '' ?>">সাইট ম্যাপ</a></li>
                        <li><a href="contact.php" class="<?php echo $currentPage == 'contact' ? 'active_footer' : '' ?>">যোগাযোগ করুন</a></li>
                    </ul>
                </div>

                <div class="col-md-12 col-lg-6 text-center">
                    <ul>
                        <li class="small">&copy; কপিরাইট, <?php
                                                            $currentDate = date("Y");
                                                            $engDATE = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
                                                            $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০');
                                                            $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
                                                            echo "$convertedDATE";
                                                            ?>। সমস্ত অধিকার সংরক্ষিত।</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script src="https://kit.fontawesome.com/61d3528968.js" crossorigin="anonymous"></script>

    <!-- Custom javaScript goes here -->
    <script src="../assets/js/myScript.js"></script>
    </body>

    </html>