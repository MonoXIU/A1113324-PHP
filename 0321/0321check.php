
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>帳號密碼檢查</title>
</head>

<body>
    <?php
        session_start();
        $uid = "NUKIM";
        $upwd = "12345";

        $id = $_POST["id"];
        $pwd = $_POST["pwd"];
        if($id == $uid && $pwd == $upwd){
            $_SESSION["check"] = "Yes";
            header("Location:success.php");
        }else{
            $_SESSION["check"] = "No";
            header("Location:fail.php");
        }
    ?>
</body>

</html>