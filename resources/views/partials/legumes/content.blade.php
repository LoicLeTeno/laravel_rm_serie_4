<section>
    <div class="containermy-5">
        <ul>
            @foreach ($legumes as $legume)
                <li class="text-decoration-none fw-bold {{ strlen($legume->names) >= 8 ? 'bg-primary' : '' }}">{{ $legume->id }}">{{ $legume->id }}. {{ $legume->names }} / {{ $legume->numbers }}</li>
            @endforeach
        </ul>
    </div>
</section>
