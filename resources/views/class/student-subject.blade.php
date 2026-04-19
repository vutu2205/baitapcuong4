@extends('layout.app')

@section('content')
<div class="card card-pro p-4">
    <h4 class="mb-4">Đăng ký môn học cho sinh viên</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('student-subject.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Sinh viên</label>
            <select name="student_id" class="form-select" required>
                <option value="">— Chọn sinh viên —</option>
                @foreach($students as $st)
                    <option value="{{ $st->id }}">{{ $st->name }} @if($st->classRoom) ({{ $st->classRoom->name }}) @endif</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Môn học</label>
            <select name="subject_id" class="form-select" required>
                <option value="">— Chọn môn —</option>
                @foreach($subjects as $sub)
                    <option value="{{ $sub->id }}">{{ $sub->name }} ({{ $sub->credits }} TC)</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Lưu đăng ký</button>
        <a href="{{ route('classes.index') }}" class="btn btn-outline-secondary ms-2">Quay lại</a>
    </form>
</div>
@endsection
