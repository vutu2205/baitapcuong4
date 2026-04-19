

<?php $__env->startSection('content'); ?>

<div class="row justify-content-center mt-5">
<div class="col-md-5">

<div class="card card-pro p-4">

<h3 class="text-center mb-3">🔐 Đăng nhập</h3>

<?php if(session('error')): ?>
<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
<?php endif; ?>

<form method="POST" action="/login">
<?php echo csrf_field(); ?>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/auth/login.blade.php ENDPATH**/ ?>