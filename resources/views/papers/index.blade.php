@extends('layouts.app')
 
@section('content')
<div class="container">
<table class="table table-striped table-bordered"> 
	<h1>List of Papers</h1>
	<thead>
        <tr>
            <td>Name</td>
            <td>Type of primary study</td>
            <td>Technique</td>
            <td>Development phase</td>
			<td>Objective</td>
			<td>Database origin</td>
			<td>Environment</td>
			<td>Research Type</td>
			<td>Reference</td>
			<td>Actions</td>
        </tr>
    </thead>
    <tbody>
		@foreach ($papers as $paper)
		<tr>
			<td>{{$paper->name}}</td>
			<td>{{$paper->paperType}}</td>
			<td>{{$paper->technique}}</td>
			<td>{{$paper->phase}}</td>
			<td>{{$paper->objective}}</td>
			<td>{{$paper->origin}}</td>
			<td>{{$paper->environment}}</td>
			<td>{{$paper->researchType}}</td>
			<td>{{$paper->reference}}</td>
			
			<td>
				<!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'papers/' . $paper->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
			
				<!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('papers/' . $paper->id) }}">Show</a>
				
                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('papers/' . $paper->id . '/edit') }}">Edit</a>
			</td>
			
		</tr>
		@endforeach
    </tbody>
</table>
</div>

{{ $papers->links() }}

@stop