@extends('layouts.app')
 
@section('content')
<div class="container">

<h1>List of Papers</h1>

<!-- if there are creation errors, they will show here -->
{{ Html::ul($errors->all()) }}

{{ Form::model($paper, array('route' => array('papers.update', $paper->id), 'method' => 'PUT')) }}

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
	
	<div class="form-group">
	  {{ Form::label('phase', 'Development phase') }}
	  <select class="form-control" name="phase">
		@foreach($phases as $phase)
			@if($phase->name == $paper->phase){ 
				<option value="{{$phase->name}}" selected>{{$phase->name}}</option>
			} @else { 
				<option value="{{$phase->name}}">{{$phase->name}}</option>
			} 
			@endif
		@endforeach
	  </select>
	</div>

	<div class="form-group">
	  {{ Form::label('paper_type', 'Type of primary study') }}
	  <select class="form-control" name="paper_type">
		@foreach($types as $type)
			@if($type->name == $paper->paper_type){
				<option value="{{$type->name}}" selected>{{$type->name}}</option>
			} @else {
				<option value="{{$type->name}}">{{$type->name}}</option>
			}
			@endif
		@endforeach
	  </select>
	</div>
	
	<div class="form-group">
	  {{ Form::label('research_type', 'Research type') }}
	  <select class="form-control" name="research_type">
	    <option value="null">Select a type</option>
		@foreach($research as $res)
			@if($res->name == $paper->research_type){
				<option value="{{$res->name}}" selected>{{$res->name}}</option>
			} @else {
				<option value="{{$res->name}}">{{$res->name}}</option>
			}
			@endif
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


    {{ Form::submit('Update the Paper!', array('class' => 'btn btn-primary')) }}


{{ Form::close() }} 

<br>
	
</div>
@stop