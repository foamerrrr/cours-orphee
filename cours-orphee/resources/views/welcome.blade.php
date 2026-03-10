@extends('layouts.app')
@section('title', "Bienvenue")
@section('content')
<h2> Bienvenue sur le site de {{ $name }} </h2>
@foreach($articles as $article)
<x-article 
    :title="$article['title']" 
    :description="$article['description']" 
/>
@endforeach
@endsection