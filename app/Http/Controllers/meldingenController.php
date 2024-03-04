<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$type = $_POST['type'];
$melder = $_POST['melder'];
$group = $_POST('group');
$more = $_POST['more'];

echo $attractie . " / " . $capaciteit . " / " . $melder . "/" . $group;

/*if (empty($attractie)){
    $errors[] = "vul attactie naam is."
}*/
//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type) VALUES(:attractie, :type);";
//3. Prepare
$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit,
    ":melder" => $melder,
    ":group" => $group,
    ":more" => $more,

]);
//4. Execute
$items = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Location: ../meldingen/index.php?msg=Melding opgeslagen");