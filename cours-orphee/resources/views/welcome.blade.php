@extends('layouts.app')
@section('title', "Bienvenue")
@section('content')
@php
use Illuminate\Support\Str;
@endphp
<h2> Bienvenue sur le site de {{ $name }} </h2>
@foreach($articles as $article)
    @if($loop->last)
        @break
    @endif
<a href="{{route('articles', $article->id)}}">
    <x-article 
        :title="$article->title" 
        :description="Str::limit($article->description, 30)" 
    />
</a>
@endforeach
@endsection