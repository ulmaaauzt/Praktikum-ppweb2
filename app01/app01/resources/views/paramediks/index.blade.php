
@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Daftar Paramedik</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Spesialis</th>
                <th>Telpon</th>
                <th>Alamat</th>
                <th>Unit Kerja ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_paramedik as $par)
                <tr>
                    <td>{{ $par->id }}</td>
                    <td>{{ $par->nama }}</td>
                    <td>{{ $par->gender }}</td>
                    <td>{{ $par->tmp_lahir }}</td>
                    <td>{{ $par->tgl_lahir }}</td>
                    <td>{{ $par->spesialis }}</td>
                    <td>{{ $par->telpon }}</td>
                    <td>{{ $par->alamat }}</td>
                    <td>{{ $par->unit_kerja_id }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('paramediks.show', $par->id) }}">View</a>
                        <a class="btn btn-warning" href="{{ route('paramediks.edit', $par->id) }}">Edit</a>
                        <form action="{{ route('paramediks.destroy', $par->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus {{ $par->nama }}?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection