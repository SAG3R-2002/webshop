<?php 
    $categorie = "VOLLEYBAL ASSORTIMENTEN";
    $slogan = "Een sport is pas een sport als je er bij zweet.";
    $assortimentnaam ="volleybal";
    $korting = 15; //korting hier gegeven in procenten
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/module9/css/sporten.css">

    <title>SportWebshop</title>
</head>
<body>

<?php include "header.php"?> 
    
        <div class="assortimentenkleur"> 
          <h1 class="assortimenten"><br><?php echo $categorie ?><br>
          <p class="slogan"><?php echo $slogan ?></p><br></h1> 
        </div>

        <?php

  
          $broekprijs = 9.99;
          $shirtprijs = 9.99;
          $balprijs = 23.99;
          $drinkbekerprijs = 15.99;
          $langebroekprijs = 20.99;
          $kortsokprijs = 22.99;
          $kniebeschermerprijs = 22.99;
        ?>


        <div class="grid-container">

            <?php
              $artikelnaam = "sokken";
              $artikelfoto = "sokken.png";
              $prijs = 14.99;
              //als je 15 procent korting hebt, dan moet je de prijs vermenigvuldigen met 0,85 = 1 - 15/100 = 1 - 0,15
              $kortingsprijs = round((1-$korting/100) * $prijs, 2);
            ?>

                <div class="grid-item">
                  <img src="/module9/img/voetbal/<?= $artikelfoto ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$artikelnaam ?></p>
                  <p class="prijzen">van &euro; <?= number_format($prijs, 2, ",","") ?> voor <?= $kortingsprijs ?></p>
                </div>


            <?php
              $artikelnaam = "schoen";
              $artikelfoto = "schoen.png";
              $prijs = 19.99;
              $kortingsprijs = round((1-$korting/100) * $prijs, 2);
            ?>

                <div class="grid-item">
                  <img src="/module9/img/voetbal/<?= $artikelfoto ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$artikelnaam ?></p>
                  <p class="prijzen">van &euro; <?= number_format($prijs, 2, ",","") ?> voor <?= $kortingsprijs ?></p>
                </div>

            <?php
              $artikelnaam = "broek";
              $artikelfoto = "broek.png";
              $prijs = 9.99;
              $kortingsprijs = round((1-$korting/100) * $prijs, 2);
            ?>

                <div class="grid-item">
                  <img src="/module9/img/voetbal/<?= $artikelfoto ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$artikelnaam ?></p>
                  <p class="prijzen">van &euro; <?= number_format($prijs, 2, ",","") ?> voor <?= $kortingsprijs ?></p>
                </div>

            <?php
              $artikelnaam = "shirt";
              $artikelfoto = "shirt.png";
              $prijs = 9.99;
              $kortingsprijs = round((1-$korting/100) * $prijs, 2);
            ?>

                <div class="grid-item">
                  <img src="/module9/img/volleybal/<?= $artikelfoto ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$artikelnaam ?></p>
                  <p class="prijzen">van &euro; <?= number_format($prijs, 2, ",","") ?> voor <?= $kortingsprijs ?></p>
                </div>


            <?php
              $artikelnaam = "bal";
              $artikelfoto = "bal.png";
              $prijs = 22.99;
              $kortingsprijs = round((1-$korting/100) * $prijs, 2);
            ?>

                <div class="grid-item">
                  <img src="/module9/img/volleybal/<?= $artikelfoto ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$artikelnaam ?></p>
                  <p class="prijzen">van &euro; <?= number_format($prijs, 2, ",","") ?> voor <?= $kortingsprijs ?></p>
                </div>



            <div class="grid-item"><img src="/module9/img//volleybal/drinkbeker.png" height="200px" width="200px"><br>
              <p class="benaming"><?=$assortimentnaam ?> drinkbeker</p>
              <p class="prijzen"><?= $drinkbekerprijs ?></p>
            </div>
            <div class="grid-item"><img src="/module9/img/volleybal/kortsokken.png" height="200px" width="200px"><br>
              <p class="benaming"><?=$assortimentnaam ?> kortsokken</p>
              <p class="prijzen"><?= $kortsokprijs ?></p>
            </div>
            <div class="grid-item"><img src="/module9/img/volleybal/langebroek.png" height="200px" width="200px"><br>
              <p class="benaming"><?=$assortimentnaam ?> langebroek</p>
              <p class="prijzen"><?= $langebroekprijs ?></p>
            </div>
            <div class="grid-item"><img src="/module9/img/volleybal/kniebescherming.png" height="200px" width="200px"><br>
              <p class="benaming"><?=$assortimentnaam ?> kniebescherming</p>
              <p class="prijzen"><?= $kniebeschermerprijs ?></p>
            </div>  
        </div>
          
        <a class="gotopbtn" href="#"> <img class="arrowsize" src="/module9/img/arrow.png">  </a>
          
<?php include "footer.php"?> 
  
  </body>
  </html>