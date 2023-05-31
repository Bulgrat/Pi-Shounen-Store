@extends('layouts.store')

@section('content')
<section class="container py-4">
    <div class="row">
        <div class="mx-auto col-10 text-center">
            <h2 class="text-uppercase">{{ $title }}</h2>
            <p class="text-muted">Todos Produtos com base na sua pesquisa</p>
        </div>
    </div>
    <div class="row justify-content-center justify-content-lg-start">
        @foreach ($products->sortBy('name') as $product)
        <div class="card bg-light mx-3 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
            <a class="h-100 w-100" href="{{ route('show.product', $product->id) }}">

                <img src="{{ asset($product->image) }}" class="card-img-top ">
            </a>
            <h5 class="card-title text-center">{{ $product->name }}</h5>

            <div class="text-center">
                <p class="card-text">{{$product->description}}</p>
                <span class="text-muted">R$ {{ number_format($product->price, 2, ',', '.')}}</span>
            </div>
            <div class="card-body text-center">
                <a style="background-color:#101820" href="{{ route('show.product', $product->id) }}" class="btn btn-md card-link text-white">Visualizar</a>
                <form action="{{ route('cart.store', $product->id) }}" method="POST" style="display:inline">
                    @csrf
                    <button style="background-color:#d22630" type="submit" class="btn text-white btn-sm card-link">Comprar <img src="/public/images/cart2.png" width="25"></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection