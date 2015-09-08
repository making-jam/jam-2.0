<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="uxoGRyCIKZAqXoimSbwGR7hmpL-tBV0aA6Pu-ypnIMA" />
    <meta name="description" content="JAM is a 1-day event designed to reveal the stories behind the products you know and love.">

    <meta property="og:url" content="{{ $ogMeta['link'] or $url }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $ogMeta['title'] or 'JAM London 2015' }}">
    <meta property="og:image" content="{{ $ogMeta['image'] or  $url . 'images/social/og-image.png' }}">
    <meta property="og:description" content="{{ $ogMeta['desc'] or 'JAM is a 1-day event designed to reveal the stories behind the products you know and love.'}}">

    <title>JAM London - {{$title}}</title>

    <link rel="stylesheet" href="/css/website.min.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/images/social/bookmark.png">

    <script>
        (function(d) {
            var config = {
                        kitId: 'ulw5hgl',
                        scriptTimeout: 3000,
                        async: true
                    },
                    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</head>
<body class="preload page-{{$bodyClass}}">

<div id="notification" class="bottom jam">
    <div class="close" id="closeNotification">&times;</div>
    <main>
        <div class="desc">
            Join <a href="https://www.ocado.com" target="_blank">Ocado</a>,
            <a href="https://www.wahanda.com/" target="_blank">Wahanda</a>,
            <a href="https://www.duedil.com/" target="_blank">DueDil</a>,
            <a href="http://yieldify.com/gb/" target="_blank">Yieldify</a>
            and others to discover the stories behind great products.
            Get your ticket now and <strong>save £40</strong> on the normal price.
        </div>
        The clock is ticking! <strong>Early-bird tickets end this Saturday!</strong>
    </main>
</div>

@include('nav')

@yield('content')

@include('footer')

<script src="/js/website.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56807522-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>