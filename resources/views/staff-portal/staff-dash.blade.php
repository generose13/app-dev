@include('layouts.staff-nav')
@yield('staff-nav')
<div class="main_container">

    <!-- STAFF DASHBOARD -->

    <!--CONTENT CONTAINER-->
    <div class="container-wrapper">
        <div class="container">
            <div class="header">
                <div class="portal-title">
                    <h2 class="portal-name"> Welcome Staff!</h2>
                </div>
                <div class="logout-btn">
                    <button class="btn btn-danger">Logout</button>
                </div>
            </div>

            <div class="portal-content">
                <div class="d-flex flex-column">
                    <a href="#" class="dash-links">Student Clearance Request</a>
                    <div class="inner-box">
                        <p>View Requests here.</p>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <a href="#" class="dash-links">View Student List</a>
                    <div class="inner-box">
                        <p>View Student List here.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--<div class="container-wrapper">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-6">
            <p class="portal-name">Welcome Admin!</p>
          </div>
          <div class="col-md-6 text-right">
            <button class="btn btn-danger">Logout</button>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="d-flex flex-column">
              <h5>New Student Registration</h5>
              <div class="inner-box">
                <p>Register new students for the clearance system.</p>
              </div>
            </div>
            <div class="d-flex flex-column">
              <h5>Account Management</h5>
              <div class="inner-box">
                <p>Manage user accounts and permissions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>-->
</div>

<!-- Include Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
