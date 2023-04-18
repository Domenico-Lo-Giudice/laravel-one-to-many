@extends('layouts.app')

@section('title', $project->title)

@section('content')
<section class="clearfix">
    <h2 class="text-muted text-secondary my-5"> {{ $project->slug }} </h2>

    <figure>
        <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->slug }}" width="300" class="float-start me-3 mb-1" >
    </figure>
    
    <p>{{ $project->text }}</p>
</section>
<a href="{{ route('admin.projects.index') }}" class="btn btn-primary my-5"> Torna alla lista </a>

@endsection 