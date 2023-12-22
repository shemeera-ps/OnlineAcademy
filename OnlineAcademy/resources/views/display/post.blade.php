@extends('display.app')
@section('content')
<x-home-sub>Post</x-home-sub>
<!-- post -->

<section id="post-container">
    <x-post-card :$post link="{{ route('blog') }}" button="Go Back" class="post-inner">
        <div class="long">
            <p>{{$post->long_description}}</p>
        </div>
    </x-post-card>
</section>
@endsection