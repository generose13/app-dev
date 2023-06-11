@include('layouts.student-officer-nav')
@yield('student-officer-nav')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Clearance</title>

    <!--Style CSS Link-->
    <link rel="stylesheet" href="css/student.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="doc-content-container">
        <!--View Document Markup-->
        <div class="top-content">
            <div class="header">
                <div class="header-title">View Document</div>
                <div class="header-AY">Academic Year: <div class="grey-box"></div>
                </div>
            </div>

        </div>
        <div class="filename-print">
            <div>File Name:</div>
            <div>
                <button class="btnPrint"><i class="fa fa-print"></i> Print</button>
            </div>
        </div>
        <div class="file-content">
            <div class="file-preview"></div>
        </div>
    </div>

</body>

</html>
