<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', function () {
    return view('admin.login');
});


Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', ['as' => '/dashboard', 'uses' => 'App\Http\Controllers\Admin\Dashboard\DashboardController@index']);

    Route::get('/edit-user-profile', ['as' => 'edit-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@editUsersProfile']);

    Route::post('/update-user-profile', ['as' => 'update-user-profile', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::post('/website-contact', ['as' => 'website-contact', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\RegisterController@updateProfile']);

    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});


Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);


Route::get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);

//About Us========
Route::get('/updadhyeclasses', ['as' => 'updadhyeclasses', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@index']);
Route::get('/directordesk', ['as' => 'directordesk', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getDirectordesk']);
Route::get('/teachingmethodology', ['as' => 'teachingmethodology', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getTeachingmethodology']);
//Application========
Route::get('/applicatioform', ['as' => 'applicatioform', 'uses' => 'App\Http\Controllers\Website\Application\ApplicationController@getApplicatioform']);
Route::get('/scolarship', ['as' => 'scolarship', 'uses' => 'App\Http\Controllers\Website\Application\ApplicationController@getScolarship']);
Route::get('/feespayment', ['as' => 'feespayment', 'uses' => 'App\Http\Controllers\Website\Application\ApplicationController@getFeespayment']);

Route::get('/contactus', ['as' => 'contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@getContactUs']);
Route::post('/contactus-store', ['as' => 'contactus-store', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactController@store']);

Route::get('/gallery', ['as' => 'gallery', 'uses' => 'App\Http\Controllers\Website\Gallery\GalleryController@getGallery']);

Route::get('/crashcoursebatch', ['as' => 'crashcoursebatch', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getCrashcoursebatch']);

Route::get('/crashcoursebatch', ['as' => 'crashcoursebatch', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getCrashcoursebatch']);
Route::get('/repeatersbatch', ['as' => 'repeatersbatch', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getRepeatersbatch']);
Route::get('/revisionbatch', ['as' => 'revisionbatch', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getRevisionbatch']);
Route::get('/prefoundationbatch', ['as' => 'prefoundationbatch', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getPrefoundationbatch']);

Route::get('/progressivebatch', ['as' => 'progressivebatch', 'uses' => 'App\Http\Controllers\Website\Courses\XICoursesController@getProgressivebatch']);
Route::get('/intensivebatch', ['as' => 'intensivebatch', 'uses' => 'App\Http\Controllers\Website\Courses\XICoursesController@getIntensivebatch']);
Route::get('/iitjeebatch', ['as' => 'iitjeebatch', 'uses' => 'App\Http\Controllers\Website\Courses\XICoursesController@getIitjeebatchh']);

Route::get('/progressivebatch-xii', ['as' => 'progressivebatch-xii', 'uses' => 'App\Http\Controllers\Website\Courses\XIICoursesController@getProgressivebatch']);
Route::get('/intensivebatch-xii', ['as' => 'intensivebatch-xii', 'uses' => 'App\Http\Controllers\Website\Courses\XIICoursesController@getIntensivebatch']);
Route::get('/iitjeebatch-xii', ['as' => 'iitjeebatch-xii', 'uses' => 'App\Http\Controllers\Website\Courses\XIICoursesController@getIitjeebatchh']);

Route::get('/ourresult', ['as' => 'ourresult', 'uses' => 'App\Http\Controllers\Website\OurResult\OurResultController@getOurresult']);
Route::get('/jeemain', ['as' => 'jeemain', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getJEEMain']);
Route::get('/neet', ['as' => 'neet', 'uses' => 'App\Http\Controllers\Website\Courses\CoursesController@getNeet']);
Route::get('/noticeboard', ['as' => 'noticeboard', 'uses' => 'App\Http\Controllers\Website\NoticeBoard\NoticeBoardController@getNoticeboard']);


