@include('layouts.admin-nav')
@yield('admin-nav')


<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

    <!--CONTENT CONTAINER-->
    <div class="container-wrapper">
        <div class="container">
            <div class="header">
                <div class="portal-title">
                    <h2 class="portal-name">Clearance Files</h2>
                </div>
            </div>

            <!-- CONTENT AFTER TITLE -->
            <div class="top-content">
                <h3>Set Clearance period |</h3>
                <div class="form-group">
                    <label for="start-date">Start Date:</label>
                    <input type="date" id="start-date" name="start-date">
                </div>
                <div class="form-group">
                    <label for="end-date">End Date:</label>
                    <input type="date" id="end-date" name="end-date">
                </div>
                <button class="btn btn-primary" type="button" id="confirm-button">Confirm</button>
            </div>

            <!--Form Options-->
            <nav class="navbar navbar-expand-lg">
                <!--College Dropdown-->
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">College: </a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavWhiteDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle clearance-btn" data-bs-toggle="dropdown"></button>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="#">College of Arts and Science</a></li>
                                    <li><a class="dropdown-item" href="#">College of Management and
                                            Entreprenuership</a></li>
                                    <li><a class="dropdown-item" href="#">College of Education</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Year Level Dropdown-->
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Year Level: </a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavWhiteDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle year-btn" data-bs-toggle="dropdown"></button>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="#">College of Arts and Science</a></li>
                                    <li><a class="dropdown-item" href="#">College of Management and
                                            Entreprenuership</a></li>
                                    <li><a class="dropdown-item" href="#">College of Education</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Organization Dropdown-->
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Organization: </a>
                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavWhiteDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <button class="btn dropdown-toggle clearance-btn" data-bs-toggle="dropdown"></button>
                                <ul class="dropdown-menu dropdown-menu-white">
                                    <li><a class="dropdown-item" href="#">DIGITS</a></li>
                                    <li><a class="dropdown-item" href="#">APSS</a></li>
                                    <li><a class="dropdown-item" href="#">COFED</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--Search Bar-->
                <div class="container-fluid">
                    <input type="search" class="search_bar" placeholder="Search">
                </div>
            </nav>
        </div>

        <!--Student Officers Table Section-->
        <div class="table-content">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Organization</th>
                        <th scope="col">Year-Level</th>
                        <th scope="col">Section</th>
                        <th scope="col">Clearance</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <th scope="row">123</th>
                        <td>Mark Twain</td>
                        <td>DIGITS</td>
                        <td>3</td>
                        <td>AI34</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-primary me-md-2" type="button">View</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">456</th>
                        <td>Keanu Reeves</td>
                        <td>DIGITS</td>
                        <td>4</td>
                        <td>AI34</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-primary me-md-2" type="button">View</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">789</th>
                        <td>Jill Valentine</td>
                        <td>DIGITS</td>
                        <td>2</td>
                        <td>AI34</td>
                        <td>
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-primary me-md-2" type="button">View</button>
                            </div>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

</body>

</html>
