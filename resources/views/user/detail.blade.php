@extends('layoutUser')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Keranjang</h2>
                    <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
            <div class="section-heading">
            <h2>Detail</h2>
                <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
            </div>
        </div>
        @foreach($keranjang as $Keranjang)
        @if($loop->first)
        
            <h3>{{$Keranjang->kode_pembayaran}}</h3>
            
        @endif
        @endforeach

            @foreach($keranjang as $Keranjang)
            
            <div class="col-md-4">
                <div class="product-item">
                    
                    <form method="post" action="/keranjang/ubah">
                    @csrf
                    <div class="down-content">
                        <h4><img width="150px" src="{{ asset('img/barang/'.$Keranjang->file) }}"></h4>
                        <a href="#">
                            
                            <h4>{{$Keranjang->nama_barang}}</h4>
                        </a>
                        <h5>Harga : {{$Keranjang->harga}}</h5>
                        <h5>Jumlah : {{$Keranjang->jumlah}}</h5> 
                    </div>
                    </form>
                </div>
            </div>

            @endforeach
            
        </div>
        <a href="/pembayaran"><button type="button" class="btn btn-outline-danger">Kembali</button></a>
    </div>

@endsection