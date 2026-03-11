@extends('layouts.app')
@section('title', "Détails de l'article $article->id")
@section('content')
<h2> Article numéro {{$article->id}} - {{ $article->title }} <h2>
<p> {{ $article->description }} </p>
@endsection
