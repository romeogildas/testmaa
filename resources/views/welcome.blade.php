@extends('layouts.app')
@section('title', 'Accueil')
<style>
/* Effet de survol pour agrandir le texte */
.single-practice-service-content-area p {
    font-size: 18px; 
    transition: font-size 0.3s ease-in-out, color 0.3s ease-in-out;
}

.single-practice-service-content-area:hover p {
    font-size: 20px; /* Ajustez la taille de police agrandie */
    color: #a33b73; /* Ajoutez la couleur au survol */
    font-weight: bold;
    width: 100%;
}

/* Effet de survol pour mobile */
@media (max-width: 767px) {
    .single-practice-service-content-area.active p {
        font-size: 20px; /* Ajustez la taille de police agrandie pour mobile */
        color: #a33b73; /* Ajoutez la couleur au clic sur mobile */
        font-weight: bold;
        width: 100%;
    }
}


</style>
@section('content')
    <!-- slider -->
    <div class="slider-area">
        <div class="bend niceties preview-2">
            <div id="ensign-nivoslider" class="slides">
                <img src="img/slides/slide3.jpg" alt="image" title="#slider-direction-1" />
                <img src="img/slides/slide2.jpg" alt="image" title="#slider-direction-2" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-cn s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <div data-wow-delay="0.2s" data-wow-duration="2s" class="tp-caption big-title rs-title customin customout bg-sld-cp-primary wow zoomIn"
                            style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: zoomIn;">
                            Notre 
                            <span class="title-builder"> passion: </span>
                            <span class="title-builder"> défendre </span> vos
                            <span class="title-builder"> Droits</span>
                        </div>
                        <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                            style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                            Criminel / Famille / Immigration
                        </div>
                    </div>
                    <div data-wow-delay="0.4s" data-wow-duration="4s" class="button wow fadeIn" style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s; animation-name: fadeIn;">
                        <a href="{{ route('contacts.index') }}" class="btn btn-success">Rejoignez-nous</a>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfr s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <h1 class="title1">La clarté dans le chaos juridique</h1>
                        <div data-wow-delay="0.3s" data-wow-duration="3s" class="tp-caption small-content customin customout rs-title-small bg-sld-cp-primary tp-resizeme rs-parallaxlevel-0 wow zoomIn"
                            style="visibility: visible; animation-duration: 3s; animation-delay: 0.3s; animation-name: zoomIn;">
                            Criminel / Famille / Immigration
                        </div>
                        <div style="visibility: visible; animation-duration: 4s; animation-delay: 0.4s;" class="button wow fadeIn" data-wow-duration="4s"
                            data-wow-delay="0.4s">
                            <a class="btn btn-success" href="{{ route('contacts.index') }}">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end-->
        <!-- Experience Area Start here -->
        <div class="experince-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="experince">
                            <h2>
                                <span>10</span>
                                <b>années</b>
                                <br/> d'expériences </h2>
                            <p>Lorsque la justice est en jeu, choisissez l'expertise. Choisissez <strong>Me Ami Mawutodzi Adjeoda</strong>: votre parfaite alliée!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-experince-area">
                            <div class="icon">
                                <a href="#">
                                <i class="fa fa-map-marker"></i>
                                </a>
                            </div>
                            <h3>
                                <a href="#">Notre Bureau</a>
                            </h3>
                            <p>5838, rue Sherbrooke Ouest Montréal (Québec) H4A 1X3</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-experince-area">
                            <div class="icon">
                                <a href="#">
                                    <i class="fa fa-calendar"></i>
                                </a>
                            </div>
                            <h3>
                                <a href="#">Horaire de travail</a>
                            </h3>
                            <p style="font-weight: bold">
                            Lundi au Vendredi
                            </p>
                            <p style="font-weight: italic;">09h00 à 17h00</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-experince-area">
                            <div class="icon">
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                </a>
                            </div>
                            <h3>
                                <a href="#">Coordonnées téléphoniques</a>
                            </h3>
                            
                            <p><i class="fa fa-phone"><a href="#"> 514 834-5450</a></i></p>
                            <p><i class="fa fa-fax"><a href="#"> 514 985-0005</a></i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Experience Area End here -->
    <!-- Make An Appointment Area Start here -->
    <div class="make-appointment-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="make-appointment">
                        <h2>Vous êtes au bon cabinet pour <br> vos besoins juridiques.</h2>
                        <a href="{{ route('contacts.index') }}">Prenez votre rendez-vous</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Make An Appointment Area End here -->
    <!-- Home Four Practices Area Start here -->
    <div class="home4-practiceing-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="home4-practiceing-content-area">
                        <h2>
                            <a href="#">Domaine de Pratique</a>
                        </h2>
                        <p>Expertise, compassion et dévouement : nous sommes là pour vous dans les domaines du droit criminel, du droit de la famille et de l'immigration. Protéger vos droits, défendre vos intérêts et construire un avenir solide, nous sommes votre partenaire de confiance à chaque étape de votre parcours juridique.</p>
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs practice-tab" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#criminel" data-controls="home" role="tab" data-toggle="tab">Criminel</a>
                                </li>
                                <li role="presentation">
                                    <a href="#famille" data-controls="profile" role="tab" data-toggle="tab">Famille</a>
                                </li>
                                <li role="presentation">
                                    <a href="#immigration" data-controls="messages" role="tab" data-toggle="tab">Immigration</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content practice-content">
                                <div role="tabpanel" class="tab-pane active" id="criminel">
                                    <h2>Droit criminel</h2>
                                    <p><strong>Maître Ami Mawutodzi Adjeoda</strong> vous apporte son expertise juridique dans diverses affaires criminelles, notamment les cas de facultés affaiblies, grand excès de vitesse, conduite dangereuse, délit de fuite, utilisation du téléphone au volant, conduite pendant une interdiction, voies de fait, violence conjugale, menaces, harcèlement, et bien d'autres infractions. Son engagement est de vous défendre avec rigueur et compétence tout au long du processus judiciaire.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="famille">
                                    <h2>Droit de la famille</h2>
                                    <p><strong>Maître Ami Mawutodzi Adjeoda</strong> se spécialise dans les procédures non contestées en matière de divorce et de séparation, mettant en lumière les questions cruciales relatives à la garde des enfants, aux droits d'accès, à la pension alimentaire pour les enfants et les conjoints, ainsi qu'au partage du patrimoine familial. En plus, elle propose des services professionnels de rédaction de testaments et de mandats en cas d'inaptitude.</p>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="immigration">
                                    <h2>Droit de l'immigration</h2>
                                    <p>Pour les démarches liées à l'immigration, <strong>Maître Ami Mawutodzi Adjeoda</strong> vous accompagne dans l'obtention du visa de résident temporaire pour étudiants, visiteurs, et travailleurs. Elle vous assiste également dans l'obtention des permis d'études, du Certificat d'acceptation du Québec (C.A.Q.), de la résidence permanente, du renouvellement de la carte de résident permanent, de la citoyenneté canadienne, de la prolongation de séjour, ainsi que dans la rédaction de lettres d'invitation, et bien d'autres démarches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="home4-practiceing-featured-image">
                        <a href="#">
                            <img src="img/home.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Home Four Practices Area End here -->



