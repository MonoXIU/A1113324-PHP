<html >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>資管晚會報名表</title>
</head>

<body>
    <form action="result.php" method="post">
        <label for="name">輸入姓名:</label>
        <input type="text" name="name" value="" placeholder="輸入中文姓名">
        <br>
        <label for="id">輸入學號:</label>
        <input type="text" name="id" value="" placeholder="輸入學號" maxlength="8" required>
        <br>
        <label for="email">輸入Email:</label>
        <input type="email" name="email" placeholder="輸入email" required>
        <br>
        <label for="gender">選擇性別:</label>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女
        <br>
        上傳照片:<input type="file" name="file">
        <br>
        請告知參加人數:<input type="number" name="number" value="0" min="0">
        <br>
        此次活動期待程度:<input type="range" name="range" min="0" max="100" value="50" step="10">
        <br>
        提供意見:<textarea name="comment" value="" rows="10" cols="20"></textarea>
        <br>
        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
    </form>
</body>

</html>