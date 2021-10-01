<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FooterLinkController;

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
Route::get('/0-9-index',[MembersController::Class, 'view09']);
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

Route::get('/09-index713',[MembersController::Class, 'viewIndex71309']);
Route::get('/A-index713',[MembersController::Class, 'viewIndex713A']);
Route::get('/B-index713',[MembersController::Class, 'viewIndex713B']);
Route::get('/C-index713',[MembersController::Class, 'viewIndex713C']);
Route::get('/D-index713',[MembersController::Class, 'viewIndex713D']);
Route::get('/E-index713',[MembersController::Class, 'viewIndex713E']);
Route::get('/F-index713',[MembersController::Class, 'viewIndex713F']);
Route::get('/G-index713',[MembersController::Class, 'viewIndex713G']);
Route::get('/H-index713',[MembersController::Class, 'viewIndex713H']);
Route::get('/I-index713',[MembersController::Class, 'viewIndex713I']);
Route::get('/J-index713',[MembersController::Class, 'viewIndex713J']);
Route::get('/K-index713',[MembersController::Class, 'viewIndex713K']);
Route::get('/L-index713',[MembersController::Class, 'viewIndex713L']);
Route::get('/M-index713',[MembersController::Class, 'viewIndex713M']);
Route::get('/N-index713',[MembersController::Class, 'viewIndex713N']);
Route::get('/O-index713',[MembersController::Class, 'viewIndex713O']);
Route::get('/P-index713',[MembersController::Class, 'viewIndex713P']);
Route::get('/Q-index713',[MembersController::Class, 'viewIndex713Q']);
Route::get('/R-index713',[MembersController::Class, 'viewIndex713R']);
Route::get('/S-index713',[MembersController::Class, 'viewIndex713S']);
Route::get('/T-index713',[MembersController::Class, 'viewIndex713T']);
Route::get('/U-index713',[MembersController::Class, 'viewIndex713U']);
Route::get('/V-index713',[MembersController::Class, 'viewIndex713V']);
Route::get('/X-index713',[MembersController::Class, 'viewIndex713X']);
Route::get('/Y-index713',[MembersController::Class, 'viewIndex713Y']);
Route::get('/Z-index713',[MembersController::Class, 'viewIndex713Z']);
Route::get('/W-index713',[MembersController::Class, 'viewIndex713W']);
Route::get('/09-index713',[MembersController::Class, 'viewIndex71309']);

Route::get('/09-index106', [MembersController::Class, 'viewIndex10609']);
Route::get('/A-index106', [MembersController::Class, 'viewIndex106A']);
Route::get('/B-index106', [MembersController::Class, 'viewIndex106B']);
Route::get('/C-index106', [MembersController::Class, 'viewIndex106C']);
Route::get('/D-index106', [MembersController::Class, 'viewIndex106D']);
Route::get('/E-index106', [MembersController::Class, 'viewIndex106E']);
Route::get('/F-index106', [MembersController::Class, 'viewIndex106F']);
Route::get('/G-index106', [MembersController::Class, 'viewIndex106G']);
Route::get('/H-index106', [MembersController::Class, 'viewIndex106H']);
Route::get('/I-index106', [MembersController::Class, 'viewIndex106I']);
Route::get('/J-index106', [MembersController::Class, 'viewIndex106J']);
Route::get('/K-index106', [MembersController::Class, 'viewIndex106K']);
Route::get('/L-index106', [MembersController::Class, 'viewIndex106L']);
Route::get('/M-index106', [MembersController::Class, 'viewIndex106M']);
Route::get('/N-index106', [MembersController::Class, 'viewIndex106N']);
Route::get('/O-index106', [MembersController::Class, 'viewIndex106O']);
Route::get('/P-index106', [MembersController::Class, 'viewIndex106P']);
Route::get('/Q-index106', [MembersController::Class, 'viewIndex106Q']);
Route::get('/R-index106', [MembersController::Class, 'viewIndex106R']);
Route::get('/S-index106', [MembersController::Class, 'viewIndex106S']);
Route::get('/T-index106', [MembersController::Class, 'viewIndex106T']);
Route::get('/U-index106', [MembersController::Class, 'viewIndex106U']);
Route::get('/V-index106', [MembersController::Class, 'viewIndex106V']);
Route::get('/W-index106', [MembersController::Class, 'viewIndex106W']);
Route::get('/X-index106', [MembersController::Class, 'viewIndex106X']);
Route::get('/Y-index106', [MembersController::Class, 'viewIndex106Y']);
Route::get('/Z-index106', [MembersController::Class, 'viewIndex106Z']);

Route::get('/blog',[BlogController::Class, 'getBlog']);
Route::get('/add-blog-entry',[BlogController::Class, 'addBlogEntry']);

Route::get('/about',[FooterLinkController::Class, 'getAbout']);
Route::get('/policy',[FooterLinkController::Class, 'privacyPolicy']);
Route::get('/help',[FooterLinkController::Class, 'getHelp']);
Route::get('/terms',[FooterLinkController::Class, 'getTerms']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
