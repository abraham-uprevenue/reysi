@extends ('layout')

@section ('content')
    <section id="two" class="wrapper style1">
				<header class="major">
					<h2>{{ $product->name }} </h2>
					<p>{{ $product->description }}</p>
				</header>
				<div class="container">
					<a class="image fit left"><img src="/storage/{{ $product->image }}" alt="" /></a>
					<p>{{ $product->description }}</p>
					<h2>$ {{ $product->price }}</h2>
					<p>Disponibilidad: {{ $product->inventory }} disponibles</p>
					<a href="#" class="button big special">Leer más</a>
				</div>
    </section>
@endsection