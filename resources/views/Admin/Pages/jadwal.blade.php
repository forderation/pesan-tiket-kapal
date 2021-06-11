@extends('Admin.Template.all')

@section('page_title','Jadwal Speed')
@section('breadcumb')
<li class="breadcrumb-item">Admin</li>
<li class="breadcrumb-item">Jadwal</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h3 class="card-title m-2">Jadwal Speedboat Pelabuhan Tengkayu 1 Kota Tarakan</h3>
            <button class="btn btn-primary"><i class="fas fa-plus"></i>
                <a href="{{route('adm1n.tambah-jadwal')}}" style="color:white"> Tambah Jadwal Speedboat </a>
            </button>
        </div>
    </div>
    <table id="" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="5%" class="text-center">No</th>
                <th width="150px" class="text-center">Nama Speed</th>
                <th class="text-center">Tanggal Berangkat</th>
                <th class="text-center">Jam Berangkat</th>
                <th class="text-center">Rute</th>
                <th class="text-center">No Rekening</th>
                <th class="text-center">Harga</th>
                <th class="text-center" style="width: 130px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Speedboats as $sp)
            <tr>
                <td class="text-center">{{$loop->iteration . "."}}</td>
                <td>{{$sp->nama_speedboat}}</td>
                <td>{{$sp->tanggal_berangkat}}</td>
                <td>{{$sp->jam_berangkat}}</td>
                <td>{{$sp->rute}}</td>
                <td>{{$sp->no_rekening}}</td>
                <td>{{$sp->harga}}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#updateModal" data-id="{{$sp->id}}" data-nama_speedboat="{{$sp->nama_speedboat}}" data-tanggal_berangkat="{{$sp->tanggal_berangkat}}" data-jam_berangkat="{{$sp->jam_berangkat}}" data-no_rekening="{{$sp->no_rekening}}" data-rute="{{$sp->rute}}" data-harga="{{$sp->harga}}" style="font-size: 12px; width: 60px; padding: 2px">Edit
                    </button>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm deleteModal" id="{{$sp->id}}" data-toggle="modal" data-target="#deleteModal" style="font-size: 12px; width: 60px; padding: 2px">Delete
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Update Modal-->

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Speed</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formUpdate" action="#" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="modal-body">
                        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" id="nama_speedboat" placeholder="Masukkan Nama Speed" name="nama_speedboat"  required>
                        <input type="date" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Tanggal Keberangkatan" name="tanggal_berangkat" id="tanggal_berangkat" required>
                        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Waktu Keberangkatan" name="jam_berangkat" id="jam_berangkat"  required>
                        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Rute Speedboat" name="rute" id="rute"  required>
                        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan No Rekening dan Nama Bank" name="no_rekening" id="no_rekening"  required>
                        <input type="text" class="form-control mt-3 mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Masukkan Harga" name="harga" id="harga"  required>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!--Modal delete data-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formDelete" action="#" method="post">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus Informasi Berikut ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
@section('js_after')
<script src="{{asset('front/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('front/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('front/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('front/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script>
    $(function() {
        $(".deleteModal").click(function(e) {
            let id = $(this).attr("id")

            $('#formDelete').attr('action', '/admin/jadwal-speedboat/delete/' + id)
        });

        $('#updateModal').on('show.bs.modal', function(event) {
            let button = $(event.relatedTarget);
            let id = button.data('id');
            let nama_speedboat = button.data('nama_speedboat');
            let tanggal_berangkat = button.data('tanggal_berangkat');
            let jam_berangkat = button.data('jam_berangkat');
            let no_rekening = button.data('no_rekening');
            let rute = button.data('rute');
            let harga = button.data('harga');

            let modal = $(this);
            modal.find('#nama_speedboat').val(nama_speedboat)
            modal.find('#tanggal_berangkat').val(tanggal_berangkat)
            modal.find('#jam_berangkat').val(jam_berangkat)
            modal.find('#no_rekening').val(no_rekening)
            modal.find('#rute').val(rute)
            modal.find('#harga').val(harga)

            $('#formUpdate').attr('action', '/admin/jadwal-speedboat/update/' + id)
        });

    });
</script>
@endsection