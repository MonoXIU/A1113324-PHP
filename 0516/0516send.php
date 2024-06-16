<?php
$link = @mysqli_connect('localhost','root','','mailer'); 

if (!$link) {
    die("資料庫無法開啟<br>");
}

$SQL = "SELECT * FROM mailer";
$result = mysqli_query($link, $SQL);

echo "<br/>";
echo "<table border='1'>";
echo "<tr>";
    echo "<th>No</th>";
    echo "<th>姓名</th>";
    echo "<th>Email</th>";
    echo "<th>修改</th>";
    echo "<th>刪除</th>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)){  
    echo "<tr>";
        echo "<td>".$row["No"]."</td>";
        echo "<td>".$row["Name"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td><a href='0516renew.php?No=".$row["No"]."'>修改</a></td>";
        echo "<td><a href='0516delete.php?No=".$row["No"]."'>刪除</a></td>";
    echo "</tr>";
}
echo "</table>";

mysqli_free_result($result);
echo "</table>";
echo "寄送成功<br>";
echo "<a href='0516index.php'>回到首頁</a><br>";

mysqli_close($link);
?>