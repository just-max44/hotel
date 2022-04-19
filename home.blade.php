@extends('layouts/head')
@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h6>Mes réservations</h6>
                    @foreach ($order_validates as $order_validate)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div>Nom de la réservation: {{ $order_validate->name }}</div>
                                <div>Nom de l'hotel: {{ $order_validate->product }}</div>
                                <div>date d'arrivée: {{ $order_validate->dateOn }}</div>
                                <div>date de sortie: {{ $order_validate->dateOut }}</div>
                                <div>Montant de la réservation par nuit: {{ formatPrice((Cart::total() - session()->get('coupon.remise', 0)) + (0.09 + config('cart.tax') / 100)) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
