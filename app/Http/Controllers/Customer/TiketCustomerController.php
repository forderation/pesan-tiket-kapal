<?php

namespace app\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use PDF;
use Illuminate\Support\Facades\Auth;
use App\Models\Penumpang;

class TiketCustomerController extends Controller
{
    public function index()
    {
        $currentUser = Auth::guard('web')->user();
        $pesanansId = Penumpang::where('customer_id', $currentUser->id)->pluck('pesanan_id');
        $pesanans = Pesanan::whereIn('id', $pesanansId)->where("status_tiket", "dibuka")->get();
        return view('Customer.Pages.tikets', compact('pesanans'));
    }

    public function cetak_pdf($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $customPaper = array(10, 10, 2000, 567.00);
        $pdf = PDF::loadview('Customer.Pages.tiket_pdf', compact('pesanan'));
        // $pdf->setPaper($customPaper, 'landscape');
        return $pdf->stream("tiket-pesanan.pdf");
    }

    public function detail($id)
    {
        $pesanan = Pesanan::findOrFail($id);
        return view('Customer.Pages.tiket', compact('pesanan'));
    }
}
