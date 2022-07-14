<?php

use Illuminate\Support\Facades\Route;
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

///// Frontend Group 
Route::group(['as' => 'frontend.', 'namespace' => 'frontend'], function () {

	 Route::get('/', [App\Http\Controllers\frontend\homeController::class, 'index'])->name('index');
	 Route::get('kyc-update', [App\Http\Controllers\frontend\homeController2::class, 'kyc_forms'])->name('kycUpdate');
	 	
	 /// about us
	Route::get('/about-us/corporate-profile', [App\Http\Controllers\frontend\homeController::class, 'about'])->name('about');
	Route::get('/about-us/our-people', [App\Http\Controllers\frontend\homeController::class, 'our_team'])->name('people');
	Route::get('/about-us/md-desk', [App\Http\Controllers\frontend\homeController::class, 'mddesk'])->name('mddesk');
	Route::get('/about-us/letter-to-investors', [App\Http\Controllers\frontend\homeController::class, 'letter'])->name('letter');
	Route::get('/about-us/registrars', [App\Http\Controllers\frontend\homeController::class, 'registrars'])->name('registrars');
	Route::get('/about-us/career', [App\Http\Controllers\frontend\homeController::class, 'career'])->name('career');



	/// Our Services
	Route::get('/financial-services-companies',[App\Http\Controllers\frontend\homeController::class, 'our_services'])->name('services');
	Route::get('/financial-services-companies/mutual-funds', [App\Http\Controllers\frontend\homeController::class, 'mutual_funds'])->name('mutual_funds');
	Route::get('/financial-services-companies/insurance', [App\Http\Controllers\frontend\homeController::class, 'insurance'])->name('insurance');

	/// Calculators 
	Route::get('/calculators/{id}/{calci}',[App\Http\Controllers\frontend\homeController::class, 'calci'])->name('calci');	

	/// Mf Forms
	Route::get('/MF-Forms',[App\Http\Controllers\frontend\homeController::class, 'forms'])->name('mf_forms');
	Route::post('/MF-Forms',[App\Http\Controllers\frontend\homeController::class, 'forms_ajax'])->name('mf_forms');
	Route::get('/MF-Forms/{id}/download',[App\Http\Controllers\frontend\homeController::class, 'forms_download'])->name('mf_forms.download');

	/// Blogs
	Route::get('/all-blogs',[App\Http\Controllers\frontend\homeController2::class, 'allBLogs'])->name('all_blogs');
	Route::get('/blog/{id}/{slug}',[App\Http\Controllers\frontend\homeController2::class, 'blogDetail'])->name('blog_detail');
	Route::get('/{type}/{id}/{name}',[App\Http\Controllers\frontend\homeController2::class, 'blogByCaTag'])->name('blog_by_catag');
	
	/// Contact Us
	Route::get('/contact-us',function(){ return view('frontend.contact'); })->name('contact_us');

	///mailing list
	Route::get('/email/{email}/unsubscribe',[App\Http\Controllers\frontend\emialServicesController::class, 'unsubscribe'])->name('email.unsubscribe');
	Route::post('/contact/form/submit',[App\Http\Controllers\frontend\emialServicesController::class, 'formProcess'])->name('form_process');

});
//// for testing mail function
//  Route::get('/testmail',[App\Http\Controllers\subcriberController::class,'testEmail']);
Route::get('/testmailview',function(){
	return view('email.subscribe',[
		'email'=>'emials@gmial.com',
		'email_content'=>'email content'
	]);
});
Route::get('/testmailview2',function(){
	return view('email.contact',[
		'email'=>'emials@gmial.com',
		'email_content'=>'email content'
	]);
});

//////// Admin group

Auth::routes();

Route::get('/vsrk-admin', 'App\Http\Controllers\HomeController@index')->name('vsrkAdmin')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	///Other Common Functions
	Route::post('vsrk-admin/change-order',  'App\Http\Controllers\imageController@changeF')->name('vsrk-admin.changeOrder');
	Route::post('vsrk-admin/get-category',  'App\Http\Controllers\imageController@getCategoryF')->name('getCategory');
	
	/// Blog
	Route::resource('vsrk-admin/all-blogs',  'App\Http\Controllers\blogController');

	/// Categories And Tags
	Route::resource('vsrk-admin/cateTag',  'App\Http\Controllers\CategoryTagContoller');

	/// Team
	Route::resource('vsrk-admin/team', 'App\Http\Controllers\TeamController');
	
	/// testimonials
	Route::resource('vsrk-admin/testimonial', 'App\Http\Controllers\testimonialController');

	
	///// Form
	Route::resource('vsrk-admin/forms', 'App\Http\Controllers\FormController');
	Route::get('vsrk-admin/other-forms','App\Http\Controllers\FormController@otherForms')->name('forms.other');
	///// Career
	Route::resource('vsrk-admin/career', 'App\Http\Controllers\CareerContoller');

	///// Static Pages
	Route::get('vsrk-admin/calculator', 'App\Http\Controllers\staticPagesContoller@calci')->name('staticPages.calci');
	Route::post('vsrk-admin/calculator/page', 'App\Http\Controllers\staticPagesContoller@calciPage')->name('staticPages.calci.page');
	Route::put('vsrk-admin/{page}/update', 'App\Http\Controllers\staticPagesContoller@calciPageUpdate')->name('staticPages.calc.update');
	Route::resource('vsrk-admin/staticPages', 'App\Http\Controllers\staticPagesContoller')->only([
		'edit','update'
	]);
	
	
	///// Faqs
	Route::resource('vsrk-admin/faqs', 'App\Http\Controllers\faqsController');
	
	Route::resource('vsrk-admin/user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('vsrk-admin/profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('vsrk-admin/profile/{userId}/edit', 'App\Http\Controllers\ProfileController@editO')->name('profile.otherEdit');
	Route::put('vsrk-admin/profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('vsrk-admin/profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

