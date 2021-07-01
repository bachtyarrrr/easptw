@extends('layoutAdmin')
@section('body')
<br></br>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Tambah Item</h1>

    </div>
</div>


<form action="/tambah_barang/upload" method="post" enctype="multipart/form-data">
	@csrf
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nama Barang <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Deskripsi <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="deskripsi" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Harga Item <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="harga" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Stok <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="stok" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> File <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="file" name="file" required="required" class="form-control col-md-7 col-xs-12">
		</div>
	</div>
</br>
	<br><button type="submit">Unggah</button></br>
</form>
@endsection