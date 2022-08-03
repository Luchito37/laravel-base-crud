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
                        <div>
                            <div class="d-flex justify-content-end">
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
