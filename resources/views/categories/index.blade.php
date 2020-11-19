@extends ('layout')

@section ('content')
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