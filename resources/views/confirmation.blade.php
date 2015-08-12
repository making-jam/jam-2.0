@extends('master')

@section('content')
    <div id="fb-root"></div>
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.4&appId=613473935364036";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <script>window.twttr = (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                    t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function (f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));</script>

    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Thank you for booking your ticket.</h1>
            </div>
        </div>
    </header>

    <main class="static">
        <section class="container-narrow">
            <h2>We can’t wait to welcome you to JAM 2015!</h2>

            <p>Bring your friends or colleagues with you and win a FREE subscription to Treehouse, Balsamiq or
                MarvelApp!</p>

            <p class="how-does-it-work">How does it work?</p>

            <p>It’s simple. The 3 people who’ve referred the most friends will be our winners!
                Just tell your friends to enter your name in the “Referrer” field when booking tickets.</p>

            <p class="how-does-it-work">Share and tweet</p>

            <div class="social">
                <div class="left">
                    <div class="fb-share-button" data-href="http://www.jam2015.london/"
                         data-layout="box_count"></div>
                </div>

                <div class="left">
                    <a class="twitter-share-button"
                       href="https://twitter.com/intent/tweet?text={{ $tweetText }}&url={{ $tweetUrl }}"
                       data-count="vertical">
                        Tweet</a>
                </div>

                <div class="left">
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                    <script type="IN/Share" data-url="http://www.jam2015.london" data-counter="top"></script>
                </div>
            </div>
        </section>
    </main>

    <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
    <script type="text/javascript">twttr.conversion.trackPid('l6lck', {
            tw_sale_amount: 0,
            tw_order_quantity: 0
        });</script>
    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
             src="https://analytics.twitter.com/i/adsct?txn_id=l6lck&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0"/>
        <img height="1" width="1" style="display:none;" alt=""
             src="//t.co/i/adsct?txn_id=l6lck&p_id=Twitter&tw_sale_amount=0&tw_order_quantity=0"/>
    </noscript>
@endsection