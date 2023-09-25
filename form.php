<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=site', 'root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}

catch (Exception $e){
    die("Error " . $e->getMessage());
}

$nom =$_POST["nom"];
$prenom =$_POST["prenom"];
$passe =$_POST["passe"];
$age =$_POST["age"];
$email =$_POST["email"];




echo "nom: $nom <br>";
echo "prenom: $prenom <br>";
echo "passe: $passe <br>";
echo "age: $age <br>";

// echo "passeword hash: $passeword";
echo "email: $email <br>";

$req = $bdd->prepare("INSERT INTO connecte (email, nom, age, passe, prenom) 
                    VALUES(:email, :nom, :age, :passe, :prenom)");
//  pour  enregistrer--------------


$req->execute([

    "email" => $email,
    "nom" => $nom,
    "age" => $age,
    "passe" =>$passe,
    "prenom" =>$prenom,
    
    
    ]);



    header('Location: index.php'); 
?>