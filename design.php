<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Design your own shirt! ", "design");
 ?>
        <script type="text/javascript">
        function changeColor(color)
        {
          document.getElementById("pic").src = "ruhaszinek/" + color + ".jpg"
        }
        </script>
        <h1>
            <?php echo 'Design your own shirt! ' ;?>
        </h1>
        <div class="container-fluid">
        <ul class="row-img nobullet">
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('black');"><img style="width:100px; height:100px;" src="ruhaszinek/black.jpg"></li>
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('blue');"><img style="width:100px; height:100px;" src="ruhaszinek/blue.jpg"></li>
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('green');"><img style="width:100px; height:100px;" src="ruhaszinek/green.jpg"></li>
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('orange');"><img style="width:100px; height:100px;" src="ruhaszinek/orange.jpg"></li>
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('red');"><img style="width:100px; height:100px;" src="ruhaszinek/red.jpg"></li>
          <li id="myImgDesign" class="col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('yellow');"><img style="width:100px; height:100px;" src="ruhaszinek/yellow.jpg"></li>
        </ul>
        </div>
        <br>
        <div class="container-fluid">
        <img id ="pic" src="ruhaszinek/black.jpg">
        </div>
        <br><br>

<?php renderfooter(); ?>
