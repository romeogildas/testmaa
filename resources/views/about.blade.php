@extends('layouts.app')
@section('title', 'A propos de nous')

@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-bennar">
                        <h2>A propos de nous</h2>
                        <div class="breadcumb">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Accueil</a>
                                </li>
                                <li>A propos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Page Lawyer Section Area Start here -->
    <div class="about-page-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="about-page-content">
                    <h2>A propos de
                        <span> Nous</span> 
                    </h2>
                    <p class="text-blod"><strong>Me Ami Mawutodzi Adjeoda</strong> est membre du <strong>Barreau de Québec</strong>, de <strong>l’Association Québécoise des Avocats et Avocates en Droit de l’Immigration (AQAADI)</strong>, de <strong>l’Association des Avocats de la Défense de Montréal et Longueuil (AADM)</strong> ainsi que de <strong>l’Association des Avocats et Avocates en Droit Familial du Québec (AAADFQ)</strong>. </p>
                    <p>Détentrice d’une maîtrise en droit des affaires de l’Université de Lomé et d’un diplôme de baccalauréat en droit de l’Université de Montréal, <strong>Me Adjeoda </strong>a travaillé comme parajuriste dans un cabinet de notaire en début de carrière. Elle a également occupé le poste de technicien juridique pendant plusieurs années dans des cabinets d’avocats.</p>
                    
                    <p>Après avoir complété la formation professionnelle du Barreau du Québec en 2021, <strong>Me Adjeoda</strong> a effectué son stage dans un cabinet d’avocat de Longueuil. Entreprenante et dévouée, <strong>Me Adjeoda</strong> a ouvert son cabinet en janvier 2022. </p>
                    
                    <p>Elle exerce principalement en droit de l’immigration, droit criminel et pénal et en droit de la famille. Engagée et passionnée du droit, elle mène ses dossiers avec rigueur et minutie.</p>

                    <div class="contact-us-button">
                        <a href="{{ route('contacts.index') }}">Rejoindre</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="about-page-featured-image">
                    <a href="#">
                        <img src="img/about.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

<!-- Experience Area Start here -->
<div class="experince-area">
    <div class="container">
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

@endsection('content')