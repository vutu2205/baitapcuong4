

<?php $__env->startSection('content'); ?>

<div class="card card-pro p-4">

    <h3 class="mb-4">📚 Danh sách lớp học</h3>

    
    <div class="mb-4 d-flex flex-column gap-2">
        <a href="/classes/create" class="btn btn-primary w-100">
            + Thêm lớp
        </a>

        <a href="/subjects/create" class="btn btn-primary w-100">
            + Môn học
        </a>

        <a href="/student-subject/create" class="btn btn-primary w-100">
            + Đăng ký môn học
        </a>

        <a href="<?php echo e(route('students.index')); ?>" class="btn btn-outline-primary w-100">
            👥 Danh sách sinh viên
        </a>
    </div>

    <?php echo $__env->make('class.partials.class-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/class/index.blade.php ENDPATH**/ ?>