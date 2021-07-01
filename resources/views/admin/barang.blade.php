@extends('layoutAdmin')
@section('title','admin')
@section('body')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Item</h1>

    </div>
</div>
<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Stok</th>
                                            <th width="120">File</th>
                                            
                                            
                                        </tr>
                                    </thead>                                   

                                    <tbody>
                            
                                    @foreach ($barang as $b)
                                    <tr>
                                        <td>{{ $b->kode_barang }}</td>
                                        <td>{{ $b->nama_barang }}</td>
                                        <td>{{ $b->deskripsi }}</td>
                                        <td>{{ $b->harga }}</td>
                                        <td>{{ $b->stok }}</td>
                                        <td><img style="height: 100px;width:100px" src="{{ asset('img/barang/'.$b->file) }}"></td>
                                    </tr>
                                    @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
        @yield('tambah_barang')
                

@endsection