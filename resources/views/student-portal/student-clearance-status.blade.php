@include('layouts.student-officer-nav')
@yield('student-officer-nav')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Clearance</title>

    <!--Style CSS Link-->
    <link rel="stylesheet" href="css/student.css">
</head>

<body>
    <div class="right-content-container">
        <div class="top-content">
            <div class="header">
                <div class="header-title">Welcome, Student</div>
                <div class="header-AY">Academic Year: <div class="grey-box"></div>
                </div>
            </div>
        </div>

        <div class="mid-content">
            <div class="student-details">
                <div>Student Details:</div>
                <div class="details">Full name: <input disabled type="text" style="width: 400px; margin-left: 30px">
                </div>
                <div class="details">Program: <input disabled type="text"
                        style="width: 300px; margin-left: 38px; margin-right: 50px">
                    Year Level: <input disabled type="text"
                        style="width: 80px; margin-left: 30px; margin-right: 40px">
                    Section: <input disabled type="text" style="width: 100px; margin-left: 30px">
                </div>
                <div class="details">Organization: <input disabled type="text"
                        style="width: 340px; margin-left: 5px;">
                </div>
                <div class="bottom-border" style="border-bottom: 1px solid grey; height: 20px"></div>
            </div>
        </div>

        <div class="subhead-title">Clearance Status:</div>

        <div class="bottom-content">
            <div class="card-container">
                <div class="grid-card">
                    <div class="grid-card-info">Academic Organization Treasurer:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-success">CLEARED</button>
                    </div>
                </div>
                <div class="grid-card">
                    <div class="grid-card-info">Academic Organization Adviser:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-success">CLEARED</button>
                    </div>
                </div>
                <div class="grid-card">
                    <div class="grid-card-info">Year Level Organization Treasurer:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-danger">NOT CLEARED</button>
                    </div>
                </div>
                <div class="grid-card">
                    <div class="grid-card-info">College Chief Librarian:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-success">CLEARED</button>
                    </div>
                </div>
                <div class="grid-card">
                    <div class="grid-card-info">University Accountant:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-danger">NOT CLEARED</button>
                    </div>
                </div>
                <div class="grid-card">
                    <div class="grid-card-info">Vice President for Student Development:</div>
                    <div class="gci-deets">
                        <input disabled type="text" class="grid-card-textbox" placeholder="Display name here">
                        <button type="button" class="btn btn-secondary">Request Signature</button>
                        <button type="button" class="btn btn-danger">NOT CLEARED</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
