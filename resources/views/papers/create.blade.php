@extends('layouts.app')
 
@section('content')
<div class="container">

<h1>List of Papers</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::open(array('url' => 'papers')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>
	
	<div class="form-group">
        {{ Form::label('technique', 'Technique') }}
        {{ Form::text('technique', Input::old('technique'), array('class' => 'form-control')) }}
    </div>

	<div class="form-group">
        {{ Form::label('objective', 'Objective') }}
        {{ Form::text('objective', Input::old('objective'), array('class' => 'form-control')) }}
    </div>
	
	<div class="form-group">
        {{ Form::label('reference', 'Reference') }}
        {{ Form::text('reference', Input::old('reference'), array('class' => 'form-control')) }}
    </div>
	
	<!-- 
	<div class="form-group">
		{{ Form::label('phase', 'Development phase') }}
		{{ Form::select('name', $phases, null, ['class' => 'form-control']) }}
	</div>
	 -->
	
	<!--
	<div class="form-group">
        {{ Form::label('phase', 'Development phase') }}
        {{ Form::select('phase', array('0' => 'Select a Level', 'Requirements Definition' => 'Requirements Definition', 
											'2' => 'System and Software Design', '3' => 'Implementation and Unit Testing', 
											'4' => 'Integration and System Testing', '5' => 'Operation and Maintenance'), 
											Input::old('phase'), array('class' => 'form-control')) }}
    </div>
	-->
	
	<!-- BEST WAY!!! -->
	<div class="form-group">
	  {{ Form::label('phase', 'Development phase') }}
	  <select class="form-control" name="phase">
		@foreach($phases as $phase)
		  <option value="{{$phase->name}}">{{$phase->name}}</option>
		@endforeach
	  </select>
	</div>

	<div class="form-group">
	  {{ Form::label('paperType', 'Type of primary study') }}
	  <select class="form-control" name="paperType">
		@foreach($types as $type)
		  <option value="{{$type->name}}">{{$type->name}}</option>
		@endforeach
	  </select>
	</div>
	
	<div class="form-group">
	  {{ Form::label('researchType', 'Research type') }}
	  <select class="form-control" name="researchType">
		@foreach($research as $res)
		  <option value="{{$res->name}}">{{$res->name}}</option>
		@endforeach
	  </select>
	</div>
	
	<div class="form-group">
        {{ Form::label('origin', 'Database origin') }}
        {{ Form::select('origin', array('0' => 'Select a type', '1' => 'Scopus', 
											'2' => 'ACM', '3' => 'IEEExplore', 
											'4' => 'Science Direct',  
											'5' => 'Web Science', '6' => 'Compendex'), 
											Input::old('origin'), array('class' => 'form-control')) }}
    </div>
	
	<div class="form-group">
        {{ Form::label('environment', 'Environment') }}
        {{ Form::select('environment', array('0' => 'Select a type', '1' => 'Academic/Industrial', 
											'2' => 'Academic', '3' => 'Industrial'), 
											Input::old('environment'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Register the paper', array('class' => 'btn btn-primary')) }}

{{ Form::close() }} 

<br>
	
</div>
@stop