@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Schedule</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="container-narrow">
            @foreach ($speakers as $name => $info)
                <article>
                    <aside class="col-sm-2 time">
                        <strong>{{$info['programme']['time']}}</strong>
                    </aside>
                    <aside class="col-sm-3 speaker">
                        <img src="/images/speakers/optimised/{{$info['img']}}">
                        <a href="{{$info['link']}}" target="_blank" id="{{$info['id']}}"
                           class="company"><em>{{$info['company']}}</em></a>
                    </aside>
                    <aside class="col-sm-7 info">
                        <h3>{{ $info['programme']['topic'] or 'Coming Soon...' }}</h3>

                        <p>{{$info['name']}}</p>

                        <p class="speaker-company">{{$info['position']}}, {{$info['company']}}</p>

                        {!! $info['topic']['description'] !!}


                        <div class="about">
                            {{--<span class="label">Topic</span>--}}
                            <h4>About {{$info['firstName']}}</h4>

                            <div class="description">
                                {!! $info['biog'] !!}
                            </div>
                        </div>
                    </aside>
                </article>
            @endforeach
        </section>
    </main>
@endsection