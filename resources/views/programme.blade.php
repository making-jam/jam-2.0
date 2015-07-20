@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Speakers</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="container-narrow">
            @foreach ($speakers as $name => $info)
                <article>
                    <aside class="col-sm-3 time">
                        {{--<strong>{{$info['programme']['time']}}</strong>--}}
                        <img src="/images/speakers/{{$info['img']}}">
                        <a href="{{$info['link']}}" target="_blank" id="{{$info['id']}}"
                           class="company"><em>{{$info['company']}}</em></a>
                    </aside>
                    <aside class="col-sm-9 info">
                        <h3>{{$info['name']}}</h3>

                        {{--<p class="speaker-name">{{$info['name']}}</p>--}}

                        <p class="speaker-company">{{$info['position']}}</p>

                        {!! $info['biog'] !!}
                    </aside>
                </article>
            @endforeach
        </section>
    </main>
@endsection