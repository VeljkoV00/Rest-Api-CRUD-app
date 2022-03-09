<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployee(){

        $employees = Employee::all();
        return response()->json($employees, 200);
    }

    public function getEmployeeById($id){

        $employee = Employee::find($id);

        if(is_null($employee)){
            return response()->json(['message' => 'Employee doesnt exist '], 404);
        }

        else{
            return response()->json($employee, 200);
        }
    }

    public function createEmployee(Request $request){

        $employee = Employee::create($request->all());

        return response()->json($employee, 201);
    }


    public function updateEmployee(Request $request, $id){

        $employee = Employee::find($id);

       
        if(is_null($employee)){
            
            return response()->json(['message' => 'Employee doesnt exist '], 404);
        }
        $employee->update($request->all());

        return response()->json($employee, 200);
    }

    public function deleteEmployee($id){

        $employee = Employee::find($id);
        if(is_null($employee)){
            
            return response()->json(['message' => 'Employee doesnt exist '], 404);
        }

        $employee->delete();
        return response()->json(null, 204);
    }
}
