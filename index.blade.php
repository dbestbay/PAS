<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peminjaman Barang</title>
</head>
<body>
    <p><a href="{{ route('barang.create') }}">Tambah data</a></p>
    <table border="2px" cellpading="2">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stock Barang</th>
            <th>Merk Barang</th>
            <th>Opsi</th>
        </tr>
        @foreach ($barang as $i => $p)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $p->nama_barang }}</td>
            <td>{{ $p->stock_barang }}</td>
            <td>{{ $p->merk }}</td>
            <td>
            <form method="post" action="{{ route('barang.destroy', $p->id_barang) }}"> {{ csrf_field() }}  
                {{-- <a href="{{ route('barang.show',$p->id) }}" class="btn btn-warning"> Detail</a> --}}
                <a href="{{ route('barang.edit', $p->id_barang) }}"> Edit</a>
                <input type="hidden" name="_method" value="DELETE"> 
                    <button type="submit">Hapus</button> 
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
