<!DOCTYPE html>

<!-- Finding the news page nr. on which we currently are, then rendering navigation -->
<script>
// Finding pgnr.
pgstring = window.location.href;
var pgnum = pgstring.match(/\d/g);

// Rendering navigation
if (pgnum != 1)
{
  document.write ("<a class=\"incontent\" href=\"news" + (pgnum-1) + ".php\"> Previous</a> ");
}
for (var i=1; i<=8;i++) {
  document.write ("<a class=\"incontent\" href=\"news" + i + ".php\">" + i + "</a>" + " ");
}
if (pgnum != 8)
{
  document.write ("<a class=\"incontent\" href=\"news" + (parseInt(pgnum)+parseInt(1)) + ".php\"> Next</a> ");
}
</script>


<?php
include_once 'common.php';
?>

<html>

    <head>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap-theme.css">
        <title><?php echo $title ?></title>
    </head>

    <body>
        <nav class="navbar navbar-default" id="navbartop">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbartopcollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#home">CHROMESHIFT</a>
                </div>

                <!--Navbar Links-->
                <div class="collapse navbar-collapse" id="navbartopcollapse">
                    <ul class="nav navbar-nav">
                        <li><a href="#">About </a></li>
                        <li><a href="#">Menu2 </a></li>
                        <li><a href="#">Menu3 </a></li>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Solutions <span class="caret"></span></a>
                                <ul class="dropdown-menu inverse-dropdown" role="menu">
                                    <li><a class="page-scroll" href="#solution1"><?php echo $lang['SOLUTIONS1']; ?></a></li>
                                    <li><a class="page-scroll" href="#solution2"><?php echo $lang['SOLUTIONS2']; ?></a></li>
                                    <li><a class="page-scroll" href="#solution3"><?php echo $lang['SOLUTIONS3']; ?></a></li>
                                </ul>
                        </li>
                        <li><a href="#">Projects </a></li>
                        <li><a href="#contact" data-toggle="modal">Contact </a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['LANGUAGE']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="index.php?lang=hu"><?php echo $lang['HUN']; ?> </a></li>
                                <li><a href="index.php?lang=ro"><?php echo $lang['RO']; ?></a></li>
                                <li><a href="index.php?lang=en"><?php echo $lang['ENG']; ?></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
