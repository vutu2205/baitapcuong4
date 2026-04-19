@extends('layout.app')

@section('content')
<div class="card card-pro p-4">
    <h4 class="mb-4">Thêm môn học</h4>
    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên môn học</label>
            <input type="text" name="name" class="form-control" placeholder="VD: Cơ sở dữ liệu" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Số tín chỉ</label>
            <input type="number" name="credits" class="form-control" min="1" value="3" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mã môn học</label>
            <input type="text" name="subject_code" class="form-control" placeholder="VD: IT101">
        </div>
        <button type="submit" class="btn btn-success">Lưu môn học</button>
        <a href="{{ route('classes.index') }}" class="btn btn-outline-secondary ms-2">Quay lại</a>
    </form>
</div>
@endsection
