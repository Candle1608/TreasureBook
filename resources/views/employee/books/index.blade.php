@extends('layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0 text-dark">Books</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('employee.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Books</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <p>
                <a href="{{ route('books.create') }}" class="btn btn-primary">Add New Book</a>
            </p>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ISBN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Publisher</th>
                    <th>Category</th>
                    <th>Year</th>
                    <th>Picture</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                </tr>
                @foreach($books as $bk)
                <tr>
                    <td>{{ $bk->book_ISBN }}</td>
                    <td>{{ $bk->book_title }}</td>
                    <td>{{ $bk->book_author }}</td>
                    <td>{{ $bk->book_publisher }}</td>
                    <td>{{ $bk->book_category }}</td>
                    <td>{{ $bk->book_picture }}</td>
                    <td>{{ $bk->book_publisher }}</td>
                    <td>{{ $bk->book_category }}</td>
                    <td>{{ $bk->book_quantity }}</td>
                    <td><a href="{{ route('books.edit', $bk->id) }}" class="btn btn-info">Edit</a>
                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
                        <form action="{{ route('books.destroy', $employee->id) }}" method="post">
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