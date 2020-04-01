@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Customers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Customers</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
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
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->cust_name }}</td>
                    <td>{{ $customer->cust_ic_no }}</td>
                    <td>{{ $customer->cust_address }}</td>
                    <td>{{ $customer->cust_email }}</td>
                    <td>{{ $customer->cust_phone }}</td>
                    <td><a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
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