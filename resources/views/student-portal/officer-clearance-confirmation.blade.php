@include('layouts.student-officer-nav')
@yield('student-officer-nav')

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clearance Confirmation</title>
    <link rel="stylesheet" href="css/officer.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>

<body>
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
