<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;

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
Route::get('/members', [MembersController::Class, 'getMembers']);
Route::get('/view-profile',[MembersController::Class, 'viewProfile']);
Route::get('/0-9',[MembersController::Class, 'view09']);
Route::get('/A-index',[MembersController::Class, 'viewA']);
Route::get('/B-index',[MembersController::Class, 'viewB']);
Route::get('/C-index',[MembersController::Class, 'viewC']);
Route::get('/D-index',[MembersController::Class, 'viewD']);
Route::get('/E-index',[MembersController::Class, 'viewE']);
Route::get('/F-index',[MembersController::Class, 'viewF']);
Route::get('/G-index',[MembersController::Class, 'viewG']);
Route::get('/H-index',[MembersController::Class, 'viewH']);
Route::get('/I-index',[MembersController::Class, 'viewI']);
Route::get('/J-index',[MembersController::Class, 'viewJ']);
Route::get('/K-index',[MembersController::Class, 'viewK']);
Route::get('/L-index',[MembersController::Class, 'viewL']);
Route::get('/M-index',[MembersController::Class, 'viewM']);
Route::get('/N-index',[MembersController::Class, 'viewN']);
Route::get('/O-index',[MembersController::Class, 'viewO']);
Route::get('/P-index',[MembersController::Class, 'viewP']);
Route::get('/Q-index',[MembersController::Class, 'viewQ']);
Route::get('/R-index',[MembersController::Class, 'viewR']);
Route::get('/S-index',[MembersController::Class, 'viewS']);
Route::get('/T-index',[MembersController::Class, 'viewT']);
Route::get('/U-index',[MembersController::Class, 'viewU']);
Route::get('/V-index',[MembersController::Class, 'viewV']);
Route::get('/W-index',[MembersController::Class, 'viewW']);
Route::get('/X-index',[MembersController::Class, 'viewX']);
Route::get('/Y-index',[MembersController::Class, 'viewY']);
Route::get('/Z-index',[MembersController::Class, 'viewZ']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
