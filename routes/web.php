<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::redirect('/', 'admin/home');

Auth::routes();
// Auth::routes(['register' => false]);
// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');

    Route::resource('bankinfos','Admin\BankinfoController');
    Route::resource('accountantinfos','Admin\AccountantController');
    Route::resource('buyerinfos','Admin\BuyerController');
    Route::resource('carrierinfos','Admin\CarrierController');
    Route::resource('carriersales','Admin\CarriersaleController');
    Route::resource('techinfos','Admin\TechinfoController'); 
    Route::resource('callingplan','Admin\Calling_Plan_CostingController');
    Route::resource('timezone','Admin\Time_ZoneController');
    Route::resource('countries','Admin\CountriesController');
    Route::resource('currency','Admin\CurrencyController');
    Route::resource('currencyexchange','Admin\Currency_Exchange_ReportController');
    Route::resource('cellularcompanies','Admin\Cellular_CompanyController');
    Route::resource('callingphone','Admin\Calling_PhoneController');
    Route::resource('rout','Admin\RoutController');
    Route::resource('routsaleprice','Admin\Rout_Sale_PriceController');
    Route::resource('carrierbuy','Admin\Carrier_Buy_RoutController');
    Route::resource('timerang','Admin\Time_RangController');
    Route::resource('mcps','Admin\McpController');
    Route::resource('cps','Admin\CpinfoController');
    Route::resource('cplines','Admin\CplineController');
    Route::resource('lineinfos','Admin\LineinfoController');
    Route::resource('lines','Admin\LineController');
    Route::resource('cpunits','Admin\PcunitController');
    Route::resource('whatsapps','Admin\WhatsappController');
    Route::resource('sims','Admin\SimController');
    Route::resource('digitals','Admin\DigitalController');
    Route::resource('financials','Admin\FinancialController');
    Route::resource('payments','Admin\PaymentController');
    Route::resource('paymethods','Admin\PaymentMethodController');
    Route::resource('carrierinvoices','Admin\CarriervoiceController');
    Route::resource('carrierpays','Admin\CarrierPaymentController');
    Route::resource('cpayments','Admin\CreatePaymentController');
    Route::resource('mcppayments','Admin\McpPaymentController');
});


// Route::get('/',[App\Http\Controllers\Website\HomeController::class,'index'])->name('home.index');
Route::get('/',function(){
    return redirect()->route('login');
})->name('home.index');

Route::get('/contactus',[App\Http\Controllers\Website\HomeController::class,'contactus'])->name('home.contactus');
Route::get('/blog',[App\Http\Controllers\Website\HomeController::class,'blog'])->name('home.blog');
Route::get('/aboutus',[App\Http\Controllers\Website\HomeController::class,'aboutus'])->name('home.aboutus');
Route::get('register/{id}',[App\Http\Controllers\Auth\RegisterController::class,'refererRegister']);
