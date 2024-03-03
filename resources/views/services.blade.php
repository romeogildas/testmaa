@extends('layouts.app')
@section('title', 'Services')

<style>
    .container{
        margin-right: auto;
    }
</style>

@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-bennar">
                        <h2>Nos services</h2>
                        <div class="breadcumb">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Accueil</a>
                                </li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
            <!-- Practice Area Start Here -->
            <div class="practice-area practice-area-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="practice-area-heading-section">
                            <h2>Par domaine d'étude et de pratique</h2>
                            <p>Découvrez nos domaines d'étude et de pratique et prenez contact selon votre besoin.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="practice-service-section-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            
                            
                            
                            <div class="single-practice-service-content-area">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <i class="fa fa-male"></i>
                                        </a>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="media-heading">
                                            <a href="{{ route('contacts.index') }}">Droit de la famille</a>
                                        </h4>
                                        <p>Maître Ami Mawutodzi Adjeoda se spécialise dans les procédures non contestées en matière de divorce et de séparation, mettant en lumière les questions cruciales relatives à <strong>la garde des enfants</strong>, <strong>aux droits d'accès</strong>, à <strong>la pension alimentaire pour les enfants et les conjoints</strong>, ainsi qu'au <strong>partage du patrimoine familial</strong>. En plus, elle propose des services professionnels de <strong>rédaction de testaments et de mandats en cas d'inaptitude</strong>.</p>
                                        <div class="practice-service-read-more">
                                            <a href="{{ route('contacts.index') }}">Contactez!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-practice-service-content-area">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="media-heading">
                                            <a href="{{ route('contacts.index') }}">Droit criminel</a>
                                        </h4>
                                        <p>Maître Ami Mawutodzi Adjeoda vous apporte son expertise juridique dans diverses affaires criminelles, notamment les cas de <strong>facultés affaiblies</strong>, <strong>grand excès de vitesse</strong>, <strong>conduite dangereuse</strong>, <strong>délit de fuite</strong>, <strong>utilisation du téléphone au volant</strong>, <strong>conduite pendant une interdiction</strong>, <strong>voies de fait</strong>, <strong>violence conjugale</strong>, <strong>menaces</strong>, <strong>harcèlement</strong>, et bien d'autres infractions. Son engagement est de vous défendre avec rigueur et compétence tout au long du processus judiciaire.</p>
                                        <div class="practice-service-read-more">
                                            <a href="{{ route('contacts.index') }}"> Connectez!</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-practice-service-content-area">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="#">
                                            <i class="fa fa-line-chart"></i>
                                        </a>
                                    </div>
                                    <div class="media-body content">
                                        <h4 class="media-heading">
                                            <a href="{{ route('contacts.index') }}">Droit de l'immigration</a>
                                        </h4>
                                        <p>Pour les démarches liées à l'immigration, Maître Ami Mawutodzi Adjeoda vous accompagne dans <strong>l'obtention du visa de résident temporaire pour étudiants</strong>, <strong>visiteurs</strong>, et <strong>travailleurs</strong>. Elle vous assiste également dans <strong>l'obtention des permis d'études</strong>, du <strong>Certificat d'acceptation du Québec (C.A.Q.)</strong>, de <strong>la résidence permanente</strong>, du <strong>renouvellement de la carte de résident permanent</strong>, de <strong>la citoyenneté canadienne</strong>, de <strong>la prolongation de séjour</strong>, ainsi que dans <strong>la rédaction de lettres d'invitation</strong>, et bien d'autres démarches.</p>
                                        <div class="practice-service-read-more">
                                            <a href="{{ route('contacts.index') }}">Démarrez</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Practice Area End Here -->

@endsection('content')