<div>
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
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 col-md-10 mx-auto">
                <form wire:submit.prevent="store">
                    
                    <div class="row g-3">
                        
                        <div class="col-12">
                            <label for="title" class="fw-bold"><?php echo e(__('ui.an-title')); ?></label><br>
                            <input wire:model.lazy="title" type="text" class="form-control">
                            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="small text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="col-12">
                            <label for="price" class="fw-bold"><?php echo e(__('ui.an-price')); ?></label><br>
                            <input wire:model.lazy="price" type="text" class="form-control">
                            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="small text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="col-12">
                            <label for="category_id" class="fw-bold"><?php echo e(__('ui.an-cat')); ?></label><br>
                            <select wire:model.lazy="category_id" class="form-select" aria-label="Default select example">
                                <option selected><?php echo e(__('ui.bacheca-category')); ?></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(session('locale') == 'it' || !session('locale')): ?>
                                    <option  value="<?php echo e($category->id); ?>" ><?php echo e($category->nameIT); ?></option>
                                    <?php elseif(session('locale') == 'en'): ?>
                                    <option  value="<?php echo e($category->id); ?>" ><?php echo e($category->nameEN); ?></option>
                                    <?php elseif(session('locale') == 'es'): ?>
                                    <option  value="<?php echo e($category->id); ?>" ><?php echo e($category->nameES); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="small text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        
                        <div class="col-12">
                            <label for="description" class="fw-bold"><?php echo e(__('ui.an-text')); ?></label><br>
                            <textarea wire:model.lazy="description" type="text" class="form-control"></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="small text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        </div>

                       
                        <div class="col-12">
                            <label for="images" class="fw-bold"><?php echo e(__('ui.an-img')); ?></label><br>
                            <input wire:model="temporary_images" type="file" multiple name="images" class="form-control
                            <?php $__errorArgs = ['temporary_images.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="IMG">
                            <?php $__errorArgs = ['temporary_images.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="small text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div> 
                            <?php if(!empty($images)): ?>

                            <div class="row">
                                <div class="col-12">
                                    <p><?php echo e(__('ui.an-img-prew')); ?></p>
                                    <div class="row border border-4 border-warning rounded py-4">
                                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col my-3">
                                                <div class="img-preview mx-auto rounded d-flex">
                                                    <img src="<?php echo e($image->temporaryUrl()); ?>" alt="" class="align-items-center img-fluid border border-2 border-secondary">
                                                </div>
                                                <button type="button" class="btn btn-danger d-block text-center mt-3 mx-auto" wire:click="removeImage(<?php echo e($key); ?>)">Rimuovi</button>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                                
                            </div>
                            <?php endif; ?>

                        
                        <div class="col-12">
                            <button class="btn btn-warning text-dark" type="submit"><?php echo e(__('ui.an-btn-publish')); ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/livewire/create-article.blade.php ENDPATH**/ ?>