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

    public function cetak_pdf()
    {
        $Pesanans = Pesanan::all()->last();
        $customPaper = array(10, 10, 280.00, 567.00);
        $pdf = PDF::loadview('Customer.Pages.tiket_pdf', compact('Pesanans'))->setPaper($customPaper, 'landscape');
        return $pdf->download('tiket-cetak-pdf.pdf');
    }
}
