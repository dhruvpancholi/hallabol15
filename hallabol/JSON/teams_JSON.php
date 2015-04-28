<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once '../keyset.php';
$query = "SELECT * FROM teams";
if (isset($_GET['game'])) {
	$game = $_GET['game'];
	$query .= " WHERE game='$game'";
} else{
	$query .= " WHERE game='1'";
}

$query .= " ORDER BY registration_time DESC";
$result = mysql_query($query);
if(!$result) die("Database access failed: ".mysql_error());

$outp = "[";
while($row = mysql_fetch_row($result)) {
    if ($outp != "[") {$outp .= ",";}
    $outp .= '{"team_id":"'			.$row[2]	.'",';
    $outp .= '"game":"'				.$row[3]	.'",';
    $outp .= '"team_name":"'		.$row[4]	.'",';
    $outp .= '"team_members":"'		.$row[5]	.'"}';
}
$outp .="]";

echo($outp);

mysql_close($db_server);

?>
