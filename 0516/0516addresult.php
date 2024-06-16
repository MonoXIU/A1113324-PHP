<meta charset='utf8'>
<?php
$Name=$_POST["Name"];
$Email=$_POST["Email"];

$link = @mysqli_connect('localhost','root','','mailer');  
if (!$link) {
    die("資料庫無法開啟<br>");
}      
$SQL = "INSERT INTO mailer(Name, Email) VALUES('$Name','$Email')";  
if($result = mysqli_query($link, $SQL)){
    echo "新增成功<br/>";
}
echo "<br/><a href='0516index.php'>回到首頁</a>";
echo "<br/><a href='0516send.php'>查看資料庫</a>";

?>