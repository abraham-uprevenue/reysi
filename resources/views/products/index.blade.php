@extends ('layout')

@section ('content')

<!-- Banner -->
<section id="banner" style="background-image: url('/images/banner2.jpg')">
	<div class="inner">
		<h2>Catálogo</h2>
	</div>
</section>		

<div class="row" style="padding:75px;">
	<div class="4u">
		<section>
			<h3>Categorías</h3>
				<ul class="alt">
					@foreach ($categories as $category)
						<li><a href="/categorias/{{$category->slug}}">{{ $category->name }}</a></li>
					@endforeach
				</ul>
		</section>
	</div>
	<div class="8u">
	@foreach($products->split($products->count()/3) as $row)
	<div class="row">
	@foreach ($row as $product)
		<div class="4u">
			<section class="section special">
				<a href="/productos/{{ $product->slug }}" class="product image"><img src="/storage/{{ $product->image }}" width="150" heigth="150"/></a>
				<h3>{{ $product->name }}</h3>
				<p>{{ $product->description }}</p>
				<a href="/productos/{{ $product->slug }}" class="button special">Ver Producto</a>
			</section>
		</div>
	@endforeach
	</div>
	@endforeach					
	</div>
    
</div>

@endsection