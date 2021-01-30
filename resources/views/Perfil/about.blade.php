
@extends('Perfil/layout')

@section('header-content')
<h2>Sobre mi</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/about">Sobre mi</a>
</div>
@endsection


@section('content')
<div class="row justify-content-start align-items-center">
	<div class="col-lg-5">
		<div class="about_img">
			<img class="" src="img/about-us.png" alt="">
		</div>
	</div>

	<div class="offset-lg-1 col-lg-5">
    <div class="row justify-content-center">
	    <div class="main_title text-left">
			<h2>Hablemos <br>
			Sobre <br>
			Mi</h2>
			<p>
              Soy estudiante de los últimos ciclos de la carrera de Desarrollo de Sistemas de Información
              con capacidad analítica y toma de decisiones, además de tener conocimientos en programación
              para el desarrollo de software y la dirección de la metodología ágil. .
			</p>
			<p>
              Por otro lado,tengo claros rasgos de liderazgo, habilidades blandas ,ambición de aprender
              y valores que me convierten competente y ético.
            </p>

			<div class="call-now d-flex">
				<div>
					<span class="fa fa-phone"></span>
				</div>
				<div class="ml-15">
					<p>Contactame a :</p>
					<h3>(+51) 948819415</h3>
				</div>
			</div>
            <a class="primary_btn" href="https://www.linkedin.com/in/yeraldsinche/"><span>Revisar CV en Linkedin</span></a>
          
    </div>

</div>
@endsection

@section('services-content')
<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Servicios Disponibles </h2>
						<p>
							Sinalv@ Dev brinda servicios orientados a el desarrollo de software con estandares de calidad <br> Los más destados son:
						</p>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s1.png" alt="">
						<h4>Web developing</h4>
						<p>Desarrollo Web Profesional - Desarrollo de Eccommerce </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s2.png" alt="">
						<h4>UI/ux design</h4>
						<p>Protipado y Diseño de Wirefrimes con praticas de IU Design</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s3.png" alt="">
						<h4>Web design</h4>
						<p>Protipado y Diseño de Wirefrimes para entornos webs con praticas de IU Design</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="feature_item">
						<img src="img/services/s4.png" alt="">
						<h4>seo optimize</h4>
						<p>Optimizacion de SEO y posicionamiento de la marca</p>
					</div>
				</div>
			</div>
@endsection

