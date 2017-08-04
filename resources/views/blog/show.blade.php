@extends('layouts.app')

@section('content')


    <div class="blog-show-container">
        <div class="blog-content">
            <h1>{{ $post->title }}</h1>

            <article>
                <div class="article">
                    {{ $post->body }}
                </div>
            </article>

        </div>

        <div class="blog-other-content">
            <div class="post-credits">
                <div class="post-user">
                    <div class="post-user-picture">
                        <img src="/{{ $post->user->avatar }}" alt="">
                    </div>

                    <p>Publié par {{ $post->user->username }} le {{ $post->created_at->toFormattedDateString() }}</p>
                </div>
                <div class="post-user-presentation">
                    <p>{{ $post->user->description }}</p>
                </div>


            </div>

            <div class="other-posts">
                <h3>A lire aussi</h3>
                @foreach($posts as $otherPost)
                    <div class="other-post">
                        <div class="other-post-image">
                            <a href="{{ route('front.blog.show', $otherPost->id) }}"><img src="/{{ $otherPost->illustration }}" alt=""></a>

                        </div>
                        <div class="other-post-menu">
                            <div class="other-post-title">
                                <h3>{{ str_limit($otherPost->title, 30) }}</h3>
                            </div>
                            <div class="other-post-link">
                                <a href="{{ route('front.blog.show', $otherPost->id) }}">Lire l'article</a>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection