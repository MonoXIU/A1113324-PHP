
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入成功</title>
</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION["check"])) {
            if ($_SESSION["check"] == "Yes") {
                echo "成功登入<br>";
                echo "<a href='logout.php'>登出</a><br>";
                echo "<a href='Party.php'>前往填寫表單</a>";
            } else {
                echo "非法進入網頁<br>";
                echo "3秒後跳轉回首頁";
                header("Refresh:3;url=0321login.php");
            }
        } else {
            echo "非法進入網頁<br>";
            echo "3秒後跳轉回首頁";
            header("Refresh:3;url=0321login.php");
        }
    ?>
</body>

</html>
