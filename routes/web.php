<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Users\UserIndex;
use App\Http\Livewire\Country\CountryIndex;
use App\Http\Livewire\State\StateIndex;
use App\Http\Livewire\Department\DepartmentIndex;
use App\Http\Livewire\City\CityIndex;
use App\Http\Livewire\Employee\EmployeeIndex;
use App\Http\Livewire\UpgradePlan\UpgradeIndex;
use App\Http\Livewire\GoogleApi\ApiTest;

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
//Route::post('/google', ApiTest::class)->name('google-api.index');
//Route::get('/google', ApiTest::class)->name('google-api.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/users', UserIndex::class)->name('users.index');
    Route::get('/countries', CountryIndex::class)->name('country.index');
    Route::get('/states', StateIndex::class)->name('state.index');
    Route::get('/departments', DepartmentIndex::class)->name('department.index');
    Route::get('/cities', CityIndex::class)->name('city.index');
    Route::get('/employees', EmployeeIndex::class)->name('employee.index');
    Route::get('/upgrade', UpgradeIndex::class)->name('upgrade-plan.index');
    
});
