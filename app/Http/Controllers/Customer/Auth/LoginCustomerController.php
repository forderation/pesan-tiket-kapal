<?php

namespace App\Http\Controllers\Customer\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class LoginCustomerController extends Controller
{
    public function index()
    {
        if (Auth::guard('web')->check()) {
            return redirect()->route('customer.dashboard');
        }
        return view('Customer.Pages.Login-customer');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');
        if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->route('customer.dashboard');
        }
        return redirect()->back()->with('status', 'Email or Password is wrong!');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return view('Customer.Pages.Login-customer');
    }

    public function showRegister(){
        if (Auth::guard('web')->check()) {
            return redirect()->route('customer.dashboard');
        }
        return view('Customer.Pages.register');
    }

    public function register(Request $request)
    {
        $customer = new Customer();
        $customer->nama_user = $request->nama;
        $customer->email = $request->email;
        $customer->usia = $request->usia;
        $customer->no_telp = $request->no_telp;
        $customer->password = bcrypt($request->password);
        $customer->save();
        return redirect()->back()->with('status', 'Berhasil melakukan mendaftaran silahkan login!');
    }

}

