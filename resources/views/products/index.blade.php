@extends ('layout')

@section ('content')
<div class="row" style="padding-top:75px">
    @foreach ($products as $product)
		<div class="4u">
			<section class="special box">
				<a href="/productos/{{ $product->slug }}" class="image fit"><img src="/storage/{{ $product->image }}" alt="" /></a>
				<h3>{{ $product->name }}</h3>
				<p>{{ $product->description }}</p>
				<a href="/productos/{{ $product->slug }}" class="button special">Ver Producto</a>
			</section>
		</div>
    @endforeach
</div>

@endsection