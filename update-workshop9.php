<?php
$pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
$stmt = $pdo->prepare("UPDATE member SET password=?,name=?,address=?,mobile=?,email=? WHERE username=?");
$stmt->bindParam(1,$_GET["password"]); 
$stmt->bindParam(2,$_GET["name"]); 
$stmt->bindParam(3,$_GET["address"]); 
$stmt->bindParam(4,$_GET["mobile"]); 
$stmt->bindParam(5,$_GET["email"]); 
$stmt->bindParam(6,$_GET["username"]); 
if($stmt->execute())?>
    แก้ไข username  <?=$_GET["username"]?> สำเร็จ
</body>
</html>