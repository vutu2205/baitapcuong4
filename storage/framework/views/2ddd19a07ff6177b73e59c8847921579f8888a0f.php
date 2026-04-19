
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
            <?php $__empty_1 = true; $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($c->id); ?></td>
                    <td><?php echo e($c->name); ?></td>
                    <td><?php echo e($c->teacher); ?></td>
                    <td><?php echo e($c->students); ?></td>
                    <td>
                        <div class="d-flex flex-wrap gap-1">
                            <a href="<?php echo e(url('/classes/'.$c->id.'/students/create')); ?>"
                               class="btn btn-info btn-sm text-white">
                                Thêm HS
                            </a>
                            <a href="<?php echo e(url('/classes/edit/'.$c->id)); ?>"
                               class="btn btn-warning btn-sm text-dark">
                                Sửa
                            </a>
                            <a href="<?php echo e(url('/classes/delete/'.$c->id)); ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Bạn có chắc muốn xóa?')">
                                Xóa
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="text-center text-muted py-4">Chưa có lớp học nào. Hãy thêm lớp mới.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/class/partials/class-table.blade.php ENDPATH**/ ?>