@extends('layouts.app')
 
@section('content')
<div class="container">

	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ URL::to('app/papers') }}">Paper Alert</a>
		</div>
		<ul class="nav navbar-nav">
			<li><a href="{{ URL::to('app/papers') }}">View All Papers</a></li>
			<li><a href="{{ URL::to('app/papers/create') }}">Register a Paper</a>
		</ul>
	</nav> 
	
	<h1>Showing {{ $paper->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $paper->name }}</h2>
        <p>			
			<strong>Name:</strong>{{$paper->name}}<br>
			<strong>Type of primary study:</strong>{{$paper->paperType}}<br>
			<strong>Technique:</strong>{{$paper->technique}}<br>
			<strong>Development phase:</strong>{{$paper->phase}}<br>
			<strong>Objective:</strong>{{$paper->objective}}<br>
			<strong>Database origin:</strong>{{$paper->origin}}<br>
			<strong>Environment:</strong>{{$paper->environment}}<br>
			<strong>Research Type:</strong>{{$paper->researchType}}<br>
			<strong>Reference:</strong>{{$paper->reference}}
        </p>
    </div>

<br>
	
</div>
@stop