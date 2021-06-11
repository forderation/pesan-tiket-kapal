<?php

namespace App\Http\Controllers\Customer;

use App\Models\Speedboat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class FrontController extends Controller
{
    public function index()
    {
        $Speedboats = Speedboat::all();
        return view('Customer.Pages.front', compact('Speedboats'));
    }

}
