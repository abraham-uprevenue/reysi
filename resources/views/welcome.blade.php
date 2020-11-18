@extends ('layout')

@section ('content')

        <!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Somos Reysi</h2>
					<p>Productos para el hogar, blancos y novedades </p>
					<ul class="actions">
						<li><a href="/admin-reysi-2020" class="button big special">Iniciar Sesion</a></li>
						<li><a href="/catalogo" class="button big alt">Ver Catálogo</a></li>
					</ul>
				</div>
			</section>			

		<!-- One -->
        <section id="one" class="wrapper style1">
				<header class="major">
					<h2>Nuestro Catálogo</h2>
					<p>Productos que harán tu vida más cómoda</p>
				</header>
				<div class="container">
					<div class="row">
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
				</div>
			</section>
			
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Todo lo que buscas en un solo lugar</h2>
					<p>Lo mejor en electrodomesticos y linea blanca</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit2"><img src="images/pic01.jpg" alt="" /></a>
								<h3>División Proveedora</h3>
								<p>Encargada de proveer articulos de cocina, utensilios, blancos, electrodomésticos.  </p>
								<ul class="actions">
									<li><a href="#" class="button alt">Ir al catálogo</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit2"><img src="images/pic02.jpg" alt="" /></a>
								<h3>División fabrica</h3>
								<p>Aquí encontraras productos para el hogar en general tales como electrónica, línea blanca, recamaras, muebles en general.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Ir al catálogo</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="12u">
							<section> 
								<h2>Nuestra Empresa</h2>
								<a href="#" class="image fit2"><img src="images/pic03.jpg" alt="" /></a>
								<p>Inició en el año de 1970 en la ciudad de Gómez Palacio, Durango, cuando Don Benjamín Reynoso Ibarra y su esposa la Sra. Irene Silva Contreras crearon un negocio de venta de ropa, blancos y novedades. Con el paso del tiempo fueron incrementando sus oportunidades de mercado iniciando a vender medio mayoreo y mayoreo. Tambien se fueron diversificando los productos como hasta el día de hoy. Hasta el año de 1989 se decidió darle a la empresa el nombre comercial de "PROVEEDORA REYSI" que proviene de los apellidos paternos de ambos señores.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Conocer más</a></li>
							</section>
						</div>
						
					</div>
				</div>
            </section>
@endsection