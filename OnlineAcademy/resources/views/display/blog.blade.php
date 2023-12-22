
@extends('display.app')
@section('content')
<x-home-sub>Blog</x-home-sub>

        <section id="blog-container">
            <div class="blogs" onclick="window.location.href='post.html'">

            @foreach($posts as $post)
                <x-post-card class="post" :$post link="{{ route('posts.show',$post->id) }}" button="Read More"/>
            @endforeach
            </div>
            <div class="category">
                <h2>Categories</h2>

                @foreach($categories as $category)
                    <hr>
                    <a href="{{route('postPerCategory', ['category' => $category->id] )}}">{{ $category->name }}</a>
                @endforeach
            </div>
            
        </section>

    <x-paginator :$posts/>
@endsection