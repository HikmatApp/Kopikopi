<h2>Tambah Barang</h2>

<form action="{{ route('stok.store') }}" method="POST">
    @csrf

    <p>Nama Barang</p>
    <input type="text" name="nama_barang">

    <p>Kategori</p>
    <input type="text" name="kategori">

    <p>Satuan</p>
    <input type="text" name="satuan">

    <p>Stok</p>
    <input type="number" name="stok">

    <p>Stok Minimum</p>
    <input type="number" name="stok_minimum">

    <br><br>

    <button type="submit">
        Simpan
    </button>
</form>