@extends('layouts.master')

@section('content')
  {{-- <div class="col-md-12">
    <div class="row no-gutters p-3 border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
      <div class="col p-3 d-flex flex-column position-static">
        <muted class="d-inline-block mb-2 text-info">
          <span class="badge badge-info">{{ $stock }}</span>
          @foreach ($product->categories as $category)
              {{ $category->name }}{{ $loop->last ? '' : ', '}}
          @endforeach
        </muted>
        <h3 class="mb-2">{{ $product->title }}</h3>
        <span>{!! $product->description !!}</span>
        <strong class="mb-4 display-4 text-secondary">{{ $product->getPrice() }}</strong>
        @if ($stock === 'Disponible')
        <form action="{{ route('cart.store') }}" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          <button type="submit" class="btn btn-success mb-2"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Ajouter au panier</button>
        </form>
        @endif
      </div>
      <div class="col-auto d-none d-lg-block">
        <img src="{{ asset('storage/' . $product->image) }}" id="mainImage">
        <div class="mt-2">
          @if ($product->images)
            <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" width="50">
            @foreach (json_decode($product->images, true) as $image)
              <img src="{{ asset('storage/' . $image) }}" width="50" class="img-thumbnail">
            @endforeach
          @endif
        </div>
      </div>
    </div>
  </div> --}}
  <div class="product">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 col-md-7">
          <div class="carousel product" data-count="5" data-current="1">
            <!-- <button class="btn btn-control"></button> -->

            <div class="items">
              <div class="item active" data-marker="1">
                <img src="{{ asset('storage/' . $product->image) }}" alt="ChromeBook 11"/>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col-sm-5 col-md-5">
          <img src="{{ asset('storage/' . $product->image) }}" alt="HP" class="brand hidden-xs" />

          <h1>{{ $product->title}}</h1>

          <p> &middot; Chrome OS™</p>
          <p> &middot; {{$product->created_at->format('d-m-y')}} </p>
          <p> &middot; {{$product->subtitle}} </p>

          <p class="price">{{ $product->getPrice() }}</p>
          <br><br>
          <form action="{{ route('cart.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary btn-rounded"> <i class="ion-bag"></i> Add to cart</button>
          </form>
        </div>
      </div>
      <br><br><br>


      <div class="row">
        <div class="col-sm-7">
          <h1>{{ $product->title}}</h1>
           <br>

           <p>
            {!! $product->description !!}
           </p>
           <br>
       
      </div>
    </div>
  </div>
@endsection