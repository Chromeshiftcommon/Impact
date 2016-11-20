<?php
include_once 'common.php';
include_once 'functions.php';
include_once 'languages/lang.ro.news.php';
renderheader("Stiri", "catalog");
 ?>
 <div class="container-fluid">
 <h1>
     <?php echo $lang['CATALOG'];?>
 </h1>
 </div>
 <div class="container-fluid">
   <?php echo $lang['PAGE5']; ?>
   <br><br>

 <?php rendernavigation(8,"news") ?>
  </div>

<?php renderfooter(); ?>
