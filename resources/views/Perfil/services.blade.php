
@extends('Perfil/layout')


@section('header-content')
<h2>Servicios</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/services">Servicios</a>
</div>
@endsection

@section('services-content')
<div class="row justify-content-center" >
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

