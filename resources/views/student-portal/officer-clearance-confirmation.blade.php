@include('layouts.student-nav')
@yield('student-nav')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clearance Confirmation</title>
    <link rel="stylesheet" href="css/officer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <div class="clearance-confirmation-container">
        <h2>Clearance Confirmation</h2>
        <div class="options">
            <div class="options">
                <label for="cr-textbox">Confirmation Requests: </label>
                <input type="text" class="textbox" id="cr-textbox">
            </div>
            <div class="options-CYL">
                <label for="filter">Filter: </label>
                <select id="year-level">
                    <option value="">Choose Year Level</option>
                    <option value="1">1st Year</option>
                    <option value="2">2nd Year</option>
                    <option value="3">3rd Year</option>
                    <option value="4">4th Year</option>
                </select>
            </div>
        </div>

        <div class="request-container">
            <div class="request-label">
                <div class="label-name">Name</div>
                <div class="label-ID">Student ID</div>
                <div class="label-year-level">Year Level</div>
                <div class="label-section">Section</div>
            </div>

            <div class="request">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm">Accept</button>
                <button type="button" class="btn btn-danger btn-sm">Reject</button>
            </div>
            <div class="request">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm">Accept</button>
                <button type="button" class="btn btn-danger btn-sm">Reject</button>
            </div>
            <div class="request">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm">Accept</button>
                <button type="button" class="btn btn-danger btn-sm">Reject</button>
            </div>
            <div class="request">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm">Accept</button>
                <button type="button" class="btn btn-danger btn-sm">Reject</button>
            </div>
        </div>
    </div>


</body>

</html>
