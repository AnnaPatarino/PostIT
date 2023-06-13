<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

  
  <div class="background-page py-5">
    
    
    
    
      <?php if($to_check): ?>
       <h1 class="text-center fw-semibold mt-3"><?php echo e(__('ui.POSTit-revisionare')); ?></h1>
      <?php else: ?>
        <h1 class="text-center fw-semibold mt-3"><?php echo e(__('ui.no-POSTit')); ?></h1>
      <?php endif; ?>
      
      
    
    <?php if($to_check): ?>
    
          
    <div class="container mt-5 ">
      <div class="row">
        <?php if (isset($component)) { $__componentOriginal7b0974eef90702e81393ad9c4326ee31 = $component; } ?>
<?php $component = App\View\Components\Success::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Success::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7b0974eef90702e81393ad9c4326ee31)): ?>
<?php $component = $__componentOriginal7b0974eef90702e81393ad9c4326ee31; ?>
<?php unset($__componentOriginal7b0974eef90702e81393ad9c4326ee31); ?>
<?php endif; ?>
        
        <div class="col-12 col-lg-6 mt-1">
          <div class="row">

            <div id="carouselExampleIndicators" class="carousel slide">
              
              <?php if(!$to_check->images->isEmpty()): ?>
                <div class="carousel-inner">
                  <?php $__currentLoopData = $to_check->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>  ">
                      <div class="d-flex justify-content-center align-items-center">
                        <img src="<?php echo e($image->getUrl(300, 300)); ?>" alt="" class="w-50 img-fluid mx-auto">
  
                      </div>
                      <div class="row d-flex justify-content-between pt-3 border-top border-secondary">
                        <div class="col-6">
                          <div class="card-body">
                            <h5 class="tc-accent fw-bold"><?php echo e(__('ui.rev-title')); ?></h5>
                            <p><?php echo e(__('ui.rev-ad')); ?><span class="<?php echo e($image->adult); ?>"></span></p>
                            <p><?php echo e(__('ui.rev-sat')); ?><span class="<?php echo e($image->spoof); ?>"></span></p>
                            <p><?php echo e(__('ui.rev-med')); ?><span class="<?php echo e($image->medical); ?>"></span></p>
                            <p><?php echo e(__('ui.rev-vio')); ?><span class="<?php echo e($image->violence); ?>"></span></p>
                            <p><?php echo e(__('ui.rev-amm')); ?><span class="<?php echo e($image->racy); ?>"></span></p>
                          </div>
                        </div>
  
                        <div class="col-6">
                          <h5 class="tc-accent fw-bold">Tags</h5>
                          <div class="p-2">
                            <?php if($image->labels): ?>
                              <?php $__currentLoopData = $image->labels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p class="d-inline"><?php echo e($label); ?></p>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>


                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
  
              <?php else: ?>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center align-items-center">
                  <img src="<?php echo e(asset('image\not-found.jpg')); ?>" class="d-block w-50" alt="...">
                </div>
                </div>
              
              </div>
  
                <?php endif; ?>
  
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

        </div>

        
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-around border-start border-secondary">
             
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.an-title')); ?>: </p><p class="fs-1 fw-semibold d-inline"><?php echo e($to_check->title); ?></p>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.an-cat')); ?>: </p><p class="fs-3 d-inline">
            <?php if(session('locale') == 'it'  || session('locale') == NULL): ?>
            <?php echo e($to_check->category->nameIT); ?></p> <br>
            <?php elseif(session('locale') == 'en'): ?>
            <?php echo e($to_check->category->nameEN); ?></p> <br>
            <?php elseif(session('locale') == 'es'): ?>
            <?php echo e($to_check->category->nameES); ?></p> <br>
            <?php endif; ?>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.an-text')); ?>: </p><p class="fs-4 d-inline"><?php echo e($to_check->description); ?> </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.an-price')); ?>: </p><p class="fs-3 d-inline"><?php echo e($to_check->price); ?>€ </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.card-auth')); ?> </p><p class="fs-3 d-inline"><?php echo e($to_check->user->name); ?> </p> <br>
          </div>
          <div>
            <p class="fw-normal fst-italic d-inline fw-semibold"><?php echo e(__('ui.card-create')); ?>: </p><p class="fs-3 d-inline"><?php echo e($to_check->created_at->format('d/m/Y H:i')); ?></p>
          </div>

        </div>
        <div class="col-12 col-lg-12 d-flex justify-content-center align-items-center my-5">
          <form action="<?php echo e(route('revisor.accept',['article' => $to_check])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            
            <button  type="submit" class="btn btn-success me-3"><?php echo e(__('ui.btn-YES')); ?></button>
          </form>
          
          <form action="<?php echo e(route('revisor.reject',['article' => $to_check])); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            
            <button type="submit" class="btn btn-danger"><?php echo e(__('ui.btn-NO')); ?></button>
          </form>
          
        </div>
        
      </div>
      
      
    </div>
    <?php endif; ?>
  </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/revisor/index.blade.php ENDPATH**/ ?>