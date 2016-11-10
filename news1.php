<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Stiri", "catalog");
 ?>
 <div class="container-fluid">
 <h1>
     <?php echo $lang['CATALOG'];?>
 </h1>
 </div>
 <div class="container-fluid">
   <?php echo $lang['PAGE1']; ?>
   <br><br>

   <?php rendernavigation() ?>
 </div>

<?php renderfooter(); ?>
