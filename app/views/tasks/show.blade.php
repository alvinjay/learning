@extends('layouts.master')

@section('content')

<h1 id="title" class="header">{{ $task->title }}</h1>

<article id="body" class="container">{{ $task->body }}</article>

<h4 id="status" class="label">Status: 
    @if ($task->completed)
        Completed
    @else
        To do
    @endif
</h4>

{{ link_to('/tasks', 'Go back') }}

@stop