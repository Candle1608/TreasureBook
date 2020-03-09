@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-1 text-dark">Add Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Employees</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('admin.employees.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                            <label for="emp_name">Name</label>
                            <input name="emp_name" type="text" class="form-control" id="emp_name" aria-describedby="titleHelp" autocomplete="off" placeholder="Enter Name" value={{ old('emp_name') }} >
                            <small id="nameHelp" class="form-text text-muted">Enter your full name.</small>
                            </div>
                        </div>
                        
                        @error('emp_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_ic_no">IC No.</label>
                                <input name="emp_ic_no" type="number" class="form-control" id="emp_ic_no" minlength="12" maxlength="12" aria-describedby="ic_noHelp" autocomplete="off" placeholder="Enter IC No." value={{ old('emp_ic_no') }}>
                                <small id="ic_noHelp" class="form-text text-muted">Enter your ic number.</small>
                            </div>
                        </div>
                        
                        @error('emp_ic_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_address">Address</label>
                                <input name="emp_address" type="text" class="form-control" id="emp_address" aria-describedby="addressHelp" autocomplete="off" placeholder="Enter Address." value={{ old('emp_address') }}>
                                <small id="addressHelp" class="form-text text-muted">Enter your address.</small>
                            </div>
                        </div>
                        
                        @error('emp_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_email">Email</label>
                                <input name="emp_email" type="text" class="form-control" id="emp_email" aria-describedby="emailHelp" autocomplete="off" placeholder="Enter Email" value={{ old('emp_email') }}>
                                <small id="emailHelp" class="form-text text-muted">Enter your email.</small>
                            </div>
                        </div>
                        
                        @error('emp_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_password">Password</label>
                                <input name="emp_password" type="password" class="form-control" id="emp_password" aria-describedby="passwordHelp" autocomplete="off" placeholder="Enter Password" value={{ old('emp_password') }}>
                                <small id="passwordHelp" class="form-text text-muted">Enter your password.</small>
                            </div>
                        </div>
                        
                        @error('emp_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_phone">Phone No.</label>
                                <input name="emp_phone" type="number" class="form-control" id="emp_phone" minlength="10" maxlength="11" autocomplete="off" aria-describedby="phoneHelp" size="50" placeholder="Enter Phone No." value={{ old('emp_phone') }} >
                                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
                            </div>
                        </div>
                        
                        @error('emp_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                <!-- <div class="form-group">
                    <div class="row">
                        <label for="" class="col-md-3">Name</label>
                        <div class="col-md-6"><input type="text" name="name" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="row">
                        <label class="col-md-3">IC No.</label>
                        <div class="col-md-6"><input type="text" name="ic_no" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="row">
                        <label class="col-md-3">Address</label>
                        <div class="col-md-6"><input type="text" name="address" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="row">
                        <label class="col-md-3">Email</label>
                        <div class="col-md-6"><input type="text" name="email" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div> 
                    <div class="row">
                        <label class="col-md-3">Phone No.</label>
                        <div class="col-md-6"><input type="text" name="phone_no" class="form-control"></div>
                        <div class="clearfix"></div>
                    </div>      
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Save">
                </div> -->
            </form>
        </div>
    </section>
  <!-- /.content-header -->
@endsection