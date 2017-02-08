@extends('layout')
<head>
	<title>{{$details->name}} - Edition</title>
</head>
@section('content')

<h1>Editer le stock de {{$details->name}}</h1>
<a href="/" class="ui button">Retour</a>

<form action="" method="post" class="ui form">
	<input type="hidden" name="id" value="{{$details->id}}">
	<div class="field">
		<label for="Name">Name</label>
		<input id="Name" type="text" name="Name" value="{{$details->name}}">
	</div>
	<div class="field">
		<label for="Price">Price</label>
		<input type="text" name="Price" id="Price"  value="{{$details->price}}">
	</div>
	<div class="field">
		<label for="pointure">Description</label>
		<input type="text" name="Description" id="Description"  value="{{$details->descrition}}">
	</div>
	<div class="field">
		<label for="stock">stock</label>
		<input type="number" name="stock" id="stock"  value="{{$details->stock}}">
	</div>
	<div>
		<button class="positive ui button">Valider les modification</button>
	</div>
</form>
@stop
