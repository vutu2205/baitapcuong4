<?php $__env->startSection('content'); ?>

<div class="card card-pro p-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h3 class="h5 mb-0">👥 Danh sách sinh viên</h3>
        <div class="d-flex flex-wrap gap-2">
            <a href="<?php echo e(route('classes.index')); ?>" class="btn btn-primary btn-sm">📖 Danh sách lớp</a>
        </div>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

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
                <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($s->id); ?></td>
                        <td><?php echo e($s->name); ?></td>
                        <td>
                            <?php if($s->classRoom): ?>
                                <?php echo e($s->classRoom->name); ?>

                            <?php else: ?>
                                <span class="text-muted">—</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-1">
                                <a href="<?php echo e(route('students.edit', $s->id)); ?>"
                                   class="btn btn-warning btn-sm text-dark">Sửa</a>
                                <a href="<?php echo e(route('students.delete', $s->id)); ?>"
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Bạn có chắc muốn xóa sinh viên này?')">Xóa</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            Chưa có sinh viên nào. Thêm sinh viên tại
                            <a href="<?php echo e(route('classes.index')); ?>">danh sách lớp</a> (nút <strong>Thêm HS</strong> theo từng lớp).
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/students/index.blade.php ENDPATH**/ ?>