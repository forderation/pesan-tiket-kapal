<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speedboat;
use App\Models\Pesanan;
use App\Models\Customer;
use App\Models\Penumpang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{
    public function index($id)
    {
        $Customers = Customer::all();
        $Speedboats = Speedboat::where('id', $id)->first();
        $currentUser = Auth::guard('web')->user();
        return view('Customer.Pages.pemesanan-customer', compact('Customers', 'Speedboats', 'currentUser'));
    }

    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'bukti_transfer' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->route('pesan.order1', $id)->with('alert', $validator->getMessageBag());
        }

        $file = $request->file('bukti_transfer');
        $nama_file = "bukti_transfer" . time() . "." . $file->getClientOriginalExtension();
        Storage::put('public/'.$nama_file, $file->getContent());

        $pesanan = new Pesanan();
        $pesanan->speedboat_id = $id;
        $pesanan->bukti_transfer = $nama_file;
        $pesanan->save();

        if (isset($request->nama)) {
            $customerIds = [];
            for ($i = 0; $i < count($request->nama); $i++) {
                $customer = Customer::create([
                    'nama_user' => $request->nama[$i],
                    'usia' => $request->usia[$i],
                ]);
                array_push($customerIds, $customer->id);
            }
            foreach ($customerIds as $customerId) {
                Penumpang::create([
                    'customer_id' => $customerId,
                    'pesanan_id' => $pesanan->id,
                ]);
            }
        }

        Penumpang::create([
            'customer_id' => Auth::guard('web')->user()->id,
            'pesanan_id' => $pesanan->id,
        ]);

        return redirect()->route('customer.dashboard')->with('status', 'Data Berhasil Ditambahkan');
    }
}
