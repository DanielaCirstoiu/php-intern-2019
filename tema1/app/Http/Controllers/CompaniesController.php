<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class CompaniesController extends Controller
{
    //
    public function show()
    {
        $companies = Company::all();

        $employees = Employee::all();
        
        return view('companies.index', compact('employees','companies'));
    }

    public function create(Request $request)
    {
        $requestData = $request->all();

        $company = new Company();
        $company->name = $requestData['name'];       
        $company->description = $requestData['description'];  

        $company -> save();
        return back();
    }

    public function read($id)
    {
        $company = Company::find($id);
        
        return view('companies.read', compact('company'));
    }

    public function edit($id)
    {       
        $company = Company::find($id);

        return view('companies.edit', compact('company'));
    }

    public function update($id)
    {
        $company = Company::find($id);
        
        $company->name = request('name');
        $company->description = request('description');
       
        $company->save(); 
        return redirect('/companies');
    }

    public function destroy($id)
    {       
        $company = Company::find($id);
        $company->delete();
        return back();
    }
}
