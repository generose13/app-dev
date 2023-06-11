@yield('admin-nav')
@section('admin-nav')
    <title>Admin Portal</title>

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
    <link rel="stylesheet" href="{{ asset('css/adminnav.css') }}">
    </head>

    <body>
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
                    <li class="nav-item {{ Request::is('/dash') ? 'active' : '' }}"> <a href="/dash">
                            <button id="btn-dashboard" class="nav-link">
                                <img src="{{ asset('images/data.png') }}" alt="Dashboard" class="option_icon">Dashboard
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/student-register') ? 'active' : '' }}"> <a
                            href="/student-register">
                            <button id="btn-student-registration" class="nav-link">
                                <img src="{{ asset('images/add_user.png') }}" alt="Student Registration"
                                    class="option_icon">Student Registration
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/accounts-staff') ? 'active' : '' }}"> <a href="/accounts-staff">
                            <button id="btn-account" class="nav-link">
                                <img src="{{ asset('images/database.png') }}" alt="Accounts" class="option_icon">Staff
                                Accounts
                            </button>
                        </a> </li>

                    <li class="nav-item {{ Request::is('/accounts-student') ? 'active' : '' }}"> <a
                            href="/accounts-student">
                            <button id="btn-account" class="nav-link">
                                <img src="{{ asset('images/database.png') }}" alt="Accounts" class="option_icon">Student
                                Accounts
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/student-officer') ? 'active' : '' }}"> <a href="/student-officer">
                            <button id="btn-student-officers" class="nav-link officers">
                                <img src="{{ asset('images/communicate.png') }}" alt="Student Officers"
                                    class="option_icon">
                                Student Officers
                            </button>
                        </a> </li>
                    <li class="nav-item {{ Request::is('/clearances') ? 'active' : '' }}"> <a href="/clearances">
                            <button id="btn-clearance" class="nav-link">
                                <img src="{{ asset('images/summary.png') }}" alt="Clearance" class="option_icon">Clearance
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
