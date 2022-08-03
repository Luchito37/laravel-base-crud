@extends('layouts.app')

@section('page_title', 'Crea Fumetti')

@section('page_content')
    <div class="d-flex justify-content-center m-5">
        <h1 class=" text-white border border-success rounded-pill border-3 border-opacity-50 p-3">CREA NUOVO FUMETTO</h1>
    </div>
    <div class="container">
        <form action="{{route('comics.store')}}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputTitle" class="form-label">Titolo</label>
                <input type="text" name="title" class="form-control"  id="exampleInputTitle">
            </div>
            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Descrizione</label>
                <textarea type="description" class="form-control" id="exampleInputDescription">
            </div>
            <div class="mb-3">
                <label for="exampleInputSeries" class="form-label">Serie</label>
                <input type="text" name="series" class="form-control"  id="exampleInputSeries">
            </div>
            <div class="mb-3">
                <label for="exampleInputType" class="form-label">Tipologia</label>
                <input type="text" name="type" class="form-control"  id="exampleInputType">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{route('comics.index')}}" class="btn btn-secondary">Discard</a>
        </form>
    </div>

@endsection
