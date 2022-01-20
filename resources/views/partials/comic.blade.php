<div class="cardd">
    <a href="{{ route('comic', $comic->id) }}">

        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" />
        <p>{{ $comic->title }}</p>
    </a>
</div>
