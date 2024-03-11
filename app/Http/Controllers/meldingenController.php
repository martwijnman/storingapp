<?php



//Variabelen vullen
$attractie = $_POST['attractie'];
if(empty($attractie))
{
    $errors[]="Vul de attractie naam in.";
}
$capaciteit = $_POST['capaciteit'];
if(empty($capaciteit))
{
    $errors[]="Vul in.";
}
$type = $_POST['type'];
if(empty($type))
{
    $errors[]="Vul in.";
}
$melder = $_POST['melder'];
if(empty($melder))
{
    $errors[]="Vul in.";
}
$group = $_POST['group'];
$more = $_POST['more'];
echo $attractie . " / " . $capaciteit . " / " . $melder . "/" . $group . "/" . $more;
if(isset($errors)){var_dump($errors);die();}


//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
$query = "INSERT INTO meldingen (attractie, type, capaciteit, melder) VALUES(:attractie, :type, :capaciteit, :melder)";
//3. Prepare
$statement = $conn->prepare($query);

//4. Execute21
$statement->execute([
    ":attractie" => $attractie,
    ":type" => $type,
    ":capaciteit" => $capaciteit, 
    ":melder" => $melder, 
 
]);

$path = $_SERVER['HTTP_REFERER']."#return";
//$path = "index.php";
header("Location:$path");
