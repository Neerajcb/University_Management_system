@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>Student Details</h2>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Name:</strong> {{ $student->student_name }}
                    </div>
                    <div class="mb-3">
                        <strong>Class:</strong> {{ $student->class }}
                    </div>
                    <div class="mb-3">
                        <strong>Teacher:</strong> {{ $student->teacher->teacher_name }}
                    </div>
                    <div class="mb-3">
                        <strong>Admission Date:</strong> {{ $student->admission_date}}
                    </div>
                    <div class="mb-3">
                        <strong>Yearly Fees:</strong> {{ $student->yearly_fees }}
                    </div>
                    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
