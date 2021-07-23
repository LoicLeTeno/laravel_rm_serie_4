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

        @if (count($fruits) == 0)
            <h1>Il n'y a pas de légume en stock</h1>
        @endif
    </div>

    <div class="container w-25 bg-warning text-dark p-5 rounded-3">
        <form action="{{ route('fruitsStore') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Names</label>
                <input type="text" class="form-control" name="names">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label text-white">Numbers</label>
                <input type="text" class="form-control" name="numbers">
            </div>
            <button type="submit" class="btn bg-success text-white">Ajouter</button>
        </form>
    </div>
</section>
