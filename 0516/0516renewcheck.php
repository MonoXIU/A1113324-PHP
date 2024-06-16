<?php
$No=$_POST["uNo"];
$Name=$_POST["uName"];
$Email=$_POST["uEmail"];

$link = @mysqli_connect('localhost', 'root', '', 'mailer');     
$SQL = "UPDATE mailer SET Name='$Name', Email='$Email' WHERE No='$No'";

if($result = mysqli_query($link, $SQL)){
    echo "更新成功";
}

echo "<br/><a href='Manager.php'>查看資料庫</a>";
?>