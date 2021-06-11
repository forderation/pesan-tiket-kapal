<?php

namespace app\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speedboat;
use App\Models\Customer;
use App\Models\Pesanan;
use PDF;

class TiketCustomerController extends Controller
{
    public function index()
    {
        $Pesanans = Pesanan::all()->last();
        return view('Customer.Pages.tiket', compact('Pesanans'));
    }

    public function cetak_pdf()
    {
        $Pesanans = Pesanan::all()->last();

        $customPaper = array(10, 10, 280.00, 567.00);
        $pdf = PDF::loadview('Customer.Pages.tiket_pdf', compact('Pesanans'))->setPaper($customPaper, 'landscape');
        return $pdf->download('tiket-cetak-pdf.pdf');
    }
}
