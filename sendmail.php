<?php
include_once 'common.php';
include_once 'functions.php';

$replyto = $_POST["email"];
$tel = $_POST["telnum"];
$msgold = $_POST["message"];
$msggood = wordwrap($msgold, 70);
$name = $_POST["firstname"] . " " . $_POST["lastname"];
$to = "egybizonyosember@gmail.com";
$additional_headers = "Date de contact: \r\n" .
                      "Nume: " . $name . "\r\n" .
                      "Nr. telefon: " . $tel . "\r\n" .
                      "Email: " . $replyto;

$result = mail($to, "Anunt de la Impact Mode", $msggood, $additional_headers);
if ($result){ renderheader("Succes!", ""); $text = "Email-ul dvs. a fost trimis cu succes!";}
else { renderheader("Ooops!", ""); $text = "A apărut a problemă, vă rog să încercați din nou! ";}
?>

<?php echo $text; ?>
<a class="incontent" href="index.php"> Înapoi la pagina de start </a>
<?php renderfooter() ?>
