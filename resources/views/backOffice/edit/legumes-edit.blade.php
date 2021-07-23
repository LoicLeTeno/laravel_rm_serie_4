@extends('layouts.backOffice')

@section('content')
    <div class="container w-25 bg-warning text-dark p-5 rounded-3">
        <form action="/back/legumes/update/{{ $edit->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" class="form-control" required value="{{ $edit->names }}" name="names">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" required value="{{ $edit->numbers }}" name="numbers">
            </div>

            <button type="submit" class="btn bg-success text-white">Ajouter</button>
        </form>
    </div>
@endsection
