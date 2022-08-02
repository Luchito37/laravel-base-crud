@extends('layouts.app')

@section('page_title', 'Show Comics')

@section('page_content')
    <div>
        <div class="container d-flex vh-100 align-items-center justify-content-center">
            <div class="row ">
                <div class="col">
                    <div class="card border border-success rounded-4 border-3 border-opacity-50 p-3" style="width: 50rem;">
                        <img src="/img/Boolics.png" class="card-img-top sizeImg" alt="...">
                        <div class="card-body">
                            <h2>{{ $comic->title }}</h2>
                            <hr>
                            <p>{{ $comic->description }}</p>
                            <hr>
                            <ul>
                                <li>Data Creazione: {{ $comic->created_at }}</li>
                                <li>Data Ultima Modifica: {{ $comic->updated_at }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
