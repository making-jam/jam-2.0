@extends('master')

@section('content')
    <header class="text with-blurb">
        <div class="hero">
            <div class="container-narrow">
                <h1>Speakers</h1>
                <p>JAM 2015 was powered by 9 amazing speakers. No theory, no fluff, they’ve just shared their own story
                    -
                    and for this, we’re really grateful.</p>
            </div>
        </div>
    </header>

    <main>
        <section class="container-narrow">
            @foreach ($schedule as $timestamp => $info)
                <article>
                    @if (isset($info['biog']))
                        {{--<aside class="col-sm-2 time speaker-slot">--}}
                        {{--<strong>{{$info['programme']['time']}}</strong>--}}
                        {{--</aside>--}}
                        <aside class="col-sm-4 speaker">
                            <img src="/images/speakers/optimised/{{$info['img']}}">
                            <a href="{{$info['link']}}" target="_blank" id="{{$info['id']}}"
                               class="company"><em>{{$info['company']}}</em></a>
                        </aside>
                        <aside class="col-sm-8 info">
                            <h3>{{ $info['programme']['topic'] or 'Coming Soon...' }}</h3>

                            <p>{{$info['name']}}</p>

                            <p class="speaker-company">{{$info['position']}}, {{$info['company']}}</p>

                            {!! $info['topic']['description'] !!}

                            <a href="/docs/presentation/{{$info['bio']}}.pdf" target="_blank"
                               class="download-presentation">Download Presentation</a>

                            <div class="about">
                                <h4>About {{$info['firstName']}}</h4>

                                <div class="description">
                                    {!! $info['biog'] !!}
                                </div>
                            </div>
                        </aside>
                    @else
                        <aside class="col-sm-2 time no-speaker-slot">
                            <strong>{{$info['programme']['time']}}</strong>
                        </aside>
                        <aside class="col-sm-3 speaker"></aside>
                        <aside class="col-sm-7 info">
                            <h3>{{ $info['programme']['topic'] }}</h3>
                        </aside>
                    @endif
                </article>
            @endforeach
        </section>
    </main>
@endsection