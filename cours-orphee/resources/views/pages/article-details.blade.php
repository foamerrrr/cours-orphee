<!DOCTYPE html>
<html>
<head>
    <title>erreur 404</title>
</head>
<body>
    @extends('layouts.app')
    @section('title', 'Accueil')
    @section('content')
    <h2> article n'{{$id}} <h2>
    <p>Ceci est le contenu principal de la page.</p>
    @endsection
</body>
</html>