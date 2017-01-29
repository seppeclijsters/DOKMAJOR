<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="DOK Gent"/>
    <meta name="author" content="Seppe Clijsters"/>
    <meta name="keywords" content="Dok Gent evenementen ontmoetingsplek creativiteit"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">

      WebFontConfig = {
        custom: {
          families: ['jaapokki', 'din'],
          urls: ['assets/fonts/jaapokki/jaapokki.css', 'assets/fonts/din/din.css']
        }
      };

      (function() {
        var wf = document.createElement('script');
        wf.src = 'js/vendors/webfontloader.js';
        wf.type = 'text/javascript';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(wf, s);
      })();

    </script>
    <title>DOK</title>
    <?php echo $css;?>
  </head>
  <body>

    <div class="container">
      <?php if(!empty($_SESSION['info'])): ?><div class="alert alert-success"><?php echo $_SESSION['info'];?></div><?php endif; ?>
      <?php if(!empty($_SESSION['error'])): ?><div class="alert alert-danger"><?php echo $_SESSION['error'];?></div><?php endif; ?>

      <?php echo $content; ?>
    </div>

    <?php echo $js;?>
  </body>
</html>
