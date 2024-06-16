<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登出</title>
</head>

<body>
    <?php
        session_start();    
        session_destroy();
        echo "登出中：";
        echo "3秒後跳轉回首頁";
        header("Refresh:3;url=0321login.php");
    ?>
</body>

</html>
