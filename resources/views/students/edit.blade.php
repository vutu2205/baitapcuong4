@extends('layout.app')

@section('content')
<div class="card card-pro p-4">
    <h3 class="h5 mb-4">✏️ Sửa sinh viên</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Họ tên</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Lớp</label>
            <select name="class_id" class="form-select" required>
                @foreach($classes as $c)
                    <option value="{{ $c->id }}" @selected((string) old('class_id', $student->class_id) === (string) $c->id)>
                        {{ $c->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="{{ route('students.index') }}" class="btn btn-outline-secondary ms-2">Quay lại</a>
    </form>
</div>
@endsection
