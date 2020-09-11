
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    @yield('extra-meta')
    <title>Blog Template · Bootstrap</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('extra-script')

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/blog/">

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
     crossorigin="anonymous">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
     integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="{{route('cart.index')}}">Panier <span class="badge badge-pill badge-dark">{{Cart::count()}}</span></a>
      </div>
      <div class="col-4 text-center">
        <h2><a class="blog-header-logo text-dark" href="{{route('products.index')}}">HamzeD</a></h2>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        @include('partials.search')
        @include('partials.auth')
        </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      @foreach (App\Category::all() as $category)
      <a class="p-2 text-muted" href="{{ route('products.index', ['categorie' =>
         $category->slug]) }}">
        {{$category->name}}</a>
      @endforeach

    </nav>
  </div>

  @if (session('success'))
  <div class="alert alert-success">
      {{session('success')}}
  </div>
      
  @endif

  @if (session('danger'))
  <div class="alert alert-danger">
      {{session('danger')}}
  </div>
      
  @endif

  @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul class=" mb-0 mt-0">
          @foreach ( $errors->all() as $error)

            <li>[{{$error}}]</li>

          @endforeach 
        </ul>
      </div>
  @endif



   @if (request()->input())

  <h2 >{{ $products->total() }} résultat(s) pour la "{{ request()->q }}" </h2>
      
  @endif
  <div class="row mb-2">
    
   @yield('content')
  </div>
</div> 


@yield('extra-js')
</body>
</html> 