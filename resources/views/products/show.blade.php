@extends ('layout')

@section ('content')
    <section id="two" class="wrapper style1">
				<header class="major">
					<h2>{{ $product->name }} </h2>
					<p>{{ $product->description }}</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<a class="image fit"><img src="/storage/{{ $product->image }}" alt="" /></a>
						</div>
						<div class="6u">
							<p>{{ $product->description }}</p>
							<p>Disponibilidad: {{ $product->inventory }} disponibles</p>
							<h2>$ {{ $product->price }}</h2>
							<a href="#" class="button big special">Leer más</a>
						</div>
					</div>
				</div>
    </section>
@endsection