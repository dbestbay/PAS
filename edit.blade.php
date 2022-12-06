<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman barang</title>
</head>
<body>
    <form action="{{ route('barang.update', $barang) }}" method="post"> 
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="POST">

        <label for="nama_barang">Nama Barang</label><br>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}"><br>

        <label for="stock_barang">Stock Barang</label><br>
        <input type="number" name="stock_barang" value="{{ $barang->stock_barang }}"><br>

        <label for="merk">Merk Barang</label><br>
        <input type="text" name="merk" value="{{ $barang->merk }}"><br>

        <br>
        <button type="submit">Perbaharui</button><br>
        
        <br>
        <a href="{{ route('barang.index') }}">Kembali</button><br>
    </form>
</body>
</html>
