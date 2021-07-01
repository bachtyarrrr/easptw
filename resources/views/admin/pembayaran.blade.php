@extends('layoutAdmin')
@section('body')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-head-line" >Laporan Pembayaran</h2>
    </div>
</div>


<link rel="stylesheet" href='{{ asset("css/fontawesome.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/templatemo-sixteen.css")}}'>
    <link rel="stylesheet" href='{{ asset("css/owl.css")}}'>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
            @foreach($pembayaran as $p)
            <div class="col-md-4">
                <div class="product-item">
                    <form method="post" action="/keranjang/ubah">
                    @csrf
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$p->kode_pembayaran}}</h4>
                        </a>
                        <h5>Harga : {{$p->harga}}</h5>
                        <h5>Status : {{$p-> status_bayar}}</h5>
                        <br>
                        
                        <a href="/admin/pembayaran/kirim/{{$p->kode_pembayaran}}"><button type="button" class="btn btn-success">Kirim</button></a>
                        <a href="/admin/pembayaran/bukti/{{$p->kode_pembayaran}}"><button type="button" class="btn btn-danger">Detail</button></a>
                    </div>
                    </form>
                </div>
            </div>

            @endforeach
            
            

@endsection