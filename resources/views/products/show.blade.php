@include('layouts/head')
@extends('layouts.master')
@section('content')
<div class="mt-5 text-center row ms-auto me-auto" style="max-width: 700px">
    <div class=" col-12 no-gutters overflow-hidden flex-md-row mb-4 shadow-sm h-md-350 position-relative">
        <div class="d-flex flex-column position-static text-center">
            <div class="col-auto d-lg-block">
                <img src="{{ asset('storage/' . $product->image) }}" width="525" height="325"  alt="{{ $product->title }}">
            </div>
            <div class="">
                <strong class="d-inline-block mb-2 text-success">
                    <p class="text-info text-opacity-75" style="font-size: 13px">{{ $stock }}</p>
                    @foreach($product->categories as $category)
                        {{ $category->name }}{{ $loop->last ? '' : ', ' }}
                    @endforeach
                </strong>
                <h5 class="mb-0 mt-2">{{ $product->title }}</h5>
                <p class="text-muted mb-auto text-center mt-2">{!! $product->description !!}</p>
                <strong class="mb-auto mt-2">{{ formatPrice($product->price) }} / par nuit</strong>
                @if($stock === 'Disponible')
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <button type="submit" aria-hidden="true" class="btn mt-2 w-25 btn-success"><i class="fa fa-shopping-bag m-1"></i> Réserver</button>
                </form>
                    <a href="https://www.booking.com" aria-hidden="true" class="btn mt-3 w-25 btn-primary"><i class="fa fa-shopping-bag"></i> Voir sur booking</a>
                @endif
            </div>
        </div>

    </div>
</div>
@endsection
