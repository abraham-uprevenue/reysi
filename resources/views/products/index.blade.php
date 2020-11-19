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
	<div class="row">
	@foreach ($products as $product)
		<div class="4u">
			<section class="special box">
				<a href="/productos/{{ $product->slug }}" class="image fit"><img src="/storage/{{ $product->image }}" width="150" heigth="150"/></a>
				<h3>{{ $product->name }}</h3>
				<p>{{ $product->description }}</p>
				<a href="/productos/{{ $product->slug }}" class="button special">Ver Producto</a>
			</section>
		</div>
	@endforeach
	</div>					
	</div>
    
</div>

@endsection