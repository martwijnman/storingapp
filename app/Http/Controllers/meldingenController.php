<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$typ = $_POST['typ'];
$melder = $_POST['melder'];
$group = $_POST['group'];
$more = $_POST['more'];

echo $attractie . " / " . $capaciteit . " / " . $melder . "/" . $group;

/*if (empty($attractie)){
    $errors[] = "vul attactie naam is."
}*/
//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, capaciteit, typ, ) VALUES(:attractie, :type);";
//3. Prepare
$statement = $conn->prepare($query);
$statement->execute([
    ":attractie" => $attractie,
    ":typ" => $typ,
]);
//4. Execute21
$items = $statement->fetchAll(PDO::FETCH_ASSOC);

$path = $_SERVER['HTTP_REFERER']."#return";
header("Location:$path?msg=Melding opgeslagen");
