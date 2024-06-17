<?php
    require_once('../../Server Side/function.php');
    session_start();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Genshin Booking</title>
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
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.php"><img src="../image/Logo.png" alt=""; style="width: 140px;height: 50px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">圓神啟動</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">關於我們</a></li>
                        <li class="nav-item active"><a class="nav-link" href="accomodation.php">立即預訂</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Area =================-->

    

    <!--================ Accomodation Area  =================-->
    
    <section class="accomodation_area section_gap">
        <div class="container">
            <div class="row accomodation_two">
                <!-- Room 1 -->
                <div class="col-md-12">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="../image/room1_1.jpg" alt="" class="img-fluid" id="img_from_db">
                            <div class="overlap-text">
                                <span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="sec_h4">
                                <a href="room1.php">舒適標準房</a>
                            </h3>
                            <p> $1000 <b>/night</b></p>
                            <p>簡單而舒適，適合短期住宿和商務旅客。</p>
                            <p>
                                <a href="room1.php" class="btn theme_btn button_hover btn-sm">Book Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="col-md-12">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="../image/room2_1.jpg" alt=" " class="img-fluid" id="img_from_db">
                            <div class="overlap-text">
                                <span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="sec_h4">
                                <a href="room2.php">家庭豪華房</a>
                            </h3>
                            <p> $3000 <b>/night</b></p>
                            <p>寬敞且適合全家入住，提供額外的空間和便利設施。</p>
                            <p>
                                <a href="room2.php" class="btn theme_btn button_hover btn-sm">Book Now</a>
                            </p>
                        </div>
                    </div>
            </div>
            <!-- Room 3 -->
            <div class="col-md-12">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="../image/room3_1.jpg" alt="" class="img-fluid" id="img_from_db">
                            <div class="overlap-text">
                                <span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="sec_h4">
                                <a href="room3.php">寵物友善房</a>
                            </h3>
                            <p> $5000 <b>/night</b></p>
                            <p>為攜帶寵物的客人設計，提供寵物專屬設施。</p>
                            <p>
                                <a href="room3.php" class="btn theme_btn button_hover btn-sm">Book Now</a>
                            </p>
                        </div>
                    </div>
            </div>
            <!-- Room 4 -->
            <div class="col-md-12">
                    <div class="media d-block room mb-0">
                        <figure>
                            <img src="../image/room4_1.jpg" alt="" class="img-fluid" id="img_from_db">
                            <div class="overlap-text">
                                <span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                    <span class="ion-ios-star"></span>
                                </span>
                            </div>
                        </figure>
                        <div class="media-body">
                            <h3 class="sec_h4">
                                <a href="room4.php">尊榮套房</a>
                            </h3>
                            <p> $10000 <b>/night</b></p>
                            <p>豪華和專屬的住宿選擇，提供頂級設施和服務。</p>
                            <p>
                                <a  href="room4.php" class="btn theme_btn button_hover btn-sm">Book Now</a>
                            </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--================ Accomodation Area  =================-->
    


    <!-- ================ modall ================ -->
    <?php 
        if (isset($bookingMsg)){
        ?>
    <div id="modal">
        <div class="container">
            <div class="myModal">
                <div class="myModal-head">
                    <button class="hidden-btn"><img src="../image/cancel.png" id="hideClose" /></butto>
                </div>
                <?php
                    echo $bookingMsg;
                ?>
                <div class="myModal-footer">
                    <button id="hide_btn">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    <style>
        html{min-height:100%;/* make sure it is at least as tall as the viewport */position:relative;}
        body{height:100%; /* force the BODY element to match the height of the HTML element */}
        #modal{position:fixed;top:0;bottom:0;left:0;right:0;overflow:hidden;z-index:99;background-color: #0a0e0088;display: block;}
        #modal .myModal{width: 40%;margin: 10% auto;background-color: #fff;border-radius: 3px;}
        #modal .myModal .myModal-head{text-align: right;padding: 10px;}
        #modal .myModal .myModal-head button{background: none;border: none;outline: none;width: 35px;cursor: pointer;}
        #modal .myModal .myModal-head button img{width: 100%;}
        #modal .myModal .myModal-body{text-align: center;padding: 15px;}
        #modal .myModal .myModal-footer{text-align: right;padding: 15px 10px 15px;}
        #modal .myModal .myModal-footer button{background-color: #f3c300;color: #fff;border: none;padding: 5px 10px;cursor: pointer;}    
        @media (max-width: 991px){#modal .myModal{width: 60%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}      
        @media (max-width: 791px){#modal .myModal{width: 75%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}    
        @media (max-width: 451px){#modal .myModal{width: 95%;margin: 10% auto;background-color: #fff;border-radius: 3px;}}
    </style>
    <script>
        const showModal = document.getElementById('modalShow');
        const closeModal = document.getElementById('hideClose');
        const hideModal = document.getElementById('hide_btn');
        const myModal = document.getElementById('modal');
        showModal.addEventListener('click', () => {
            myModal.style.display="block";
        });
        closeModal.addEventListener('click', () => {
            myModal.style.display="none";
        });
        hideModal.addEventListener('click', () => {
            myModal.style.display="none";
        });
    </script>

        <?php
        }
    ?>
    
    <!-- ================ modall ================ -->

 

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
    <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/stellar.js"></script>
    <script src="vendors/lightbox/simpleLightbox.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>