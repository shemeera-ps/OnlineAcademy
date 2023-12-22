<div class="{{ $class }}">
    <h3 class="font-bold text-xl mb-4">{{ $post->name}}</h3>
    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="mb-4 tracking-tight">
    <p>{{ $post->short_description }}</p>
    {{$slot}}
    <a href="{{ $link }}">{{ $button }}</a>
</div>