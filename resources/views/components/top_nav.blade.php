<header id="header" class="header fixed-top shadow-sm">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            {{-- <img src="assets/img/logo.png" alt=""> --}}

            <span><i class="ri-slack-fill"></i> Tonics Tz</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                @if (session()->get('logged') == 'Yes')
                    @if (session()->get('user')['status'] == 'admin')
                        <li><a class="nav-link scrollto" href="/add">Add Computer</a></li>
                        <li><a class="nav-link scrollto" href="/all_computers">Computers</a></li>
                        <li><a class="nav-link scrollto" href="/all_payments">Payments</a></li>
                        <li><a class="getstarted scrollto" href="/logout">logout</a></li>
                    @endif
                    @if (session()->get('user')['status'] == 'user')
                        <li><a class="nav-link scrollto" href="/tafuta_out">Tafuta Computer</a></li>
                        <li><a class="nav-link scrollto" href="/cart">Cart <i class="mdi mdi-cart mdi-24px"></i><span
                                    class="text-danger"></span></a></li>
                        <li><a class="getstarted scrollto" href="/logout">logout</a></li>
                    @endif
                @else
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="/#about">About</a></li>
                    <li><a class="nav-link scrollto" href="/tafuta_out">Tafuta Computer</a></li>
                    <li><a class="nav-link scrollto" href="/#huduma">Huduma</a></li>
                    <li><a class="nav-link scrollto" href="/#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="/#brand">Brand</a></li>
                    <li><a class="getstarted scrollto" href="/login">Login</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
