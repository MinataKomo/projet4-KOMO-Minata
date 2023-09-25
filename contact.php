
<?php
// phpinfo();
   @$nom=$_POST["nom"];
   @$prenom=$_POST["prenom"];
   @$passe=$_POST["passe"];
   @$email=$_POST["email"];
   @$age=$_POST["age"];
   @$valider=$_POST["valider"];
   $erreur="";
   $error="";
   $er="";
   $e="";
   $em="";
   if(isset($valider))
   if(empty($nom)) $erreur =" <li> veuillez renseigner votre nom </li>";
   if(isset($valider))
   if(empty($prenom)) $error.=" <li> veuillez renseigner votre prenom </li>";
   if(isset($valider))
   if(!is_numeric($age)) $g="<li> veuillez renseigner votre age </li> ";
   if(isset($valider))
    if(empty($passe)) $e.=" <li>veuillez renseigner votre mot de passe  </li>";
   if(isset($valider))
  if(empty($email)) $em.=" <li>veuillez renseigner votre email </li>";

else if((isset($valider))){
    echo "nom: $nom <br>";
    echo "prenom: $prenom <br>";
    echo "passe: $passe <br>";
    echo "email: $email <br>";
    echo "age: $age <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="nav.css">
</head>
<body>
<?php
include("nav.php")   
?>




<div class="container">
  
    <div id="logbox">
        <form method="post" action="form.php" name="fo">
      <h1>Create an account</h1>
         <input class="input" name="nom" type="text" placeholder="nom" value="<?php echo $nom ?>">
         <?php if(!empty($erreur)){ ?>
        <div id="i"><?php echo $erreur ?></div>
        <?php  } ?>
         <input class="input" name="prenom" type="text" placeholder="prenom" value="<?php echo $prenom ?>">
         <?php if(!empty($error)){ ?>
        <div id="i"><?php echo $error ?></div>
        <?php  } ?>
         <input class="input" name="age" type="number" placeholder="age" value="<?php echo $age ?>">
         <?php if(!empty($g)){ ?>
        <div id="i"><?php echo $g ?></div>
        <?php  } ?>
        
         <input type="text" class="input" name="passe" placeholder="mot de passe" >
         <?php if(!empty($e)){ ?>
        <div id="i"><?php echo $e ?></div>
        <?php  } ?>
         <input class="input" name="email" type="email" placeholder="Email address (optional)" value="<?php echo $email ?>">
         <?php if(!empty($em)){ ?>
        <div id="i"><?php echo $em ?></div>
        <?php  } ?>
         <input class="input" type="submit" value="Sign me up!" name="valider">
        </form>
        
        </div>
       
    </div>
    <br><br><br>

<?php
include("footer.php")   
?>
</body>
</html>