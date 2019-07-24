<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeesController extends Controller
{
    public function show()
    {
        $employees = Employee::join('companies','employees.company_id','=','companies.id')
        ->select('employees.*','companies.name AS company_name')
        ->get();

        $companies = Company::all();
        
        return view('employees.index', compact('employees','companies'));
    }

    public function create(Request $request)
    {
        $requestData = $request->all();

        $employee = new Employee();
        $employee->name = $requestData['name'];
        $employee->company_id = $requestData['company_id'];

        $employee -> save();
        return back();
    }

    public function read($id)
    {
        
        $employee = Employee::find($id);
        // $employee = Employee::join('companies','employees.company_id','=','companies.id')
        // ->select('employees.*','companies.name AS company_name')
        // ->where('employees.id',$id)
        // ->get();
        $companies = Company::all();
        return view('employees.read', ['employee' => $employee],['companies' => $companies]);
    }

    public function edit($id)
    {
        
        $employee = Employee::find($id);
        $companies = Company::all();
 
        return view('employees.edit', ['employee' => $employee],['companies' => $companies]);
    }

    public function update($id)
    {
       
        $employee = Employee::find(id);
        
        $employee->name = request('name');    
 
        $employee->save();
 
        return redirect('/employees');
    }

    public function destroy($id)
    {       
        $employee = Employee::find($id);
        $employee->delete();
        return back();
    }

}
