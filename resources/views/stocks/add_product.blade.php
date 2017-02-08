@extends('layout')

@section('content')
<h1>Nouveau produit</h1>

<a href="/" class="ui button">Retour</a>

<form action="/add_product" method="post" class="ui form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="id">
	<div class="field">
		<label for="Name">Name</label>
		<input id="Name" type="text" name="Name"">
	</div>
	<div class="field">
		<label for="Price">Price</label>
		<input type="text" name="Price" id="Price"">
	</div>
	<div class="field">
		<label for="pointure">Description</label>
		<input type="text" name="Description" id="Description"">
	</div>
	<div class="field">
		<label for="stock">stock</label>
		<input type="number" name="stock" id="stock">
	</div>
	<div>
		<button class="positive ui button">Ajouter le produit</button>
	</div>
</form>



@stop