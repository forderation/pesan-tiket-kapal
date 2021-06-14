<div class="card">
    <div class="card-body">
        @foreach($pesanan->Penumpangs as $penumpang)
        <div style="margin: 10px;">
            <hr style="border: 1px solid;">
            <div style="text-align : center;">
                <strong><span style="font-family: Verdana; font-size: 20px;">
                        <strong>TIKET SPEED PELABUHAN TENGKAYU KOTA TARAKAN </strong>
                    </span>
            </div>
            <table style="width: 352px;">
                <tbody>
                    <tr>
                        <td width="80"><strong><span style="font-size: 15px;">Nama</span></td></strong>
                        <td width="10"><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td width="248"><strong>
                                <span style="font-size: 15px;">
                                    {{$penumpang->Customer->nama_user}}
                                </span></strong>
                        </td>
                    </tr>
                    <tr>
                        <td width="80"><strong><span style="font-size: 15px;">Usia</span></td></strong>
                        <td width="10"><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td width="248"><strong>
                                <span style="font-size: 15px;">
                                    {{$penumpang->Customer->usia}}
                                </span></strong>
                        </td>
                    </tr>
                    <tr>
                        <td><strong><span style="font-size: 15px;">Tanggal</span></td></strong>
                        <td><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td><strong><span style="font-size: 15px;">{{$pesanan->Speedboats['tanggal_berangkat']}}</span></td></strong>
                    </tr>
                    <tr>
                        <td><strong><span style="font-size: 15px;">Jam</span></td></strong>
                        <td><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td><strong><span style="font-size: 15px;">{{$pesanan->Speedboats['jam_berangkat']}}</span></td></strong>
                    </tr>
                    <tr>
                        <td><strong><span style="font-size: 15px;">Tujuan</span></td></strong>
                        <td><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td><strong><span style="font-size: 15px;">{{$pesanan->Speedboats['rute']}}</span></td></strong>
                    </tr>
                    <tr>
                        <td><strong><span style="font-size: 15px;">Harga</span></td></strong>
                        <td><strong><span style="font-size: 15px;">:</span></td></strong>
                        <td><strong><span style="font-size: 15px;">{{$pesanan->Speedboats['harga']}}</span></td>
                    </tr>
                </tbody>
            </table>
            <div>
                <strong>
                    <span style=" font-size: 12px;">
                        PERHATIAN:
                    </span>
                </strong>
                <strong>
                    <span style="font-size: 12px;">
                        Barang penumpang melebihi 10kg dikenakan biaya.
                        Penumpang harus berada dikapal 30 menit sebelum jam berangkat.
                        Penumpang yang ketinggalan, Tiket tidak dapat dikembalikan.
                        Anak umur 2 tahun ke atas sudah dikenakan membayar TIKET.
                        Barang bawaan penumpang diluar tanggung jawab kami.
                    </span>
                </strong>
            </div>
            <hr style="border: 1px solid;">
        </div>
        @endforeach
    </div>
</div>