@extends ('layout')

@section ('content')

 <!-- Banner -->
 <section id="banner" style="background-image: url('/images/banner.jpg')" >
		<div class="inner">
			<h2>Contacto</h2>
		</div>
</section>

<section class="wrapper style1">
    <header class="major">
        <h2>Ponte en contacto con nosotros</h2>
    </header>
    <div class="container">
        <div class="row">
            <div class="6u">
                <h3>Déjanos un mensaje</h3>
                <form action="email">
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email">
                    <label for="message">Mensaje:</label>
                    <input type="text" id="message" name="message"><br><br>
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="6u">
                <h3>Visítanos</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.95019285003!2d-103.51037668498287!3d25.573323783722653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fd84867ee0001%3A0x43088d3e2effaeec!2sCoral%20490%2C%20La%20Esperanza%2C%2035020%20G%C3%B3mez%20Palacio%2C%20Dgo.!5e0!3m2!1ses-419!2smx!4v1605729502989!5m2!1ses-419!2smx" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection