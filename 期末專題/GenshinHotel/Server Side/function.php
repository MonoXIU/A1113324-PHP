<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=id22313320_genshin;charset=utf8', 'id22313320_genshin', '@Aa123456', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e){
    die('ERREUR: '.$e->getMessage());
}
?>
