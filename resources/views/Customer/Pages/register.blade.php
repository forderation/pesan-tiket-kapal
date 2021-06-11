@extends('Customer.Template.all-front-customer')

@section('content')
<h2>Register Pengguna</h2>
<form action="{{route('customer.register')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="usia">Usia</label>
        <input type="number" class="form-control" id="usia" name="usia" placeholder="Usia" min="1" required>
    </div>
    <div class="form-group">
        <label for="no_telp">Nomor Telepon</label>
        <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
    </div>
    <div class="row">
        <div class="col-4">
            <a href="{{route('customer.login.get')}}" class="btn btn-success btn-block">Login</a>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </div>
</form>

@endsection