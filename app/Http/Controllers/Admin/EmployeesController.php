<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    public function __construct(){
        $this->middleware('auth'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();      
        return view('admin.employees.index', compact(['employees']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        /*\App\Service::create(request()->validate([
            'name' => 'required|min:5'
        ])); */
        Employee::create($this->validateData());

        return redirect()->route('admin.employees.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($this->validateData());
        
        return redirect()->route('admin.employees.index');
        //$employee->update($this->validateData());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$employee->delete();
        Employee::destroy($id);
        return redirect()->route('admin.employees.index');
    }

    protected function validateData(){
        return request()->validate([
            'emp_name' =>' required',
            'emp_ic_no' => 'required|min:12|max:12',
            'emp_address' => 'required',
            'emp_email' => 'required|email',
            'emp_password' => 'required|min:8',
            'emp_phone' => 'required|min:10|max:11',

        ]);
    }
}
