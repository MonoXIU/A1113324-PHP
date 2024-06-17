<?php
    require_once('../../Server Side/function.php');
    session_start();
    require_once('../../Server Side/booking_system.php');
?>

<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <title>Genshin Hotel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--================Header Area =================-->
    <header class="header_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                 <!-- Brand and toggle get grouped for better mobiledisplay -->
                <a class="navbar-brand logo_h" href="index.php"><img src="../image/Logo.png" alt="" style="width: 140px;height: 50px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php">圓神啟動</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">關於我們</a></li>
                        <li class="nav-item"><a class="nav-link" href="accomodation.php">立即預訂</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    <!--================Banner Area =================-->
    <section class="banner_area">
        <div class="booking_table d_flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h6>Away from monotonous life</h6>
                    <h3>奢華與舒適的完美融合，讓您的每一次停留都成為難忘的回憶</h3>
                    <p>The perfect blend of luxury and comfort,<br>  making every stay an unforgettable memory.</p>
                    <a href="accomodation.php" class="btn theme_btn button_hover">Get Started</a>
                </div>
            </div>
        </div>

    <!--================ Accomodation Area  =================-->
    <section class="accomodation_area section_gap">
        <div id="container_acomodation">
            <div class="section_title text-center">
                <h2 class="title_color" style="margin: 5% 0;">探索我們的房間與套房</h2>
                <p>在圓神，我們為您提供多種房型選擇，從精緻的單人房到寬敞的家庭房，再到奢華的高級套房，每一間房間都精心設計，滿足您的所有需求。無論您是商務出差還是度假旅行，我們都能為您提供一個舒適的家。 </p>
                
                <h2 class="title_color" style="margin: 5% 5%;">享受頂級設施與服務</h2>
                <p>我們的飯店設有多樣化的設施，包括室內外游泳池、現代化健身房、舒適的SPA和高端餐廳。我們致力於提供卓越的服務，確保每一位客人都能享受到至高無上的待遇。 </p>
            

            </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->

    <!--================ 舒適標準房  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">舒適標準房<br>Comfort Standard Room</h2>
                        <p>簡單而舒適，適合短期住宿和商務旅客。</p>
                        <a href="room1.php" style="color: #fff;" class="button_hover theme_btn_two">立即預訂</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/room1_1.jpg" style="width:500px;height:500px"  alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ 舒適標準房  =================-->

    <!--================ 家庭豪華房  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/room2_1.jpg" style="width:500px;height:500px" alt="img">
                </div>
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">家庭豪華房<br>Comfort Standard Room</h2>
                        <p>寬敞且適合全家入住，提供額外的空間和便利設施。</p>
                        <a href="room2.php" style="color: #fff;" class="button_hover theme_btn_two">立即預訂</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ 家庭豪華房  =================--></div>
   
    <!--================ 寵物友善房  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">寵物友善房<br>Pet-Friendly Room</h2>
                        <p>為攜帶寵物的客人設計，提供寵物專屬設施。</p>
                        <a href="room3.php" style="color: #fff;" class="button_hover theme_btn_two">立即預訂</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/room3_1.jpg" style="width:500px;height:500px"  alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--================ 寵物友善房  =================-->

    <!--================ 尊榮套房  =================-->
    <section class="about_history_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="../image/room4_1.jpg" style="width:500px;height:500px"  alt="img">
                </div>
                <div class="col-md-6 d_flex align-items-center">
                    <div class="about_content ">
                        <h2 class="title title_color">尊榮套房<br>Prestige Suite</h2>
                        <p>豪華和專屬的住宿選擇，提供頂級設施和服務。</p>
                        <a  href="room4.php" style="color: #fff;" class="button_hover theme_btn_two">立即預訂</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ 尊榮套房  =================-->
    <!--================ Latest Blog Area  =================-->
    <section class="latest_blog_area section_gap">
        <div class="container">
            <div class="section_title text-center">
                
            </div>
            <div class="row mb_30">
                <?php
                    $query_select_blog = $db->prepare('SELECT * FROM blog ORDER BY ID DESC LIMIT 3');
                    $query_select_blog->execute();
                    foreach($query_select_blog as $uData_blog){
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-recent-blog-post">
                                <div class="thumb">
                                    <img class="img-fluid" src="../uploads/blog/<?php echo $uData_blog['image']; ?>" alt="post" id="img_from_db">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <a class="button_hover tag_btn">
                                            ID: <?php echo $uData_blog['ID'];?>
                                        </a>
                                        <a class="button_hover tag_btn"><?php echo $uData_blog['gender']; ?></a>
                                    </div>
                                    <a href="blog-single.php?id=<?php echo $uData_blog['ID']; ?>">
                                        <h4 class="sec_h4"><?php echo $uData_blog['title']; ?></h4>
                                    </a>
                                    <p>
                                        <?php
                                            $max_caracteres = 105;
                                            $texte_blog = $uData_blog['article'];
                                            if (strlen($texte_blog)>$max_caracteres)
                                            {
                                                $texte_blog = substr($texte_blog, 0, $max_caracteres);
                                                $position_espace = strrpos($texte_blog, " ");
                                                $texte_blog = substr($texte_blog, 0, $position_espace);
                                                $texte_blog = $texte_blog."...";
                                            }
                                            echo $texte_blog;
                                        ?>
                                    </p>
                                    <h6 class="date title_color"><?php echo $uData_blog['date_blog'];?></h6>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!--================ Recent Area  =================-->

    <!--================ start footer Area  =================-->
    <?php require_once('footer.php') ?>
    <!--================ End footer Area  =================-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>