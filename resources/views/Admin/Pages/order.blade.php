@extends('Admin.Template.all')

@section('page_title','Pemesanan')
@section('breadcumb')
<li class="breadcrumb-item">Admin</li>
<li class="breadcrumb-item">Pemesanan</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title m-2">List Pemesanan Pelabuhan Tengkayu 1 Kota Tarakan</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th width="5%" class="text-center">No</th>
                        <th width="150px" class="text-center">Nama Speed</th>
                        <th class="text-center">Tanggal Berangkat</th>
                        <th class="text-center">Jam Berangkat</th>
                        <th class="text-center">Rute</th>
                        <th class="text-center">Harga</th>
                        <th width="25%" class="text-center">Penumpang</th>
                        <th width="10%" class="text-center" style="width: 130px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Pesanans as $pesanan)
                    <tr>
                        <td class="text-center">{{$loop->iteration . "."}}</td>
                        <td>{{$pesanan->Speedboats['nama_speedboat']}}</td>
                        <td>{{$pesanan->Speedboats['tanggal_berangkat']}}</td>
                        <td>{{$pesanan->Speedboats['jam_berangkat']}}</td>
                        <td>{{$pesanan->Speedboats['rute']}}</td>
                        <td>{{$pesanan->Speedboats['harga']}}</td>
                        <td>
                            <button class="btn btn-primary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample-{{$loop->iteration}}" aria-expanded="false" aria-controls="collapseExample-{{$loop->iteration}}">
                                Tampilkan {{$pesanan->Penumpangs->count()}} Penumpang
                            </button>
                            <div class="collapse" id="collapseExample-{{$loop->iteration}}">
                                <div class="card card-body">
                                    @foreach($pesanan->Penumpangs as $penumpang)
                                    <div class="dropdown-divider m-3"></div>
                                    <p> Nama: {{$penumpang->Customer->nama_user}}</p>
                                    <p> Usia: {{$penumpang->Customer->usia}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="{{Storage::url($pesanan->bukti_transfer)}}" target="_blank">Lihat Bukti</a>
                            <div class="btn-group disabled" style="padding-right: 1px;">
                                <a class="btn {{$pesanan->status_tiket == 'dibuka'  ? 'btn-success active' : 'btn-light-grey'}}" style="{{$pesanan->status_tiket == 'ditutup'  ? '' : 'pointer-events: none;'}} " href="{{route('aktif.tiket',$pesanan->id)}}">
                                    Dibuka
                                </a>
                                <a class="btn {{$pesanan->status_tiket == 'ditutup'  ? 'btn-danger active' : 'btn-light-grey'}}" role="button" aria-disabled="true" style="{{$pesanan->status_tiket == 'dibuka'  ? '' : 'pointer-events: none;'}} " href="{{route('nonaktif.tiket',$pesanan->id)}}">
                                    Ditutup
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection