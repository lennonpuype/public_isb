<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="assets/img/icon.png">
    <title>13de Editie ISB 2018</title>
    <?php echo $css;?>
    <script>
    WebFontConfig = {
        google: {
          families: ["Niramit:400,700"]
        }
      };

      (function(d) {
        var wf = d.createElement("script"),
          s = d.scripts[0];
        wf.src =
          "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js";
        wf.async = true;
        s.parentNode.insertBefore(wf, s);
      })(document);
    </script>
  </head>
  <body>
  <h1 class="hide">Straattheaterfestival Beveren 2018</h1>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="alert alert-success">' . $_SESSION['info'] . '</div>';
        }
        if(!empty($_SESSION['info_long'])) {
          echo '<div class="alert alert-success-long">' . $_SESSION['info_long'] . '</div>';
        }
      ?>

    <header class="header <?php if($_GET["page"] == 'home'){echo 'duo_musa';} ?>">
      <nav class="nav">
      <h1 class="hide">navigation</h1>
        <a href="index.php"><img class="logo" src="assets/img/logo.png" width="120" alt="Logo ISB" /></a>
        <article class="links">
        <h1 class="hide">Links resized</h1>
          <a href="index.php?page=programma" class="programma__nav">Programma</a>
          <a href="#"><img src="assets/img/info.svg" width="40" height="40" alt="Link Praktische info" /></a>
        </article>

        <article class="desktop_links">
        <h1 class="hide">Links normaal</h1>
         <a href="index.php?page=programma" class="link_desktop">Programma</a>
          <a href="#" class="link_desktop">Praktische info</a>
        </article>
      </nav>
    </header>

  <?php echo $content;?>

    <?php echo $js; ?>
  </body>
</html>
