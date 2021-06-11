<?php

namespace app\Http\Controllers\Admin;

use App\Models\Speedboat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\Customer;
use PDF;

class OrderController extends Controller
{
    public function index()
    {
        $Pesanans = Pesanan::all();
        return view('Admin.Pages.order', compact('Pesanans'));
    }

    public function aktif_tiket($id)
    {
        $Pesanans = Pesanan::findOrfail($id);
        $Pesanans->status_tiket = "dibuka";
        $Pesanans->save();
        return  redirect()->route('adm1n.order', $id)->with('success', 'Successfully change status!');
    }

    public function nonaktif_tiket($id)
    {
        $Pesanans = Pesanan::findOrfail($id);
        $Pesanans->status_tiket = "ditutup";
        $Pesanans->save();
        return redirect()->route('adm1n.order', $id)->with('success', 'Successfully change status!');
    }
}
