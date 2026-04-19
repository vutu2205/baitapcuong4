@extends('layout.app')

@section('content')

<div class="row justify-content-center mt-5">
<div class="col-md-5">

<div class="card card-pro p-4">

<h3 class="text-center mb-3">📝 Đăng ký tài khoản</h3>

<form method="POST" action="/register">
@csrf

<div class="mb-3">
    <label>Họ tên</label>
    <input type="text" name="name" class="form-control" placeholder="Nhập họ tên">
    <small>Tên đầy đủ của bạn</small>
</div>

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Nhập email">
    <small>Email phải chưa tồn tại</small>
</div>

<div class="mb-3">
    <label>Mật khẩu</label>
    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
    <small>Nên từ 6 ký tự trở lên</small>
</div>

<button class="btn btn-success w-100">Đăng ký</button>

</form>

<div class="text-center mt-3">
    <a href="/login">Đã có tài khoản?</a>
</div>

</div>

</div>
</div>

@endsection