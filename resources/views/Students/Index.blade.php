@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Student CRUD </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}" title="Add a student"> <i class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>No</th>
        <th>Student Name</th>
        <th>Parent Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Age</th>
        <th>Date Created</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($students as $student)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $student->student_name }}</td>
        <td>{{ $student->parent_name }}</td>
        <td>{{ $student->gender }}</td>
        <td>{{ $student->address }}</td>
        <td>{{ $student->age }}</td>
        <td>{{ date_format($student->created_at, 'jS M Y') }}</td>
        <td>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">

                <a href="{{ route('students.show', $student->id) }}" title="show">
                    <i class="fas fa-eye text-success  fa-lg"></i>
                </a>

                <a href="{{ route('students.edit', $student->id) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>

                @csrf
                @method('DELETE')

                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>

                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $students->links() !!}

@endsection