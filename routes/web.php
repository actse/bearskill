<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\SelectDataController;
use Illuminate\Http\Request;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/test', function () {
    return Inertia::render('Test');
});

Route::get('/registers', function () {
    return Inertia::render('RegisterUser');
});

Route::get('/billing', function () {
    return Inertia::render('Billing');
});

Route::get('/test', function () {
    return Inertia::render('test');
});

Route::get('/student_home', function () {
    return Inertia::render('StudentHome');
});

Route::get('/list_tutor', function () {
    return Inertia::render('Listtutor');
});

Route::get('/subject_detail', function () {
    return Inertia::render('SubjectDetail');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth:api')->get('/api/user', function () {
    return auth()->user();
});

Route::post('/insertContact', [UserController::class, 'insertContact']);
Route::post('/insertDetail', [UserController::class, 'insertDetail']);
Route::post('/selectprofile', [UserController::class, 'selectdata']);
Route::post('/selectdata', [UserController::class, 'select_data']);
Route::post('/editteacher', [UserController::class, 'edit_profile']);
Route::get('/suspend_account', [UserController::class, 'suspend_account']);
Route::get('/addsubjectsteacher', [UserController::class, 'insert_subjects']);
Route::get('/addtypesubject', [UserController::class, 'insert_type_subjects']);
Route::post('/sendOTP', [UserController::class, 'verifly_account']);
Route::post('/veriflyAccount', [UserController::class, 'updata_status_verifly']);

Route::post('/addcredit', [CreditController::class, 'insert']);
Route::get('/editcredit', [CreditController::class, 'deduction_credit']);

Route::get('/fetchsubjects', [SelectDataController::class, 'select_subjects']);
Route::get('/fetchlistsubjects', [SelectDataController::class, 'list_subjects']);
Route::get('/fetchAll', [SelectDataController::class, 'selectAllsubject']);

Route::get('/SubjectCategory', [SubjectController::class, 'subject_category']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/addcredit', [ProfileController::class, 'addcredit']);
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
