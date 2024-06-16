
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管晚會報名表</title>
</head>

<body>
    <form action="0321reply.php" method="post">
        <fieldset>
            <legend>基本資料填寫</legend>
          
            <label for="name">輸入姓名:</label>
            <input type="text" id="name" name="name">
            <br>
            <label for="id">輸入學號:</label>
            <input type="text" id="id" name="id">
            <br>
            <label for="email">輸入電子郵件:</label>
            <input type="email" id="email" name="email">
            <br>
           
            選擇性別:
            <input type="radio" id="male" name="gender" value="男">
            <label for="male">男</label>
            <input type="radio" id="female" name="gender" value="女">
            <label for="female">女</label>
            <input type="radio" id="else" name="gender" value="不透漏">
            <label for="else">不透漏</label>
            <br>
            
        </fieldset>

        您希望晚會吃啥?:
        <input type="checkbox" name="event[]" value="RICE">飯
        <input type="checkbox" name="event[]" value="NOODLE">麵
        <input type="checkbox" name="event[]" value="PIZZA">披薩
        <input type="checkbox" name="event[]" value="NO">不吃
        <br>
       
        交通方式?
        <select id="transport" name="transport" size="1">
            <option value="" selected>請選擇</option>
            <option value="walk">步行</option>
            <option value="motorcycle">騎機車</option>
            <option value="bike">騎腳踏車</option>
        </select>
        <br>
        參加那裡的晚會?
        <select id="place" name="place" size="3">
            <option value="" selected>請選擇</option>
            <option value="108">108</option>
            <option value="207">207</option>
        </select>
        <br>
        您想邀請誰一同參加晚會?
        <select id="attendee" name="attendee[]" multiple>
            <option value="">請選擇</option>
            <optgroup label="本校">
                <option value="同系同學">同系同學</option>
                <option value="外系同學">外系同學</option>
            </optgroup>
            <optgroup label="外校">
                <option value="外校同學">外校同學</option>
            </optgroup>
        </select>
        <br>
        <label for="number">參加人數:</label>
        <input type="number" id="number" name="number" value="0" min="0">
        <br>
        <label for="time">預計抵達時間:</label>
        <input type="time" id="time" name="time" value="">
        <br>
        <label for="range">期待程度:</label>
        <input type="range" id="range" name="range" min="0" max="100" value="50" step="10">
        <br>
        <label for="comment">想說的話:</label>
        <textarea id="comment" name="comment" value="" rows="5" cols="20"></textarea>
        <br>

        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
        <br>
    </form>

    <?php
        session_start();
        if(isset($_SESSION["check"])) {
            if($_SESSION["check"] != "Yes") {
                header("Location:0321fail.php");
            }
        } else {
            header("Location:0321fail.php");
        }
    ?>
</body>

</html>
