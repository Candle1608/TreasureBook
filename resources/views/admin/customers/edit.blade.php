@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-1 text-dark">Edit Customers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Customers</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('customers.update', $customer->id)}}">
                @method('PATCH')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                            <label for="cust_name">Name</label>
                            <input name="cust_name" type="text" class="form-control" id="cust_name" aria-describedby="titleHelp" autocomplete="off" placeholder="Enter Name" value={{ old('cust_name') ?? $customer->cust_name }} >
                            <small id="nameHelp" class="form-text text-muted">Enter your full name.</small>
                            </div>
                        </div>
                        
                        @error('cust_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="cust_ic_no">IC No.</label>
                                <input name="cust_ic_no" type="text" class="form-control" id="cust_ic_no" minlength="12" maxlength="12" aria-describedby="ic_noHelp" autocomplete="off" placeholder="Enter IC No." value={{ old('cust_ic_no') ?? $customer->cust_ic_no }}>
                                <small id="ic_noHelp" class="form-text text-muted">Enter your ic number.</small>
                            </div>
                        </div>
                        
                        @error('cust_ic_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="cust_address">Address</label>
                                <input name="cust_address" type="text" class="form-control" id="cust_address" aria-describedby="addressHelp" autocomplete="off" placeholder="Enter Address." value={{ old('cust_address') ?? $customer->cust_address }}>
                                <small id="addressHelp" class="form-text text-muted">Enter your address.</small>
                            </div>
                        </div>
                        
                        @error('cust_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="cust_email">Email</label>
                                <input name="cust_email" type="text" class="form-control" id="cust_email" aria-describedby="emailHelp" autocomplete="off" placeholder="Enter Email" value={{ old('cust_email') ?? $customer->cust_email }}>
                                <small id="emailHelp" class="form-text text-muted">Enter your email.</small>
                            </div>
                        </div>
                        
                        @error('cust_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="cust_phone">Phone No.</label>
                                <input name="cust_phone" type="text" class="form-control" id="cust_phone" minlength="10" maxlength="11" autocomplete="off" aria-describedby="phoneHelp" size="50" placeholder="Enter Phone No." value={{ old('cust_phone') ?? $customer->cust_phone }} >
                                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
                            </div>
                        </div>
                        
                        @error('cust_phone')
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