<?php
include_once 'common.php';
include_once 'functions.php';
renderheader($lang['QUALITY'], "quality");
 ?>
  <h1>Calitate</h1>
    <div class="container-fluid">
      <?php echo $lang['QUALITYCONTENT']; ?>
    </div><br><br>

    <script type="text/javascript">
    $("#more").click(function() {
         $("#hidden").show();
    });
    </script>
<?php renderfooter(); ?>
