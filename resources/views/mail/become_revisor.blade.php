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
        <p>Nome: {{ $user->name }}</p>
        <p>Mail: {{ $user->email }}</p>
        <p>Per renderlo revisore:</p>
        <a href="{{ route('make.revisor', compact('user')) }}" class="btn btn-success">Rendi Revisore</a>
    </div>
    
</body>
</html>