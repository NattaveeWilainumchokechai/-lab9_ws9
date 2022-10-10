<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        while($row = $stmt->fetch()){ ?>
            Username : <?=$row["username"]?><br>
            Password : <?=$row["password"]?><br>
            ชื่อ : <?=$row["name"]?><br>
            ที่อยู่ : <br><?=$row["address"]?><br>
            เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
            อีเมล: <?=$row["email"]?><br>
            <a href="edit-workshop9.php?username=<?=$row["username"]?>">แก้ไข</a> | 
            <a href="">ลบ</a>
            <hr>
        <?php } ?>
    </body>
</html>