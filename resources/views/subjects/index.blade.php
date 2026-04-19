@extends('layout.app')

@section('content')
<div class="card card-pro p-4">
    <h3 class="mb-4">Danh sách môn học</h3>
    <p><a href="{{ route('subjects.create') }}" class="btn btn-primary">+ Thêm môn</a>
        <a href="{{ route('classes.index') }}" class="btn btn-outline-secondary">Về danh sách lớp</a></p>

    <table class="table table-bordered table-hover align-middle">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên môn</th>
                <th>Tín chỉ</th>
                <th>Mã môn</th>
            </tr>
        </thead>
        <tbody>
            @forelse($subjects as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->name }}</td>
                    <td>{{ $s->credits }}</td>
                    <td>{{ $s->subject_code ?? '—' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Chưa có môn học.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
