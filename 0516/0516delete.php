<meta charset='utf8'>
<?php

$No = $_GET["No"];
echo "第".$No."筆資料";

$link = @mysqli_connect('localhost', 'root', '', 'mailer');      
$SQL = "DELETE FROM mailer WHERE No='$No'";

if($result = mysqli_query($link ,$SQL)){
    echo "<br/>刪除成功";
}
echo "<br/><a href='0516send.php'>查看資料庫資料</a>";
?>