

<?php $__env->startSection('title', 'Events'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Events</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    

    <div class="container mt-5">
        <h1>Events</h1>
        <a href="<?php echo e(route('masterEvents.create')); ?>" class="btn btn-primary">Create</a>
        <table id="masterEventsTable" class="display">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Event Name</th>
                    <th>Date</th>
                    <th>Location</th>
                    <th>Organizer</th>
                    <th>About</th>
                    <th>Tags</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $masterEvents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $masterEvent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($masterEvent->id); ?></td>
                    <td><?php echo e($masterEvent->title); ?></td>
                    <td><?php echo e($masterEvent->date); ?></td>
                    <td><?php echo e($masterEvent->venue); ?></td>
                    <td><?php echo e($masterEvent->organizer->name); ?></td>

                    <td><?php echo e($masterEvent->description); ?></td>
                    <td><?php echo e(implode(', ', array: explode(',', $masterEvent->tags))); ?></td>
                    <td>
                        <a href="<?php echo e(route('masterEvents.edit', $masterEvent->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('masterEvents.destroy', $masterEvent->id)); ?>" method="POST" style="display:inline;">
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
            $('#masterEventsTable').DataTable();
        });
    </script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/masterEvents/index.blade.php ENDPATH**/ ?>