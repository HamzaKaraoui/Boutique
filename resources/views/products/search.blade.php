@extends('layouts.master')

@section('content')
@foreach ($products as $product)
       
{{-- <div class="col-md-6">
  <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
      <strong class="d-inline-block mb-2 text-success">
        @foreach ($product->categories as $category)
            {{$category->name}}
        @endforeach
      </strong>
      <h3 class="mb-0">{{$product->title}}</h3>
      <div class="col-auto d-none d-lg-block">
        <img width="350" height="300" src="{{asset('storage/' . $product->image )}}" alt="">
        </div>
      <div class="mb-1 text-muted">{{$product->created_at->format('d-m-y')}}</div>
      <p class="mb-auto">{{$product->subtitle}}</p>
      <p class="mb-auto">{{$product->getPrice()}}</p>
    <a href="{{route('products.show',$product->slug)}}" class="stretched-link btn btn-primary">View</a>
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
@endforeach
  {{$products->appends(request()->input())->links() }}
@endsection