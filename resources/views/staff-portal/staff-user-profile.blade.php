@include('layouts.staff-nav')
@yield('staff-nav')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!--Style CSS Link-->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="right-content-container">
        <div class="top-content">
            <div class="user-header">
                <div class="user-header-title">User Profile</div>
            </div>
        </div>
        <div class="up-content">
            <div class="up-student-details">
                <div class="subheading">Click to edit information</div>
            </div>
            <div class="upsd">
                <label>Last Name:</label>
                <input type="text" class="upsd-input">
            </div>
            <div class="upsd">
                <label>First Name:</label>
                <input type="text" class="upsd-input">
            </div>
            <div class="upsd">
                <label>Position:</label>
                <input type="text" class="upsd-input">
            </div>
            <div class="upsd">
                <label>Faculty ID:</label>
                <input type="text" class="upsd-input">
            </div>
            <div class="upsd">
                <label>Password:</label>
                <input type="password" class="upsd-input">
            </div>
            <div class="upsd spacer"></div>
            <div class="upsd">
                <label>E-Signature:</label>
                <input type="text" class="upsd-input">
                <input type="file" class="upsd-file-input">
            </div>

            <div class="upsd" style="margin: 1em 0 0 9em;">
                <button type="button" class="btn btn-primary"
                    style="margin: 0 !important; width: 150px !important;">Save Changes</button>
                <button type="button" class="btn btn-secondary"
                    style="margin: 0 !important; width: 150px !important;">Cancel</button>
            </div>

        </div>
    </div>
</body>

</html>











{{--
<div class="main_container">
<!--CONTENT CONTAINER-->
<div class="container-wrapper">
    <div class="container">
    <div class="header">
        <div class="portal-title">
        <h2 class= "portal-name">View Student List</h2>
        </div>
    </div>

    <!-- CONTENT AFTER TITLE -->
    <div class="top-content">
        <!--Form Options-->
        <nav class="navbar navbar-expand-lg">
            <!--College Dropdown-->
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
                                <li><a class="dropdown-item" href="#">English Circle </a></li>
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
                                <li><a class="dropdown-item" href="#">1</a></li>
                                <li><a class="dropdown-item" href="#">2</a></li>
                                <li><a class="dropdown-item" href="#">3</a></li>
                                <li><a class="dropdown-item" href="#">4</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Organization Dropdown-->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Status: </a>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavWhiteDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <button class="btn dropdown-toggle clearance-btn" data-bs-toggle="dropdown"></button>
                            <ul class="dropdown-menu dropdown-menu-white">
                                <li><a class="dropdown-item" href="#">Cleared</a></li>
                                <li><a class="dropdown-item" href="#">Uncleared</a></li>
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
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
            <th scope="row">123</th>
            <td>Mark Twain</td>
            <td>DIGITS</td>
            <td>3</td>
            <td> CLEARED </td>
            </tr>
            <tr>
            <th scope="row">456</th>
                <td>Keanu Reeves</td>
                <td>DIGITS</td>
                <td>4</td>
                <td> UNCLEARED </td>
            </tr>
            <tr>
            <th scope="row">789</th>
                <td>Jill Valentine</td>
                <td>DIGITS</td>
                <td>2</td>
                <td> CLEARED </td>
                </tr>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>

</div>
</body>
</html>   --}}
