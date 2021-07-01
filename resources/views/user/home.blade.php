@extends('layoutUser')
@section('body')

<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Best Offer</h4>
                <h2>New Arrivals On Sale</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Flash Deals</h4>
                <h2>Get your best products</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Last Minute</h4>
                <h2>Grab last minute deals</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Products</h2>
                </div>
            </div>
            @foreach($barang as $b)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="/barang/keranjang/{{$b->kode_barang}}"><img src='{{ asset("img/barang/".$b->file)}}' alt="" style="height:220px;width:200px; margin-left:68px"></a>
                    <div class="down-content">
                        <a href="/barang/keranjang/{{$b->kode_barang}}">
                            <h4>{{$b->nama_barang}}</h4>
                        </a>
                        <h6>{{$b->harga}}</h6>
                        <p>{{$b->deskripsi}}</p>
                        <ul class="stars">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection