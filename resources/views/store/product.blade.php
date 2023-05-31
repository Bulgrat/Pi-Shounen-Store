@extends('layouts.store')
@section('content')
<section>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page"><a class="text-muted" href="{{ route('search.category', $product->Category->id) }}">{{$product->Category->name}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
        </ol>
    </nav>
</section>
<section class="d-flex justify-content-center container py-4">
    <div style="height: 50rem; width:28rem;" class="bg-light shadow-lg p-4 pb-4 bg-white rounded">
        <div class="d-flex flex-column">
            <h2 class="text-uppercase text-left">{{ $product->name }}</h2>
            <p class="text-muted">{{ $product->description }}</p>
            <div style="height: 28rem; width:19rem;" class=" text-left shadow-sm p-3 mb-3 bg-light rounded">
                <img class="h-100 w-100" src="{{ asset($product->image) }}">
            </div>
            <div class="">
                <h3>Tags</h3>
                @foreach($product->Tags as $tag)
                <a class="btn btn-sm btn-secondary" href="{{ route('search.tag', $tag->id) }}">{{$tag->name}}</a>
                @endforeach
            </div>

            <form class="row" action="{{ route('cart.store', $product->id) }}" method="POST">
                @csrf

                <span style="color:#d22630" class="h2 ">R$ {{ number_format($product->price, 2, ',', '.') }}</span>
                <button style="width:294px;background-color:#101820" type="submit" class="btn ms-2 btn-lg text-white">Comprar</button>
            </form>
        </div>

    </div>
</section>
@endsection