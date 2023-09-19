<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\CreditController;
use App\Http\Controllers\SelectDataController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('Home', []);
});

Route::get('/registertutor', function () {
    return Inertia::render('Registertutor');
});

// Route::get('/home_customer', function () {
//     return Inertia::render('HomeCustomer');
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/register_student', [StudentController::class, 'insert']);
Route::get('/edit_profile_student', [StudentController::class, 'update']);

Route::get('/register_tutor', [TutorController::class, 'insert']);
Route::get('/editteacher', [TutorController::class, 'edit_profile']);
Route::get('/suspend_account', [TutorController::class, 'suspend_account']);
Route::get('/addsubjectsteacher', [TutorController::class, 'insert_subjects']);

Route::get('/addcredit', [CreditController::class, 'insert']);
Route::get('/editcredit', [CreditController::class, 'deduction_credit']);

Route::get('/fetchsubjects', [SelectDataController::class, 'select_subjects']);
Route::get('/fetchlistsubjects', [SelectDataController::class, 'list_subjects']);
Route::get('/fetchAll', [SelectDataController::class, 'selectAllsubject']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
