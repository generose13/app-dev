<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClearanceController;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\Auth\LoginController;



// // Login routes
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// // Registration routes
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register'])->name('register.submit');


// Login route
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');

// Registration route
Route::post('/register', 'AuthController@register');
Route::post('/register', [AuthController::class, 'register'])->name('register');



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



//ADMIN PORTAL
Route::get('/admin', function () {
    return view('admin-portal.portal');
});

Route::get('/dashboard', function () {
    return view('admin-portal.dashboard');
});

Route::get('/student-register', function () {
    return view('admin-portal.student-registration');
});

Route::get('/accounts', function () {
    return view('admin-portal.accounts');
});

Route::get('/student-officer', function () {
    return view('admin-portal.student-officer');
});

Route::get('/clearances', function () {
    return view('admin-portal.clearances');
});

//STAFF PORTAL
Route::get('/staff-dash', function () {
    return view('staff-portal.staff-dash');
});

Route::get('/confirm-clearance', function () {
    return view('staff-portal.confirm-clearance');
});

Route::get('/staff-profile', function () {
    return view('staff-portal.staff-user-profile');
});

//STUDENT PORTAL ROUTE
Route::get('/officer-clearance-confirmation', function () {
    return view('student-portal.officer-clearance-confirmation');
});

Route::get('/officer-member-status', function () {
    return view('student-portal.officer-member-status');
});

Route::get('/student-clearance-status', function () {
    return view('student-portal.student-clearance-status');
});

Route::get('/student-user-profile', function () {
    return view('student-portal.student-user-profile');
});

Route::get('/student-view-doc', function () {
    return view('student-portal.student-view-document');
});

//DATABASE CONNECTION
// Route::get('/check-database-connection', function () {
//     try {
//         DB::connection()->getPdo();
//         return 'Database connection successful!';
//     } catch (Exception $e) {
//         return 'Database connection failed: ' . $e->getMessage();
//     }
// });

// // Login routes
// Route::get('/login', 'AuthController@showLoginForm')->name('login');
// Route::post('/login', 'AuthController@login')->name('login.submit');
// Route::post('/logout', 'AuthController@logout')->name('logout');

// // Register routes
// Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
// Route::post('/register', 'AuthController@register')->name('register.submit');


//STUDENT ENDPOINT
Route::get('/admin-dash', function () {
    return view('admin-portal.admin-dash');
});

Route::get('admin-dash', [StudentController::class, 'index']);
Route::get('clearance', [ClearanceController::class, 'index'])->name('clearance');
Route::get('student-registration', [StudentRegistrationController::class, 'index'])->name('student-registration');

// //Login Register Routing
// Route::controller(LoginRegisterController::class)->group(function() {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });



// Route definition
// Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


// Route::get('/login', '\Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', '\Auth\LoginController@login')->name('login.submit');
Route::post('/logout', '\Auth\LoginController@logout')->name('logout');

// Route::get('/register', '\Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('/register', '\Auth\RegisterController@register');