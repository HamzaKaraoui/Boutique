@extends('layouts.master')

@section('content')
 {{-- @foreach ($products as $product) --}}
       
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
      <p class="mb-auto">{{$product->getPrice()}} MAD </p>
    <a href="{{route('products.show',$product->slug)}}" class="stretched-link btn btn-primary">View</a>
    </div>
  </div>
</div>
@endforeach --}}

<div class="container">
  <h2>NEW PRODUCTS</h2>
  <hr class="offset-md">

  
  <div class="row products">
    @foreach ($products as $product)
    <div class="col-sm-6 col-md-4 product">
     <a href="#favorites" class="favorites" data-favorite="inactive"><i class="ion-ios-heart-outline"></i></a>
     <a href="{{route('products.show',$product->slug)}}"><img src="{{ asset('storage/' . $product->image) }}" alt="Surface Pro"/></a>

     <div class="content">
       <h1 class="h4">{{$product->title}}</h1>
       <p class="price">{{$product->getPrice()}} MAD</p>
       <label>Hybrid</label>

       <a href="{{route('products.show',$product->slug)}}" class="btn btn-link"> Details</a>
       <button class="btn btn-primary btn-rounded btn-sm"> <i class="ion-bag"></i> VIEW </button>
     </div>
   </div>
    @endforeach
   </div>
</div>

{{$products->appends(request()->input())->links() }} 
@endsection
