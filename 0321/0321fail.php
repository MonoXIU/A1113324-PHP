<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入失敗</title>
</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION["check"])) {
            echo "登入失敗<br>";
            echo "3秒後跳轉回首頁";
            header("Refresh:3;url=0321login.php");
        } else {
            echo "非法進入網頁<br>";
            echo "3秒後跳轉回首頁";
            header("Refresh:3;url=0321login.php");
        } 
    ?>
</body>

</html>