<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('cities', 'CityController');

/*
Route::resource('users', 'UserController');

Route::resource('states', 'StateController');

Route::resource('years', 'YearController');

Route::resource('departments', 'DepartmentController');



Route::resource('provinces', 'ProvinceController');

Route::resource('countries', 'CountryController');

Route::resource('divisions', 'DivisionController');

Route::resource('enrollments', 'EnrollmentController');

Route::resource('matters', 'MatterController');

Route::resource('peoples', 'PersonController');

Route::resource('quotas', 'QuotaController');

Route::resource('residences', 'ResidenceController');

Route::resource('scholarships', 'ScholarshipController');

Route::resource('scholarships-people', 'ScholarshipPersonController');

Route::resource('service-enrollments', 'ServiceEnrollmentController');*/