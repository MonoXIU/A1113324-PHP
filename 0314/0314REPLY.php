<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>答覆</title>
</head>

<body>
    <?php
        if ($_POST["name"] != "") 
        {$name = $_POST["name"];
            echo "姓名:".$name."<br>";} 
        else 
            {echo "未輸入姓名"."<br>";}
        $id = $_POST["id"];
        echo "學號:".$id."<br>";
        $email = $_POST["email"];
        echo "Email:".$email."<br>";
        $gender = $_POST["gender"];
        echo "性別:".$gender."<br>";
        $file = $_POST["file"];
        echo "照片檔:".$file."<br>";
        $number = $_POST["number"];
        echo "參加人數:".$number."<br>";
        $range = $_POST["range"];
        echo "期待程度:".$range."<br>";
        $comment = $_POST["comment"];
        echo "建議:".$comment."<br>";
    ?>
</body>

</html>