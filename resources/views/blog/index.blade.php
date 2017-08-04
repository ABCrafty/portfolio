@extends('layouts.app')

@section('content')

    <div class="blog-index-container" style="background: url('images/lyonpano2.jpg') no-repeat center center">
        <div class="blog-contain">

            <h1>Retrouvez toutes mes actualités</h1>
            @foreach($posts as $post)
                <div class="post custom-animated">
                    <div class="post-image">
                        <a href="{{ route('front.blog.show', $post->id) }}"><img src="/{{ $post->illustration }}" alt=""></a>
                    </div>
                    <div class="post-menu">
                        <div class="post-title">
                            <h3>{{ str_limit($post->title, 30) }}</h3>
                        </div>
                        <div class="post-link">
                            <a href="{{ route('front.blog.show', $post->id) }}">Lire d'article</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

        {{ $posts->links() }}
    </div>

@endsection