<?php 
include ('./Connection.php');
header('Content-type: application/json');


$mysql = new Mysql();
$mysql->getConnection();

if (isset($_POST['marque'])) {
    $sql = "SELECT distinct modele FROM voiture WHERE marque like '%$marque%'";
    $modeleArray = $mysql->executeQuery($sql);

    echo json_encode(
        [
            'status' => 200,
            'response' => $modeleArray
        ]);
}

?>