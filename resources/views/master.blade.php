<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="uxoGRyCIKZAqXoimSbwGR7hmpL-tBV0aA6Pu-ypnIMA" />
    <meta name="description" content="JAM is a 1-day event designed to reveal the stories behind the products you know and love.">

    <meta property="og:url" content="{{$url}}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="JAM London 2015">
    <meta property="og:image" content="{{$url}}images/social/og-image.png">
    <meta property="og:description" content="JAM is a 1-day event designed to reveal the stories behind the products you know and love.">

    <title>JAM London - {{$title}}</title>

    <link rel="stylesheet" href="/css/website.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="/images/social/bookmark.png">

    <script src="//use.typekit.net/ulw5hgl.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>
<body class="preload page-{{$bodyClass}}">

<div id="notification"></div>

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