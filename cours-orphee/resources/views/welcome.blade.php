@extends('layouts.app')
@section('title', "Bienvenue")
@section('content')
<h2> Bienvenue sur le site de {{ $name }} </h2>
@foreach($articles as $article)
    @if($loop->last)
        @break
    @endif
<a href="/articles/{{ $article->id }}">
<x-article 
    :title="$article->title" 
    :description="$article->description" 
/>
@endforeach
@endsection