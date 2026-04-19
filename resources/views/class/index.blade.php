@extends('layout.app')

@section('content')

<div class="card card-pro p-4">

    <h3 class="mb-4">📚 Danh sách lớp học</h3>

    {{-- Nút chức năng --}}
    <div class="mb-4 d-flex flex-column gap-2">
        <a href="/classes/create" class="btn btn-primary w-100">
            + Thêm lớp
        </a>

        <a href="/subjects/create" class="btn btn-primary w-100">
            + Môn học
        </a>

        <a href="/student-subject/create" class="btn btn-primary w-100">
            + Đăng ký môn học
        </a>

        <a href="{{ route('students.index') }}" class="btn btn-outline-primary w-100">
            👥 Danh sách sinh viên
        </a>
    </div>

    @include('class.partials.class-table')

</div>

@endsection