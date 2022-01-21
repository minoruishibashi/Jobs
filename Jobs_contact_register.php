<?php

$name = $_POST["name"];
$email = $_POST["email"];
$category = $_POST["category"];
$detail = $_POST["detail"];

try {
    $pdo = new PDO('mysql:dbname=contact;charset=utf8;host=localhost','root','root');
} catch(PDOException $e) {
    exit("DbConnectError:".$e->getMessage());
}

$sql="INSERT INTO contact(id, name, email, category, detail)
    VALUES(Null, :a1, :a2, :a3, :a4)";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1',$name, PDO::PARAM_STR);
$stmt->bindValue(':a2',$email, PDO::PARAM_STR);
$stmt->bindValue(':a3',$category, PDO::PARAM_STR);
$stmt->bindValue(':a4',$detail, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status==false) {
    $error = $stmt->erroInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: Jobs_contact_register_after.html");
    exit;
}

?>
