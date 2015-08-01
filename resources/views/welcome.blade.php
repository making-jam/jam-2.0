@extends('master')

@section('content')
    <header>
        <div class="hero">
            <div class="container-narrow">
                <div class="col-sm-8 intro">
                    <h1>Sharing the Stories <br/>Behind Great Products</h1>

                    <p>1 day. 9 world-class speakers. Great coffee.</p>

                    <p>Saturday 3rd October 2015. Oval Space, London.</p>

                    <a class="button black" href="/buy">Get Your Early Bird Ticket</a>
                </div>
                <div class="col-sm-4 features is-hidden">
                    <ul>
                        <li>9 world-class speakers</li>
                        <li>200 like-minded attendees to meet</li>
                        <li>Free lunch, unlimited tea &amp; coffee</li>
                        <li>Exclusive discounts for the best product design tools around</li>
                        <li>...and much more!</li>
                    </ul>
                </div>
            </div>
        </div>

        <i class="arrow"></i>
    </header>

    <main>
        <section>
            <div class="container-small">
                <p>Have you ever wondered how successful companies like TransferWise, YPlan, GoSquared, or SwiftKey go
                    about building groundbreaking products? What goes on behind the scenes? How do product managers,
                    designers, and engineers make it all happen?</p>

                <p>JAM is a 1-day event to reveal the stories behind the products you know and love.</p>

                <a class="button black margin-top-base" href="/manifesto">Read our Story</a>
            </div>
        </section>

        <section class="grey" id="speakersIntro">
            <div class="container-small">
                <h3>9 speakers from some of the best product companies share their stories.</h3>

                <a class="button black see-schedule" href="/speakers">Find Out More</a>
            </div>
        </section>

        <section id="speakers">
            <div class="container-narrow">
                @foreach ($speakers as $name => $info)
                    <div class="col-sm-4 speaker">
                        <img src="/images/speakers/{{$info['img']}}">

                        <strong>{{$name}}</strong>
                        <small>{{$info['position']}}</small>
                        <a href="{{$info['link']}}" target="_blank" id="{{$info['id']}}"
                           class="company"><em>{{$info['company']}}</em></a>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="grey" id="topics">
            <div class="container">
                <h3>And a wide selection of topics.</h3>

                <div class="row topics">
                    <div class="col-sm-6 topic">User-centered design</div>
                    <div class="col-sm-6 topic">Deciding what to build</div>
                    <div class="col-sm-6 topic">Making products more human</div>
                    <div class="col-sm-6 topic">Nurturing a product-driven culture</div>
                    <div class="col-sm-6 topic">Organising teams for success</div>
                    <div class="col-sm-6 topic">Data-driven design</div>
                </div>
            </div>

            {{--<a class="button black" href="/speakers">Find Out More</a>--}}
        </section>

        <section id="sponsors">
            <div class="container-small">
                <h3>JAM wouldn't be possible without <br/>the generous help of our sponsors.</h3>

                <ul class="row sponsors">
                    <li class="col-sm-6" id="adbrain">
                        <a href="http://www.adbrain.com/" target="_blank"><strong>Adbrain</strong></a>
                    </li>
                    <li class="col-sm-6" id="gocardless">
                        <a href="https://gocardless.com/" target="_blank"><strong>GOCARDLESS</strong></a>
                    </li>
                </ul>
                <ul class="row sponsors">
                    <li class="col-sm-4" id="deskbeers">
                        <a href="https://www.deskbeers.com/" target="_blank"><strong>DeskBeers</strong></a>
                    </li>
                    {{--<li class="col-sm-4" id="lyst">--}}
                    {{--<a href="https://www.lyst.co.uk/" target="_blank"><strong>lyst</strong></a>--}}
                    {{--</li>--}}
                    <li class="col-sm-4" id="balsamiq">
                        <a href="https://balsamiq.com/" target="_blank"><strong>balsamiq</strong></a>
                    </li>
                    <li class="col-sm-4" id="hirespace">
                        <a href="https://hirespace.com/" target="_blank"><strong>Hire Space</strong></a>
                    </li>
                </ul>

                <a href="/sponsors" class="button black">See full list of sponsors</a>
            </div>
        </section>

        <section class="jam" id="getInvolved">
            <div class="container">
                <h3>Join us!</h3>

                <a class="button white" href="/buy">Get Your Early Bird Ticket</a>

                <small><a target="_blank" href="/docs/convince-your-boss.pdf">Need Help Convincing Your Boss? Download
                        our PDF</a></small>
            </div>
        </section>

        <section id="quote">
            <div class="container">
                <p>&ldquo;We believe a great product should be the <br> first focus of every startup.&rdquo;</p>
                <a href="https://www.intercom.io/books/product-management" target="_blank">
                    <small>Intercom, Product Management</small>
                </a>
            </div>
        </section>
    </main>
@endsection