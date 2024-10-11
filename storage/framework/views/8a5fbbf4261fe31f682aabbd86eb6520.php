<!-- resources/views/events/index.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- Additional items can be added here if needed -->
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Master Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo e(url('/organizer')); ?>">Organizers</a>
              <a class="dropdown-item" href="<?php echo e(url('/masterEvents')); ?>">Events</a>
              <a class="dropdown-item" href="<?php echo e(url('/event_categories')); ?>">Event Categories</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('/events')); ?>">Events</a>
          </li>
        </ul>
      </div>        
    </nav>
    <div class="container mt-5">
      <h1>Events in Surabaya</h1>

      <?php if($events->isEmpty()): ?>
        <p>No events found!</p>
      <?php else: ?>
        <div class="row">
          <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
            <a href="<?php echo e(route('events.show', $event->id)); ?>" class="text-decoration-none">
            <div class="card">
                <!-- Placeholder for event image, replace '...' with actual image URL -->
                <img src="<?php echo e(asset('/img.png')); ?>" class="card-img-top" alt="Event Image">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($event->title); ?></h5>
                  <p class="card-text"><?php echo e($event->description); ?></p>
                  <p class="card-text"><small class="text-muted">Venue:  <?php echo e($event->venue); ?></small></p>
                  <p class="card-text"><small class="text-muted">Date: <?php echo e($event->date); ?></small></p>
                  <p class="card-text"><small class="text-muted">Organizer: <?php echo e($event->organizer->name); ?></small></p>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      <?php endif; ?>
    </div>
  </body>
</html>
<?php /**PATH C:\laragon\www\wfd_tugas1\laravel\resources\views/events/index.blade.php ENDPATH**/ ?>