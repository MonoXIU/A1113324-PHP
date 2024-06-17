<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room 101 - 尊榮套房</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .room-info {
            padding: 15px;
        }
        .booking-form {
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 20px;
            height: auto; /* 固定高度 */
        }
        .carousel-item img {
            width: 100%;
            height: 500px; /* 固定高度 */
            object-fit: cover; /* 確保圖片保持比例 */
        }
    </style>
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
    
    <div class="container">
        <h1 class="text-center my-4">尊榮套房</h1>
        
        <div class="row">
        <div class="col-md-8">
                <!-- Room Details -->
                <div id="roomCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#roomCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#roomCarousel" data-slide-to="1"></li>
                        <li data-target="#roomCarousel" data-slide-to="2"></li>
                        <li data-target="#roomCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../image/room4_1.jpg" class="d-block w-100" alt="Room 101 image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/room4_2.jpg" class="d-block w-100" alt="Room 101 image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/room4_3.jpg" class="d-block w-100" alt="Room 101 image 3">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/room4_4.jpg" class="d-block w-100" alt="Room 101 image 4">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#roomCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#roomCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="room-info mt-3">
                    <h2>尊榮套房</h2>
                    <p>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>
                        <span class="ion-ios-star"></span>

                    </p>
                    <p>Price: $10000 / night</p>
                    <p>
                    <b>豪華和專屬的住宿選擇，提供頂級設施和服務。</b><br>
                    <i>基礎設施：</i><br>
                    免費Wi-Fi<br>
                    空調<br>
                    電視<br>
                    冰箱<br>
                    保險箱<br>
                    電話<br>
                    衛浴設施（浴缸、淋浴、吹風機）<br>
                    </p>

                </div>
            </div>

            <!-- Booking Form -->
            <div class="col-md-4">
                <div class="booking-form">
                    <h3>訂購資訊</h3>
                    <form action="room4.php" method="post" id="booking-form">
                        <div class="form-group">
                            <label for="name">姓名Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">電子郵件Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">電話Phone</label>
                            <input type="tel" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="checkin-date">入住時間 Check-in Date</label>
                            <input type="date" name="checkin-date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="checkout-date">退房時間 Check-out Date</label>
                            <input type="date" name="checkout-date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="payment-method">支付方式</label><br>
                            <select id="payment-method" name="payment-method" >
                                <option value="Online Payment">線上支付</option>
                                <option value="Credit Card">信用卡付款</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="custom-services"> </label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services" value="客房清潔">
                                <label class="form-check-label" for="service1">客房清潔 Room Cleaning</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services" value="早餐預訂">
                                <label class="form-check-label" for="service2">早餐預訂 Breakfast Included</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="services"  value="額外加床">
                                <label class="form-check-label" for="service4">額外加床Extra Bed</label>
                            </div>
                        </div>
                        <input type="hidden" name="roomtype" value="room4">
                        <br>
                        <button type="submit" class="btn btn-primary" onclick="window.alert('預訂成功')">立即下訂</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
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

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 接收表單數據
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin_date = $_POST['checkin-date'];
    $checkout_date = $_POST['checkout-date'];
    $payment_method = $_POST['payment-method'];
    $services = ($_POST['services']);
    $roomtype= $_POST['roomtype'];
    


        $servername = "localhost";
        $dbusername = "id22313320_genshin";
        $dbpassword = "@Aa123456";
        $dbname = "id22313320_genshin";
    
        // 創建連接
        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 插入數據到資料庫
    $sql = "INSERT INTO bookings (name, email, phone, checkin_date, checkout_date, payment_method, services, roomtype) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // 檢查SQL準備是否成功
    if ($stmt === false) {
        die("SQL準備失敗: " . $conn->error);
    }

    $stmt->bind_param("ssssssss", $name, $email, $phone, $checkin_date, $checkout_date, $payment_method, $services, $roomtype);

    // 執行SQL語句並檢查結果


    if ($stmt->execute()) {
        echo "訂單成功創建";

        // 發送郵件
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = false;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'lucky6211179@gmail.com';                     //SMTP username
            $mail->Password   = 'tskw mwsh jgwv jzmm';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
            $mail->CharSet = 'utf-8';

            //Recipients
            $mail->setFrom('lucky6211179@gmail.com', 'Mailer');
            $mail->addAddress($email, $name);     //Add a recipient

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = '訂房成功通知';
            $mail->Body    = '親愛的 ' . $name . '，您的訂房已成功。我們期待您的入住。<br>入住時間: ' . $checkin_date . '<br>退房時間: ' . $checkout_date;
            $mail->AltBody = '親愛的 ' . $name . '，您的訂房已成功。我們期待您的入住。 入住時間: ' . $checkin_date . ' 退房時間: ' . $checkout_date;

            $mail->send();
            echo '郵件已發送';
        } catch (Exception $e) {
            echo "郵件無法發送. 錯誤信息: {$mail->ErrorInfo}";
        }

    } else {
        echo "錯誤: " . $sql . "<br>" . $conn->error;
    }
    
    // 關閉連接
    $conn->close();
}
?>
