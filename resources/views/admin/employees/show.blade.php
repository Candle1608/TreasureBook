@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6 ml-md-3">
            <h1 class="m-1 text-dark">Show Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6 ml-md-3">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Show Employees</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <h4>Details <b>{{$employee->emp_name}}</b></h4>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                            <label for="emp_name">Name</label>
                            <div class="col-md-8">
                                <input name="emp_name" type="text" class="form-control" id="emp_name" value={{ $employee->emp_name }} required readonly>
                            </div>
                            
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_ic_no">IC No.</label>
                                <div class="col-md-8">
                                    <input name="emp_ic_no" type="number" class="form-control" id="emp_ic_no" value={{ $employee->emp_ic_no }} required readonly>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_address">Address</label>
                                <div class="col-md-8">
                                    <input name="emp_address" type="text" class="form-control" id="emp_address" value={{ $employee->emp_address }} required readonly> 
                                </div>
                                
                            </div>
                        </div>

                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_email">Email</label>
                                <div class="col-md-8">
                                    <input name="emp_email" type="text" class="form-control" id="emp_email" value={{ $employee->emp_email }} required readonly>
                                </div>
                                
                            </div>
                        </div>

                    </div>
     
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_phone">Phone No.</label>
                                <div class="col-md-8">
                                    <input name="emp_phone" type="number" class="form-control" id="emp_phone" value={{ $employee->emp_phone }} required readonly>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            
        </div>
    </section>
  <!-- /.content-header -->
@endsection