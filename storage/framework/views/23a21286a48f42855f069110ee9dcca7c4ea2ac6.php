<?php $__env->startSection('content'); ?>
<div class="card card-pro p-4">
    <h3 class="mb-4">Danh sách môn học</h3>
    <p><a href="<?php echo e(route('subjects.create')); ?>" class="btn btn-primary">+ Thêm môn</a>
        <a href="<?php echo e(route('classes.index')); ?>" class="btn btn-outline-secondary">Về danh sách lớp</a></p>

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
            <?php $__empty_1 = true; $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($s->id); ?></td>
                    <td><?php echo e($s->name); ?></td>
                    <td><?php echo e($s->credits); ?></td>
                    <td><?php echo e($s->subject_code ?? '—'); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center text-muted">Chưa có môn học.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/subjects/index.blade.php ENDPATH**/ ?>