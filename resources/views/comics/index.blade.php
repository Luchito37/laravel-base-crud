@extends('layouts.app')

@section('page_title', 'Lista Fumetti')

@section('page_content')
    <div class="d-flex justify-content-center m-5">
        <h1 class=" text-white border border-success rounded-pill border-3 border-opacity-50 p-3">LISTA FUMETTI</h1>
    </div>
    <div class="container">
        <table class="table table-success table-striped border border-success border-3 border-opacity-50">
            <thead>
                <tr>
                    <th scope="row">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}$</td>
                        <td>{{ $item->series }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>{{ $item->type }}</td>
                        <td>
                            <a href="{{ route('comics.show', $item->id) }}" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-eyeglasses" viewBox="0 0 16 16">
                                    <path
                                        d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
                                </svg>
                            </a>
                            <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-primary mt-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
