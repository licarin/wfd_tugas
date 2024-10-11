

<?php $__env->startSection('title', 'Events'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Event</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Edit Organizer: <?php echo e($organizer->name); ?></h1>

        <!-- Error handling -->
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('organizer.update', $organizer->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="<?php echo e($organizer->name); ?>" required>
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea name="description" class="form-control"><?php echo e($organizer->description); ?></textarea>
    </div>

    <div class="form-group">
        <label for="facebook_link">Facebook Link:</label>
        <input type="url" name="facebook_link" class="form-control" value="<?php echo e($organizer->facebook_link); ?>">
    </div>

    <div class="form-group">
        <label for="x_link">X Link:</label>
        <input type="url" name="x_link" class="form-control" value="<?php echo e($organizer->x_link); ?>">
    </div>

    <div class="form-group">
        <label for="website_link">Website Link:</label>
        <input type="url" name="website_link" class="form-control" value="<?php echo e($organizer->website_link); ?>">
    </div>

    <div class="form-group">
        <label for="active">Active:</label>
        <input type="hidden" name="active" value="0">
        <input type="checkbox" name="active" value="1" checked> 
    </div>

    <button type="submit" class="btn btn-primary">Update Organizer</button>
    <a href="<?php echo e(route('organizer.store', $organizer->id)); ?>" class="btn btn-secondary">Cancel</a>
</form>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/organizer/edit.blade.php ENDPATH**/ ?>