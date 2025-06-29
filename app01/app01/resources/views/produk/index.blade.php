<h2>Data Produk</h2>
@php
if (!empty($produk)) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>";
    echo "<th>Nama Produk</th>";
    echo "<th>Harga</th>";
    echo "<th>Stok</th>";
    echo "<th>Deskripsi</th>";
    echo "</tr>";

    foreach ($produk as $item) {
        echo "<tr>";
        echo "<td>" . $item->nama_produk . "</td>";
        echo "<td>" . $item->harga . "</td>";
        echo "<td>" . $item->stok . "</td>";
        echo "<td>" . $item->deskripsi . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data produk.";
}
@endphp