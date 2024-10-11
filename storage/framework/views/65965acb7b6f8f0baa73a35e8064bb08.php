<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($event->title); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .event-header {
            margin-bottom: 20px;
        }
        .event-image {
            width: 100%;
            height: auto;
        }
        .tags {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="event-header">
            <h1><?php echo e($event->title); ?></h1>
            <img src="<?php echo e(asset('images/' . $event->image)); ?>" class="event-image" alt="<?php echo e($event->title); ?>">
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Organizer</h5>
                <p><?php echo e($event->organizer->name); ?></p>
            </div>
            <div class="col-md-6">
                <h5>Booking URL</h5>
                <p><a href="<?php echo e($event->booking_url); ?>"><?php echo e($event->booking_url); ?></a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Date and Time</h5>
                <p><?php echo e(\Carbon\Carbon::parse($event->date)->format('D, M d Y - h:i A')); ?></p>
            </div>
            <div class="col-md-6">
                <h5>Location</h5>
                <p><?php echo e($event->venue); ?></p>
            </div>
        </div>

        <h5>About This Event</h5>
        <p><?php echo e($event->description); ?></p>

        <h5>Tags</h5>
        <p>
            <?php if($event->tags): ?>
                <?php $__currentLoopData = explode(',', $event->tags); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="badge badge-info"><?php echo e(trim($tag)); ?></span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <span>No tags available</span>
            <?php endif; ?>
        </p>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/events/show.blade.php ENDPATH**/ ?>