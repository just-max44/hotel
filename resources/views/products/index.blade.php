@extends('layouts/head')
<body>
@extends('layouts.master')
@section('content')
    <main role="main">
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img class="bd-placeholder-img card-img-top" height="225" src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}">
                                <div class="card-body">
                                    <h3 class="card-text">{{$product->title}}</h3>
                                    <p class="card-text">{{$product->subtitle}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('products.show', $product->slug)}}" class="mt-auto rounded-bottom text-center btn btn-success">en savoir plus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

{{--    <div class="container-fluid">--}}
{{--        {{ $products->appends(request()->input())->links() }}--}}
{{--    </div>--}}
@endsection
</body>
</html>
