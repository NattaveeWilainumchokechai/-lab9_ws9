<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]); 
$stmt->execute();
$row = $stmt->fetch();?>

<form action="update-workshop9.php" method="get" style="padding:10px; line-height: 30px;">
    Username : <input type="text" name="username" value="<?=$row["username"]?>"><br>
    Password : <input type="text" name="password" value="<?=$row["password"]?>"><br>
    ชื่อ : <input type="text" name="name" value="<?=$row["name"]?>"><br>
    ที่อยู่ : <br><textarea name="address" rows="3" cols="40"><?=$row["address"]?></textarea><br>
    เบอร์โทรศัพท์ : <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
    อีเมล: <input type="email" name="email" value="<?=$row["email"]?>"><br>
    <input type="submit" value="แก้ไขข้อมูล">
</form>
</body>
</html>