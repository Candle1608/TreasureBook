@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-1 text-dark">Add Books</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Books</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('books.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                            <label for="book_title">Title</label>
                            <input name="book_title" type="text" class="form-control" id="book_title" aria-describedby="titleHelp" autocomplete="off" placeholder="Enter Book Title" value={{ old('book_title') }} >
                            <small id="titleHelp" class="form-text text-muted">Enter the book title.</small>
                            </div>
                        </div>
                        
                        @error('book_title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="book_author">Author</label>
                                <input name="book_author" type="text" class="form-control" id="book_author"  aria-describedby="authoeHelp" autocomplete="off" placeholder="Enter Author Name" value={{ old('book_author') }}>
                                <small id="authorHelp" class="form-text text-muted">Enter the author name.</small>
                            </div>
                        </div>
                        
                        @error('book_author')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_address">Publisher</label>
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
                                <label for="emp_email">Category</label>
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
                                <label for="emp_password">Year</label>
                                <input name="emp_password" type="number" class="form-control" id="emp_password" aria-describedby="passwordHelp" autocomplete="off" placeholder="Enter Password" value={{ old('emp_password') }}>
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
                                <label for="emp_phone">Picture</label>
                                <input name="emp_phone" type="text" class="form-control" id="emp_phone" minlength="10" maxlength="11" autocomplete="off" aria-describedby="phoneHelp" size="50" placeholder="Enter Phone No." value={{ old('emp_phone') }} >
                                <small id="phoneHelp" class="form-text text-muted">Enter your phone number.</small>
                            </div>
                        </div>
                        
                        @error('emp_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7">
                                <label for="emp_email">Description</label>
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
                                <label for="emp_password">Price</label>
                                <input name="emp_password" type="number" class="form-control" id="emp_password" aria-describedby="passwordHelp" autocomplete="off" placeholder="Enter Password" value={{ old('emp_password') }}>
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
                                <label for="emp_phone">Quantity</label>
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