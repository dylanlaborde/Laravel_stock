@extends('layout')
<head>
	<title>produit</title>
</head>

	@section('content')
		@if(session('editSuccess'))
		<div class="ui success message">
			<i class="close icon"></i>
			<div class="header">
				Succes
			</div>
			<p>{{session('editSuccess')}}
			</p>
		</div>
		@endif
	<div class="ui grid">
		<div class="six wide column"></div>
		<h1>liste des produit</h1>
	</div>
	<div class="ui grid">
		<div class="four wide column"></div>
		<table class="ui striped table">
			<thead>

				<tr>
					<th>id</th>
					<th>name</th>
					<th>price</th>		
					<th>descrition</th>		
					<th>stock</th>	
					<th></th>	
				</tr>		
			</thead>
			<tbody>
				@foreach($produit as $key)
				<tr>
					<td><a href="/{{$key->id}}">{{$key->id}}</a></td>
					<td>{{$key->name}}</td>
					<td>{{$key->price /100}} €</td>
					<td>{{$key->descrition}}</td>
					<td>{{$key->stock}}</td>
					<td><a href="/show_detail/{{$key->id}}" class="ui button">detail</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
	@stop

