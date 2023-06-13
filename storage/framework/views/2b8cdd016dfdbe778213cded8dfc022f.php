<div class="col-lg-4 my-5">
    <?php
        $random = rand(1, 8);
    ?>

    <div class="card h-100 postit border-0" 
    <?php if($random == 1): ?>
    data-color="blue" 
    <?php elseif($random == 2): ?>
    data-color="green" 
    <?php elseif($random == 3): ?>
    data-color="brown" 
    <?php elseif($random == 4): ?>
    data-color="purple" 
    <?php elseif($random == 5): ?>
    data-color="orange" 
    <?php else: ?>
    data-color="yellow" 
    <?php endif; ?>
    >

        <div class="d-flex justify-content-center align-items-center">
            <img class="rounded card-img-top p-2 m-2 img-fluid" src="<?php echo e(!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(300, 300) : asset('image\not-found.jpg')); ?>" alt="..." />

        </div>
        <div class="card-body p-4">
            <div class="badge bg-warning text-dark bg-gradient rounded-pill mb-2"><?php echo e($article->category->name); ?></div>
            <h5 class="card-title mb-3 corsivo fs-2"><?php echo e($article->title); ?></h5>
            <h5 class="card-title mt-2 mb-3">€ <?php echo e($article->price); ?></h5>
            <a href="<?php echo e(route('articles.show', $article)); ?>" class="me-3 text-decoration-none text-dark"><i class="fa-solid fa-eye fa-bounce animazione text-dark me-1" ></i> <?php echo e(__('ui.card-look')); ?></a>

        </div>
        <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
            <div class="d-flex align-items-end justify-content-between">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-user me-3 text-dark fs-4"></i>
                    <div class="small">
                        <div class="fw-bold"><?php echo e($article->user->name); ?></div>
                        <div class="text-muted"><?php echo e(__('ui.card-create')); ?> <?php echo e($article->created_at->format('d/m/Y H:i')); ?></div>
                    </div>
                </div>
            </div>
            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->is_revisor): ?>
                    <form action="<?php echo e(route('revisor.nullable',['article' => $article])); ?>" method="POST" class="mt-2">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                        <button  type="submit" class="btn btn-danger p-1"><?php echo e(__('ui.card-revision')); ?></button>
                    </form>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/components/card.blade.php ENDPATH**/ ?>