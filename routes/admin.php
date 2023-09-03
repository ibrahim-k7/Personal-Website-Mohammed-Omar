<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\ConsultingController;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\admin\BagsController;
use App\Http\Controllers\admin\CoursesController;
use App\Http\Controllers\admin\Success_PartnersController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\admin\BagContentController;
use App\Http\Controllers\admin\CourseGoalController;
use App\Http\Controllers\admin\CourseInterlocutorController;
use App\Http\Controllers\admin\MessagesController;

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\Auth\AdminLoginController;
use App\Http\Controllers\admin\Auth\AdminRegisterController;

use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin/dashboard/')->middleware('auth:admin')->group(function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('admin.dashboard.home');

    Route::controller(ConsultingController::class)->group(
        function () {

            Route::get('/consulting', 'index')->name('index.Consulting');

            Route::post('/consulting/add', 'store')->name('store.Consulting');

            Route::get('/consulting/edit/{id}', 'edit')->name('edit.Consulting');

            Route::post('/consulting/update/{id}', 'update')->name('update.Consulting');

            Route::get('/consulting/delete/{id}', 'destroy')->name('destroy.Consulting');
        }
    );

    Route::controller(BagsController::class)->group(
        function () {

            Route::get('/bags', 'index')->name('index.Bag');

            Route::post('/bags/add', 'store')->name('store.Bag');

            Route::get('/bags/{id}/edit', 'edit')->name('edit.Bag');

            Route::post('/bags/{id}/update', 'update')->name('update.Bag');

            Route::get('/bags/{id}/delete', 'destroy')->name('destroy.Bag');
        }
    );

    Route::controller(BagContentController::class)->group(
        function () {

            Route::get('/bags/{id}/content', 'indexContent')->name('index.Content');
            Route::post('/bags/content/add', 'store')->name('store.Content');
            Route::get('/bags/content/{id}/edit', 'edit')->name('edit.Content');
            Route::post('/bags/content/{id}/update/', 'update')->name('update.Content');
            Route::get('/bags/content/{id}/delete', 'destroy')->name('destroy.Content');
        }
    );

    Route::controller(CoursesController::class)->group(
        function () {

            Route::get('/courses', 'index')->name('index.Courses');
            Route::post('/courses/add', 'store')->name('store.Courses');
            Route::get('/courses/{id}/edit', 'edit')->name('edit.Courses');
            Route::post('/courses/{id}/update', 'update')->name('update.Courses');
            Route::get('/courses/delete/{id}', 'destroy')->name('destroy.Courses');
        }
    );

    Route::controller(CourseGoalController::class)->group(
        function () {

            Route::get('/courses/{id}/goals', 'indexContent')->name('index.Goal');
            Route::post('/courses/goal/add', 'store')->name('store.Goal');
            Route::get('/courses/goal/{id}/edit', 'edit')->name('edit.Goal');
            Route::post('/courses/goal/{id}/update/', 'update')->name('update.Goal');
            Route::get('/bags/goal/{id}/delete', 'destroy')->name('destroy.Goal');
        }
    );
    
    Route::controller(CourseInterlocutorController::class)->group(
        function () {

            Route::get('/courses/{id}/interlocutor', 'indexContent')->name('index.Interlocutor');
            Route::post('/courses/interlocutor/add', 'store')->name('store.Interlocutor');
            Route::get('/courses/interlocutor/{id}/edit', 'edit')->name('edit.Interlocutor');
            Route::post('/courses/interlocutor/{id}/update/', 'update')->name('update.Interlocutor');
            Route::get('/bags/interlocutor/{id}/delete', 'destroy')->name('destroy.Interlocutor');

        }
    );

    Route::controller(Success_PartnersController::class)->group(
        function () {

            Route::get('/success_partners', 'index')->name('index.Success_partners');

            Route::post('/success_partners/add', 'store')->name('store.Success_partners');

            Route::get('/success_partners/edit/{id}', 'edit')->name('edit.Success_partners');

            Route::post('/success_partners/update/{id}', 'update')->name('update.Success_partners');

            Route::get('/success_partners/{id}/delete', 'destroy')->name('destroy.Success_partners');
        }
    );

    Route::get('message',[MessagesController::class,'index'])->name('index.Message');
    Route::get('message/delete/{id}',[MessagesController::class,'destroy'])->name('destroy.Message');


});






Route::get('/admin/dashboard/login', [AdminLoginController::class, 'login'])->name('admin.dashboard.login');

//check login info
Route::post('/admin/dashboard/login', [AdminLoginController::class, 'checkLogin'])->name('admin.dashboard.check');


Route::get('/admin/dashboard/register', [AdminRegisterController::class, 'register'])->name('admin.dashboard.register');

//store register info
Route::post('/admin/dashboard/register', [AdminRegisterController::class, 'store'])->name('admin.dashboard.store');


Route::post('/admin/dashboard/logout', [AdminLoginController::class, 'logout'])->name('admin.dashboard.logout');
