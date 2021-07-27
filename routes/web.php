<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\educationCnotroller;
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
Route::get('/bitset_index',[indexController::class ,'index']);
Route::get('/forall',[UserController::class ,'alluserindex'])->middleware(['auth']);
Route::get('/onlyforadmin',[UserController::class, 'admindex'])->middleware(['auth','admin']);
Route::get('/onlyforprogramer',[UserController::class ,'allprogramerindex'])->middleware(['auth']);
Route::get('/password',[userController::class, 'ChangePassword']);
Route::post('/passwordf',[userController::class, 'ChangePasswordF']);

Route::get('/reqproject',[projectController::class ,'reqestProject']);
Route::post('/reqpro/add',[projectController::class ,'addproject']);
Route::get('/daily',[projectController::class ,'dailyProject']);
Route::get('/dailyforprogramer',[projectController::class ,'daily']);
Route::get('/acceptprogramer',[projectController::class ,'accept']);
Route::post('/add',[projectController::class,'acceptoneprolist']);
Route::get('/detail/{b}',[projectController::class ,'detailpro']);
Route::get('/daily/deletpro/{b}',[projectController::class,'deletproject']);
Route::get('/adminforproject',[projectController::class,'adminclassControll']);
Route::get('/adminclassControll/moreinfo/{b}',[projectController::class,'moreinformation']);
Route::post('/updatepro',[projectController::class,'updateproject']);
Route::post('/addprogramer',[projectController::class,'Adaddprogramer']);

Route::get('/user_test',[educationCnotroller::class,'alltest']);
Route::get('/user_c',[educationCnotroller::class,'c']);
Route::get('/user_c_plas',[educationCnotroller::class,'c_plas_plas']);
Route::get('/user_python',[educationCnotroller::class,'python']);
Route::get('/cphp1',[educationCnotroller::class,'cphp2']);
Route::get('/pc++',[educationCnotroller::class,'cplas2']);
Route::get('/pphp',[educationCnotroller::class,'ppytho2']);
Route::get('/schedule_user',[educationCnotroller::class,'schedule_class']);
Route::post('/newstudent',[educationCnotroller::class,'newstudentclass']);
Route::get('/adminforclass',[educationCnotroller::class,'educationclass']);
Route::post('/adminnewclass',[educationCnotroller::class,'adminfornewclass']);
Route::get('/educationclass/deleteclass/{b}',[educationCnotroller::class,'deleteclassadmin']);
Route::post('/admintimeclass',[educationCnotroller::class,'adminfornewtime']);
Route::post('/adminpriceclass',[educationCnotroller::class,'adminfornewprice']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
