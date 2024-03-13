<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>CodeWithRonny</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-success bg-opacity-10">

    <div class="container">
        <h1>CodeWithRonny</h1>
        <div class="card" style="width: 70rem; height: 35rem">
          
          <div class="card-body">
            <div id="carouselExampleCaptions" class="carousel slide">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div class="carousel-item <?php if( $loop->iteration == 1): ?> active <?php endif; ?>" id="myCarousel">
                      <img src="<?php echo e($slider->image); ?>" class="d-block w-100" alt="..." height="520rem">
                      <div class="carousel-caption d-none d-md-block">
                        <h6><?php echo e($slider->title); ?></h6>
                        <p><?php echo e($slider->tagline); ?></p>
                        <a href="<?php echo e($slider->url); ?>" class="btn btn-primary">Read More</a>
                      </div>
                    </div>
                    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
              </div>
              <button class="carousel-control-prev text-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon  text-primary" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next  text-primary" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon  text-primary" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            
          </div>
        </div>
    
    
</div>
<script type="text/javascript">
    $(document).ready(function () {
      $('#myCarousel').find('.item').first().addClass('active');
    });
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH /home/ronny/workspace/php/laravel/slider/resources/views/welcome.blade.php ENDPATH**/ ?>