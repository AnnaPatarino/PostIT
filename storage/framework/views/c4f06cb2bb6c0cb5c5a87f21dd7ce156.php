<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

        <main class="flex-shrink-0">
            <!-- Navigation-->
            
            <!-- Header-->
            <header class=" py-5 img-sfondo ">
                <div class="container px-5 ">
                    <div class="row gx-5 align-items-start justify-content-start mt-5">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5  text-xl-start">
                                <h1 data-aos="slide-right" data-aos-duration="600" class="display-2 fw-bolder corsivo mb-2"><?php echo e(__('ui.inserisciPOSTit')); ?></h1>
                                <p data-aos="slide-right" data-aos-duration="700" data-aos-once="true" class="lead fw-bold mb-4"><?php echo e(__('ui.home-subtitle')); ?></p>
                                <div data-aos="slide-right" data-aos-duration="800" data-aos-once="true" class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-warning btn-lg px-4 me-sm-3" href="<?php echo e(route ('articles.index')); ?>"><?php echo e(__('ui.nav-board')); ?></a>
                                    <?php if(auth()->guard()->guest()): ?>
                                        <a class="btn btn-dark btn-lg px-4 text-warning" href="/login"><?php echo e(__('ui.home-log')); ?></a>
                                    <?php else: ?>
                                        <a class="btn btn-dark btn-lg px-4 text-warning" href="<?php echo e(route ('articles.create')); ?>"><?php echo e(__('ui.home-insert')); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </header>
            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.denied','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('denied'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
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
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h2 class="fw-bolder mb-0 ps-3"><?php echo e(__('ui.home-call')); ?></h2>
                            <img src="<?php echo e(asset('.\image\postit-4543989_1280.png')); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-8 ps-3">
                            <div data-aos="slide-left" data-aos-duration="700"  class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-bolt-lightning fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold"><?php echo e(__('ui.home-free-title')); ?></h2>
                                    <p class="mb-0"><?php echo e(__('ui.home-free-sub')); ?></p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-magnifying-glass fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold"><?php echo e(__('ui.home-easy-title')); ?> </h2>
                                    <p class="mb-0"><?php echo e(__('ui.home-easy-sub')); ?></p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-box-archive fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold"><?php echo e(__('ui.home-infinite-title')); ?></h2>
                                    <p class="mb-0"><?php echo e(__('ui.home-infinite-sub')); ?></p>
                                </div>
                                <div class="col h-100">
                                    <div class="badge text-wrap feature bg-warning bg-gradient text-white rounded-3 mb-3"><i class="m-3 fa-solid fa-leaf fa-2xl" style="color: #000000;"></i></div>
                                    <h2 class="h5 fw-bold"><?php echo e(__('ui.home-planet-title')); ?></h2>
                                    <p class="mb-0"><?php echo e(__('ui.home-planet-sub')); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Blog preview section-->
            <section class="pt-2 pb-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-semibold border-bottom border-warning "><?php echo e(__('ui.home-last-title')); ?></h2>
                                <p class="lead fw-normal text-muted mb-5"><?php echo e(__('ui.home-last-sub')); ?> <a class="text-warning fw-semibold" href="<?php echo e(route('articles.index')); ?>"><?php echo e(__('ui.nav-board')); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        
                        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['article' => $article]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['article' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
                    </div>
                    <!-- Call to action-->
                    
                </div>
            </section>
        </main>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/welcome.blade.php ENDPATH**/ ?>