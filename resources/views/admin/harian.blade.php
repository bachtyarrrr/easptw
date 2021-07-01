@extends('layoutAdmin')
@section('body')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-head-line" >Laporan Harian</h2>
    </div>
</div>


<link rel="stylesheet" href='{{ asset("css/fontawesome.css")}}'>
<link rel="stylesheet" href='{{ asset("css/templatemo-sixteen.css")}}'>
<link rel="stylesheet" href='{{ asset("css/owl.css")}}'>
<div class="container">
    <div class="row">
        <div class="col-md-12">

        </div>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    
                    <th scope="col">Harga</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php $no=1 ?>
            @foreach($harian as $h)
                
                <tr>
                    <th scope="row"> {{  $no++ }}</th>
                    <td>{{$h->tanggal}}</td>
                    
                    <td>{{$h->harga}}</td>
                    
                </tr>
                @endforeach
                
                <tr>
                    <td>Total</td>
                    <td></td>
                    
                    <td>{{$total}}</td>
                </tr>
                
            </tbody>
        </table>

        @endsection