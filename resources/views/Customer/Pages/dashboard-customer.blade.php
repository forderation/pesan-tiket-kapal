@extends('Customer.Template.all-front-customer')

@section('content')

<div>
    <a class="btn btn-lg btn-warning" href="{{route('customer.dashboard')}}">{{Auth::guard('web')->user()->nama_user}}</a>
    <a class="btn btn-lg btn-danger" href="{{route('customer.logout')}}">Logout </a>
    <a class="btn btn-lg btn-success" href="{{route('tiket.customer')}}">Tiket</span></a>
</div>
<br>
<div class="container">
    <div class="card-columns">
        @if(count($Speedboats) !== 0)
        @foreach($Speedboats as $sp)
        <div id="pesan">
            <div class="card mb-5 mb-lg-0">
                <div class="card-body">
                    <h4 class="card-title text-muted text-uppercase text-center">{{$sp->nama_speedboat}}</h4>
                    <p class="card-title text-muted  text-center">Tanggal : {{$sp->tanggal_berangkat}}</p>
                    <p class="card-title text-muted  text-center">Waktu : {{$sp->jam_berangkat}}</p>
                    <p class="card-title text-muted  text-center">Harga : {{$sp->harga}}</p>
                    <p class="card-title text-muted  text-center">Rute : {{$sp->rute}}</p>
                    <div class="text-center">
                        <a class="btn-solid-lg" href="{{route('pesan.order', $sp->id)}}"> Pesan Sekarang ! </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <div style="width: 100%">
                <p class="text-center text-secondary">Belum ada data</p>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection