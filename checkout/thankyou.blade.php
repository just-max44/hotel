@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="jumbotron text-center">
            <h1><i class="text-success fa fa-check-circle"></i></h1>
            <p class="lead"><strong>Nous vous remercions de votre réservation</strong></p>
            <p>Vous pourrez trouver dans l'onglet "mes commandes" un récapitulatif de votre résevation</p>
            <p>Annulation possible jusqu'à 72h avant votre arrivée depuis l'onglet "nous contacter"</p>
            <hr>
            <p>
                Vous rencontrez un problème? <a href="{{ route('contact-form') }}">Nous contacter</a>
            </p>
            <p class="lead">
                <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}" role="button">Continuer vers la boutique</a>
            </p>
        </div>
    </div>
@endsection
