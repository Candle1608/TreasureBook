@section('js')
    <script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })


var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('submit').disabled = false;
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('submit').disabled = true;
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
    </script>
@stop
@extends('layouts.admin')
@section('content')

 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
            <h1 class="m-1 text-dark">Add Employees</h1>
            </div><!-- /.col -->
            <div class="col-md-12 ">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Employees</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <form method="post" action="{{ route('employees.store')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                            <label for="emp_name">Name</label>
                            <div class="col-md-8">
                                <input name="emp_name" type="text" class="form-control" id="emp_name" aria-describedby="titleHelp" autocomplete="off" placeholder="Enter Name" value={{ old('emp_name') }} >
                                <small id="nameHelp" class="form-text text-muted">Enter full name.</small>
                            </div>

                            </div>
                        </div>
                        
                        @error('emp_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_ic_no">IC No.</label>
                                <div class="col-md-8">
                                    <input name="emp_ic_no" type="number" class="form-control" id="emp_ic_no" minlength="12" maxlength="12" aria-describedby="ic_noHelp" autocomplete="off" placeholder="Enter IC No." value={{ old('emp_ic_no') }}>
                                    <small id="ic_noHelp" class="form-text text-muted">Enter ic number.</small>
                                </div>
                                
                            </div>
                        </div>
                        
                        @error('emp_ic_no')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_picture">Picture</label>
                                <div class="col-md-8">
                                    <img class="product" width="200" height="200" />
                                    <input name="emp_picture" type="file" class="uploads form-control" id="emp_picture" style="margin-top: 20px;" aria-describedby="pictureHelp" value={{ old('emp_picture') }}>
                                </div>
                                <small id="pictureHelp" class="form-text text-muted">Enter image.</small>
                            </div>
                        </div>

                        @error('emp_picture')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_address">Address</label>
                                <div class="col-md-8">
                                    <input name="emp_address" type="text" class="form-control" id="emp_address" aria-describedby="addressHelp" autocomplete="off" placeholder="Enter Address." value={{ old('emp_address') }}>
                                    <small id="addressHelp" class="form-text text-muted">Enter address.</small>
                                </div>
                                
                            </div>
                        </div>
                        
                        @error('emp_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_email">Email</label>
                                <div class="col-md-8">
                                    <input name="emp_email" type="text" class="form-control" id="emp_email" aria-describedby="emailHelp" autocomplete="off" placeholder="Enter Email" value={{ old('emp_email') }}>
                                    <small id="emailHelp" class="form-text text-muted">Enter email.</small>
                                </div>
                                
                            </div>
                        </div>
                        
                        @error('emp_email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_phone">Phone No.</label>
                                <div class="col-md-8">
                                    <input name="emp_phone" type="number" class="form-control" id="emp_phone" minlength="10" maxlength="11" autocomplete="off" aria-describedby="phoneHelp" size="50" placeholder="Enter Phone No." value={{ old('emp_phone') }} >
                                    <small id="phoneHelp" class="form-text text-muted">Enter phone number.</small>
                                </div>
                                
                            </div>
                        </div>
                        
                        @error('emp_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="emp_password">Password</label>
                                <div class="col-md-8">
                                    <input name="emp_password" type="password" class="form-control" id="emp_password" aria-describedby="passwordHelp" autocomplete="off" placeholder="Enter Password"}}>
                                    <small id="passwordHelp" class="form-text text-muted">Enter password.</small>
                                </div>
                                
                            </div>
                        </div>
                        
                        @error('emp_password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-8 col-sm-9 col-lg-7 ml-md-3">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                <div class="col-md-8">
                                    <input id="confirm_password" type="password" onkeyup="check()" aria-describedby="password2Help" class="form-control" placeholder="Enter Confirm Password" name="password_confirmation" required>
                                    <span id='message'></span>
                                    <small id="password2Help" class="form-text text-muted">Enter confirm password.</small>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <div class="row ml-md-3">                            
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>

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