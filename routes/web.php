<?php

use App\Http\Controllers\MemberDepartmentController;
use App\Http\Controllers\MemberDesignationController;
use App\Http\Controllers\MemberProfileController;
use App\Http\Controllers\MemberTypeController;
use App\Http\Controllers\TeamController;
use App\Models\member_designation;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/teame', function () {
    return view('team/team');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/calender', function () {
    return view('adminpages/calender');
})->middleware(['auth'])->name('calender');

Route::get('/mail-inbox', function () {
    return view('adminpages/mail-inbox');
})->middleware(['auth'])->name('mail-inbox');

Route::get('/mail-compose', function () {
    return view('adminpages/mail-compose');
})->middleware(['auth'])->name('mail-compose');

Route::get('/mail-read', function () {
    return view('adminpages/mail-read');
})->middleware(['auth'])->name('mail-read');

Route::get('/add-member', function () {
    return view('adminpages/add-member');
})->middleware(['auth'])->name('add-member');

Route::get('/team-member-list', function () {
    return view('adminpages/team-member-list');
})->middleware(['auth'])->name('team-member-list');

// Route::get('/member_profile', function () {
//     return view('adminpages/member_profile');
// })->middleware(['auth']);



// Route::resource('member_type', MemberTypeController::class)->middleware(['auth']);
// Route::post('member_type', MemberTypeController::class, 'store')->middleware(['auth']);

Route::post('add_member_type', [MemberTypeController::class, 'store'])->middleware(['auth']);
// Route::get('member_type', [MemberTypeController::class, 'index'])->middleware(['auth']);
Route::get('delete_member_type/{id}', [MemberTypeController::class, 'destroy'])->middleware(['auth']);


Route::post('add_member_department', [MemberDepartmentController::class, 'store'])->middleware(['auth']);
Route::get('delete_member_department/{id}', [MemberDepartmentController::class, 'destroy'])->middleware(['auth']);

Route::post('add_member_designation', [MemberDesignationController::class, 'store'])->middleware(['auth']);
Route::get('delete_member_designation/{id}', [MemberDesignationController::class, 'destroy'])->middleware(['auth']);

Route::get('member_profile/{id}', [MemberProfileController::class, 'index'])->middleware(['auth']);

Route::post('create_member_profile', [MemberProfileController::class, 'store'])->middleware(['auth']);
Route::post('member_profile_update', [MemberProfileController::class, 'update'])->middleware(['auth']);
Route::post('update_profile_picture', [MemberProfileController::class, 'update_profile_picture'])->middleware(['auth']);





require __DIR__.'/auth.php';
