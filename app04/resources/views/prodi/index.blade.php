<h3>{{ $judul }}</h3>

<table class="table table-bordored" width="100%" border="1">
    <thead>
        <tr>
            <th>No</th><th>Kode</th>
            <th>Nama Program Studi</th><th>Kaprodi</th>
        </tr>
    </thead>
    <tbody>
        @php $nomor = 1; @endphp
        @foreach ($ar_prodi as $p)
        <tr>
            <td>{{ $nomor }}</td>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->kaprodi }}</td>
        </tr>
        @php $nomor++; @endphp
        @endforeach
    </tbody>
</table>