@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Paramedik - {{ $paramedik->nama }}</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $paramedik->id }}</p>
            <p><strong>Nama:</strong> {{ $paramedik->nama }}</p>
            <p><strong>Gender:</strong> {{ $paramedik->gender }}</p>
            <p><strong>Tempat Lahir:</strong> {{ $paramedik->tmp_lahir }}</p>
            <p><strong>Tanggal Lahir:</strong> {{ $paramedik->tgl_lahir }}</p>
            <p><strong>Spesialis:</strong> {{ $paramedik->spesialis }}</p>
            <p><strong>Telpon:</strong> {{ $paramedik->telpon }}</p>
            <p><strong>Alamat:</strong> {{ $paramedik->alamat }}</p>
            <p><strong>Unit Kerja ID:</strong> {{ $paramedik->unit_kerja_id }}</p>

            <a href="{{ route('paramediks.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection