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
    
    
    
    
    <h1 class="text-center fw-semibold mt-3">Console</h1>
    
    
    
    
    <?php if($allArticles): ?>
    
    
    <div class="container-fluid mt-5 ">
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
        <div class="col-12 mt-1">

          <h2 class="text-center fw-semibold mt-3"><?php echo e(__('ui.art-YES')); ?></h2>
          <div class="accordion container border border-success border-4 p-0 rounded" id="accordionExample">

            <?php $__currentLoopData = $allArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if($article->is_accepted): ?>
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($article->id); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($article->id); ?>">
                      <h2 class="corsivo text-dark">
                        <?php echo e($article->title); ?>

                      </h2>
                    </button>
                  </h2>
                  <div id="collapse<?php echo e($article->id); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      
                      <div class="row">
                        <div class="col-12">
                          <?php if(!$article->images->isEmpty()): ?>
                            <div class="d-flex justify-content-start">
                              <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($image->getUrl(300, 300)); ?>" alt="" class="img-fluid mx-auto">
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          <?php else: ?>
                            <div class="d-flex justify-content-start">
                              <img src="<?php echo e(asset('image\not-found.jpg')); ?>" class="d-block" alt="...">
                            </div>
                          <?php endif; ?>
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          <?php if(session('locale') == 'it' || session('locale') == null): ?>
                            <?php echo e($article->category->nameIT); ?>

                          <?php elseif(session('locale') == 'en'): ?>
                            <?php echo e($article->category->nameEN); ?>

                          <?php elseif(session('locale') == 'es'): ?>
                            <?php echo e($article->category->nameES); ?>

                          <?php endif; ?>
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          <?php echo e($article->price); ?>

                        </h5>
                        <h5 class=" text-dark">
                          <?php echo e($article->description); ?>

                        </h5>
                        <h5 class=" text-dark">
                          view: <?php echo e($article->view); ?>

                        </h5>
                        <h5 class="mt-1 border-top text-dark">
                          <?php if(Auth::user()->is_revisor): ?>
                            <form action="<?php echo e(route('revisor.nullable',['article' => $article])); ?>" method="POST" class="mt-2">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PATCH'); ?>
                              <button  type="submit" class="btn btn-danger p-1"><?php echo e(__('ui.card-revision')); ?></button>
                            </form>
                          <?php endif; ?>
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>

          <h2 class="text-center fw-semibold mt-5"><?php echo e(__('ui.art-NO')); ?></h2>
          <div class="accordion container border border-danger border-4 p-0 rounded" id="accordionExample">

            <?php $__currentLoopData = $allArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if($article->is_accepted === 0): ?>
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($article->id); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($article->id); ?>">
                      <h2 class="corsivo text-dark">
                        <?php echo e($article->title); ?>

                      </h2>
                    </button>
                  </h2>
                  <div id="collapse<?php echo e($article->id); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      
                      <div class="row">
                        <div class="col-12">
                          <?php if(!$article->images->isEmpty()): ?>
                            <div class="d-flex justify-content-start">
                              <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($image->getUrl(300, 300)); ?>" alt="" class="img-fluid mx-auto">
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          <?php else: ?>
                            <div class="d-flex justify-content-start">
                              <img src="<?php echo e(asset('image\not-found.jpg')); ?>" class="d-block" alt="...">
                            </div>
                          <?php endif; ?>
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          <?php if(session('locale') == 'it' || session('locale') == null): ?>
                            <?php echo e($article->category->nameIT); ?>

                          <?php elseif(session('locale') == 'en'): ?>
                            <?php echo e($article->category->nameEN); ?>

                          <?php elseif(session('locale') == 'es'): ?>
                            <?php echo e($article->category->nameES); ?>

                          <?php endif; ?>
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          <?php echo e($article->price); ?>

                        </h5>
                        <h5 class=" text-dark">
                          <?php echo e($article->description); ?>

                        </h5>
                        <h5 class=" text-dark">
                          view: <?php echo e($article->view); ?>

                        </h5>
                        <h5 class="mt-1 border-top text-dark">
                          <?php if(Auth::user()->is_revisor): ?>
                            <form action="<?php echo e(route('revisor.nullable',['article' => $article])); ?>" method="POST" class="mt-2">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PATCH'); ?>
                              <button  type="submit" class="btn btn-danger p-1"><?php echo e(__('ui.card-revision')); ?></button>
                            </form>
                          <?php endif; ?>
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>

          <h2 class="text-center fw-semibold mt-5"><?php echo e(__('ui.art-REV')); ?></h2>
          <div class="accordion container border border-dark border-4 p-0 rounded" id="accordionExample">

            <?php $__currentLoopData = $allArticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if($article->is_accepted === NULL): ?>
              
                <div class="accordion-item mb-2">
                  <h2 class="accordion-header">
                    <button class="accordion-button bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo e($article->id); ?>" aria-expanded="true" aria-controls="collapse<?php echo e($article->id); ?>">
                      <h2 class="corsivo text-dark">
                        <?php echo e($article->title); ?>

                      </h2>
                    </button>
                  </h2>
                  <div id="collapse<?php echo e($article->id); ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      
                      <div class="row">
                        <div class="col-12">
                          <?php if(!$article->images->isEmpty()): ?>
                            <div class="d-flex justify-content-start">
                              <?php $__currentLoopData = $article->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <img src="<?php echo e($image->getUrl(300, 300)); ?>" alt="" class="img-fluid mx-auto">
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                          <?php else: ?>
                            <div class="d-flex justify-content-start">
                              <img src="<?php echo e(asset('image\not-found.jpg')); ?>" class="d-block" alt="...">
                            </div>
                          <?php endif; ?>
                        </div>

                      </div>
                      <div class="col-12">
                        <h5 class="text-dark">
                          cat: 
                          <?php if(session('locale') == 'it' || session('locale') == null): ?>
                            <?php echo e($article->category->nameIT); ?>

                          <?php elseif(session('locale') == 'en'): ?>
                            <?php echo e($article->category->nameEN); ?>

                          <?php elseif(session('locale') == 'es'): ?>
                            <?php echo e($article->category->nameES); ?>

                          <?php endif; ?>
                        </h5>
                        <h5 class=" text-dark">
                          € 
                          <?php echo e($article->price); ?>

                        </h5>
                        <h5 class=" text-dark">
                          <?php echo e($article->description); ?>

                        </h5>
                        <h5 class=" text-dark">
                          view: <?php echo e($article->view); ?>

                        </h5>
                        <h5 class="mt-1 border-top text-dark d-flex">
                          <?php if(Auth::user()->is_revisor): ?>
                            <form action="<?php echo e(route('revisor.accept',['article' => $article])); ?>" method="POST" class="mt-1">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PATCH'); ?>
                              
                              <button  type="submit" class="btn btn-success me-3"><?php echo e(__('ui.btn-YES')); ?></button>
                            </form>
                          
                            <form action="<?php echo e(route('revisor.reject',['article' => $article])); ?>" method="POST" class="mt-1">
                              <?php echo csrf_field(); ?>
                              <?php echo method_field('PATCH'); ?>
                              
                              <button type="submit" class="btn btn-danger"><?php echo e(__('ui.btn-NO')); ?></button>
                            </form>
                          <?php endif; ?>
                        </h5>
                      </div>

                    </div>
                  </div>
                  
                </div>

              <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
          

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
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/revisor/admin.blade.php ENDPATH**/ ?>