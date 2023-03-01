<?php 
    $categorie = "SPORT ASSORTIMENTEN";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/module9/css/styles.css">
    <title>SportWebshop</title>
</head>
<body>

    <?php include "header.php"?>                              
                                
                    <div class="wrapper4">
                        <div class="pr"><br><br><h2 class="titel"><?php echo $categorie ?></h2></div>
                        <div class="project1"><a href="/module9/hockey.php"><br> <h1 class="pjcolor"></h1> 
                            <img class="pj" src="/module9/img/hockey.png" height="300px" width="300px">
                            <p class="pjcolor">HOCKEY<br>ASSORTIMENT</p></a>
                        </div>
                        <div class="project2"><a href="/module9/voetbal.php"><br> <h1 class="pjcolor"></h1> 
                            <img class="pj" src="/module9/img/voetbal.png" height="300px" width="300px">
                            <p class="pjcolor">VOETBAL<br>ASSORTIMENT</p></a>
                        </div>
                        <div class="project3"><a href="/module9/volleybal.php"><br> <h1 class="pjcolor"></h1> 
                            <img class="pj" src="/module9/img/volleybal.png" height="300px" width="300px">
                            <p class="pjcolor">VOLLEYBAL<br>ASSORTIMENT</p></a>
                        </div>
                    </div>


    <?php include "footer.php"?> 

</body>
</html>