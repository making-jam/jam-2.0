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
            @foreach ($speakers as $name => $info)
            <article>
                <aside class="col-sm-3 time">
                    <strong>{{$info['programme']['time']}}</strong>
                    <img src="/images/speakers/{{$info['img']}}">
                    <a href="{{$info['link']}}" target="_blank" id="{{$info['id']}}"
                       class="company"><em>{{$info['company']}}</em></a>
                </aside>
                <aside class="col-sm-9 info">
                    <h3>Organizing Product Teams for Success</h3>

                    <p class="speaker-name">{{$info['name']}}</p>

                    <p class="speaker-company">{{$info['position']}}</p>

                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting remaining essentially unchanged.</p>
                </aside>
            </article>
            @endforeach
        </section>
    </main>
@endsection