@extends('layout')

@section('content')
	<div class="col-sm-8">
		<img src="https://4geeksacademy.co/wp-content/uploads/2016/04/logo1-01-02.png">
		<h2>Listado de Productos
		<a href="{{ route('products.create') }}" class="btn btn-primary pull-right">Nuevo</a>

		</h2>

		@include('products.fragments.info')
		<table class="table table-condensed">
			<thead>
				<tr>
					<th class="btn">ID</th>
					<th>Nombre Producto</th>
					<th colspan="3">Opciones&nbsp;</th>
				</tr>
			</thead>
			
			<tbody>
				@foreach($products as $product)
					<tr>
						<td class="btn">{{ $product->id }}</td>
						<td class="">
							<strong>{{ $product->name }}</strong>
							{{ $product->short }}
						</td>						
						<td>
							<a href="{{ route('products.show', $product->id) }}" class="btn btn-default"> Ver </a>
						</td>						
						<td>
							<a href="{{ route('products.edit', $product->id) }}" class="btn btn-info"> Editar </a>
						</td>						
						<td>
							<form action="{{ route('products.destroy', $product->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Borrar</button>
							</form>
						</td>
					
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $products->render() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragments.aside')
	</div>

@endsection