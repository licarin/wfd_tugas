

<?php $__env->startSection('title', 'Event Detail'); ?> <!-- Set the title specific to this page -->

<?php $__env->startSection('content'); ?> <!-- Start the content section -->
<div class="container mt-5">
    <h1 class="mb-4"><?php echo e($masterEvent->title); ?></h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Venue: <?php echo e($masterEvent->venue); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Date: <?php echo e(\Carbon\Carbon::parse($masterEvent->date)->format('d M Y')); ?></h6>
            <p class="card-text"><strong>Start Time:</strong> <?php echo e($masterEvent->start_time); ?></p>
            <p class="card-text"><strong>Description:</strong> <?php echo e($masterEvent->description); ?></p>
            <p class="card-text"><strong>Booking URL:</strong> <a href="<?php echo e($masterEvent->booking_url); ?>"><?php echo e($masterEvent->booking_url); ?></a></p>
            <p class="card-text"><strong>Tags:</strong> <?php echo e($masterEvent->tags); ?></p>
            <p class="card-text"><strong>Organizer:</strong> <?php echo e($masterEvent->organizer ? $masterEvent->organizer->name : 'Organizer not found'); ?></p>
            <p class="card-text"><strong>Category:</strong> <?php echo e($masterEvent->category ? $masterEvent->category->name : 'Category not found'); ?></p>
            <p class="card-text"><strong>Status:</strong> <?php echo e($masterEvent->active ? 'Active' : 'Inactive'); ?></p>
        </div>
    </div>

    <div class="mt-4">
        <a href="<?php echo e(route('masterEvents.edit', $masterEvent)); ?>" class="btn btn-warning">Edit Event</a>
        <a href="<?php echo e(route('masterEvents.index')); ?>" class="btn btn-secondary">Back to Events</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/masterEvents/show.blade.php ENDPATH**/ ?>