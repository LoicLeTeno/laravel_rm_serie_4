<section>
    <div class="container my-5">
        <ul>
            @foreach ($legumes as $legume)
            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                {{ $legume->id }}. {{ $legume->names }} / {{ $legume->numbers }}
                
                <a href="{{route('legumesShow', $legume->id)}}">
                    <button class="btn btn-success text-light" type="submit">Show</button>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</section>
