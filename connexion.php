<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=site', 'root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e){
    die("Error " . $e->getMessage());
}
?>