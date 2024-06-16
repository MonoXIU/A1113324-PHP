<meta charset='utf8'>
<?php
$No = $_GET["No"];

$link = @mysqli_connect('localhost', 'root', '', 'mailer');     
$SQL = "SELECT * FROM mailer WHERE No='$No'";

if($result = mysqli_query($link, $SQL)){
    $row=mysqli_fetch_assoc($result);
    $Name=$row["Name"];
    $Email=$row["Email"];
}
?>
<form action="0516renewcheck.php" method="post">

目前修改的資料為： <?php echo $No ?><input type="hidden" name="uNo" value='<?php echo $No ?>'><br/><br/>
姓名:<input type="text" name="uName" value="<?php echo $Name ?>"><br/>
Email:<input type="text" name="uEmail" value="<?php echo $Email ?>"><br/>
<input type="submit">
</form>