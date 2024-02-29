<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$type = $_POST['type'];
$melder = $_POST['melder'];

$more = $_POST['more'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

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
    ":more" => $more,

]);
//4. Execute
$items = $statement->fetchAll(PDO::FETCH_ASSOC);

header("Location: ../meldingen/index.php?msg=Melding opgeslagen");