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
        <h2>Member Status</h2>
        <div class="status-options">
            <label for="year-level">Year Level:</label>
            <select id="year-level">
                <option value="">Choose Year Level</option>
                <option value="1">Year 1</option>
                <option value="2">Year 2</option>
                <option value="3">Year 3</option>
                <option value="4">Year 4</option>
            </select>


            <label for="section">Section:</label>
            <select id="section">
                <option value="">Choose Section</option>
                <option value="A">Section A</option>
                <option value="B">Section B</option>
                <option value="C">Section C</option>
            </select>

            <label for="status">Status:</label>
            <select id="status">
                <option value="">Choose Status</option>
                <option value="active">Cleared</option>
                <option value="inactive">Not Cleared</option>
            </select>

            <label for="search">Search:</label>
            <input type="text" id="search" placeholder="Search">
        </div>

        <div class="request-container">
            <div class="request-label">
                <div class="name-label">Name</div>
                <div class="ID-label">Student ID</div>
                <div class="year-level-label">Year Level</div>
                <div class="section-label">Section</div>
                <div class="status-label">Status</div>
            </div>

            <div class="status">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm status-btn">Cleared</button>
            </div>
            <div class="status">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-danger btn-sm status-btn">Not Cleared</button>
            </div>
            <div class="status">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-success btn-sm status-btn">Cleared</button>
            </div>
            <div class="status">
                <input class="name" type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <input type="text" disabled>
                <button type="button" class="btn btn-danger btn-sm status-btn">Not Cleared</button>
            </div>
        </div>
    </div>
    </div>


</body>

</html>
