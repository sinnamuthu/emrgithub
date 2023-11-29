<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DaillycollectionController;
use App\Http\Controllers\EmrController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ExaminationController;
use App\Http\Controllers\PatientinformationController;
use App\Http\Controllers\PatientreportController;
use App\Http\Controllers\PettyController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\ConsultantexpensesController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\CallController;
use App\Http\Controllers\ClinicsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HelpController;
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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics')->middleware('auth');

Route::get('/superadmin-dashboard', $controller_path . '\dashboard\Analytics@super')->name('dashboard-super')->middleware('auth');

// layout
Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu')->middleware('auth');
Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar')->middleware('auth');
Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid')->middleware('auth');
Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container')->middleware('auth');
Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank')->middleware('auth');

// pages
Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account')->middleware('auth');
Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications')->middleware('auth');
Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections')->middleware('auth');
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error')->middleware('auth');
Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance')->middleware('auth');

// authentication
Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic')->middleware('guest');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic')->middleware('guest');
Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic')->middleware('guest');

// cards
Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic')->middleware('auth');

// User Interface
Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion')->middleware('auth');
Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts')->middleware('auth');
Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges')->middleware('auth');
Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons')->middleware('auth');
Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel')->middleware('auth');
Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse')->middleware('auth');
Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns')->middleware('auth');
Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer')->middleware('auth');
Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups')->middleware('auth');
Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals')->middleware('auth');
Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar')->middleware('auth');
Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas')->middleware('auth');
Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs')->middleware('auth');
Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress')->middleware('auth');
Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners')->middleware('auth');
Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills')->middleware('auth');
Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts')->middleware('auth');
Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers')->middleware('auth');
Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography')->middleware('auth');

// extended ui
Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar')->middleware('auth');
Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider')->middleware('auth');

// icons
Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons')->middleware('auth');

// form elements
Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs')->middleware('auth');
Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups')->middleware('auth');

// form layouts
Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical')->middleware('auth');
Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal')->middleware('auth');

// tables
Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic')->middleware('auth');

// // tables
// Route::get('/appointment', $controller_path . '\appointment\Basic@index')->name('appointment');



Route::resource("/appointment", AppointmentController::class)->middleware('auth');

Route::resource("/doctor", DoctorController::class)->middleware('auth');

Route::resource("/clinics", ClinicsController::class)->middleware('auth');

Route::resource("/user", UsersController::class)->middleware('auth');

Route::resource("/help", HelpController::class)->middleware('auth');

Route::resource("/call", CallController::class)->middleware('auth');

// Route::get("/doctor/{doctor}/edit", 'App\Http\Controllers\DoctorController@edit')->middleware('auth');

Route::resource("/calendar", CalendarController::class)->middleware('auth');

//emr

Route::resource("/patient_information", PatientinformationController::class)->middleware('auth');

Route::resource("/examination", ExaminationController::class)->middleware('auth');

//accounting
Route::resource("/billing", BillingController::class)->middleware('auth');

Route::resource("/vendor_expenses", VendorController::class)->middleware('auth');

Route::resource("/consultant_expenses", ConsultantexpensesController::class)->middleware('auth');

Route::resource("/petty_cash", PettyController::class)->middleware('auth');

Route::resource("/transactions", TransactionsController::class)->middleware('auth');

//reports

Route::resource("/patient_report", PatientreportController::class)->middleware('auth');

Route::resource("/daily_collection", DaillycollectionController::class)->middleware('auth');

//profile
Route::resource("/profile", ProfileController::class)->middleware('auth');


//login
Route::post("authenticate", [LoginController::class,'authenticate']);

//logout

Route::get("logout", [LoginController::class,'logout'])->middleware('auth');

Route::get('/appointment_data', 'App\Http\Controllers\AppointmentController@appdata')->name('appointment_data');


Route::post('/patient_data', 'App\Http\Controllers\PatientinformationController@appdata')->name('patient_infodata');

Route::post('/patient_image', 'App\Http\Controllers\PatientinformationController@image')->name('patient_image');

Route::post('/add_clinics', 'App\Http\Controllers\ClinicsController@store')->name('add_clinics');

Route::post('/add_help', 'App\Http\Controllers\HelpController@store')->name('add_help');

Route::get('/help/{id}', 'App\Http\Controllers\HelpController@show');

// Route::get('/help/{id}', 'HelpController@edit')->name('help.show');

Route::get('/reload-data', 'App\Http\Controllers\HelpController@reloadData');

Route::post('/add_users', 'App\Http\Controllers\UsersController@store')->name('add_users');

Route::post('/exam_emr', 'App\Http\Controllers\EmrController@appdata')->name('emr_examination');

Route::post('/observ_emr', 'App\Http\Controllers\EmrController@observ')->name('emr_observation');

Route::post('/lab_emr', 'App\Http\Controllers\EmrController@lab')->name('emr_lab');

Route::post('/plan_emr', 'App\Http\Controllers\EmrController@plan')->name('emr_plan');

Route::post('/note_emr', 'App\Http\Controllers\EmrController@note')->name('emr_note');

Route::get('/file-upload', [FileUploadController::class, 'index']);
Route::post('/file-upload', [FileUploadController::class, 'upload']);





