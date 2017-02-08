@extends('layout')
<head>
	<title>{{$details->name}} - Détail</title>
</head>

@section('content')
<div class="ui grid">
	<div class="seven wide column"></div>
	<h1>detail {{$details->name}}</h1>
</div>
<div class="ui grid">
	<div class="six wide column">
		<a href="/" class="ui labeled button icon"><i class="home icon"></i>return to Home</a>
	</div>
	<div class="four wide column">
		@if(session('message'))
		<div class="ui success message">
			<i class="close icon"></i>
			<div class="header">
				Succes
			</div>
			<p>{{session('message')}}
			</p>
		</div>
		@endif
	</div>
</div>
<div class="ui grid">
	<div class="six wide column"></div>
	<table class="ui collapsing striped table">
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
			<tr>
				<td><a href="/{{$details->id}}">{{$details->id}}</a></td>
				<td>{{$details->name}}</td>
				<td>{{$details->price /100}} €</td>
				<td>{{$details->descrition}}</td>
				<td>{{$details->stock}}</td>
				<td>
				<a href="/edit_stock/{{$details->id}}" class="ui primary button">Editer</a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="ui grid">
	<div class="six wide column"></div>
	<table class="ui collapsing striped table">
		<thead>
			<tr>		
				<th>stock</th>	
				<th></th>
				<th></th>	
			</tr>		
		</thead>
		<tbody>
			<tr>
				<td>
					<span>Stock Disponible : </span>
					<div class="ui input">
						<input type="number" value="{{$details->stock}}" disabled="">
					</div>
				</td>
				<td>
					<form action="/sell/{{$details->id}}" method="post">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">


						<button class="ui button" type="submit"> - </button>
						
					</form>
				</td>
				<td>
					<form action="/refill/{{$details->id}}" method="post">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="ui button">+</button>
					</form>
				</td>
			</tr>
		</tbody>
	</table>
	
	
</div>

@stop

