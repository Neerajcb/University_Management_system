@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $student ? 'Edit Student' : 'Add New Student' }}</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ $student ? route('students.update', $student) : route('students.store') }}">
                        @csrf
                        @if($student)
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label for="student_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="student_name" name="student_name" value="{{ old('student_name', $student->student_name ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" class="form-control" id="class" name="class" value="{{ old('class', $student->class ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="class_teacher_id" class="form-label">Class Teacher</label>
                            <select class="form-select" id="class_teacher_id" name="class_teacher_id" required>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ (old('class_teacher_id', $student->class_teacher_id ?? '') == $teacher->id) ? 'selected' : '' }}>
                                        {{ $teacher->teacher_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="admission_date" class="form-label">Admission Date</label>
                            <input type="date" class="form-control" id="admission_date" name="admission_date" value="{{ old('admission_date', $student->admission_date ?? '') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="yearly_fees" class="form-label">Yearly Fees</label>
                            <input type="number" class="form-control" id="yearly_fees" name="yearly_fees" value="{{ old('yearly_fees', $student->yearly_fees ?? '') }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ $student ? 'Update Student' : 'Add Student' }}</button>
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a> 
                        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back to List</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
