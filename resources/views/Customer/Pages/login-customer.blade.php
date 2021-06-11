@extends('Customer.Template.all-front-customer')

@section('content')
<h2>Login Pengguna</h2>
<form action="{{route('customer.login.post')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
    </div>
    <div class="row">
        <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Login</button>
        </div>
        <div class="col-4">
            <a href="{{route('customer.showRegister')}}" class="btn btn-primary btn-block">Register</a>
        </div>
    </div>
</form>
@endsection