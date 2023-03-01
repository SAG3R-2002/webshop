<?php 
    $categorie = "HOCKEY ASSORTIMENT";
    $slogan = "Een sport is pas een sport als je er bij zweet.";
    $assortimentnaam ="hockey";
    //korting hier gegeven in procenten
    $korting = 15;

   // Dit is de array voor elk product van hockey
   //          naam    plaatje  voorraad prijs  
    $array = array(
      array ('sokken','sokken.png', 10, 14.99), 
      array ('schoenen','schoen.png', 20, 19.99),
      array ('broek','broek.png', 20, 14.99),
      array ('shirt', 'shirt.png', 20, 9.99),
      array ('scheenbeschermer', 'scheenbeschermer.png', 20, 19.99),
      array ('drinkbeker', 'drinkbeker.png', 20, 15.99),
      array ('langebroek', 'langebroek.png', 20, 20.99),
      array ('bitje', 'bitje.png', 20, 18.99),
      array ('hockeystick', 'hockeystick.png', 20, 22.99)
    );
    
    //hier zie je een loop en in die loop zit een if else statement
    $counter = 0;                      
    while ($counter < 9) {
      if ($array[$counter][2] == 0) {
        $array[$counter][2] = "geen voorraad";
    }elseif ($array[$counter][2] <= 10) {
        $array[$counter][2] = "laag voorraad";
    }else {
      $array[$counter][2] = "op voorraad";
    }
    $counter++;  
    };
    
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
<h1 class="assortimenten"><br><?php echo $categorie ?><br><p class="slogan"><?php echo $slogan ?></p><br></h1> 
</div>



<div class="grid-container">

            <?php
              
         
                 //als je 15 procent korting hebt, dan moet je de prijs vermenigvuldigen met 0,85 = 1 - 15/100 = 1 - 0,15
                 //Heb alles in een array gezet je ziet hieronder   array [dan in haakjes] dat heb ik bovenin in een array gedaan
                 //De eerste [welke assortiment] de tweede \/    [voor de rij] 
              $kortingsprijs = round((1-$korting/100) * $array[0][3], 2);       

            ?>

                <div class="grid-item">
                  <?php 
                  
                  if($array[0][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[0][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }

                // Hieronder zie je de voorraad van lijn 23
                  ?> 
                  <p class="voorraadstyle"><?= $array[0][2]?> </p> 
                  <img src="/module9/img/hockey/<?= $array[0][1] ?>" height="200px" width="200px">
                  <p class="benaming"><?=$assortimentnaam ?> <?=$array[0][0] ?></p>
                  <p class="prijzen">van &euro; <?= number_format($array[0][3], 2, ",","") ?> voor &euro; <?= number_format($kortingsprijs, 2, ",","") ?></p>
                </div>



          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[1][3], 2);
          ?>
        
              <div class="grid-item">
                  <?php 
                  
                  if($array[1][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[1][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[1][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[1][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[1][0] ?></p>
                <p class="prijzen">van &euro; <?= number_format($array[1][3], 2, ",","") ?> voor &euro; <?= number_format($kortingsprijs, 2, ",","") ?></p>
              </div>



          <?php
            $kortingsprijs = round((1-$korting/100) * $array[2][3], 2);
          ?>

                <div class="grid-item">
                  <?php 
                  
                  if($array[2][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[2][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[2][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[2][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[2][0] ?></p>
                <p class="prijzen">van &euro; <?= number_format($array[2][3], 2, ",","") ?> voor &euro; <?= number_format($kortingsprijs, 2, ",","") ?></p>
              </div>




          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[3][3], 2);
          ?>
              <div class="grid-item">
                  <?php 
                  
                  if($array[3][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[3][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[3][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[3][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[3][0] ?></p>
                <p class="prijzen">van &euro; <?= number_format($array[3][3], 2, ",","") ?> voor &euro; <?= number_format($kortingsprijs, 2, ",","") ?></p>
              </div>





          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[4][3], 2);
          ?>
              <div class="grid-item">
                  <?php 
                  
                  if($array[4][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[4][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[4][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[4][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[4][0] ?></p>
                <p class="prijzen">van &euro; <?= number_format($array[4][3], 2, ",","") ?> voor &euro; <?= number_format($kortingsprijs, 2, ",","") ?></p>
              </div>


          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[5][3], 2);  
          ?>
              <div class="grid-item">
                  <?php 
                  
                  if($array[5][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[5][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[5][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[5][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[5][0] ?></p>
                <p class="prijzen">&euro; <?= number_format($array[5][3], 2, ",","") ?></p>
              </div>

          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[6][3], 2);  
          ?>
              <div class="grid-item">
                  <?php 
                  
                  if($array[6][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[6][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[6][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[6][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[6][0] ?></p>
                <p class="prijzen">&euro; <?= number_format($array[6][3], 2, ",","") ?></p>
              </div>


          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[7][3], 2);  

          ?>
              <div class="grid-item">
                <?php 
                  
                if($array[7][3] < 15){
                  echo '<span class="lageprijs">lage prijs!</span>';
                }
                else if($array[7][3] < 18.99){
                  echo '<span class="gemprijs">gemidelde prijs!</span>';
                }
                else {
                  echo '<span class="laagprijs">hoge prijs!</span>';
                }
                ?>
                <p class="voorraadstyle"><?= $array[7][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[7][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[7][0] ?></p>
                <p class="prijzen">&euro; <?= number_format($array[7][3], 2, ",","") ?></p>
              </div>



          <?php 
            $kortingsprijs = round((1-$korting/100) * $array[8][3], 2);  
          ?>
              <div class="grid-item">
                  <?php 
                  
                  if($array[8][3] < 15){
                    echo '<span class="lageprijs">lage prijs!</span>';
                  }
                  else if($array[8][3] < 18.99){
                    echo '<span class="gemprijs">gemidelde prijs!</span>';
                  }
                  else {
                    echo '<span class="laagprijs">hoge prijs!</span>';
                  }
                  ?>
                <p class="voorraadstyle"><?= $array[8][2]?> </p> 
                <img src="/module9/img/hockey/<?= $array[8][1]?>" height="200px" width="200px">
                <p class="benaming"><?=$assortimentnaam ?> <?=$array[8][0] ?></p>
                <p class="prijzen">&euro; <?= number_format($array[8][3], 2, ",","") ?></p>
              </div>
 
</div>
   
<a class="gotopbtn" href="#"> <img class="arrowsize" src="/module9/img/arrow.png">  </a>
   

<?php include "footer.php"?> 
  

  </body>
  </html>