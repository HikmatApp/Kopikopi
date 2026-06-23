<!DOCTYPE html>
<html>

<head>
    <title>Edit Barang</title>
</head>

<body>

    <h1>Edit Barang</h1>

    <form action="{{ route('stok.update', $barang->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>Nama Barang</p>
        <input type="text"
            name="nama_barang"
            value="{{ $barang->nama_barang }}">

        <p>Kategori</p>
        <input type="text"
            name="kategori"
            value="{{ $barang->kategori }}">

        <p>Satuan</p>
        <input type="text"
            name="satuan"
            value="{{ $barang->satuan }}">

        <p>Stok</p>
        <input type="number"
            name="stok"
            value="{{ $barang->stok }}">

        <p>Stok Minimum</p>
        <input type="number"
            name="stok_minimum"
            value="{{ $barang->stok_minimum }}">

        <br><br>

        <button type="submit">
            Update Data
        </button>

        <a href="{{ route('stok.index') }}">
            Batal
        </a>

    </form>

</body>

</html>