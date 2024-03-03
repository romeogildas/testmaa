@extends('layouts.app')
@section('title', 'Foire Aux Questions')

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />


<style>
    
    .template_faq {
    background: #edf3fe none repeat scroll 0 0;
}
.panel-group {
    background: #fff none repeat scroll 0 0;
    border-radius: 3px;
    box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.04);
    margin-bottom: 0;
    padding: 30px;
}
#accordion .panel {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    margin: 0 0 15px 10px;
}
#accordion .panel-heading {
    border-radius: 30px;
    padding: 0;
}
#accordion .panel-title a {
    background: #ffb900 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 30px;
    color: #fff;
    display: block;
    font-size: 18px;
    font-weight: 600;
    padding: 12px 20px 12px 50px;
    position: relative;
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a.collapsed {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    color: #333;
}
#accordion .panel-title a::after, #accordion .panel-title a.collapsed::after {
    background: #ffb900 none repeat scroll 0 0;
    border: 1px solid transparent;
    border-radius: 50%;
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.58);
    color: #fff;
    content: "";
    font-family: fontawesome;
    font-size: 25px;
    height: 55px;
    left: -20px;
    line-height: 55px;
    position: absolute;
    text-align: center;
    top: -5px;
    transition: all 0.3s ease 0s;
    width: 55px;
}
#accordion .panel-title a.collapsed::after {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-shadow: none;
    color: #333;
    content: "";
}
#accordion .panel-body {
    background: transparent none repeat scroll 0 0;
    border-top: medium none;
    padding: 20px 25px 10px 9px;
    position: relative;
}
#accordion .panel-body p {
    border-left: 1px dashed #8c8c8c;
    padding-left: 25px;
}
h1 {
      font-size: 48px !important;
      color: black !important;
      text-transform: uppercase !important;
    }

    @media (max-width: 768px) {
      h1 {
        font-size: 28px !important;
      }
    }
</style>

@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-bennar">
                        <h2>Foire Aux Questions</h2>
                        <div class="breadcumb">
                            <ul>
                                <li>
                                    <a href="{{route('index')}}">Accueil</a>
                                </li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br> <br>
    <div class="container mt-5">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center wow zoomIn">
                        <h1>Questions fréquemment posées</h1>
						<span></span>
						<p><a href="{{ route('contacts.index') }}">Cliquez ici, si votre question n'a pas été abordée!</a> </p>
					</div>
				</div>
			</div>
			<div class="row">				
				<div class="col-md-12">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Ai-je besoin d’un permis pour étudier au Canada ? 
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">
									<p>Un permis d’études est généralement requis pour les étudiants étrangers qui souhaitent étudier au Canada. Pour savoir si vous avez besoin d’un permis d’étude, veuillez communiquer avec <a href="{{ route('contacts.index') }}">nous.</a> </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Que dois-je préparer avant de commencer ma demande d’études au Canada ?
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									<p>Vous devez réunir tous les documents pertinents avant toute demande. Une fois que vous aurez choisi la province où vous souhaitez étudier au Canada, vous devrez constituer votre dossier, en remplissant les formulaires prévus à cet effet et en joignant les pièces justificatives demandées, et être en mesure de justifier des fonds pour couvrir les frais de scolarité et les frais de subsistance. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Quelle est le différence entre un permis de travail ouvert et un permis de travail fermé ? 
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
								<div class="panel-body">
									<p>
									<span style="font-weight: bold">Un permis de travail fermé </span> est lié à un emploi spécifique avec un employeur spécifique. Le titulaire de ce type de permis peut uniquement travailler pour l’employeur désigné et à l’emplacement désigné, et il ne peut pas changer d’emploi sans obtenir un nouveau permis de travail. <br>
									<span style="font-weight: bold">Un permis de travail ouvert</span>, quant à lui, n’est pas lié à un emploi spécifique ou à un employeur spécifique. Il permet au titulaire de travailler pour n’importe quel employeur au Canada, à condition que les conditions de travail soient conformes à celles décrites sur le permis de travail. Les titulaires de ce type de permis sont plus souples et ont plus de liberté pour changer d’emploi sans devoir obtenir un nouveau permis de travail. <br><br>
									En général, <span style="font-weight: bold">les permis de travail fermés</span> sont délivrés aux travailleurs qualifiés pour des emplois spécifiques qui requièrent des compétences et des qualifications particulières. <span style="font-weight: bold">Les permis de travail ouverts</span>, quant à eux, sont délivrés aux travailleurs temporaires pour des emplois généraux qui ne nécessitent pas de compétences ou de qualifications particulières.
									</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									Quels sont les délais pour ramener une personne ?
									</a>
								</h4>
							</div>
							<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
								<div class="panel-body">
									<p>Le délais moyen pour ramener une personne au Canada est entre 6 à 8 mois. </p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFive">
								<h4 class="panel-title">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									Qu’est-ce que la liste des classifications nationales des professions (CNP) ?
									</a>
								</h4>
							</div>
							<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
								<div class="panel-body">
									<p>La liste des classifications nationales des professions (CNP) est un système de classification utilisé pour regrouper les professions et les emplois selon leur contenue en termes de compétences, de formation et d’expérience professionnelle. Cette liste est utilisée par Emplois et Développement sociale Canada pour évaluer les offres d’emplois proposées par les employeurs.</p>
								</div>
							</div>
						</div>
					</div>
				</div><!--- END COL -->		
			</div><!--- END ROW -->			
		</div>

    

@endsection('content')

<script>
(function($) {
	'use strict';
	
	jQuery(document).on('ready', function(){
	
			$('a.page-scroll').on('click', function(e){
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 50
				}, 1500);
				e.preventDefault();
			});		

	}); 	

				
})(jQuery);
</script>