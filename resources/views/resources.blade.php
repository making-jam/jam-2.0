@extends('master')

@section('content')
    <header class="text">
        <div class="hero">
            <div class="container-narrow">
                <h1>Resources</h1>
            </div>
        </div>
    </header>

    <main class="static">
        @foreach ($resources as $data)
            <a href="{{$data['link']}}" target="_blank">
                <article class="container-narrow">
                    <p class="title">{{$data['title']}}</p>
                    <strong class="date">{{$data['date']}}</strong>

                    <p class="description">{{$data['desc']}}</p>

                    <div class="categories">
                        @foreach ($data['tags'] as $tag)
                            <span class="label">{{$tag}}</span>
                        @endforeach
                    </div>
                </article>
            </a>
        @endforeach
    </main>

    <div class="resources-sign-up">
        <div class="container-narrow">
            <div class="pull-left">The best design stories, sent to your inbox.</div>
            <form class="pull-right" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form">
                <input style="display: none" type="text" name="b_7f799244738e8b8558a646378_6c81011ad7" tabindex="-1"
                       value="">
                <input autofocus="" type="email" name="EMAIL" placeholder="Email address"
                       required="">
                <button class="white" name="subscribe">Sign up</button>
            </form>
        </div>
    </div>
    </div>
@endsection