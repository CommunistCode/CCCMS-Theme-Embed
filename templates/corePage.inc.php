<!DOCTYPE html>

<?php

  $theme = $_pageTools->getTheme("base");

?>

<html lang="en">

  <head>

    <script type='text/javascript' src='themes/<?=$theme?>/scripts/cssTricks.js'></script>

    <!-- Google fonts -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Just+Another+Hand' />
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' />
    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Set character encoding !-->
    <meta charset="utf-8" />

    <!-- Set stylesheet !-->
    <link rel="stylesheet" href="base/themes/<?=$theme?>/stylesheets/cssReset.css" />
    <link rel="stylesheet" href="base/themes/<?=$theme?>/stylesheets/base.css" />
    <link rel="stylesheet" href="base/themes/<?=$theme?>/stylesheets/extendedBase.css" />
    <link rel="stylesheet" href="base/themes/<?=$theme?>/stylesheets/matchTags.css" />
    
    <!-- Javascript CSS Hacks -->
    <script src="base/themes/embed-new/scripts/cssTricks.js"></script>  

    <title><?php echo(SITE_NAME." : ".$_title); ?></title>    

  </head>

  <body>

    <div id="page">
    
      <header>

        <?php require_once(FULL_PATH."/base//themes/".$theme."/templates/title.inc.php"); ?>

      </header>

      <nav>
    
        <?php require_once(FULL_PATH."/base/themes/".$theme."/templates/links.inc.php"); ?>

      </nav>
      
      <div class='clear'></div>

      <div id='contentContainer'>
       
        <div class='content'>
 
          <?php echo($_content); ?>
    
        </div>
        
      </div>

      <div class='push'></div>
    
    </div>
    
    <script type='text/javascript'>

      setCSSHeight();    

    </script>

    <footer>

      <?php require_once(FULL_PATH."/base/themes/".$theme."/templates/footer.inc.php"); ?>

    </footer>

  </body>

</html>
