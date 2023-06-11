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
                        <form class="d-flex flex-column gap-3" method="POST" action="{{ route('login.submit') }}">
                            @csrf

                            <div class="form-group">
                                <label for="student_id" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Student ID') }}</label>
                                <input id="student_id" type="text" class="form-control form-control-lg"
                                    name="student_id" style="width: 200px; font-size: 12px" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-nowrap"
                                    style="font-size: 15px">{{ __('Password') }}</label>
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

        </div>
    </div>
    <div class="footer">
        <img src="{{ asset('images/SCS Landing Page BG.png') }}" alt="Landing Image">
    </div>
</body>

</html>
