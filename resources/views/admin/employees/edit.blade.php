@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-1 text-dark">Edit Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ Route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Employees</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('admin.employees.update', $employee->id)}}">
                @method('PATCH')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                            <label for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="titleHelp" autocomplete="off" placeholder="Enter Name" value={{ old('name') ?? $employee->name }} >
                            <small id="nameHelp" class="form-text text-muted">Enter your full name.</small>
                            </div>
                        </div>
                        
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="ic_no">IC No.</label>
                                <input name="ic_no" type="text" class="form-control" id="ic_no" minlength="12" maxlength="12" aria-describedby="ic_noHelp" autocomplete="off" placeholder="Enter IC No." value={{ old('ic_no') ?? $employee->ic_no }}>
                                <small id="ic_noHelp" class="form-text text-muted">Enter your ic number.</small>
                            </div>
                        </div>
                        
                        @error('ic_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp" autocomplete="off" placeholder="Enter Address." value={{ old('address') ?? $employee->address }}>
                                <small id="addressHelp" class="form-text text-muted">Enter your address.</small>
                            </div>
                        </div>
                        
                        @error('address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="email">Email</label>
                                <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off" placeholder="Enter Email" value={{ old('email') ?? $employee->email }}>
                                <small id="emailHelp" class="form-text text-muted">Enter your email.</small>
                            </div>
                        </div>
                        
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="phone">Phone No.</label>
                                <input name="phone" type="text" class="form-control" id="phone" minlength="10" maxlength="11" autocomplete="off" aria-describedby="phoneHelp" size="50" placeholder="Enter Phone No." value={{ old('phone') ?? $employee->phone }} >
                                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
                            </div>
                        </div>
                        
                        @error('phone')
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