<div>
    <form action="<?php echo e(route('setLocale',$lang)); ?>" method="POST" class="d-inline">
    <?php echo csrf_field(); ?>
    <button class="btn" type="submit">
        <img src="<?php echo e(asset('vendor/blade-flags/language-'. $lang . '.svg')); ?>" width="32" height="32" />
    </button>
    </form>
</div><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/components/_locale.blade.php ENDPATH**/ ?>