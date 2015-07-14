@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Programme</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="container-narrow">
            <article>
                <aside class="col-sm-3 time">
                    <strong>9:00 am</strong>
                    <img src="/images/speakers/scott-weiss.jpg">
                    <a href="/" target="_blank" id="swiftkey"
                       class="company"><em>SwiftKey</em></a>
                </aside>
                <aside class="col-sm-9 info">
                    <h3>Organizing Product Teams for Success</h3>

                    <p class="speaker-name">Scott Weiss</p>

                    <p class="speaker-company">SwiftKey</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting remaining essentially unchanged.</p>
                </aside>
            </article>
        </section>
    </main>
@endsection