<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
$capaciteit = $_POST['capaciteit'];
$type = $_POST['type'];
$melder = $_POST['melder'];
$group = $_POST['group'];
$more = $_POST['more'];

echo $attractie . " / " . $capaciteit . " / " . $melder . "/" . $group . "/" . $more;

/*if (empty($attractie)){
    $errors[] = "vul attactie naam is."
}*/
//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type, capaciteit, melder) VALUES(:attractie, :type, :capaciteit, :melder)";
//3. Prepare
$statement = $conn->prepare($query);
$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit, 
    ":melder" => $melder, 
 
]);
//4. Execute21


$path = $_SERVER['HTTP_REFERER']."#return";
header("Location:$path?msg=Melding opgeslagen");
