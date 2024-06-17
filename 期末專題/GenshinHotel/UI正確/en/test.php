<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hotel_booking";

    // 創建連接
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // 檢查連接
    if ($conn->connect_error) {
        die("連接失敗: " . $conn->connect_error);
    }

    // 準備 SQL 語句
    $sql = "SELECT id, password FROM manager WHERE name = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("準備語句失敗: " . $conn->error);
    }

    // 綁定參數 (只需要綁定 name 參數)
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $db_password); // 綁定結果變數

    // 檢查是否有此用戶
    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        // 驗證密碼 (直接比對明文密碼)
        if ($password === $db_password) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $name;
            header("Location: manager.php"); // 登入成功後重定向到儀表板或其他頁面
            exit();
        } else {
            $_SESSION['error'] = "密碼錯誤!";
        }
    } else {
        $_SESSION['error'] = "用戶不存在!";
    }

    $stmt->close();
    $conn->close();
    header("Location: login.php"); // 登入失敗後重定向回登入頁面
    exit();
}
?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <link rel="icon" href="../image/favicon.png" type="image/png">
    <title>Genshin Hotel</title>
    <meta charset="UTF-8">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-top: 0px;
        }
        input {
            margin-bottom: 10px;
            width: calc(100% ); /* Full width minus padding */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #FFB300;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #FFD700;
        }
        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>管理者/商家 登入</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<div class='error'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']); // 顯示完錯誤訊息後刪除
        }
        ?>
        <form action="login.php" method="post">
            <label for="username">管理人登入:</label>
            <input type="text" name="name" id="username" required placeholder="若未獲得帳密請向主管申請">
            <br>
            <label for="password">密碼:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <button type="submit">登入</button>
        </form>
    </div>
</body>
</html>


