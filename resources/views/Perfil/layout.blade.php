<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>Sinalva Dev</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Area =================-->
    <header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="/"><img src="img/logo1.png" width="205px" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="/about">Sobre mi</a></li>
							<li class="nav-item"><a class="nav-link" href="/services">Servicios</a></li>
              				<li class="nav-item"><a class="nav-link" href="/blog">Articulos</a></li>
							<li class="nav-item"><a class="nav-link" href="/contact">Contactame</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Area =================-->

    <!--================ Start Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                 @yield('header-content')
                </div>
            </div>
        </div>
    </section>
    <!--================ End Banner Area =================-->
    
   <!--================ Start About Us Area =================-->
	<section class="about_area section_gap">
        <div class="container">
         @yield('content')
        </div>
    </section>
    <!--================ End About Us Area =================-->


	<!--================ Start Features Area =================-->
	<section class="features_area">
		<div class="container">
         @yield('services-content')
		</div>
	</section>
	<!--================ End Features Area =================-->



	<!--================ Start Testimonial Area =================-->
	<div class="testimonial_area section_gap_bottom">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 text-center">
					<div class="main_title">
						<h2>Clientes</h2>
						<p>Gracias al estandar de calidad que brindamos , hemos logrado obtener logros en diversos proyectos de desarrollo de software</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testi_slider owl-carousel">
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t1.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Elite Martin</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        			<div class="testi_item">
        				<div class="row">
        					<div class="col-lg-4">
        						<img src="img/testimonials/t2.jpg" alt="">
        					</div>
        					<div class="col-lg-8">
        						<div class="testi_text">
        							<h4>Davil Saden</h4>
									<p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from </p>
        						</div>
        					</div>
        				</div>
        			</div>
        		</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<!--================ Start Newsletter Area =================-->
	<section class="newsletter_area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12">
					<div class="subscription_box text-center">
						<h2 class="text-uppercase text-white">Contactame desde cualquier lugar</h2>
						<p class="text-white">
							Se parte del comienzo de la implementacion de software con las mejores tecnologias y metodologias. 
						</p>
						<div class="subcribe-form" id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
								<input name="EMAIL" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
								</div>
								<button class="primary-btn hover d-inline">Subscribirme</button>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Newsletter Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="footer_top flex-column">
						<div class="footer_logo">
							<a href="#">
								<img src="img/logo1.png" alt="">
							</a>
							<h4>Sigueme en </h4>
						</div>
						<div class="footer_social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row footer_bottom justify-content-center">
				<p class="col-lg-8 col-sm-12 footer-text">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Desarrollo por Yerald Sinche - Sinalva Dev <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Sinalva Dev</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="vendors/isotope/isotope-min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>