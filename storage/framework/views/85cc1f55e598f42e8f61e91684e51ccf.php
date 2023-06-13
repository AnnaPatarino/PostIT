

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
    <div class="container-fluid px-5">
        <a class="navbar-brand corsivo fs-3 fw-bold d-flex align-items-center" href="<?php echo e(route('home')); ?>"><i class="fa-solid me-2 text-warning fa-note-sticky fa-2x"></i> <?php echo e($title ?? 'POST.it'); ?></a>
        <button class="navbar-toggler border border-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa-solid fa-bars text-warning"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('articles.index')); ?>"><?php echo e(__('ui.nav-board')); ?></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(__('ui.nav-cat')); ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                      
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(session('locale') == 'it' || !session('locale') ): ?>

                            <li><a class="dropdown-item" href="<?php echo e(route('categoryShow', compact('category'))); ?>"><?php echo e($category->nameIT); ?></a></li>
                        <?php elseif(session('locale') == 'en'): ?>
                        <li><a class="dropdown-item" href="<?php echo e(route('categoryShow', compact('category'))); ?>"><?php echo e($category->nameEN); ?></a></li>
                        <?php elseif(session('locale') == 'es'): ?>
                        <li><a class="dropdown-item" href="<?php echo e(route('categoryShow', compact('category'))); ?>"><?php echo e($category->nameES); ?></a></li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                </li>
                <?php if(auth()->guard()->guest()): ?>

                    <li class="nav-item"><a class="nav-link" href="/login"><?php echo e(__('ui.nav-work')); ?></a></li>
                    
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    
                
                <?php if(!Auth::user()->is_revisor): ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('revisor.lavoro')); ?>"><?php echo e(__('ui.nav-work')); ?></a></li>
                <?php endif; ?>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
                <?php if(auth()->guard()->guest()): ?>
                    
                    <li class="nav-item fw-bold"><a class="nav-link text-warning" href="/login">Login</a></li>
                    <li class="nav-item fw-bold"><a class="nav-link text-warning" href="/register"><?php echo e(__('ui.nav-register')); ?></a></li>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-warning" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(__('ui.nav-ciao')); ?> <?php echo e(auth()->user()->name); ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <?php if(Auth::user()->is_revisor): ?>
                            <li><a class="dropdown-item" href="<?php echo e(route('admin.console')); ?>">Console</a></li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="<?php echo e(route('articles.create')); ?>"><?php echo e(__('ui.home-insert')); ?></a></li>
                        <?php if( Auth::user()->is_revisor): ?>
                            <li class="d-flex"><a class="dropdown-item" href="<?php echo e(route('revisor.index')); ?>"><?php echo e(__('ui.nav-rev')); ?> <span class="badge rounded-pill bg-danger ms-2"><?php echo e(App\Models\Article::revisionCount()); ?></span></a>
                            </li>
                        <?php endif; ?>
                        <li><hr class="dropdown-divider mt-2"></li>
                        <form action="/logout" method="POST" class="ms-2">
                            <?php echo csrf_field(); ?>
                            <button type="submit" class="btn btn-sm btn-danger mt-2 ms-2">Log Out</button>
                        </form>
                    </ul>
                </li>
                <?php endif; ?>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-bold text-warning" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-earth-europe text-warning"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li> <div class="d-flex align-items-center"> <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components._locale','data' => ['lang' => 'it']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('_locale'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => 'it']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> ITALIANO</div></li>
                        <li> <div class="d-flex align-items-center">  <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components._locale','data' => ['lang' => 'en']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('_locale'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => 'en']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> ENGLISH </div></li>
                        <li><div class="d-flex align-items-center"> <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components._locale','data' => ['lang' => 'es']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('_locale'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => 'es']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?> ESPANOL</div></li>
                    </ul>
                </li>
            </ul>
            <form action="<?php echo e(route('postit.search')); ?>" method="GET" class="d-flex">
                    <input type="search" name="searched" class="form-control me-2" placeholder="<?php echo e(__('ui.nav-what-search')); ?>" aria-label="search">
                    <button type="submit" class="btn btn-outline-warning"><?php echo e(__('ui.nav-search')); ?></button>
            </form>

            
        </div>
    </div>
</nav><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/components/navbar.blade.php ENDPATH**/ ?>