@extends('layouts.app')
@section('title', "Détails de l'article $id")
@section('content')
<h2> Article numéro {{$id}} <h2>
<p>Ceci est le contenu principal de la page.</p>
@endsection
