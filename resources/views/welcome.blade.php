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
							<a href="#" class="image fit"><img src="/storage/{{ $product->image }}" alt="" /></a>
								<h3>{{ $product->name }}</h3>
								<p>{{ $product->description }}</p>
							</section>
						</div>
					@endforeach
					</div>
				</div>
			</section>
			
		<!-- Two -->
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2>Commodo accumsan aliquam</h2>
					<p>Amet nisi nunc lorem accumsan</p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<h3>Mollis adipiscing nisl</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
								<h3>Neque ornare adipiscing</h3>
								<p>Eget mi ac magna cep lobortis faucibus accumsan enim lacinia adipiscing metus urna adipiscing cep commodo id. Ac quis arcu amet. Arcu nascetur lorem adipiscing non faucibus odio nullam arcu lobortis. Aliquet ante feugiat. Turpis aliquet ac posuere volutpat lorem arcu aliquam lorem.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
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
						<div class="8u">
							<section>
								<h2>Mollis ut adipiscing</h2>
								<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<p>Vis accumsan feugiat adipiscing nisl amet adipiscing accumsan blandit accumsan sapien blandit ac amet faucibus aliquet placerat commodo. Interdum ante aliquet commodo accumsan vis phasellus adipiscing. Ornare a in lacinia. Vestibulum accumsan ac metus massa tempor. Accumsan in lacinia ornare massa amet. Ac interdum ac non praesent. Cubilia lacinia interdum massa faucibus blandit nullam. Accumsan phasellus nunc integer. Accumsan euismod nunc adipiscing lacinia erat ut sit. Arcu amet. Id massa aliquet arcu accumsan lorem amet accumsan commodo odio cubilia ac eu interdum placerat placerat arcu commodo lobortis adipiscing semper ornare pellentesque.</p>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3>Magna massa blandit</h3>
								<p>Feugiat amet accumsan ante aliquet feugiat accumsan. Ante blandit accumsan eu amet tortor non lorem felis semper. Interdum adipiscing orci feugiat penatibus adipiscing col cubilia lorem ipsum dolor sit amet feugiat consequat.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3>Ante sed commodo</h3>
								<ul class="alt">
									<li><a href="#">Erat blandit risus vis adipiscing</a></li>
									<li><a href="#">Tempus ultricies faucibus amet</a></li>
									<li><a href="#">Arcu commodo non adipiscing quis</a></li>
									<li><a href="#">Accumsan vis lacinia semper</a></li>
								</ul>
							</section>
						</div>
					</div>
				</div>
            </section>
@endsection