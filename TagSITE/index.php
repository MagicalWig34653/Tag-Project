<?

$pdo = new PDO('mysql:host=HOST;dbname=DB_NAME;charset=utf8', 'USERNAME', 'PASSWORD');


$statement = $pdo->prepare("SELECT * FROM tag_project WHERE used = :usd ORDER BY RAND() LIMIT 1");
$result = $statement->execute(array("usd" => 'false'));
$tag_data = $statement->fetch();
if (isset($tag_data['tag'])) {
    echo $tag_data['tag'] . '<br>Erstellt: ' . date("d.m.Y - H:i:s", $tag_data['erstellt']);
    $statement = $pdo->prepare("UPDATE tag_project SET used = :usd WHERE UUID = :UUID");
    $result = $statement->execute(array("usd" => "true", "UUID" => $tag_data['UUID']));
} else {
    echo 'kein tag verfügbar';
}
