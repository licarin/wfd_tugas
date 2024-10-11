


<?php $__env->startSection('title', 'Events'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .organizer-header {
            margin-bottom: 20px;
        }
        .organizer-header h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        .organizer-header h5 {
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .organizer-header p {
            margin: 0;
        }
        .about-section {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="organizer-header">
            <h1><?php echo e($organizer->name); ?></h1>
            <a href="<?php echo e(route('organizer.edit', $organizer->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('organizer.destroy', $organizer->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
            <h5>Facebook</h5>
            <p><?php echo e($organizer->facebook_link); ?></p>
            <h5>X</h5>
            <p><?php echo e($organizer->x_link); ?></p>
            <h5>Website</h5>
            <p><?php echo e($organizer->website_link); ?></p>
        </div>

        <div class="about-section">
            <h5>About</h5>
            <p><?php echo e($organizer->description); ?></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/organizer/show.blade.php ENDPATH**/ ?>