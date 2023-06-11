@include('layouts.student-officer-nav')
@yield('student-officer-nav')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Profile</title>
    <!--Style CSS Link-->
    <link rel="stylesheet" href="css/student.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="subheading">Click to edit details:</div>
                <div class="upsd">Last Name: <input type="text" class="upsd-input" style="margin-left: 50px;">
                </div>
                <div class="upsd">First Name: <input type="text" class="upsd-input" style="margin-left: 50px;">
                </div>
                <div class="upsd">Middle Initial: <input type="text" class="upsd-input" style="margin-left: 36px;">
                </div>
                <div class="upsd">Email: <input type="text" class="upsd-input" style="margin-left: 90px;"></div>
                <div class="upsd">Password: <input type="password" class="upsd-input" style="margin-left: 57px;">
                </div>
                <div class="upsd">Student ID: <input type="text" class="upsd-input" style="margin-left: 50px;">
                </div>
                <div class="upsd">Program: <input type="text"
                        style="width: 300px; margin-left: 62px; margin-right: 20px;">Year Level: <input type="text"
                        style="width: 80px; margin-left: 20px; margin-right: 25px;">Section: <input type="text"
                        style="width: 120px; margin-left: 20px;"></div>
                <div class="upsd">Organization: <input type="text" class="upsd-input" style="margin-left: 30px;">
                </div>
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
    </div>
</body>

</html>
