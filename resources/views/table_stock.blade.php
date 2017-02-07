<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<meta charset="UTF-8">
	<title>acceuil</title>
</head>
<body>

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
				</tr>		
			</thead>
			<tbody>
				@foreach($produit as $key)
				<tr>
					<td>{{$key->id}}</td>
					<td>{{$key->name}}</td>
					<td>{{$key->price}}</td>
					<td>{{$key->descrition}}</td>
					<td>{{$key->stock}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</body>
</html>