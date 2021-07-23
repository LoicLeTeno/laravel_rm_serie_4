@extends('layouts.backOffice')

@section('content')
    <div class="container mt-5">
        <h3>(SHOW)</h3>
    </div>

    <div class="d-flex justify-content-end container">
        <a class="fs-3" href="{{ route('legumesBack') }}">Retour</a>
    </div>

    <div class="container py-5">
        <ul>
            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                ID: {{ $show->id }}
            </li>

            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                NAME: {{ $show->names }}
            </li>

            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                NUMBER: {{ $show->numbers }}
            </li>

            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                <form action="/back/legumes/delete/{{ $show->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white" type="submit">Supprimer</button>
                </form>
            </li>

            <li class="text-decoration-none fw-bold d-flex justify-content-around align-items-center my-3">
                <a href="/back/fruits/edit/{{ $show->id }}">
                    <button class="btn btn-primary text-white" type="submit">Edit</button>
                </a>
            </li>
        </ul>
    </div>
@endsection
