<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Catalog", "catalog");
 ?>
 <div class="container-fluid">
 <h1>
     <?php echo $lang['CATALOG'];?>
 </h1>
 </div>
 <div class="container-fluid">
   <ul>
     <li class="biglist">Materiale pentru cămăşi</li><?php echo $lang['SHIRT']; ?><br><div class="hyperlink"><a href="details1.php">Mai mult</a></div>
     <li class="biglist">Materiale pentru echipament de lucru, Corporatewear</li><?php echo $lang['CORPWEAR']; ?><br><div class="hyperlink"><a href="details2.php">Mai mult</a></div>
     <li class="biglist">Ţesături crude</li><?php echo $lang['RAW']; ?><br><div class="hyperlink"><a href="details3.php">Mai mult</a></div>
     <li class="biglist">Ţesături pentru realizarea buzunarelor</li><?php echo $lang['POCKET']; ?><br><div class="hyperlink"><a href="details4.php">Mai mult</a></div>
   </ul>
   <br><br>
 </div>

<?php renderfooter(); ?>
