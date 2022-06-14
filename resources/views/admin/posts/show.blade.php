@extends('layouts.app')

@section('content')
    <div class="container">
        <img width="50%" src="{{$post->image}}" alt="$post->title}">
        <h2>{{$post->title}}</h2>
        @if($post->category)
            <span class="badge badge-pill badge-{{$post->Category->color}}">{{$post->Category->label}}</span>
        @else
            nessuna categoria assegnata
        @endif   
        <p>{{$post->content}}</p>
    </div>
@endsection