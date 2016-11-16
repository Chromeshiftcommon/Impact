<?php
include_once 'common.php';
include_once 'functions.php';
include_once 'languages/lang.ro.news.php';
renderheader("The green grass of home", "catalog");
 ?>
 <div class="container-fluid">
   <br>
   <?php echo $lang['GRASS']; ?>
   <br><br>
 <a class="incontent" href="news5.php">Back to the news page</a>
 <br><br>
 </div>

<?php renderfooter(); ?>
