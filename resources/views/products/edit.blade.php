@extends ('layout')

@section ('content')
	<div class="col-sm-8">
		<h2>
			Editar productos
			<a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listado</a>
		
		</h2>

		@include('products.fragments.error')
		
		{!! Form::model($product, ['route' =>['products.update', $product->id], 'method' => 'PUT']) !!}

					@include('products.fragments.form ')


		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('products.fragments.aside')

	</div>

@endsection