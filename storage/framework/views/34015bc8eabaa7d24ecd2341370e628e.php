<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
  
  <div class="mt-5">
    <h1 class=" text-center fw-semibold border-bottom border-warning"><?php echo e(__('ui.all-dettails')); ?></h1>
  </div>
  
  <div class="pb-5 mb-5" style="height: 100vh">
    
    <div class="container my-5">
      <div class="row d-flex justify-content-around align-items-center px-0">
        
        
        
        <div class="col-lg-6 col-md-6 col-sm-12 pe-5">
          <div id="carouselExampleIndicators" class="carousel slide">
            
            <?php if(!$article->images->isEmpty()): ?>
              <div class="carousel-inner">
                <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">
                  <div class="d-flex justify-content-center align-items-center">
                    <img src="<?php echo e($image->getUrl(300, 300)); ?>" alt="" class="w-75 img-fluid mx-auto   bg-light">

                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            
            <?php else: ?>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="d-flex justify-content-center align-items-center">
                  <img src="<?php echo e(asset('image\not-found.jpg')); ?>" class="d-block w-75" alt="...">
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
        
        
        
        <div class="col-lg-6 col-md-6 col-sm-12 content-card ">
          <div class="card-big-shadow">
            <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
              <div class="content">
                <h2 class="corsivo fw-bold text-dark display-3"><?php echo e($article->title); ?></h2>
                <h2 class="badge bg-warning text-dark text-wrap rounded-pill mb-2 fs-5">
                  <?php if(session('locale') == 'it' || session('locale') == NULL): ?>
                  <?php echo e($article->category->nameIT); ?>

                  <?php elseif(session('locale') == 'en'): ?>
                  <?php echo e($article->category->nameEN); ?>

                  <?php elseif(session('locale') == 'es'): ?>
                  <?php echo e($article->category->nameES); ?>

                  <?php endif; ?>
                </h2>
                <h5 class="mt-3 fw-light text-dark"><?php echo e($article->description); ?></h5>
                <h6 class="fs-3 lh-lg fw-semibold text-dark"><?php echo e($article->price); ?> €</h6>
                <div class="border-top border-secondary">
                  <p class="fw-normal fst-italic d-inline text-dark"><?php echo e(__('ui.created-by')); ?> </p><p class="fs-5 lh-lg fw-semibold d-inline text-dark"><?php echo e($article->user->name); ?> </p> <br>
                  <p class="fw-normal fst-italic d-inline text-dark"><?php echo e(__('ui.card-create')); ?> </p><p class="fs-5 lh-lg fw-semibold d-inline text-dark"><?php echo e($article->created_at->format('d/m/Y H:i')); ?></p>
                  
                </div>
                <div class="mt-3 text-center border-top border-secondary text-dark pt-4">
                  <?php if($article->view == 1): ?>
                    <h5 class="fw-normal fst-italic d-inline"><?php echo e(__('ui.first-user')); ?></h5>
                  <?php else: ?>
                    <h5 class="fw-normal fst-italic d-inline"><?php echo e(__('ui.nb-user')); ?><span class="fw-bold"><?php echo e($article->view); ?></span><?php echo e(__('ui.nb-user-2')); ?></h5>
                  <?php endif; ?>
        
                </div>
                <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->is_revisor): ?>
                <form action="<?php echo e(route('revisor.nullable',['article' => $article])); ?>" method="POST" class="mt-4">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('PATCH'); ?>
                  <button  type="submit" class="btn btn-danger p-1"><?php echo e(__('ui.card-revision')); ?></button>
                </form>
                <?php endif; ?>
                <?php endif; ?>
              </div>
            </div> <!-- end card -->
          </div>
        </div>
        
        
        
        
        
        
        
        
        
      </div>
      
    </div>
  </div>
  
  
  
  
  
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/articles/show.blade.php ENDPATH**/ ?>