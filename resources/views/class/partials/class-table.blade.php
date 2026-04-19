{{-- Bảng: ID | Tên lớp | Giáo viên | Sinh viên | Hành động (Thêm HS / Sửa / Xóa) --}}
<div class="table-responsive rounded-3 border bg-white shadow-sm">
    <table class="table table-bordered table-hover align-middle mb-0">
        <thead class="table-light">
            <tr>
                <th class="text-nowrap">ID</th>
                <th>Tên lớp</th>
                <th>Giáo viên</th>
                <th>Sinh viên</th>
                <th class="text-nowrap" style="min-width: 220px;">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @forelse($classes as $c)
                <tr>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->teacher }}</td>
                    <td>{{ $c->students }}</td>
                    <td>
                        <div class="d-flex flex-wrap gap-1">
                            <a href="{{ url('/classes/'.$c->id.'/students/create') }}"
                               class="btn btn-info btn-sm text-white">
                                Thêm HS
                            </a>
                            <a href="{{ url('/classes/edit/'.$c->id) }}"
                               class="btn btn-warning btn-sm text-dark">
                                Sửa
                            </a>
                            <a href="{{ url('/classes/delete/'.$c->id) }}"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Bạn có chắc muốn xóa?')">
                                Xóa
                            </a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">Chưa có lớp học nào. Hãy thêm lớp mới.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
