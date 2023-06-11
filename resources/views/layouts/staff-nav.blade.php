@yield('staff-nav')
@section('staff-nav')
    <title>Staff Portal</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/staffnav.css') }}">

    </head>

    <body class="antialiased">
        <!--Navigation Bar Left Options-->
        <div class="navbar_section">
            <div class="navbar_title">
                <div class="lnu_logo">
                    <img src="{{ asset('images/lnulogo.PNG') }}" alt="lnu-logo">
                </div>
                <div class="lnu_oscs_details">
                    <div class="lod_details">
                        <p class="nav-title">LNU-OSCS</p>
                        <p class="nav-title">Online Student Clearance System</p>
                    </div>
                </div>
            </div>

            <!--Navbar Options-->
            <div class="navbar_options">
                <ul class="nav flex-column">
                    <li class="nav-item {{ Request::is('/staff-dash') ? 'active' : '' }}"> <a href="/staff-dash">
                            <button id="btn-dashboard" class="nav-link">
                                <img src="{{ asset('images/data.png') }}" alt="Dashboard" class="option_icon">Dashboard
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/confirm-clearance') ? 'active' : '' }}"> <a
                            href="/confirm-clearance">
                            <button id="btn-clearance" class="nav-link clearance">
                                <img src="{{ asset('images/summary.png') }}" alt="Clearance" class="option_icon">Confirm
                                Clearance
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/staff-profile') ? 'active' : '' }}"> <a href="/staff-profile">
                            <button id="btn-student-officers" class="nav-link officers">
                                <img src="{{ asset('images/communicate.png') }}" alt="User Profile" class="option_icon">
                                User Profile
                            </button>
                        </a></li>

                </ul>
            </div>
            <div class="navbar_bottom">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link nav-link-b" href="#">
                            <img src="{{ asset('images/shutdown.png') }}" alt="Logout" class="option_icon">
                            Log out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-b" href="#">
                            <img src="{{ asset('images/phone.png') }}" alt="Da" class="option_icon">
                            Contact us</a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
@endsection
