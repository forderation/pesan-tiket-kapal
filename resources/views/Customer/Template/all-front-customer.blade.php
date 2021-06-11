<!-- Navbar -->
@include('Customer.Template.Components.navbar-front-customer')
<!-- /.navbar -->

<section class="content" id="content" style="padding: 16px">
    @if(Session::has('status'))
    <div class="alert alert-warning">
        {{ Session::get('status')}}
    </div>
    @endif
    @if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error')}}
    </div>
    @endif
    @yield('content')
</section>