<section id="{{ $id }}" {{ $attributes->merge(['class' => 'mb-10']) }}>
            <h2 class="text-xl font-bold">{{ $heading }}</h2>
            <p>{{ $paragraph }}</p>
            <div class="{{ $cardClass}}">
                {{$slot}}
            </div>
</section>