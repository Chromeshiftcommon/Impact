<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Design your own shirt! ");
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
        <ul>
          <li onclick="changeColor('black');">Black</li>
          <li onclick="changeColor('blue');">Blue</li>
          <li onclick="changeColor('green');">Green</li>
          <li onclick="changeColor('orange');">Orange</li>
          <li onclick="changeColor('red');">Red</li>
          <li onclick="changeColor('yellow');">Yellow</li>
        </ul>
        <img id ="pic" src="ruhaszinek/black.jpg">
        </div>

<?php renderfooter(); ?>
