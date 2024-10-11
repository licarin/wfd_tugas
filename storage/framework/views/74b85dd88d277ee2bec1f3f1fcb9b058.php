

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
        <h1 class="mb-4">Edit Event: <?php echo e($masterEvent->title); ?></h1>

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

        <!-- Form for editing the event -->
        <form action="<?php echo e(route('masterEvents.update', $masterEvent->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <div class="row">
                <!-- Title -->
                <div class="form-group col-md-6">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="<?php echo e($masterEvent->title); ?>" placeholder="Event Title" required>
                </div>

                <!-- Venue -->
                <div class="form-group col-md-6">
                    <label for="venue">Venue:</label>
                    <input type="text" name="venue" class="form-control" value="<?php echo e($masterEvent->venue); ?>" placeholder="Event Venue" required>
                </div>
            </div>

            <div class="row">
                <!-- Date -->
                <div class="form-group col-md-6">
                    <label for="date">Date:</label>
                    <input type="date" name="date" class="form-control" value="<?php echo e($masterEvent->date); ?>" required>
                </div>

                <!-- Start Time -->
                <div class="form-group col-md-6">
                    <label for="start_time">Start Time:</label>
                    <input type="time" name="start_time" class="form-control" value="<?php echo e($masterEvent->start_time); ?>" required>
                </div>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" class="form-control" rows="4" placeholder="Event Description" required><?php echo e($masterEvent->description); ?></textarea>
            </div>

            <div class="row">
                <!-- Booking URL -->
                <div class="form-group col-md-6">
                    <label for="booking_url">Booking URL:</label>
                    <input type="url" name="booking_url" class="form-control" value="<?php echo e($masterEvent->booking_url); ?>" placeholder="http://example.com">
                </div>

                <!-- Tags -->
                <div class="form-group col-md-6">
                    <label for="tags">Tags:</label>
                    <input type="text" name="tags" class="form-control" value="<?php echo e($masterEvent->tags); ?>" placeholder="Tags (comma separated)" required>
                </div>
            </div>

            <div class="row">
                <!-- Organizer -->
                <div class="form-group col-md-6">
                    <label for="organizer_id">Organizer:</label>
                    <select name="organizer_id" class="form-control" required>
    <?php $__currentLoopData = $organizers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organizer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($organizer->id); ?>" <?php echo e($organizer->id == $masterEvent->organizer_id ? 'selected' : ''); ?>>
            <?php echo e($organizer->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>

<!-- Category Dropdown -->
<select name="category_id" class="form-control" required>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $masterEvent->category_id ? 'selected' : ''); ?>>
            <?php echo e($category->name); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
                </div>
            </div>

            <!-- Active Checkbox -->
            <div class="form-group form-check">
                <input type="checkbox" name="active" class="form-check-input" <?php echo e($masterEvent->active ? 'checked' : ''); ?>>
                <label class="form-check-label" for="active">Active</label>
            </div>

            <!-- Buttons -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update Event</button>
                <a href="<?php echo e(route('masterEvents.show', $masterEvent)); ?>" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
</body>
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/masterEvents/edit.blade.php ENDPATH**/ ?>