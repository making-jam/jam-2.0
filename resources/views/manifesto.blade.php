@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Manifesto</h1>
            </div>
        </div>
    </header>

    <main class="static">
        <section class="container-narrow">
            <p>Building products is hard. When the three of us started working
                together at <a href="http://www.adbrain.com" target="_blank">Adbrain</a> a year ago, we struggled. We’d
                worked on products before, but nothing quite like this (ad tech
                products are complicated). How do you decide what to build? How do
                designers, engineers and product managers seamlessly work together?
                What tools are best for the job at hand? How does a good product
                become great?</p>

            <p>We often wondered how other companies went about building products
                from scratch. We realised what we really needed was a place where we
                could learn from others that have been there and done it. Somewhere
                where we could discover and understand how all the parts fit
                together.</p>

            <p>So we decided to start JAM. This is the community we wish we’d had
                all along, a place where people, across all disciplines can discuss
                their successes and failures, experiments, tools and techniques, and
                anything else that gets great products built.</p>

            <p>We hope you’ll join us.</p>
        </section>

        <section class="grey" id="team">
            <h3 class="text-center">Who are we?</h3>

            <div class="team row">
                <div class="col-md-4 member">
                    <div class="avatar"></div>

                    <div class=" details">
                        <strong>Team Member</strong>

                        <p>Lorem ipsum.</p>
                        <small><a href="/linkedin">LinkedIn</a> &bull;
                            <a href="/twitter">Twitter</a></small>
                    </div>
                </div>

                <div class="col-md-4 member">
                    <div class="avatar"></div>

                    <div class=" details">
                        <strong>Team Member</strong>

                        <p>Lorem ipsum.</p>
                        <small><a href="/linkedin">LinkedIn</a> &bull;
                            <a href="/twitter">Twitter</a></small>
                    </div>
                </div>

                <div class="col-md-4 member">
                    <div class="avatar"></div>

                    <div class=" details">
                        <strong>Team Member</strong>

                        <p>Lorem ipsum.</p>
                        <small><a href="/linkedin">LinkedIn</a> &bull;
                            <a href="/twitter">Twitter</a></small>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection