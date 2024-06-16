
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>報名表填寫結果</title>
</head>

<body>
    <?php
        session_start();
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] != "Yes") {
                header("Location:0321fail.php");
            }
        } else {
            header("Location:0321fail.php");
        }
        if($_POST["name"] != "") {
            $name = $_POST["name"];
            echo "姓名:".$name."<br>";
        } else {
            echo "未輸入姓名"."<br>";
        }
        if(isset($_POST["id"])) {
            $id = $_POST["id"];
            echo "學號:".$id."<br>";
        } else {
            echo "未輸入學號"."<br>";
        }
        if($_POST["email"] != "") {
            $email = $_POST["email"];
            echo "電子郵件:".$email."<br>";
        } else {
            echo "未輸入電子郵件"."<br>";
        }
        if(isset($_POST["gender"])) {
            $gender = $_POST["gender"];
            echo "性別:".$gender."<br>";
        } else {
            echo "未選擇性別"."<br>";
        }
        if(isset($_POST["event"])) {
            $event = $_POST["event"];   
            echo "吃啥:".implode(", ", $event);
        } else {
            echo "未選吃啥";
        }
        echo "<br>";
        $transport = $_POST["transport"];
        if($transport != "") {
            echo "交通方式:".$transport."<br>";
        } else {
            echo "未選交通方式<br>";
        }
        $place = $_POST["place"];
        if($place != "") {
            echo "參加哪場:".$place."<br>";
        } else {
            echo "未選擇參加哪場<br>";
        }
        if(isset($_POST["attendee"])) {
            $attendee = $_POST["attendee"];
            echo "邀請數:";
            $count = count($attendee);
            for($i = 0 ; $i < $count ; $i++) {
                if($i < $count - 1) { 
                    echo $attendee[$i].", ";
                } else {
                    echo $attendee[$i]."<br>";
                }
            }
        } else {
            echo "未選邀請數<br>";
        }
        $time = $_POST["time"];
        echo "抵達時間:".$time."<br>";
        $number = $_POST["number"];
        echo "參加人數:".$number."<br>";
        $range = $_POST["range"];
        echo "期待程度:".$range."<br>";
        $comment = $_POST["comment"];
        echo "想說的:".$comment."<br>";
    ?>
</body>

</html>
