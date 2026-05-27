@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Edit Student</h2>

    <form action="{{ route('studentsomething.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="fname" class="form-control" value="{{ $student->fname }}">
        </div>

        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="lname" class="form-control" value="{{ $student->lname }}">
        </div>

        <div class="mb-3">
            <label>Middle Name</label>
            <input type="text" name="mname" class="form-control" value="{{ $student->mname }}">
        </div>

        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="add" class="form-control" value="{{ $student->add }}">
        </div>

        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="dobirth" class="form-control" value="{{ $student->dobirth }}">
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>

</div>
@endsection