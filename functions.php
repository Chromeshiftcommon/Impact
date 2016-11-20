  <!DOCTYPE html>
<?php
function renderheader($title,$active) // Abandon all hope, ye who enter here
{
  global $lang; // Using the $lang variable from common.php, then rendering the common part of the files
  ?>

  <html>

      <head>
          <link rel="stylesheet" href="css/bootstrap.css">
          <link rel="stylesheet" href="css/bootstrap-theme.css">
          <link rel="stylesheet" href="css/jquery.bsPhotoGallery.css">
          <link rel="stylesheet" href="css/style.css">
          <script src="js/bootstrap.js"></script>
          <script src="js/jquery.bsPhotoGallery.js"></script>
          <script src="js/jquery-3.1.1.min.js"></script>
          <title>Impact Mode - <?php echo $title; ?></title>
      </head>

      <body>

          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbartopcollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="index.php">Impact Mode</a>
                </div>

                <!--Navbar Links-->
                <div class="collapse navbar-collapse" id="navbartopcollapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php"><button type="button" class="btn btn-custom<?php if ($active == "index") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['INDEX']; ?></button></a></li>
                        <li><a href="news1.php"><button type="button" class="btn btn-custom<?php if ($active == "catalog") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['CATALOG']; ?></button></a></li>
                        <li><a href="gallery.php"><button type="button" class="btn btn-custom<?php if ($active == "gallery") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['GALLERY']; ?></button></a></li>
                        <li><a href="design.php"><button type="button" class="btn btn-custom<?php if ($active == "design") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['DESIGN']; ?></button></a></li>
                        <li><a href="quality.php"><button type="button" class="btn btn-custom<?php if ($active == "quality") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['QUALITY']; ?></button></a></li>
                        <li><a href="facts1.php"><button type="button" class="btn btn-custom<?php if ($active == "facts") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['FACTS']; ?></button></a></li>
                        <li><a href="#contact" data-toggle="modal"><button type="button" class="btn btn-custom<?php if ($active == "contact") echo "-active" ?> btn-lg navbar-btn"><?php echo $lang['CONTACT']; ?></button></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="#" class="dropdown-toggle btn btn-custom-active btn-lg navbar-btn" data-toggle="dropdown" role="button"><?php echo $lang['LANGUAGE']; ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown" role="menu">
                            <li><a href="?lang=en"><img id="language_flag" src="images/ui/uk.png"> <?php echo $lang['ENG']; ?> </a></li>
                            <li><a href="?lang=ro"><img id="language_flag" src="images/ui/ro.png"> <?php echo $lang['ROU']; ?> </a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>

          <!--Contact form-->
        <div class="modal fade" id="contact" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" id="contact-form-ajax" method="post" action="sendmail.php">
                    <div class="modal-header">
                        <h4><?php echo $lang['CONTACT_HEADER']; ?></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">    <!--Name-->
                            <label form="contact-name" class="col-lg-2 control-label"><?php echo $lang['CONTACT_FIRST_NAME']; ?></label>
                            <div class="col-lg-10">
                                <input name="firstname" type="text" class="form-control required-field" id="contact-name-first" placeholder="First Name" required>
                            </div>
                        </div>

                        <div class="form-group">    <!--Last Name-->
                            <label form="contact-email" class="col-lg-2 control-label"><?php echo $lang['CONTACT_LAST_NAME']; ?></label>
                            <div class="col-lg-10">
                                <input name="lastname" type="text" class="form-control required-field" id="contact-name-last" placeholder="Last Name" required>
                            </div>
                        </div>

                        <div class="form-group">    <!--Tel-->
                            <label form="contact-email" class="col-lg-2 control-label"><?php echo $lang['CONTACT_PHONE_NUMBER']; ?></label>
                            <div class="col-lg-10">
                                <input name="telnum" type="tel" class="form-control" id="contact-phone" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="form-group">    <!--email-->
                            <label form="contact-email" class="col-lg-2 control-label"><?php echo $lang['CONTACT_EMAIL']; ?></label>
                            <div class="col-lg-10">
                                <input name="email" type="email" class="form-control required-field" id="contact-email" placeholder="your@example.com" required>
                            </div>
                        </div>

                        <div class="form-group">    <!--Message-->
                            <label form="contact-message" class="col-lg-2 control-label"><?php echo $lang['CONTACT_MESSAGE']; ?></label>
                            <div class="col-lg-10">
                                <textarea name="message" id="con" class="form-control required-field" rows="8" placeholder="Message"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer"> <!--Contact form Footer-->
                        <button class="btn btn-primary" type="submit"><?php echo $lang['CONTACT_SEND']; ?></button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container container-custom">
          <div class="border-top"></div>
          <div class="border-left"></div>
          <div class="border-right"></div>
          <div class="border-bottom"></div>
<?php
}

function renderfooter() // Says what it says it does.
{
  global $lang; ?>

    </div><br>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <footer id="parent" class="footer-distributed">
      <div class="footer-left">
        <h4>Navigare</h4>
        <p class="footer-links">
    					<a href="index.php"><?php echo $lang['INDEX']; ?></a><br>
    					<a href="news1.php"><?php echo $lang['CATALOG']; ?></a><br>
    					<a href="gallery.php"><?php echo $lang['GALLERY']; ?></a><br>
    					<a href="design.php"><?php echo $lang['DESIGN']; ?></a><br>
    					<a href="quality.php"><?php echo $lang['QUALITY']; ?></a><br>
    		</p>
      </div>
      <div class="footer-center">
        <h4>Contact<h4>
          <br>
          Comuna Livezeni, Nr. 279, Corp II., Etaj II., 547365, Jud. Mureş <br>
          Tel./fax:	+40 265 260 392 <br>
          Mobil:	+40 720 534 285<br>
          E-mail:	office@impactmode.ro<br>
      </div>
      <div class="child footer-right">
        <p>&copy; Impact Mode 2016 <br>
        Developed by ChromeShift</p>
      </div>
    </footer>
    </body>
    </html>
    <?php }

function rendernavigation($pages,$page)
{ ?>
  <script>
  var pages = "<?php echo $pages; ?>"
  var page = "<?php echo $page; ?>"
  pgstring = window.location.href;
  var pgnum = pgstring.match(/\d/g);
  if (pgnum != 1)
  {
    document.write ("<a class=\"incontent\" href=\"" + page + (pgnum-1) + ".php\"> &larr; Previous</a> &nbsp; ");
  }
  for (var i=1; i<=pages;i++) {
    document.write ("<a class=\"incontent");
    if (i==pgnum) { document.write("-active");}
    document.write ("\" href=\"" + page + i + ".php\">" + i + "</a>" + "&nbsp;&nbsp;");
  }
  if (pgnum != pages)
  {
    document.write ("<a class=\"incontent\" href=\"" + page + (parseInt(pgnum)+parseInt(1)) + ".php\">Next &rarr; </a> ");
  }
  </script>
  <br><br>
<?php }


?>
