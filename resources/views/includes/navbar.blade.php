<header id="header" class="header grey d-flex justify-content-between">
    <div class="top-left grey">
        <div class="navbar-header grey">
            <a class="navbar-brand" href="#"><img src="{{ url('images/logo-cent-panjang.png') }}" alt="Logo" style="width: 70px; height: 30px;" /></a>
            <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
    </div>
    <form class="px-4 py-0" , action="{{url('logout')}}" , method="POST">
        @csrf
        <button type="submit" class="btn btn-secondary" style="height: 70%; margin-top:5px; padding: auto;">Log Out</button>
    </form>
</header>