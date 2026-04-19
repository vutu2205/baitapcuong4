

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-4">

    
    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
            <i class="fas fa-check-circle mr-2"></i> <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show mb-4 border-0 shadow-sm" role="alert">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <div class="row">
        
        <div class="col-lg-6">
            
            <div class="card shadow-sm border-0 mb-4" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="mb-4 d-flex align-items-center font-weight-bold">
                        <span class="mr-2 text-primary"><i class="fas fa-university"></i></span> 
                        Thêm lớp học mới
                    </h5>
                    <form method="POST" action="<?php echo e(route('classes.store')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Tên lớp học</label>
                            <input name="name" class="form-control bg-light border-0" placeholder="VD: CNTT1" value="<?php echo e(old('name')); ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Giáo viên phụ trách</label>
                            <input name="teacher" class="form-control bg-light border-0" placeholder="VD: Nguyễn Văn A" value="<?php echo e(old('teacher')); ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Sĩ số dự kiến</label>
                            <input name="students" type="number" class="form-control bg-light border-0" placeholder="VD: 30" value="<?php echo e(old('students')); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block shadow-sm font-weight-bold">Lưu lớp học</button>
                    </form>
                </div>
            </div>

            
            <div class="card shadow-sm border-0 mb-4" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="mb-4 d-flex align-items-center font-weight-bold">
                        <span class="mr-2" style="color: #6f42c1;"><i class="fas fa-book"></i></span> 
                        Thêm môn học mới
                    </h5>
                    <form action="<?php echo e(route('subjects.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col-md-5">
                                <label class="small font-weight-bold">Tên môn</label>
                                <input name="name" class="form-control bg-light border-0" placeholder="VD: PHP Laravel" required>
                            </div>
                            <div class="col-md-3">
                                <label class="small font-weight-bold">Số tín chỉ</label>
                                <input name="credits" type="number" min="1" class="form-control bg-light border-0" value="3" required>
                            </div>
                            <div class="col-md-4">
                                <label class="small font-weight-bold">Mã môn</label>
                                <input name="subject_code" class="form-control bg-light border-0" placeholder="IT101">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-purple text-white btn-block mt-3 shadow-sm font-weight-bold" style="background-color: #6f42c1;">Lưu môn học</button>
                    </form>
                </div>
            </div>
        </div>

        
        <div class="col-lg-6">
            <div class="card shadow-sm border-0 h-100" style="border-radius: 15px;">
                <div class="card-body p-4">
                    <h5 class="mb-4 d-flex align-items-center font-weight-bold">
                        <span class="mr-2 text-success"><i class="fas fa-user-graduate"></i></span> 
                        Tiếp nhận học sinh
                    </h5>
                    <form action="<?php echo e(route('students.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="form-group mb-3">
                            <label class="small font-weight-bold">Họ và tên sinh viên</label>
                            <input type="text" name="name" class="form-control bg-light border-0" placeholder="Nhập đầy đủ họ tên" required>
                        </div>

                        <div class="form-group mb-4">
                            <label class="small font-weight-bold">Phân vào lớp</label>
                            <select name="class_id" class="form-control bg-light border-0" required>
                                <option value="">-- Chọn lớp học --</option>
                                
                                <?php if(isset($classes) && $classes->count() > 0): ?>
                                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <option value="" disabled>Chưa có lớp học nào</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success btn-block shadow-sm font-weight-bold">Lưu thông tin học sinh</button>
                    </form>
                    
                    <div class="mt-4 p-3 bg-light" style="border-radius: 10px;">
                        <p class="small text-muted mb-0">
                            <i class="fas fa-info-circle mr-1"></i> 
                            Lưu ý: Kiểm tra kỹ thông tin trước khi lưu. Hệ thống sẽ tự động cấp mã ID cho học sinh mới.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\baitapgiuaki\baitapgiuaki\qlsv\resources\views/class/create.blade.php ENDPATH**/ ?>