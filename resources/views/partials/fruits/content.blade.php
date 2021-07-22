<section>
    <div class="containermy-5">
        <ul>
            @foreach ($fruits as $fruit)
                <li class="text-decoration-none fw-bold">{{ $fruit->id }}. {{ $fruit->names }} / {{ $fruit->numbers }}</li>
            @endforeach
        </ul>
    </div>
</section>
