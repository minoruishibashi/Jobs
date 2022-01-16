<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/contactinfo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>contactinfodb</title>
</head>
<body>

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

$sql="INSERT INTO contact(id, name, emaeil, category, detail)
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
    header("Location: Jobs_contact.php");
    exit;
}

?>

<header>
</header>
<main>


</main>

<script>

</script>
</body>
</html>