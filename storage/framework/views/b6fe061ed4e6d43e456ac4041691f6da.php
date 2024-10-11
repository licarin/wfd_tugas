<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizers</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>


<?php $__env->startSection('title', 'Events'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
    <div class="container mt-5">
        <h1>Organizers</h1>
        <a href="<?php echo e(route('organizer.create')); ?>" class="btn btn-primary">Create</a>
        <table id="organizersTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>About</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $organizers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organizer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($organizer->id); ?></td>
                    <td><?php echo e($organizer->name); ?></td>
                    <td><?php echo e($organizer->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('organizer.show', $organizer->id)); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo e(route('organizer.edit', $organizer->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('organizer.destroy', $organizer->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#organizersTable').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?> <!-- End the content section -->
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/organizer/index.blade.php ENDPATH**/ ?>