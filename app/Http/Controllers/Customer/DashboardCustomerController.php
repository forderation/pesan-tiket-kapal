<?php

namespace app\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Speedboat;
use App\Models\Customer;

class DashboardCustomerController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function index()
    {
        $Speedboats = Speedboat::all();
        $Customers = Customer::all();
        return view('Customer.Pages.dashboard-customer', compact('Speedboats','Customers'));
    }
}
