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

                <p>Want to come with your team? Great, we're doing group discounts. Just email <a
                            href="mailto:hello@jam2015.london">hello@jam2015.london</a> and tell us how many tickets
                    you'd like.</p>
                {{--<small><a href="/">Need Help Convincing Your Boss? Download our PDF</a></small>--}}

                <p>Substitutions</p>
                <small>If you are unable to attend JAM 2015, you can send someone in your place. Just email us the info
                    of the original attendee and the new attendee and we'll take care of the rest.
                </small>

                <p>Cancellations</p>
                <small>Cancellations made at least 30 days prior to the event will receive a 50% refund of their ticket
                    less applicable fees.
                </small>
            </div>
        </section>
    </main>
@endsection