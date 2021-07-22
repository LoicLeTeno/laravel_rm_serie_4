<section>
    <div class="container my-5">
        <ul>
            @foreach ($fruits as $fruit)
                <li class="text-decoration-none fw-bold {{ strlen($fruit->names) >= 6 ? 'bg-primary' : '' }}">{{ $fruit->id }}. {{ $fruit->names }} / {{ $fruit->numbers }}</li>
            @endforeach
        </ul>
    </div>
</section>
