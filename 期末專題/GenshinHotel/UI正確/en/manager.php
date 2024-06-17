<?php
// 開啟 session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $password = $_POST['password'];

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

// 檢查是否有新的預訂
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete' && isset($_POST['booking_id'])) {
    $booking_id = $_POST['booking_id'];
    
    // 刪除預訂
    $delete_booking_sql = "DELETE FROM bookings WHERE id = $booking_id";
    if ($conn->query($delete_booking_sql) === TRUE) {
        echo "預訂刪除成功。";
    } else {
        echo "刪除預訂失敗：" . $conn->error;
    }
}

// 獲取預定狀況
$bookings_sql = "SELECT * FROM bookings";
$bookings_result = $conn->query($bookings_sql);

// 獲取可預訂房間資料
$rooms_sql = "SELECT * FROM room1";
$rooms_result = $conn->query($rooms_sql);

// 獲取已預訂房間資料
$booked_rooms_sql = "SELECT * FROM room2";
$booked_rooms_result = $conn->query($booked_rooms_sql);

?>

<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂房管理系統</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFF8DC;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #F5DEB3;
            color: white;
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }
        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }
        #booking-status {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 80%;
        }
        #room-section {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 20px;
        }
        #room-info, #booked-room-info {
            width: 49%;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1, h2 {
            margin: 0 0 20px 0;
            font-family: 'Arial', sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #FFE4B5;
        }
        p {
            margin: 0;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }
        p:last-child {
            border-bottom: none;
        }
        #chart-section {
            width: 90%;
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        form {
            display: inline;
        }
        .delete-btn {
            background-color: #FF8A65;
            border: none;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Roomtype', 'Count'],
                <?php
                // SQL query to get roomtype and count occurrences
                $SQL = "SELECT roomtype, COUNT(*) as count FROM bookings GROUP BY roomtype";
                // Send query
                $result = mysqli_query($conn, $SQL);
                $firstRow = true;
                while($row = mysqli_fetch_assoc($result)){
                    $roomtype = $row['roomtype'];
                    $count = $row['count'];
                    if (!$firstRow) {
                        echo ",";
                    }
                    echo "['$roomtype', $count]";
                    $firstRow = false;
                }
                ?>
            ]);

            var options = {
                title: '飯店房型預定狀況',
                pieHole: 0.4,
                colors: ['#F5DEB3', '#FFB74D', '#FF8A65', '#FFF176', '#FFD54F'],
                chartArea: {width: '90%', height: '75%'}
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }

        function confirmDelete(bookingId) {
            if (confirm('是否確認刪除這個預訂？')) {
                document.getElementById('delete-form-' + bookingId).submit();
            }
        }
    </script>
</head>
<body>
    <header>
        <h1>訂房管理系統</h1>
    </header>

    <main>
        <section id="booking-status">
            <h2>整體預定狀況</h2>
            <div id="notifications">
                <?php
                if ($bookings_result->num_rows > 0) {
                    while($row = $bookings_result->fetch_assoc()) {
                        echo "<p>預定ID: {$row['id']} - 用戶: {$row['name']} - 入住房型: {$row['roomtype']} - 入住日期: {$row['checkin_date']} - 退房日期: {$row['checkout_date']} 
                        <form id='delete-form-{$row['id']}' method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='action' value='delete'>
                            <input type='hidden' name='booking_id' value='{$row['id']}'>
                            <button type='button' class='delete-btn' onclick='confirmDelete({$row['id']})'>刪除</button>
                        </form>
                        </p>";
                    }
                } else {
                    echo "<p>暫無資料</p>";
                }
                ?>
            </div>
        </section>


        <section id="chart-section">
            <h2>房型預定圖表</h2>
            <div id="donutchart" style="width: 100%; height: 500px;"></div>
        </section>
    </main>

    <?php
    // 關閉資料庫連接
    $conn->close();
    ?>
</body>
</html>