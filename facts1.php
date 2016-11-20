<?php
include_once 'common.php';
include_once 'functions.php';
include_once 'languages/lang.ro.facts.php';
renderheader($lang['FACTS'], "facts");
 ?>
 <div class="container-fluid">
 <h1>
     <?php echo $lang['FACTS'];?>
 </h1>
 </div>
 <div class="container-fluid">
   <?php echo $lang['FACTS1']; ?>
   <br><br>

   <?php rendernavigation(6,"facts") ?>
 </div>

<?php renderfooter(); ?>
