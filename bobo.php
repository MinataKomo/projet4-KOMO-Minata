<?php
  include("connexion.php")
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bobo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
  include("nav.php")
  ?><br><br>
   <?php

$reponse = $pdo->query("select * from bobo where id=1");
while($donnees = $reponse->fetch()){
?>
    <h1 class="h"><?php echo $donnees["titre"] ?></h1>
    <?php
}
?>
    <section>
    <?php

$reponse = $pdo->query("select * from bobo where id=2");
while($donnees = $reponse->fetch()){
?>
        <p class="p"><?php echo $donnees["titre"] ?></p>
        <?php
}
?>
        <div class="perle">
            <div class="mos">
            <?php

$reponse = $pdo->query("select * from bobo where id=3");
while($donnees = $reponse->fetch()){
?>
                <img src="images/<?php echo $donnees["nom"] ?>" alt="">
                <h2><?php echo $donnees["titre"] ?></h2>
            </div>
            <?php
}
?>
            <div class="mos">
            <?php

$reponse = $pdo->query("select * from bobo where id=4");
while($donnees = $reponse->fetch()){
?>
                <img src="images/<?php echo $donnees["nom"] ?>" alt="">
                <h2><?php echo $donnees["titre"] ?></h2>
            </div>
            <?php
}
?>
        </div><br><br><br><br>
        <div class="perle">
            <div class="mos">
            <?php

$reponse = $pdo->query("select * from bobo where id=5");
while($donnees = $reponse->fetch()){
?>
                <img src="images/<?php echo $donnees["nom"] ?>" alt="">
                <h2><?php echo $donnees["titre"] ?></h2>
            </div>
            <?php
}
?>
            <div class="mos">
            <?php

$reponse = $pdo->query("select * from bobo where id=6");
while($donnees = $reponse->fetch()){
?>
                <img src="images/<?php echo $donnees["nom"] ?>" alt="">
                <h2><?php echo $donnees["titre"] ?></h2>
            </div>
            <?php
}
?>
        </div><br><br><br><br>
        <div class="but"><button>Tout afficher</button></div>
        <br>
    </section>
    
    <section>
        <p class="p">se restaurer</p>
        <div class="meilleur">
            <h2>Meilleures restaurants</h2>
            <input type="text" placeholder="  Rechercher sur geogle">
            <!-- <i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #0a0a0a;"></i> -->
            <!-- <i class="fa-solid fa-magnifying-glass" style="color: #0d0d0d;"></i>
            <i class="fa-brands fa-twitter"></i> -->
            
            <!-- <div class="laub">
                <div>
                    <div><img src="images/hob.jpg" alt="">
                    
                </div>
                <div>
                    <div><img src="images/hob.jpg" alt="">
                    <h2>Lauberge</h2>
                </div>
                <div>
                    <div><img src="images/hob.jpg" alt="">
                    <h2>Lauberge</h2>
                </div>
                <div>
                    <div><img src="images/hob.jpg" alt="">
                    <h2>Lauberge</h2>
                </div>
            </div> -->
            <div class="laub">
                <div class="mo">
                    <img src="images/hob.jpg" alt="">
                    <h2>Lauberge</h2>
                </div>
                <div class="mo">
                    <img src="images/pou.jpg" alt="">
                    <h2>Poulet D'OR</h2>
                </div>
                <div class="mo">
                    <img src="images/gou.jpg" alt="">
                    <h2>La Goutte D'OR</h2>
                </div>
                <div class="mo">
                    <img src="images/pa.jpg" alt="">
                    <h2>Le PATRONAT</h2>
                </div>
            </div><br><br><br><br>
        </div>
    </section><br><br>
    <p class="p">se reposer</p>
    <div class="lau">
        <div class="fla a-img-txt">
            <!-- <a class="" href="https://jenseign.com"> -->
                <img class="a-img" src="images/flani.jpg" alt="jenseign">
                <span class="a-txt">Lauberge</span>
             
        </div>
        <div class="fla a-img-txt">
            <!-- <a class="" href="https://jenseign.com"> -->
                <img class="a-img" src="images/hotel-de-la-mer.jpg" alt="jenseign">
                <span class="a-txt">Poulet D'OR</span>
             
        </div>
        <div class="fla a-img-txt">
            <!-- <a class="" href="https://jenseign.com"> -->
                <img class="a-img" src="images/sisi.webp" alt="jenseign">
                <span class="a-txt">La Goutte D'OR</span>
             
        </div>
       
        <!-- <div class="mo">
            <img src="images/pa.jpg" alt="">
            <h2>Le PATRONAT</h2>
        </div> -->
    </div><br><br><br><br>



    <?php
  include("footer.php")
  ?>
</body>
</html>