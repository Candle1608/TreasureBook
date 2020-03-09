@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Employees</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Employees</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <p>
                <a href="{{ route('admin.employees.create') }}" class="btn btn-primary">Add New Employee</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>IC No.</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th>Action</th>
                </tr>
                @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->id }}</td>
                    <td>{{ $employee->emp_name }}</td>
                    <td>{{ $employee->emp_ic_no }}</td>
                    <td>{{ $employee->emp_address }}</td>
                    <td>{{ $employee->emp_email }}</td>
                    <td>{{ $employee->emp_phone }}</td>
                    <td><a href="{{ route('admin.employees.edit', $employee->id) }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="{{ route('admin.employees.destroy', $employee->id) }}" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </section>
  <!-- /.content-header -->
@endsection