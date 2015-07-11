<html>
<head>
    <title>JAM London - {{$title}}</title>

    <link rel="stylesheet" href="/css/website.css">

    <script src="//use.typekit.net/ulw5hgl.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
</head>
<body class="page-{{$bodyClass}}">
@include('nav')

@yield('content')

@include('footer')

<script src="/js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="/js/smooth-scroll.min.js" type="text/javascript"></script>
<script src="/js/website.js"></script>
</body>
</html>