<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h2>Bienvenue sur la page d’accueil</h2>
        <p>Ceci est le contenu principal de la page.</p>
        @endsection
       <h3> Bienvenue sur le site de {{ $name }} </h3>
    </body>
</html>
