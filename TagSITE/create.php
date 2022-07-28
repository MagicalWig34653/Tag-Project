<?php


if (isset($_GET['tag'])) {
    $pdo = new PDO('mysql:host=HOST;dbname=DB_NAME;charset=utf8', 'USERNAME', 'PASSWORD');

    $statement = $pdo->prepare("INSERT INTO tag_project (tag, erstellt) VALUES (:tag, :date)");
    $result = $statement->execute(array('tag' => $_POST['tag'], 'date' => time()));
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tag erstellen</title>
</head>
<body>
    <form action="?tag" method="post">
        <input type="text" name="tag" placeholder="Dein Tag">
        <input type="submit" value="Erstellen">
    </form>
</body>
</html>
