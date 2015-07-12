@extends('master')

@section('content')
    <header>
        <div class="hero">
            <div class="container-narrow">
                <div class="col-sm-8 intro">
                    <h1>Sharing the Stories <br/>Behind Great Products</h1>

                    <p>1 day. 10 speakers. Great coffee.</p>

                    <p>Saturday 3rd October 2015. Oval Space, London.</p>

                    <a class="button black" href="/buy">Get Your Early Bird Ticket</a>
                </div>
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

        <i class="arrow"></i>
    </header>

    <main>
        <section>
            <div class="container-small">
                <p>Have you ever wondered how successful companies like TransferWise, YPlan, GoSquared, or CityMapper go
                    about building groundbreaking products? What goes on behind the scenes? How do product managers,
                    designers, and engineers make it all happen?</p>

                <p>JAM is a 1-day event to reveal the stories behind the products you know and love.</p>
            </div>
        </section>

        <section class="grey" id="speakersIntro">
            <div class="container-small">
                <h3>9 speakers from some of the best product companies share their stories.</h3>

                <a class="button black see-schedule" href="/programme">See Schedule</a>
            </div>
        </section>

        <section id="speakers">
            <div class="container">
                <div class="col-sm-4 speaker">
                    <div class="avatar"></div>
                    <strong>Name</strong>
                    <small>Position</small>
                    <a href="#company" class="company"><span>Company name</span></a>
                </div>
            </div>
        </section>

        <section class="grey" id="topics">
            <div class="container">
                <h3>And a wide selection of topics.</h3>

                <div class="row topics">
                    <div class="col-sm-6 topic">Deciding what to build</div>
                    <div class="col-sm-6 topic">Making products more human</div>
                    <div class="col-sm-6 topic">Nurturing a product-driven culture</div>
                    <div class="col-sm-6 topic">Data-driven design</div>
                    <div class="col-sm-6 topic">Organising teams for success</div>
                    <div class="col-sm-6 topic">TBC</div>
                </div>
            </div>

            <a class="button black see-schedule" href="/programme">See Schedule</a>
        </section>

        <section id="sponsors">
            <div class="container-small">
                <h3>JAM wouldn't be possible without <br/>the generous help of our sponsors.</h3>

                <ul class="row sponsors">
                    <li class="col-sm-4" id="adbrain">
                        <a href="http://www.adbrain.com/" target="_blank"><strong>Adbrain</strong></a>
                    </li>
                    <li class="col-sm-4" id="gocardless">
                        <a href="https://gocardless.com/" target="_blank"><strong>GOCARDLESS</strong></a>
                    </li>
                    <li class="col-sm-4" id="deskbeers">
                        <a href="https://www.deskbeers.com/" target="_blank"><strong>DeskBeers</strong></a>
                    </li>
                    <li class="col-sm-4" id="lyst">
                        <a href="https://www.lyst.co.uk/" target="_blank"><strong>lyst</strong></a>
                    </li>
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
                <h3>Get Involved</h3>

                <a class="button white" href="/buy">Book Your Early Bird Ticket</a>

                <small><a href="/">Need Help Convincing Your Boss? Download our PDF</a></small>
            </div>
        </section>
    </main>
@endsection