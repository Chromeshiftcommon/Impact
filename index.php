<?php
include_once 'common.php';
include_once 'functions.php';
renderheader($lang['INDEX'], "index");
 ?>

    <div class="container-fluid">
       <h1 class="text-center"><?php echo $lang['PRESENTATION']; ?></h1>
       <div class="row">
       <?php echo $lang['INDEXCONTENT']; ?>
       </div>
    </div>



<?php renderfooter(); ?>
