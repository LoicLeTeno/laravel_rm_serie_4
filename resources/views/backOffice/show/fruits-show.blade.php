@extends('layouts.backOffice')

@section('content')
    <div class="container mt-5">
        <h3>(SHOW)</h3>
    </div>

    <div class="d-flex justify-content-end container">
        <a class="fs-3" href="{{ route('fruitsBack') }}">Retour</a>
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
        </ul>
    </div>
@endsection
