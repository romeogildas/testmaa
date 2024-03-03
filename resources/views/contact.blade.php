@extends('layouts.app')
@section('title', 'Contactez-nous')

@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-bennar">
                        <h2>Contactez-nous</h2>
                        <div class="breadcumb">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Accueil</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <div id="success-alert" class="alert alert-success text-center font-weight-bold my-3">
            {{ Session::get('success') }}
        </div>
    @endif


    <div class="contact-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="contact-form-area">
                            <h2>Contact</h2>
                            <form action="{{ route('contacts.store') }}" method="POST">
                                @csrf
                                <fieldset class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Nom &amp; Prénoms <span style="color: red;">*</span></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Courriel<span style="color: red;">*</span>  </label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Numéro de téléphone <span style="color: red;">*</span> </label>
                                            <input type="tel" name="telephone" placeholder="+1############" class="form-control" required pattern="\+\d{8,20}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Message <span style="color: red;">*</span> </label>
                                            <textarea cols="40" rows="5" name="message" class="textarea form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send submit-buttom" type="submit">ENVOYER</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="office-address">
                            <h2>ADRESSE</h2>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-map-marker"></i>
                                        <span>5838, rue Sherbrooke Ouest Montréal (Québec) H4A 1X3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+15148345450">
                                        <i class="fa fa-phone"></i>
                                        <span>514 834-5450</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="fax:+15149850005">
                                        <i class="fa fa-building-o"></i>
                                        <span>514 985-0005</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:info@maa.com">
                                        <i class="fa fa-envelope-o"></i>
                                        <span>info@maa.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Contact page End here -->
        <div class="container google-map-area">
            <div id="googleMap" style="width:100%; height:470px; margin-bottom: 80px;">
                <iframe id="map-canvas" class="map_part" width="100%" height="470px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=100%&amp;hl=en&amp;q=5836, rue Sherbrooke Ouest Montréal (Québec) H4A AX3&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">Powered by <a href="https://www.googlemapsgenerator.com">html embed google maps</a> and <a href="https://xn--sms-ln-direkt-utbetalning-gfc.se/">smslån direkt utbetalning</a></iframe>
            </div>
        </div>

@endsection('content')


<script>
    // Attendez 5000 millisecondes (5 secondes) avant de masquer l'alerte
    setTimeout(function() {
        document.getElementById('success-alert').style.display = 'none';
    }, 5000);
</script>