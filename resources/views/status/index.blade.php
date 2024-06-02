@extends('template')
@section('content')

    <div class="container mt-3">
        <h1>Data status</h1>
        <a href="{{ route('status.create') }}">
            <button class="btn btn-primary">Tambah</button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($status as $key)
                <tr>
                    <td scope="col">{{ $loop->iteration }}</td>
                    <td scope="col">{{ $key->name }}</td>
                    <td scope="col" class="d-flex">
                        <form action="{{ route('status.edit', $key->id) }}" method="get">
                            @csrf
                            <button class="btn btn-warning">Edit</button>
                        </form>
                        <form action="{{ route('status.delete', $key->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection