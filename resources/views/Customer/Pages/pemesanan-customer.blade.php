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
        <div class="card mb-5 mb-lg-0">
            <form action="{{route('pesan.order1',$Speedboats->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4 class="card-title text-muted text-uppercase text-center">{{$Speedboats->nama_speedboat}}</h4>
                    <p class="card-title text-muted  text-center">Tanggal : {{$Speedboats->tanggal_berangkat}}</p>
                    <p class="card-title text-muted  text-center">Waktu : {{$Speedboats->jam_berangkat}}</p>
                    <p class="card-title text-muted  text-center">Harga : {{$Speedboats->harga}}</p>
                    <p class="card-title text-muted  text-center">Rute : {{$Speedboats->rute}}</p>
                    <div class="dropdown-divider m-3"></div>
                    <div class="text-center mb-3">
                        <button id="add_penumpang_btn" type="button" onclick="addPenumpang()" class="btn btn-primary">Tambah Penumpang</button>
                        <a href="{{route('pesan.order',$Speedboats->id)}}" class="btn btn-warning">Reset</a>
                    </div>
                    <section id="penumpang">
                        <h4>Daftar Penumpang</h4>
                        <div class="form-group">
                            <label for="">Nama:</label>
                            <input type="text" class="form-control" name="nama[]" placeholder="Nama" value="{{$currentUser->nama_user}}" disabled required>
                        </div>
                        <div class="form-group">
                            <label for="">Usia:</label>
                            <input type="number" min="0" class="form-control" name="usia[]" placeholder="Usia" value="{{$currentUser->usia}}" disabled required>
                        </div>
                        <div class="dropdown-divider m-3"></div>
                    </section>
                    <section id="pesan_section">
                        <div class="text-center">
                            <button onclick="pesanSpeedboat()" class="btn-solid-lg" type="button"> Pesan </button>
                        </div>
                    </section>
                    <div class="dropdown-divider m-3"></div>
                    <section id="no_rekening" hidden>
                        <h4>Nomor Rekening</h4>
                        <div class="form-group">
                            <label for="">Silahkan melakukan pembayaran ke nomor rekening tersebut:</label>
                            <input type="text" class="form-control" name="nama[]" placeholder="Nama" value="{{$Speedboats->no_rekening}}" disabled required>
                        </div>
                        <div class="dropdown-divider m-3"></div>
                        <div class="text-center">
                            Bukti Transfer <input type="file" name="bukti_transfer" class="mb-3" required>
                            <button class="btn-solid-lg" type="submit"> Bayar </button>
                        </div>
                    </section>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    let templateForm = `<div class="form-group">
                            <label for="">Nama:</label>
                            <input type="text" class="form-control" name="nama[]" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="">Usia:</label>
                            <input type="number" min="0" class="form-control" name="usia[]" placeholder="Usia" required>
                        </div>
                        <div class="dropdown-divider m-3"></div>`;

    function addPenumpang() {
        $('#penumpang').append(templateForm);
    }

    function pesanSpeedboat() {
        $('#pesan_section').attr("hidden", '');
        $('#add_penumpang_btn').attr("disabled", '');
        $('#no_rekening').removeAttr("hidden");
    }
</script>

@endsection