<!DOCTYPE html>
<html>
<head>
    <title>Detail Barang</title>
</head>
<body>

    <h1>Detail Barang</h1>

    <p><strong>Nama Barang:</strong> {{ $barang->nama_barang }}</p>

    <p><strong>Kategori:</strong> {{ $barang->kategori }}</p>

    <p><strong>Satuan:</strong> {{ $barang->satuan }}</p>

    <p><strong>Stok:</strong> {{ $barang->stok }}</p>

    <p><strong>Stok Minimum:</strong> {{ $barang->stok_minimum }}</p>

    <br>

    <a href="{{ route('stok.index') }}">
        Kembali
    </a>

</body>
</html>