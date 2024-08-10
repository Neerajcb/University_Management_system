@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Add New Student</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('students.store') }}">
                        @csrf

                        <!-- Student Name -->
                        <div class="form-group mb-3">
                            <label for="student_name" class="form-label">Student Name</label>
                            <input type="text" class="form-control @error('student_name') is-invalid @enderror" id="student_name" name="student_name" value="{{ old('student_name') }}" placeholder="Enter student name" required>
                            @error('student_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Class -->
                        <div class="form-group mb-3">
                            <label for="class" class="form-label">Class</label>
                            <input type="text" class="form-control @error('class') is-invalid @enderror" id="class" name="class" value="{{ old('class') }}" placeholder="Enter class" required>
                            @error('class')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Class Teacher -->
                        <div class="form-group mb-3">
                            <label for="class_teacher_id" class="form-label">Class Teacher</label>
                            <select class="form-select @error('class_teacher_id') is-invalid @enderror" id="class_teacher_id" name="class_teacher_id" required>
                                <option value="">Select a teacher</option>
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}" {{ old('class_teacher_id') == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->teacher_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('class_teacher_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Admission Date -->
                        <div class="form-group mb-3">
                            <label for="admission_date" class="form-label">Admission Date</label>
                            <input type="date" class="form-control @error('admission_date') is-invalid @enderror" id="admission_date" name="admission_date" value="{{ old('admission_date') }}" required>
                            @error('admission_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Yearly Fees -->
                        <div class="form-group mb-3">
                            <label for="yearly_fees" class="form-label">Yearly Fees</label>
                            <input type="number" class="form-control @error('yearly_fees') is-invalid @enderror" id="yearly_fees" name="yearly_fees" value="{{ old('yearly_fees') }}" placeholder="Enter yearly fees" required>
                            @error('yearly_fees')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit and Cancel Buttons -->
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-success">Add Student</button>
                            <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
