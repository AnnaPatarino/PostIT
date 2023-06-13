<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST.it</title>
</head>
<body>
    <div>
        <h1>Un utente ha richiesto di lavorare con noi</h1>
        <h2>I suoi dati sono:</h2>
        <p>Nome: <?php echo e($user->name); ?></p>
        <p>Mail: <?php echo e($user->email); ?></p>
        <p>Per renderlo revisore:</p>
        <a href="<?php echo e(route('make.revisor', compact('user'))); ?>" class="btn btn-success">Rendi Revisore</a>
    </div>
    
</body>
</html><?php /**PATH C:\Users\Anna\aulab-esercizi\ProgettoFinale\PRESTO.it_G-01\resources\views/mail/become_revisor.blade.php ENDPATH**/ ?>