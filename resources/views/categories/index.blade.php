@extends ('layout')

@section ('content')

<!-- Banner -->
<section id="banner" style="background-image: url('/images/banner2.jpg')">
	<div class="inner">
		<h2>Categorías</h2>
	</div>
</section>	

<div class="row" style="padding:75px;">
    @foreach ($categories as $category)
		<div class="3u">
			<section class="special box">
				<a href="/categorias/{{ $category->slug }}" class="image fit"><img src="/storage/{{ $category->image }}" /></a>
				<h3>{{ $category->name }}</h3>
				<p>{{ $category->description }}</p>
				<a href="/categorias/{{ $category->slug }}" class="button special">Ver Categoría</a>
			</section>
		</div>
    @endforeach
</div>

@endsection