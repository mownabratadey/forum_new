<!doctype html>
<html <?php if($direction): ?> dir="<?php echo e($direction); ?>" <?php endif; ?>
      <?php if($language): ?> lang="<?php echo e($language); ?>" <?php endif; ?>>
    <head>
        <meta charset="utf-8">
        <title><?php echo e($title); ?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png">
        <?php echo $head; ?>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93141685-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-93141685-1');
        </script>

        <script data-ad-client="ca-pub-8364850769430422" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        
    </head>

    <body>
        <?php echo $layout; ?>


        <div id="modal"></div>
        <div id="alerts"></div>

        <script>
            document.getElementById('flarum-loading').style.display = 'block';
            var flarum = {extensions: {}};
        </script>

        <?php echo $js; ?>


        <script id="flarum-json-payload" type="application/json"><?php echo json_encode($payload, 15, 512) ?></script>

        <script>
            const data = JSON.parse(document.getElementById('flarum-json-payload').textContent);
            document.getElementById('flarum-loading').style.display = 'none';

            try {
                flarum.core.app.load(data);
                flarum.core.app.bootExtensions(flarum.extensions);
                flarum.core.app.boot();
            } catch (e) {
                var error = document.getElementById('flarum-loading-error');
                error.innerHTML += document.getElementById('flarum-content').textContent;
                error.style.display = 'block';
                throw e;
            }
        </script>

        <?php echo $foot; ?>

    </body>
</html>
<?php /**PATH /home/freeper1/public_html/vendor/flarum/core/src/Frontend/../../views/frontend/app.blade.php ENDPATH**/ ?>