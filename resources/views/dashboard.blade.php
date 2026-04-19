@extends('layout.app')

@section('content')

<div class="card card-pro p-4 mb-4">
    <h2 class="h4 mb-2">🎉 Đăng nhập thành công</h2>
    <p class="text-muted mb-3">Chào mừng bạn đến hệ thống quản lý sinh viên.</p>
    <div class="d-flex flex-wrap gap-2">
        <a href="{{ url('/classes/create') }}" class="btn btn-primary btn-sm">+ Thêm lớp</a>
        <a href="{{ url('/subjects/create') }}" class="btn btn-primary btn-sm">+ Môn học</a>
        <a href="{{ url('/student-subject/create') }}" class="btn btn-primary btn-sm">+ Đăng ký môn học</a>
        <a href="{{ url('/classes') }}" class="btn btn-outline-secondary btn-sm">Trang danh sách lớp</a>
        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary btn-sm">Danh sách sinh viên</a>
    </div>
</div>

<div class="card card-pro p-4">
    <h3 class="mb-4 h5">📚 Danh sách lớp học</h3>
    @include('class.partials.class-table')
</div>

@endsection