<!-- Practice Area Start Here -->
<div class="practice-area practice-area-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="practice-area-heading-section">
                    <h2>Maître Ami Mawutodzi Adjeoda est</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="practice-service-section-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row align-items-stretch">
                        <div class="col-sm-6">
                            <div class="single-practice-service-content-area practice-service-content equal-height">
                                <div class="media">
                                    <div class="media-body content">
                                        <p>Membre du Barreau de Québec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-practice-service-content-area practice-service-content equal-height">
                                <div class="media">
                                    <div class="media-body content">
                                        <p>Membre de l’Association Québécoise des Avocats et Avocates en Droit de l’Immigration (AQAADI)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-sm-6">
                            <div class="single-practice-service-content-area practice-service-content">
                                <div class="media">
                                    <div class="media-body content">
                                        <p>Membre de l’Association des Avocats de la Défense de Montréal et Longueuil (AADM)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-practice-service-content-area practice-service-content">
                                <div class="media">
                                    <div class="media-body content">
                                        <p>Membre de l’Association des Avocats et Avocates en Droit Familial du Québec (AAADFQ)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>






    <!-- Happy Client Area Start Here -->
    <div class="happy-client-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title-area">
                        <h2>Témoignages</h2>
                        <p>Découvrez ce que nos clients satisfaits ont à dire sur leur expérience avec <strong>Maître Ami Mawutodzi Adjeoda</strong>. Leurs témoignages reflètent notre engagement envers la qualité, la confiance et l'excellence dans la prestation de services juridiques. Nous sommes fiers de partager ces histoires de réussite et de satisfaction client avec vous.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="client-section-area">
                        <div class="client-section">
                            <div class="single-client-area">
                                <h3>
                                    <a href="#">Roméo D.</a>
                                </h3>
                                <p class="designation">Technicien en Télécom et Informarique</p>
                                <div class="picture">
                                    <a href="#">
                                        <img src="img/clients/1.png" alt="">
                                    </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia
                                    blanditiis rerum, a harum, veritatis iste laborum illum distinctio consequuntur accusantium
                                    velit vitae molestiae. Inventore, minus, modi!</p>
                            </div>
                            <div class="single-client-area">
                                <h3>
                                    <a href="#">Robert DUBON </a>
                                </h3>
                                <p class="designation">Ingénieur en Réseau Informatique</p>
                                <div class="picture">
                                    <a href="#">
                                        <img src="img/clients/1.png" alt="">
                                    </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia
                                    blanditiis rerum, a harum, veritatis iste laborum illum distinctio consequuntur accusantium
                                    velit vitae molestiae. Inventore, minus, modi!</p>
                            </div>
                            <div class="single-client-area">
                                <h3>
                                    <a href="#">Roméo D.</a>
                                </h3>
                                <p class="designation">Technicien en Télécom et Informarique</p>
                                <div class="picture">
                                    <a href="#">
                                        <img src="img/clients/1.png" alt="">
                                    </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia
                                    blanditiis rerum, a harum, veritatis iste laborum illum distinctio consequuntur accusantium
                                    velit vitae molestiae. Inventore, minus, modi!</p>
                            </div>
                            <div class="single-client-area">
                                <h3>
                                    <a href="#">Robert DUBON </a>
                                </h3>
                                <p class="designation">Ingénieur en Réseau Informatique</p>
                                <div class="picture">
                                    <a href="#">
                                        <img src="img/clients/1.png" alt="">
                                    </a>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque officiis alias sed officia
                                    blanditiis rerum, a harum, veritatis iste laborum illum distinctio consequuntur accusantium
                                    velit vitae molestiae. Inventore, minus, modi!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Happy Client Area End Here -->
   
@endsection('content')


<script>
    // Ajoutez la classe 'active' au clic sur mobile
document.querySelectorAll('.practice-service-content').forEach(function (element) {
    element.addEventListener('click', function () {
        this.classList.toggle('active');
    });
});

</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        equalizeHeight();
        
        $(window).resize(function() {
            equalizeHeight();
        });
        
        function equalizeHeight() {
            var maxHeight = 0;
            
            $('.equal-height').height('auto');
            
            $('.equal-height').each(function() {
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            
            $('.equal-height').height(maxHeight);
        }
    });
</script>
