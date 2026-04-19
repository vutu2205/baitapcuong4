@extends('layout.app')

@section('content')

<div class="row justify-content-center mt-5">
<div class="col-md-5">

<div class="card card-pro p-4">

<h3 class="text-center mb-3">🔐 Đăng nhập</h3>

@if(session('error'))
<div class="alert alert-danger">{{session('error')}}</div>
@endif

<form method="POST" action="/login">
@csrf

<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn">
    <small>Email dùng để đăng nhập hệ thống</small>
</div>

<div class="mb-3">
    <label>Mật khẩu</label>
    <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu">
    <small>Mật khẩu phải chính xác để đăng nhập</small>
</div>

<button class="btn btn-primary w-100">Đăng nhập</button>

</form>

<div class="text-center mt-3">
    <a href="/register">Chưa có tài khoản? Đăng ký</a>
</div>

</div>

</div>
</div>

@endsection