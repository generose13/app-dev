@include('layouts.staff-nav')
@yield('staff-nav')

<div class="main_container">
    <!--CONTENT CONTAINER-->
    <div class="container-wrapper">
        <div class="container">
            <div class="header">
                <div class="portal-title">
                    <h2 class="portal-name">Confirm Clearance</h2>
                </div>
            </div>

            <!-- CONTENT AFTER TITLE -->
            <div class="top-content">
                <div class="confirm-request">
                    <p> Confirmation Requests: </p>
                    <div class="confirm-request-box"> </div>
                </div>

                <div class="filter">
                    <p> Filter: </p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle filter-btn" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Select College
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Arts and Sciences</a></li>
                            <li><a class="dropdown-item" href="#">Management and Entrepreneurship</a></li>
                            <li><a class="dropdown-item" href="#">Education</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- TABLE CONTENT -->
            <div class="table-content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Organization</th>
                            <th scope="col">Year-Level</th>
                            <th scope="col">Section</th>
                            <th scope="col">Actions</th>
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
                                    <button class="btn btn-primary me-md-2 clear-btn" type="button">CLEAR</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">456</th>
                            <td>Keanu Reeves</td>
                            <td>DIGITS</td>
                            <td>4</td>
                            <td>AI41</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary me-md-2 clear-btn" type="button">CLEAR</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">789</th>
                            <td>Jill Valentine</td>
                            <td>DIGITS</td>
                            <td>2</td>
                            <td>AI22</td>
                            <td>
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary me-md-2 clear-btn" type="button">CLEAR</button>
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
