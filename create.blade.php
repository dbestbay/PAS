<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman barang</title>
</head>
<body>
    <form action="{{ route('barang.store') }}" method="post"> {{ csrf_field() }}

        <label for="nama_barang">Nama Barang</label><br>
        <input type="text" id="nama_barang" name="nama_barang"><br>
        
        <label for="stock_barang">Stock Barang</label><br>
        <input type="number" id="stock_barang" name="stock_barang"><br>

        <label for="merk">Merk Barang</label><br>
        <input type="text" id="merk" name="merk"><br>

        <br>
        <button type="submit">Simpan</button><br>
        <a href="{{ route('barang.index') }}">Kembali</button><br>
    </form>
</body>
</html>
