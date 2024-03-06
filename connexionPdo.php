<?php 
$hostnom ='host=btssio.dedyn.io';
$usernom ='AOURAKY';
$password ='06032005';
$bdd ='AOURAKY_biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$bdd;charset=utf8", $usernom, $password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    $monPdo = null;
}
?> 