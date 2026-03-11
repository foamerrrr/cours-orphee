@extends('layouts.app')
@section('title', "Détails de l'article $article->id")
@section('content')
<h2> Article numéro {{$article->id}} <h2>
<x-article 
    :title="$article->title" 
    :description="$article->description" 
/>
@endsection
