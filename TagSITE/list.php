<?php

$pdo = new PDO('mysql:host=HOST;dbname=DB_NAME;charset=utf8', 'USERNAME', 'PASSWORD');


$statement = $pdo->prepare("SELECT * FROM tag_project");
$result = $statement->execute();
$tag_data = $statement->fetchAll();
foreach ($tag_data as $key => $value) {
    echo $value['tag'] . '<br>Erstellt: ' . date("d.m.Y - H:i:s", $value['erstellt']) . '<br><br>';
}
