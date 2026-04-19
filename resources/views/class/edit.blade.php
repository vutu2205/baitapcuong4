@extends('layout.app')

@section('content')

<div class="card card-pro p-4">

<h3>✏️ Sửa lớp học</h3>

<form method="POST" action="/classes/update/{{$class->id}}">
@csrf

<div class="mb-3">
<label>Tên lớp</label>
<input name="name" value="{{$class->name}}" class="form-control">
</div>

<div class="mb-3">
<label>Giáo viên</label>
<input name="teacher" value="{{$class->teacher}}" class="form-control">
</div>

<div class="mb-3">
<label>Số sinh viên</label>
<input name="students" value="{{$class->students}}" class="form-control">
</div>

<button class="btn btn-primary">Cập nhật</button>

</form>

</div>

@endsection