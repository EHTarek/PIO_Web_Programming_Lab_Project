    <!--Navbar Begin-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark my-navbar">
        <div class="container">
            <a href="../index.php" class="navbar-brand py-3">
                <h1 class="my-title">প্রকল্প বাস্তবায়ন কর্মকর্তা - বাতায়ন</h1>
            </a>

            <ul class="social-network social-circle nav-item nav-link my-display-1">
                <li><a href="#" class="icoYt" title="Youtube"><i class="fa fa-youtube-play""></i></a></li>
                <li><a href=" #" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <nav class="navbar-expand-lg navbar-light bg-primary mt-0 sticky-top my-menu">

        <div class="container ">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="../index.php" class="nav-item nav-link text-white <?php echo $currentPage == 'index' ? 'active' : ' ' ?> "><i class="fas fa-home"></i></a>
                    <a href="services.php" class="nav-item nav-link text-white <?php echo $currentPage == 'services' ? 'active' : '' ?> ">সেবা সমুহ</a>
                    <a href="about.php" class="nav-item nav-link text-white <?php echo $currentPage == 'about' ? 'active' : '' ?> ">আমাদের সম্পর্কে</a>
                    <a href="news.php" class="nav-item nav-link text-white <?php echo $currentPage == 'news' ? 'active' : '' ?> ">সাম্প্রতিক খবর</a>
                    <a href="videos.php" class="nav-item nav-link text-white <?php echo $currentPage == 'videos' ? 'active' : '' ?> ">ভিডিও গ্যালারী</a>
                    <a href="contact.php" class="nav-item nav-link text-white <?php echo $currentPage == 'contact' ? 'active' : '' ?> ">যোগাযোগ করুন</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="registration.php" class="nav-item nav-link text-white <?php echo $currentPage == 'registration' ? 'active' : '' ?> ">নিবন্ধন</a>
                    <a href="login.php" class="nav-item nav-link text-white <?php echo $currentPage == 'login' ? 'active' : '' ?> ">প্রবেশ করুন</a>

                    <ul class="social-network social-circle nav-item nav-link my-display">
                        <li><a href="#" class="icoYt" title="Youtube"><i class="fa fa-youtube-play""></i></a></li>
                        <li><a href=" #" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!--Navbar End-->