<?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="container my-5">
        
        <div>
            <h1 class="mx-5 border-bottom border-warning text-center"><?php echo e(__('ui.new-postit')); ?></h1>
        </div>

        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-article', [])->html();
} elseif ($_instance->childHasBeenRendered('HNIemq3')) {
    $componentId = $_instance->getRenderedChildComponentId('HNIemq3');
    $componentTag = $_instance->getRenderedChildComponentTagName('HNIemq3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HNIemq3');
} else {
    $response = \Livewire\Livewire::mount('create-article', []);
    $html = $response->html();
    $_instance->logRenderedChild('HNIemq3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>


    </div>



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/articles/create.blade.php ENDPATH**/ ?>