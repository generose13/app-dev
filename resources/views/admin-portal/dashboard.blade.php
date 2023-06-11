@include('layouts.admin-nav')
@yield('admin-nav')

<div class="main_container">
    <!--CONTENT CONTAINER-->
    <div class="container-wrapper">
        <!-- DASHBOARD -->
        <div id="dash-container" class="container">
            <div class="header">
                <div class="portal-title">
                    <h2 class="portal-name"> Welcome Admin!</h2>
                </div>
                <div class="logout-btn">
                    <button class="btn btn-danger">Logout</button>
                </div>
            </div>

            <div class="portal-content">
                <div class="d-flex flex-column">
                    <a href="#" class="dash-links">New Student Registration</a>
                    <div class="inner-box">
                        <p>Register new students for the clearance system.</p>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <a href="#" class="dash-links">Account Management</a>
                    <div class="inner-box">
                        <p>Manage user accounts and permissions.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
