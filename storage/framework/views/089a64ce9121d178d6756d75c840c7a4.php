

<?php $__env->startSection('title', 'Events'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Categories</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    

    <div class="container mt-5">
        <h1>Event Categories</h1>
        <a href="<?php echo e(route('event_categories.create')); ?>" class="btn btn-primary">Create</a>
        <table id="event_categoriesTable" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Event Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $event_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event_categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($event_categorie->id); ?></td>
                    <td><?php echo e($event_categorie->name); ?></td>
                    <td>
                        <!-- <a href="<?php echo e(route('event_categories.show', $event_categorie->id)); ?>" class="btn btn-info">View</a> -->
                        <a href="<?php echo e(route('event_categories.edit', $event_categorie->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('event_categories.destroy', $event_categorie->id)); ?>" method="POST" style="display:inline;">
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

    <script>
        $(document).ready(function() {
            $('#event_categoriesTable').DataTable();
        });
    </script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/event_categories/index.blade.php ENDPATH**/ ?>