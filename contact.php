<?php
include_once 'common.php';
include_once 'functions.php';
renderheader($lang['CONTACT'], "contact");
 ?>
    <h1> <?php echo $lang['CONTACT']; ?></h1>
    <!--Contact form-->
    <h2>
      <?php echo $lang['INFO']; ?>
    </h2>
    <table class="table-aron">
      <tr>
        <td>
          <?php echo ($lang['NAMEHERO']); echo nl2br ("\n");?>
        </td>
        <td>
          <?php echo $lang['NAME']; echo nl2br ("\n");?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo ($lang['CIFHERO']); echo nl2br ("\n");?>
        </td>
        <td>
          <?php echo $lang['CIF']; echo nl2br ("\n");?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo ($lang['ORCHERO']); echo nl2br ("\n");?>
        </td>
        <td>
          <?php echo $lang['ORC']; echo nl2br ("\n");?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo ($lang['CAPSOCHERO']); echo nl2br ("\n");?>
        </td>
        <td>
          <?php echo $lang['CAPSOC']; echo nl2br ("\n");?>
        </td>
      </tr>
    </table>

    <h2>
      <?php echo $lang['ADDRESSHERO']; echo nl2br ("\n"); ?>
    </h2>
    <div class="container-fluid">
    <?php echo $lang['ADDRESS']; echo nl2br ("\n"); ?>
    </div>
    <h2>
      <?php echo $lang['CONTACTDATAHERO']; echo nl2br ("\n"); ?>
    </h2>
    <table class="table-aron" width = "25%">
      <tr>
        <td>
          <?php echo $lang['TELFAXHERO']; echo nl2br ("\n"); ?>
        </td>
        <td>
          <?php echo $lang['TELFAX']; echo nl2br ("\n"); ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $lang['MOBILHERO']; echo nl2br ("\n"); ?>
        </td>
        <td>
          <?php echo $lang['MOBIL']; echo nl2br ("\n"); ?>
        </td>
      </tr>
      <tr>
        <td>
          <?php echo $lang['MAILHERO']; echo nl2br ("\n"); ?>
        </td>
        <td>
          <?php echo $lang['MAIL']; echo nl2br ("\n"); ?>
        </td>
      </tr>
    </table>
    <h2>
      <?php echo $lang['CONTACTUS']; echo nl2br ("\n"); ?>
    </h2>
    <form class="form-horizontal" id="contact-form-ajax" action="sendmail.php" method="post">
      <div class="modal-body">


        <div class="form-group">    <!--Last Name-->
            <label form="contact-email" class="col-lg-2 control-label"><?php echo $lang['CONTACT_LAST_NAME']; ?></label>
            <div class="col-lg-10">
                <input name="name" type="text" class="form-control required-field" id="contact-name-last" placeholder="Name" required>
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
                <textarea name="text" id="con" class="form-control required-field" rows="8" placeholder="Message"></textarea>
            </div>
        </div>

      </div>
      <div class="modal-footer"> <!--Contact form Footer-->
                            <button class="btn btn-primary" type="submit"><?php echo $lang['CONTACT_SEND']; ?></button>
                        </div>
    </form>
    <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
        </body>

    </html>
