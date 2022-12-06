<div class="container-fluid">
    <div class="row"> 
        <div class="col-md-12">
            <div class="card" style="margin-top: 10px;">
                <div class="card-header">
                    <div class="float-sm-left"> <p>Data Detail Barang</p> </div> 
                </div> 
                <form class="form-horizontal">
                <div class="card-body"> {{ csrf_field() }}
                   <input type="hidden" name="_method" value="PUT"> 
                        <div class="form-group row"> 
                            <label class="col-sm-2">Nama Barang</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $barang->nama_barang }}</p>
                            </div> 
                        </div> 
                        <div class="form-group row"> 
                            <label class="col-sm-2">Stock</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $barang->stock }}</p>
                            </div> 
                        </div> 
                        <div class="form-group row"> 
                            <label class="col-sm-2">Merk</label> 
                            <div class="col-sm-10"> 
                                <p>{{ $barang->merk }}</p>
                            </div> 
                        </div> 
                        <div class="form-group row">
                         <div class="col-sm-offset-2 col-sm-10"> 
                             <a href="{{ route('barang.index') }}" class="btn btn-warning">Data Barang</a> 
                        </div> 
                </div>
                </form>
            </div> 
        </div> 
    </div> 
</div> 
</div> 
