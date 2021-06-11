@extends('Admin.Template.all')

@section('page_title','Tambah Jadwal dan Speedboat')
@section('breadcumb')
<li class="breadcrumb-item">Admin</li>
<li class="breadcrumb-item">Tambah Jadwal</li>
@endsection

@section('content')
<form action="{{route('adm1n.tambah-jadwal.post')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Nama Speedboat" name="nama_speedboat" required>
        <input type="date" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Tanggal Berangkat" name="tanggal_berangkat" required>
        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Jam Berangkat" name="jam_berangkat" required>
        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Rute" name="rute" required>
        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Nomor Rekening dan Nama Bank (ex: 561243241 Bank BNI)" name="no_rekening" required>
        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Harga" name="harga" required>
    </div>
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <button class="btn btn-primary" type="submit">Submit</button>

</form>

@endsection