<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Get all employees
Route::get('/employees', [EmployeeController::class, 'getEmployee']);
//Get employee by their ID
Route::get('/employees/{id}', [EmployeeController::class, 'getEmployeeById']);
//Create an Employee
Route::post('/create-employee', [EmployeeController::class, 'createEmployee']);
//Update an Employee
Route::put('/update-employee/{id}', [EmployeeController::class, 'updateEmployee']);
//Delete an Employee
Route::delete('/delete-employee/{id}', [EmployeeController::class, 'deleteEmployee']);

