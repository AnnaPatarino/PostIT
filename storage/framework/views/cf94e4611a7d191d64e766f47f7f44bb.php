<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto">
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
                    <h1 class="mb-4 fw-semibold"><?php echo e(__('ui.work-title')); ?></h1>
                    <h3><?php echo e(__('ui.work-data')); ?></h3>
                    <ul>
                        <li class="fs-3"><?php echo e(auth()->user()->name); ?></li>
                        <li class="fs-3"><?php echo e(auth()->user()->email); ?></li>
                    </ul>
                    <h3 class="mt-3 text-center"><?php echo e(__('ui.work-confirm')); ?></h3>
                    <div class="d-flex justify-content-center mt-2">
                        <form action="<?php echo e(route('become.revisor')); ?>">
                            <button type="submit" class="btn btn-warning text-dark"><?php echo e(__('ui.work-btn')); ?></button>
                        </form>

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
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/revisor/lavoraconnoi.blade.php ENDPATH**/ ?>