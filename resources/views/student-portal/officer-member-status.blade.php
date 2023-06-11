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
                <option value="AI31">Section AI31</option>
                <option value="AI32">Section AI32</option>
                <option value="AI33">Section AI33</option>
                <option value="AI34">Section AI34</option>
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
