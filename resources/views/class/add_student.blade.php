@extends('layout.app')

@section('content')
<div class="card card-pro p-4">
    <h3 class="mb-3">Thêm học sinh vào lớp</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Tên học sinh</label>
            <input type="text" name="name" class="form-control" placeholder="Nhập tên học sinh" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Lớp</label>
            <select name="class_id" class="form-select" required>
                @foreach($classes as $c)
                    <option value="{{ $c->id }}" @selected((string)$c->id === (string)$class_id)>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
        <a href="{{ route('classes.index') }}" class="btn btn-outline-secondary ms-2">Quay lại</a>
    </form>
</div>
@endsection
