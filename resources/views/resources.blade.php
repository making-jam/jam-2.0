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
@endsection