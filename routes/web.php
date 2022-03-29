<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DebitEntryController;
use App\Http\Controllers\CreditEntry;
use App\Http\Controllers\Services;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ClientRegistration;
use App\Http\Controllers\Home;
use App\Http\Controllers\SaveApplicaton;
use App\Http\Livewire\EditCreditSource;
use App\Http\Livewire\GlobalSearch;
use App\Http\Livewire;



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
//------------------------------------------------------------------------
// Credit Entry Routes Start
Route::get('/', [ProductController::class,'Home']);
Route::get('product_details/{MainServiceId}',[ProductController::class,'ProductDetails']);
Route::get('credit_entry', [CreditEntry::class,'create']);
Route::post('credit_entry', [CreditEntry::class,'save']);
Route::get('credit_entry', [CreditEntry::class, 'Daily_count']);
Route::get('previous', [CreditEntry::class, 'Previous']);
Route::get('selected_date/{date}', [CreditEntry::class, 'Selected_Date']);
Route::get('/delete_credit_entry/{id}', [CreditEntry::class, 'delete']);
Route::get('/view_credit_entry/{id}', [CreditEntry::class, 'View']);
Route::put('/update_credit_entry/{id}', [CreditEntry::class, 'update']);
Route::get('/add_credit_source', [CreditEntry::class, 'AddCreditHome']);
// Route::get('edit_creditsource/{id}', [EditCreditSource::class]);
Route::get('/edit_credit_source/{id}', [CreditEntry::class, 'EditCreditSource'])->name('edit_credit_source');
// Credit Entry Route Ends
//------------------------------------------------------------------------

//------------------------------------------------------------------------
// Product Routes start
Route::get('services', [ProductController::class,'Index']);
Route::get('add_product', [ProductController::class,'List']);
Route::get('/view_product/{id}', [ProductController::class,'View']);
Route::get('/delete_product/{id}', [ProductController::class,'Delete']);
Route::post('add_product', [ProductController::class,'AddProduct']);
Route::put('/update_product/{id}', [ProductController::class,'Update']);
Route::get('/view_product/{id}', [ProductController::class,'View']);
Route::get('add_document', [ProductController::class,'AddDocument']);
// Product Routes End
//------------------------------------------------------------------------
//------------------------------------------------------------------------
// Service  Routes start
Route::get('add_service', [Services::class,'index']);
Route::post('add_service', [Services::class,'Save']);
Route::get('add_service', [Services::class,'List']);
Route::get('/view_service/{id}', [Services::class,'View']);
Route::put('/update_service/{id}', [Services::class,'Update']);
Route::get('/delete_service/{id}', [Services::class,'Delete']);
// Service Routes End
//------------------------------------------------------------------------
//------------------------------------------------------------------------
// Login  Routes start
Route::get('login', [LoginController::class,'index']);
Route::get('signup', [SignupController::class,'index']);
Route::post('signup', [SignupController::class,'Save']);

// Login Routes End
//------------------------------------------------------------------------


// Home   Routes start
Route::get('home_dashboard', [Home::class,'HomeDashboard']);
Route::get('admin_home',[Admin::class,'Home']);
Route::get('updateservice', [ApplicationController::class,'UpdateService']);

// Application  Routes start
Route::get('app_home', [ApplicationController::class,'Home']);
Route::get('new_temp', [ApplicationController::class,'Temp']);
Route::get('app_form', [ApplicationController::class,'index']);
Route::get('app_home', [ApplicationController::class,'Dashboard']);
Route::get('dynamic_dashboard/{mainservice}', [ApplicationController::class,'DynamicDashboard']);
Route::get('app_form', [ApplicationController::class,'List']);
Route::post('save_application', [SaveApplicaton::class,'Save']);
Route::get('/edit_app/{id}', [ApplicationController::class,'Edit']);
Route::get('download_ack/{file}', [ApplicationController::class,'Download_Ack']);
Route::get('download_doc/{file}', [ApplicationController::class,'Download_Doc']);
Route::get('download_docs/{files}', [ApplicationController::class,'Download_Files']);
Route::get('download_pay/{file}', [ApplicationController::class,'Download_Pay']);
Route::post('update_app/{id}', [ApplicationController::class,'Update']);
Route::get('/selected_date_app/{date}', [ApplicationController::class,'SelectedDateList']);
Route::get('/previous_day_app', [ApplicationController::class,'PreviousDay']);
Route::get('/open_app/{id}', [ApplicationController::class,'Open_Application']);
Route::get('/update_open_app/{id}', [ApplicationController::class,'Update_Application']);
Route::get('/delete_app/{id}', [ApplicationController::class,'Delete']);
Route::get('/delete_app_per/{id}', [ApplicationController::class,'DeletePermanently']);
Route::get('/view_recycle_bin', [ApplicationController::class,'ViewRecycleBin']);
Route::get('/restore_app/{id}', [ApplicationController::class,'Restore']);
Route::get('balance_list', [ApplicationController::class,'BalanceList']);
Route::get('app_status_list/{service}', [ApplicationController::class,'AppStatusList']);
Route::get('selected_ser_bal_lis/{value}', [ApplicationController::class,'Selected_Ser_Balance_List']);
Route::get('/print_ack/{id}', [ApplicationController::class,'PrintAck']);
Route::get('bookmarks', [ApplicationController::class,'Bookmarks']);
Route::get('statusmodule', [ApplicationController::class,'StatusModule']);
Route::get('signup', [SignupController::class,'index']);
Route::post('signup', [SignupController::class,'Save']);
// Login Routes End
//------------------------------------------------------------------------
// Global  Search  Routes start
Route:: get('search/{key}', [ApplicationController::class,'Search']);



// Login Routes End
//------------------------------------------------------------------------




// Debit Entry Routes from Here
Route::get('debit_entry', [DebitEntryController::class, 'index']);
Route::post('save_debit_entry', [DebitEntryController::class, 'save']);
Route::get('debit_entry', [DebitEntryController::class, 'Daily_Count']);
Route::get('previous_debit', [DebitEntryController::class, 'Previous']);
Route::get('selected_date_debit/{date}', [DebitEntryController::class, 'Selected_Date']);
Route::get('/view_debit_entry/{transaction_id}', [DebitEntryController::class, 'View']);
Route::put('/update_debit_entry/{transaction_id}', [DebitEntryController::class, 'UpdateDebit']);
Route::get('/delete_debit_entry/{transaction_id}', [DebitEntryController::class, 'delete']);

// Client Registration Routes From Here
Route::get('client_registration',[ClientRegistration::class, 'Home'])->name('client_registration');
Route::get('cancel',[ClientRegistration::class, 'Home'])->name('client_registration');
Route::get('client_registration',[ClientRegistration::class, 'Home']);
Route::get('register/{id}',[ClientRegistration::class, 'Register']);
Route::post('register_user_form',[ClientRegistration::class, 'RegisterUsers']);
