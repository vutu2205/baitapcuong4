@extends('layout.app')

@section('content')

<div class="card card-pro p-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h3 class="h5 mb-0">👥 Danh sách sinh viên</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('classes.index') }}" class="btn btn-primary btn-sm">📖 Danh sách lớp</a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive rounded-3 border bg-white shadow-sm">
        <table class="table table-bordered table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th class="text-nowrap">ID</th>
                    <th>Họ tên</th>
                    <th>Lớp</th>
                    <th class="text-nowrap" style="min-width: 160px;">Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse($students as $s)
                    <tr>
                        <td>{{ $s->id }}</td>
                        <td>{{ $s->name }}</td>
                        <td>
                            @if($s->classRoom)
                                {{ $s->classRoom->name }}
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-1">
                                <a href="{{ route('students.edit', $s->id) }}"
                                   class="btn btn-warning btn-sm text-dark">Sửa</a>
                                <a href="{{ route('students.delete', $s->id) }}"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn có chắc muốn xóa sinh viên này?')">Xóa</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Chưa có sinh viên nào. Thêm sinh viên tại
                            <a href="{{ route('classes.index') }}">danh sách lớp</a> (nút <strong>Thêm HS</strong> theo từng lớp).
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
