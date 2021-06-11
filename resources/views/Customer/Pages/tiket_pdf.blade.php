<div class="card" style="border:solid;">
    <div class="card-body">
        <div style="text-align : center;">
            <strong><span style="font-family: Verdana; font-size: 20px;">
                    <strong>TIKET SPEED PELABUHAN TENGKAYU KOTA TARAKAN </strong>
                </span>
        </div>
        <hr style="border: 1px solid;">
        <table style="width: 352px;">
            <tbody>
                <tr>
                    <td width="80"><strong><span style="font-size: 15px;">Nama</span></td></strong>
                    <td width="10"><strong><span style="font-size: 15px;">:</span></td></strong>
                    <td width="248"><strong>
                            <span style="font-size: 15px;">
                                @foreach($Pesanans->Penumpangs as $penumpang)
                                {{$penumpang->Customer->nama_user}} (Usia: {{$penumpang->Customer->usia}}),
                                @endforeach
                            </span></strong>
                    </td>
                </tr>
                <tr>
                    <td><strong><span style="font-size: 15px;">Tanggal</span></td></strong>
                    <td><strong><span style="font-size: 15px;">:</span></td></strong>
                    <td><strong><span style="font-size: 15px;">{{$Pesanans->Speedboats['tanggal_berangkat']}}</span></td></strong>
                </tr>
                <tr>
                    <td><strong><span style="font-size: 15px;">Jam</span></td></strong>
                    <td><strong><span style="font-size: 15px;">:</span></td></strong>
                    <td><strong><span style="font-size: 15px;">{{$Pesanans->Speedboats['jam_berangkat']}}</span></td></strong>
                </tr>
                <tr>
                    <td><strong><span style="font-size: 15px;">Tujuan</span></td></strong>
                    <td><strong><span style="font-size: 15px;">:</span></td></strong>
                    <td><strong><span style="font-size: 15px;">{{$Pesanans->Speedboats['rute']}}</span></td></strong>
                </tr>
                <tr>
                    <td><strong><span style="font-size: 15px;">Harga</span></td></strong>
                    <td><strong><span style="font-size: 15px;">:</span></td></strong>
                    <td><strong><span style="font-size: 15px;">{{$Pesanans->Speedboats['harga']}}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <hr style="border: 1px solid;">
        <strong><span style=" font-size: 12px;">
                PERHATIAN:
            </span></strong>
        <strong><span style="font-size: 12px;">
                Barang penumpang melebihi 10kg dikenakan biaya.
                Penumpang harus berada dikapal 30 menit sebelum jam berangkat.
                Penumpang yang ketinggalan, Tiket tidak dapat dikembalikan.
                Anak umur 2 tahun ke atas sudah dikenakan membayar TIKET.
                Barang bawaan penumpang diluar tanggung jawab kami.
            </span></strong>
        <hr style="border: 1px solid;">
    </div>
</div>