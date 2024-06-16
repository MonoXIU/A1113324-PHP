<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入介面</title>
</head>

<body>
    <form action="0321check.php" method="post">
        <label for="id">帳號:</label>
        <input type="text" id="id" name="id">
        <br>
        <label for="pwd">密碼:</label>
        <input type="password" id="pwd" name="pwd">
        <br>
        <input type="submit" value="登入">
        <input type="reset" value="清除">
        <br>
    </form>
    <?php
        date_default_timezone_set("Asia/Taipei");
        echo date("Y/m/d h:i:s a");
    ?>
</body>

</html>
