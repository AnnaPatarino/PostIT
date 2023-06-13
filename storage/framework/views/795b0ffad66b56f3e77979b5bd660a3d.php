<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder border-bottom border-warning"><?php echo e(__('ui.bacheca-title')); ?></h2>
                    <p class="lead fw-normal text-muted mb-5"><?php echo e(__('ui.category-message')); ?>    
                        <?php if(session('locale') == 'it' || !session('locale') ): ?>
                        <?php echo e($category->nameIT); ?>

                    <?php elseif(session('locale') == 'en'): ?>
                        <?php echo e($category->nameEN); ?>

                    <?php elseif(session('locale') == 'es'): ?>
                        <?php echo e($category->nameES); ?>

                    <?php endif; ?></p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            
            <?php $__empty_1 = true; $__currentLoopData = $category->articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php if($article->is_accepted): ?>
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
                <?php else: ?>
                    <div class="col-12">
                        <p class="h1 text-center"><?php echo e(__('ui.category-empty-message')); ?>

                            <?php if(session('locale') == 'it' || !session('locale') ): ?>
                            <?php echo e($category->nameIT); ?>

                        <?php elseif(session('locale') == 'en'): ?>
                            <?php echo e($category->nameEN); ?>

                        <?php elseif(session('locale') == 'es'): ?>
                            <?php echo e($category->nameES); ?>

                        <?php endif; ?></p>
                        <p class="h2 text-center"> <a href="<?php echo e(route('articles.create')); ?>"></a>!</p>
                    </div>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <div class="col-12">
                    <p class="h1 text-center"><?php echo e(__('ui.nocategory')); ?>

                        <?php if(session('locale') == 'it' || !session('locale') ): ?>
                        <?php echo e($category->nameIT); ?>

                    <?php elseif(session('locale') == 'en'): ?>
                        <?php echo e($category->nameEN); ?>

                    <?php elseif(session('locale') == 'es'): ?>
                        <?php echo e($category->nameES); ?>

                    <?php endif; ?></p>
                    <p class="h2 text-center"><?php echo e(__('ui.publicfirst')); ?> <a href="<?php echo e(route('articles.create')); ?>"> POSTit</a>!</p>
                </div>
            <?php endif; ?>
            
        </div>
    </div>
</section>    




 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/categoryShow.blade.php ENDPATH**/ ?>