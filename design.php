<?php
include_once 'common.php';
include_once 'functions.php';
renderheader("Design your own shirt! ", "design");
 ?>
        <script type="text/javascript">
        function changeColor(dress)
        {
          if (document.getElementById("check").checked)
            document.getElementById("pic").src = "ruhaszinek/" + dress + "con.jpg";
          else
            document.getElementById("pic").src = "ruhaszinek/" + dress + ".jpg";
        }
        function hey() // Rewritten indices for server
        {
          imgsrc = document.getElementById("pic").src;
          if (imgsrc.includes("con"))
          {
            imgsrc = imgsrc.split("con");
            document.getElementById("pic").src = imgsrc[0] + imgsrc[1];
          }
          else
          {
            imgsrc = imgsrc.split(".");
            document.getElementById("pic").src = imgsrc[0] + "." + imgsrc[1] + "con." + imgsrc[2];
          }
        }
        </script>
        <h1>
            <?php echo $lang['DESIGNCONTENT'];?>
        </h1>
        <div class="container-fluid">
        <ul class="row-img nobullet">
          <li class="myImgDesign col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('ruha1');"><img style="width:100px; height:100px;" src="ruhaszinek/ruha1base.jpg"></li>
          <li class="myImgDesign col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('ruha2');"><img style="width:100px; height:100px;" src="ruhaszinek/ruha2base.jpg"></li>
          <li class="myImgDesign col-lg-2 col-md-3 col-sm-4 col-xs-12" onclick="changeColor('ruha3');"><img style="width:100px; height:100px;" src="ruhaszinek/ruha3base.jpg"></li>
        </ul>
        </div>
        <br>
        <div class="container-fluid">
          <table>
            <tr>
              <td><img id ="pic" src="ruhaszinek/ruha1.jpg"></td>
              <td class="switchtd">
                <h4>Contrast: <h4><br>
                <label class="switch">
                <input type="checkbox" id="check" onclick="hey();">
                <div class="slider round"></div>
                </label>
              </td>
            </tr>
            <tr>
              <td>
                <br><br><a href="pdfs/basecontrast.pdf"><button type="button" class="btn">1. Example base and contrast fabric print</button></a>
              </td>
            </tr>
            <tr>
              <td>
                <br><a href="pdfs/selection.pdf"><button type="button" class="btn">2. Example selection fabrics print</button></a>
              </td>
            </tr>
          </table>
        </div>
        <br><br>

<?php renderfooter(); ?>
