<!doctype html>
<html @if ($direction) dir="{{ $direction }}" @endif
      @if ($language) lang="{{ $language }}" @endif>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon-16x16.png">
        {!! $head !!}
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93141685-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-93141685-1');
        </script>
        
    </head>

    <body>
        {!! $layout !!}

        <div id="modal"></div>
        <div id="alerts"></div>

        <script>
            document.getElementById('flarum-loading').style.display = 'block';
            var flarum = {extensions: {}};
        </script>

        {!! $js !!}

        <script id="flarum-json-payload" type="application/json">@json($payload)</script>

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

        {!! $foot !!}
    </body>
</html>
