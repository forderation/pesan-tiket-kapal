@extends('Customer.Template.all-front-customer')

@section('content')
<div>
    <a class="btn btn-lg btn-warning" href="{{route('customer.dashboard')}}">{{Auth::guard('web')->user()->nama_user}}</a>
    <a class="btn btn-lg btn-danger" href="{{route('customer.logout')}}">Logout </a>
    <a class="btn btn-lg btn-success" href="{{route('tiket.customer')}}">Tiket</span></a>
</div>
<br>
@if (session('status'))
<div class="alert alert-success mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    {{ session('status') }}
</div>
@endif
@if (session('alert'))
<div class="alert alert-danger mt-2">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong> {{ session('alert') }}</strong>
</div>
@endif

<div class="row">
    <div class="col-12">
        <h4>Daftar Pesanan Tiket</h4>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Speedboat</th>
                    <th scope="col">Tanggal Pesan</th>
                    <th scope="col">Total Penumpang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pesanans as $pesanan)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$pesanan->Speedboats->nama_speedboat}}</td>
                    <td>{{$pesanan->created_at}}</td>
                    <td>{{$pesanan->Penumpangs->count()}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="" class="btn btn-primary">Cetak Tiket</a>
                            <a href="" class="btn btn-success">Lihat Tiket</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"></script>
<script src="cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
@endsection