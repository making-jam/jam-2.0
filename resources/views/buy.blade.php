@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow relative">
                <h1>Buy Tickets</h1>

                <div class="col-sm-4 features">
                    <ul>
                        <li>Unlimited tea &amp; coffee</li>
                        <li>Lunch &amp; snacks</li>
                        <li>1 free drink at the bar</li>
                        <li>£1000+ worth of free goodies</li>
                        <li>...and much more!</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main class="static">
        <section class="container-narrow">
            <div class="col-sm-8">
                <div class="buy-tickets-iframe">
                    <iframe src="http://www.eventbrite.com/tickets-external?eid=16351563968&ref=etckt&v=2"
                            frameborder="0"
                            height="325" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5"
                            scrolling="auto" allowtransparency="true"></iframe>
                </div>

                <p>Coming as a group? Send us an <a href="mailto:hello@jam2015.london">email</a> to get a group
                    discount.</p>
                <small><a href="/">Need Help Convincing Your Boss? Download our PDF</a></small>

                <p>Substitutions</p>
                <small>Lorem Ipsum</small>

                <p>Cancellations</p>
                <small>Lorem Ipsum</small>
            </div>
        </section>
    </main>
@endsection