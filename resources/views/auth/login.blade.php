<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            {{--  Left section --}}
            <div class="col-md-6 mx-auto text-center" style="z-index: 100000">
                <img src="{{ asset('images/LNU logo.PNG') }}" alt="Logo" style="margin-top: 80px;">
                <h2 style="font-size: 25px;">Leyte Normal University</h2><br><br>
                <h1 style="font-size: 35px;">Online Student <br style="margin-bottom: 0;"> Clearance System</h1>
                <div class="d-flex flex-row justify-content-center gap-5">
                    <button id="login-btn" type="button" class="btn btn-primary w-25 m-0">Log in</button>
                    <button id="register-btn" type="button" class="btn btn-secondary w-25 m-0">Register</button>
                </div>
            </div>

            {{-- login container --}}
            <div id="login-container" class="w-50 col-md-4 d-none d-flex justify-content-end" style="z-index: 10000">
                <div class="card border-dark">
                    <div class="card-body">
                        <h3 class="card-title">Log in</h3>
                        <form method="POST" class="d-flex flex-column gap-3" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="student_id" class="text-nowrap"
                                    style="font-size: 15px">{{ __('student_ID') }}</label>
                                <input id="student_id" type="text" class="form-control form-control-lg"
                                    name="student_id" style="width: 200px; font-size: 12px" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-nowrap"
                                    style="font-size: 15px">{{ __('password') }}</label>
                                <input id="password" type="password" class="form-control form-control-lg"
                                    name="password" style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="form-group d-flex flex-column align-items-center">
                                <button type="submit" class="btn btn-primary btn-lg w-50"
                                    style="font-size: 15px">Enter</button>
                                <a href="#" class="mt-3" style="font-size: 15px">Forgot
                                    Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- register container --}}
            <div id="register-container" class=" w-50 col-md-4 d-none d-flex justify-content-end"
                style="z-index: 10000">
                <div class="card border-dark">
                    <div class="card-header border-0 text-center bg-white" style="font-size: 25px">Register</div>
                    <div class="card-body">
                        <form class="d-flex flex-column gap-1" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="first_name" class="text-nowrap"
                                    style="font-size: 15px">{{ __('First Name') }}</label>
                                <input id="first_name" type="text" class="form-control pl-0" name="first_name"
                                    style="width: 200px; font-size: 12px" required autofocus>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="middle_initial" class="text-nowrap" style="font-size: 15px">
                                    {{ __('Middle Initial') }}</label>
                                <input id="middle_initial" type="text" class="form-control" name="middle_initial"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="last_name" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Last Name') }}</label>
                                <input id="last_name" type="text" class="form-control" name="last_name"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="student_id" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Student ID') }}</label>
                                <input id="student_ID" type="text" class="form-control" name="student_ID"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="email" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control" name="email"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="password" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control" name="password"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="college" class="text-nowrap"
                                    style="font-size: 15px">{{ __('College') }}</label>
                                <select id="college" class="form-control bg-white" name="college"
                                    style="width: 200px; font-size: 12px" required>
                                    <option value="">Select College</option>
                                    <option value="College of Education">
                                        College of Education
                                    </option>
                                    <option value="College of Arts and Sciences">
                                        College of Arts and Sciences
                                    </option>
                                    <option value="College of Management and Entrepreneurship">
                                        College of Management and Entrepreneurship
                                    </option>
                                </select>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="yearlevel" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Year Level') }}</label>
                                <select id="year_level" class="form-control bg-white"
                                    style="width: 200px; font-size: 12px" name="year_level" required>
                                    <option value="">Select Year Level</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="course" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Course') }}</label>
                                <select id="course" class="form-control bg-white" name="course"
                                    style="width: 200px; font-size: 12px" required>
                                    <option value="">Select Course</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSTM">BSTM</option>
                                    <option value="BSED">BSED</option>
                                </select>
                            </div>

                            <div class="d-flex flex-row gap-3 align-items-center justify-content-between">
                                <label for="section" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Section') }}</label>
                                <input id="section" type="text" class="form-control" name="section"
                                    style="width: 200px; font-size: 12px" required>
                            </div>

                            <div class="d-flex flex-row justify-content-end my-3">
                                <div class="d-flex flex-row justify-content-center" style="width: 200px">
                                    <button type="submit"
                                        class="m-0 flex-fill btn btn-primary text-nowrap rounded-pill"
                                        style="font-size: 12px">
                                        Submit
                                    </button>
                                    <button type="reset"
                                        class="m-0 flex-fill btn btn-light text-nowrap rounded-pill"
                                        style="font-size:
                                        12px">
                                        Clear forms
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer">
        <img src="{{ asset('images/SCS Landing Page BG.png') }}" alt="Landing Image">
    </div>

    {{--  Login/Register Navigator --}}
    <script>
        // login button
        document.getElementById('login-btn').addEventListener('click', function() {
            document.getElementById('login-container').classList.remove('d-none')
            document.getElementById('register-container').classList.add('d-none')
        })

        // register button
        document.getElementById('register-btn').addEventListener('click', function() {
            document.getElementById('login-container').classList.add('d-none')
            document.getElementById('register-container').classList.remove('d-none')
        })
    </script>

</body>

</html>
