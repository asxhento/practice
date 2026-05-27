@extends('layouts.app')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Students Information') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <a href="{{ route('studentsomething.create') }}" class="btn btn-primary mb-3">Add Student</a>
            <div class="row">
                <div class="col-lg-12">

                    <div class="alert alert-info">
                        This is the table for the students
                    </div>

                    <div class="card">
                        <div class="card-body p-0">

                            <table class="table">
                                <thead>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Middle Name</th>
                                        <th>Address</th>
                                        <th>Date of Birth</th>
                                    </tr>
                                 @foreach($student as $items)
                                    <tr>
                                        <td>{{ $items->id }}</td>
                                        <td>{{ $items->fname }}</td>
                                        <td>{{ $items->lname }}</td>
                                        <td>{{ $items->mname }}</td>
                                        <td>{{ $items->add }}</td>
                                        <td>{{ $items->dobirth }}</td>
                                        <td>  <!-- DELETE BUTTON -->
        <form action="{{ route('studentsomething.destroy', $items->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('Are you sure you want to delete this student?')">
                Delete
            </button>
        </form></td>
        <td> <!-- EDIT BUTTON -->
    <a href="{{ route('studentsomething.edit', $items->id) }}"
       class="btn btn-primary btn-sm">
        Edit
    </a> </td>
                                    </tr>
                                    
                                 @endforeach

                                </tbody>
                               
                            </table>
                            
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
