@extends('layouts.app')
 
@section('content')
<div class="container">

<table class="table table-striped table-bordered"> 
	<h1>List of Papers</h1>
	<thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Nerd Level</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
		@foreach ($papers as $paper)
		<tr>
			<td>{{$paper->name}}</td>
			<!--
			<td>{{$paper->descricao}}</td>
			<td>{{$paper->valor}}</td>
			<td>{{$paper->quantidade}}</td>
			-->
		</tr>
		@endforeach
    </tbody>
</table>
@stop
</div>
