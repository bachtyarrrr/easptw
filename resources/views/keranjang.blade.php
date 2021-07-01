@extends('layoutUser')
@section('body')


    <div class="container">
        <div class="row">
        <div class="col-md-12">
                <div class="section-heading">
                    <h2>Products</h2>
                    <!-- <a href="products.html">view all products <i class="fa fa-angle-right"></i></a> -->
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Keranjang</h2>
                    
                </div>
            </div>
            @foreach($keranjang as $k)
            <div class="col-md-4">
                <div class="product-item">
                    <form method="post" action="/keranjang/ubah">
                    @csrf
                    <div class="down-content">
                        <a href="#">
                            <h4>{{$k->nama_barang}}</h4>
                        </a>
                        <h6>{{$k->hargatotal}}</h6>
                        <h5>Jumlah : </h5>
                        <input type="hidden" name="kode_barang" value="{{$k->kode_barang}}">
                        <input type="number" name="jumlah" value="{{$k->jumlah}}">
                        <br></br>
                        <h5>Status : {{$k-> status}}</h5>
                        <br>
                        <button type="submit" class="btn btn-success">Ubah</button>
                        <a href="/keranjang/batal/{{$k->kode_barang}}"><button type="button" class="btn btn-danger">Batal</button></a>
                    </div>
                    </form>
                </div>
            </div>

            @endforeach

        @if($isi>=1)   
        </div>
        <h4>Upload Bukti</h4>
        <br>
        <form action="/keranjang/bayar"  method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="bukti" required>
        <button type="submit" class="btn btn-outline-success">Bayar</button>
        </form>
        @elseif(@isi==0)
        <h4>Tidak ada item di Keranjang</h4>
        @endif
        
    </div>

@endsection