
@extends('Perfil/layout')

@section('header-content')
<h2>Contactame</h2>
                    <div class="page_link">
                        <a href="/">Home</a>
                        <a href="/contact">Contactame</a>
</div>
@endsection

@section('content')
<div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Perú/Junin</h6>
                            <p>Ciudad de Huancayo</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">948819415</a></h6>
                            <p>Lunes a Viernes 9:00 am a 6:00 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">yeraldsinche@gmail.com</a></h6>
                            <p>Enviame tus consultas y/0 mensajes !</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="primary_btn">
                                <span>Enviar Mensaje</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
     
        </div>
 @endsection