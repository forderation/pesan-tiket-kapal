<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speedboat;

class SpeedboatController extends Controller
{
    public function index()
    {
        $Speedboats = Speedboat::all();
        return view('Admin.Pages.jadwal', compact('Speedboats'));
    }

    public function tombol_tambah()
    {
        return view('Admin.Pages.tambah-jadwal');
    }

    public function update(Request $request, $id)
    {
        Speedboat::where('id', $id)->update([
            'nama_speedboat' => $request->nama_speedboat,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'jam_berangkat' => $request->jam_berangkat,
            'rute' => $request->rute,
            "no_rekening" => $request->no_rekening,
            'harga' => $request->harga
        ]);
        return redirect()->route('adm1n.jadwal')->with('status', 'Data Berhasil Di Update');
    }

    public function tambah(Request $request)
    {
        Speedboat::create([
            'nama_speedboat' => $request->nama_speedboat,
            'tanggal_berangkat' => $request->tanggal_berangkat,
            'jam_berangkat' => $request->jam_berangkat,
            'rute' => $request->rute,
            "no_rekening" => $request->no_rekening,
            'harga' => $request->harga,
        ]);

        return redirect()->route('adm1n.tambah-jadwal')->with('status', 'Data Berhasil Ditambahkan');
    }

    public function destroy($id)
    {
        Speedboat::destroy($id);

        return redirect()->route('adm1n.jadwal');
    }
}
