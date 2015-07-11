@extends('master')

@section('content')
    <header>
        <div class="hero">
            <div class="container-narrow">
                <div class="col-sm-8 intro">
                    <h1>Sharing the Stories <br/>Behind Great Products</h1>

                    <p>1 day. 10 speakers. Great coffee.</p>

                    <p>Saturday 3rd October 2015. Oval Space, London.</p>

                    <button class="black">Get Your Early Bird Ticket</button>
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
                    <div class="col-sm-4 topic">Data-driven design</div>
                    <div class="col-sm-4 topic">Data-driven design</div>
                    <div class="col-sm-4 topic">Data-driven design</div>
                    <div class="col-sm-4 topic">Data-driven design</div>
                    <div class="col-sm-4 topic">Data-driven design</div>
                    <div class="col-sm-4 topic">Data-driven design</div>
                </div>
            </div>

            <a class="button black see-schedule" href="/programme">See Schedule</a>
        </section>

        <section id="sponsors">
            <div class="container">
                <h3>JAM wouldn't be possible without the generous help of our sponsors.</h3>

                <div class="row">
                    <div class="col-sm-3">
                        <a href="#sponsor" class="sponsor"><span>Sponsor Name</span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="jam" id="getInvolved">
            <div class="container">
                <h3>Get Involved</h3>

                <button class="white">Book Your Early Bird Ticket</button>

                <small><a href="/">Need Help Convincing Your Boss? Download our PDF</a></small>
            </div>
        </section>
    </main>
@endsection