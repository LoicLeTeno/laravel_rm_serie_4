<section>
    <div class="container my-5">
        <ul>
            @foreach ($fruits as $fruit)
                <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                    {{ $fruit->id }}. {{ $fruit->names }} / {{ $fruit->numbers }}

                    <a href="/back/fruits/show/{{ $fruit->id }}">
                        <button class="btn btn-success text-light" type="submit">Show</button>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
