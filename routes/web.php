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




    Route::get('/list-location-address', ['as' => 'list-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@index']);
    Route::get('/add-location-address', ['as' => 'add-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@add']);
    Route::post('/add-location-address', ['as' => 'add-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@store']);
    Route::get('/edit-location-address/{edit_id}', ['as' => 'edit-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@edit']);
    Route::post('/update-location-address', ['as' => 'update-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@update']);
    Route::post('/show-location-address', ['as' => 'show-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@show']);
    Route::post('/delete-location-address', ['as' => 'delete-location-address', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@destroy']);
    Route::post('/update-one-incident_type', ['as' => 'update-one-incident_type', 'uses' => 'App\Http\Controllers\Admin\Master\LocationAddressController@updateOne']);
    
// ==============Slider============
    Route::get('/list-slide', ['as' => 'list-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@index']);
    Route::get('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@add']);
    Route::post('/add-slide', ['as' => 'add-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@store']);
    Route::get('/edit-slide/{edit_id}', ['as' => 'edit-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@edit']);
    Route::post('/update-slide', ['as' => 'update-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@update']);
    Route::post('/show-slide', ['as' => 'show-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@show']);
    Route::post('/delete-slide', ['as' => 'delete-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@destroy']);
    Route::post('/update-active-slide', ['as' => 'update-active-slide', 'uses' => 'App\Http\Controllers\Admin\Home\SliderController@updateOne']);
    
// =============Courses Offered============
    Route::get('/list-courses-offered', ['as' => 'list-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@index']);
    Route::get('/add-courses-offered', ['as' => 'add-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@add']);
    Route::post('/add-courses-offered', ['as' => 'add-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@store']);
    Route::get('/edit-courses-offered/{edit_id}', ['as' => 'edit-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@edit']);
    Route::post('/update-courses-offered', ['as' => 'update-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@update']);
    Route::post('/show-courses-offered', ['as' => 'show-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@show']);
    Route::post('/delete-courses-offered', ['as' => 'delete-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@destroy']);
    Route::post('/update-active-courses-offered', ['as' => 'update-active-courses-offered', 'uses' => 'App\Http\Controllers\Admin\Home\CoursesOfferedController@updateOne']);
    
     // =============upcoming courses============
     Route::get('/list-upcoming-courses', ['as' => 'list-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@index']);
     Route::get('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@add']);
     Route::post('/add-upcoming-courses', ['as' => 'add-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@store']);
     Route::get('/edit-upcoming-courses/{edit_id}', ['as' => 'edit-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@edit']);
     Route::post('/update-upcoming-courses', ['as' => 'update-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@update']);
     Route::post('/show-upcoming-courses', ['as' => 'show-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@show']);
     Route::post('/delete-upcoming-courses', ['as' => 'delete-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@destroy']);
     Route::post('/update-active-upcoming-courses', ['as' => 'update-active-upcoming-courses', 'uses' => 'App\Http\Controllers\Admin\Home\UpcomingCoursesController@updateOne']);
     
    // =============Testimonial============
    Route::get('/list-testimonial', ['as' => 'list-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@index']);
    Route::get('/add-testimonial', ['as' => 'add-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@add']);
    Route::post('/add-testimonial', ['as' => 'add-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@store']);
    Route::get('/edit-testimonial/{edit_id}', ['as' => 'edit-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@edit']);
    Route::post('/update-testimonial', ['as' => 'update-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@update']);
    Route::post('/show-testimonial', ['as' => 'show-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@show']);
    Route::post('/delete-testimonial', ['as' => 'delete-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@destroy']);
    Route::post('/update-active-testimonial', ['as' => 'update-active-testimonial', 'uses' => 'App\Http\Controllers\Admin\Home\TestimonialController@updateOne']);
    
    // Admission=================
    Route::get('/list-application-form', ['as' => 'list-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@index']);
    Route::post('/show-application-form', ['as' => 'show-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@show']);
    Route::post('/delete-application-form', ['as' => 'delete-application-form', 'uses' => 'App\Http\Controllers\Admin\Application\ApplicationListController@destroy']);

    Route::get('/list-scolarship-form', ['as' => 'list-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@index']);
    Route::post('/show-scolarship-form', ['as' => 'show-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@show']);
    Route::post('/delete-scolarship-form', ['as' => 'delete-scolarship-form', 'uses' => 'App\Http\Controllers\Admin\Application\ScolarshipListController@destroy']);

    Route::get('/list-fesspayment-form', ['as' => 'list-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@index']);
    Route::post('/show-fesspayment-form', ['as' => 'show-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@show']);
    Route::post('/delete-fesspayment-form', ['as' => 'delete-fesspayment-form', 'uses' => 'App\Http\Controllers\Admin\Application\FessPaymentListController@destroy']);

    // ===============Contact 
    Route::get('/list-contactus-form', ['as' => 'list-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@index']);
    Route::post('/show-contactus-form', ['as' => 'show-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@show']);
    Route::post('/delete-contactus-form', ['as' => 'delete-contactus-form', 'uses' => 'App\Http\Controllers\Admin\ContactUs\ContactUsListController@destroy']);

    Route::get('/db-backup', ['as' => 'db-backup', 'uses' => 'App\Http\Controllers\DBBackup\DBBackupController@downloadBackup']);
    Route::get('/log-out', ['as' => 'log-out', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@logout']);

});


Route::get('/login', ['as' => 'login', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@index']);
Route::post('/submitLogin', ['as' => 'submitLogin', 'uses' => 'App\Http\Controllers\Admin\LoginRegister\LoginController@submitLogin']);

Route::get('/', ['as' => 'index', 'uses' => 'App\Http\Controllers\Website\IndexController@index']);
//About Us========
Route::get('/updadhyeclasses', ['as' => 'updadhyeclasses', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@index']);
Route::get('/directordesk', ['as' => 'directordesk', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getDirectordesk']);
Route::get('/teachingmethodology', ['as' => 'teachingmethodology', 'uses' => 'App\Http\Controllers\Website\AboutUs\AboutUsController@getTeachingmethodology']);
Route::get('/gallery', ['as' => 'gallery', 'uses' => 'App\Http\Controllers\Website\Gallery\GalleryController@getGallery']);
//Start Application========
Route::post('/add-applicatioform', ['as' => 'add-applicatioform', 'uses' => 'App\Http\Controllers\Website\Application\ApplicationFormController@addApplicationform']);
Route::get('/applicatioform', ['as' => 'applicatioform', 'uses' => 'App\Http\Controllers\Website\Application\ApplicationFormController@getApplicationform']);
Route::get('/scolarship', ['as' => 'scolarship', 'uses' => 'App\Http\Controllers\Website\Application\ScolarshipController@getAllScolarshipForm']);
Route::post('/add-scolarship', ['as' => 'add-scolarship', 'uses' => 'App\Http\Controllers\Website\Application\ScolarshipController@addScolarshipForm']);
Route::get('/feespayment', ['as' => 'feespayment', 'uses' => 'App\Http\Controllers\Website\Application\FessPaymentFormController@getAllFessPaymentForm']);
Route::post('/add-feespayment', ['as' => 'add-feespayment', 'uses' => 'App\Http\Controllers\Website\Application\FessPaymentFormController@addFessPaymentForm']);
//End Application========
//Start Contact========
Route::get('/contactus', ['as' => 'contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@getContactUs']);
Route::post('/add-contactus', ['as' => 'add-contactus', 'uses' => 'App\Http\Controllers\Website\ContactUs\ContactUsController@addContactUs']);
//Start Contact========
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


