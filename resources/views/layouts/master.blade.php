{{-- 
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

  {{-- <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic"></h1>
      <p class="lead my-3"></p>
      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue ...</a></p>
    </div>
  </div> --}}

  {{-- @if (request()->input())

  <h2 >{{ $products->total() }} résultat(s) pour la "{{ request()->q }}" </h2>
      
  @endif
  <div class="row mb-2">
    
   @yield('content')
  </div>
</div> --}}


{{-- <main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        From the Firehose
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title">Sample blog post</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
        <hr>
        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <h2>Heading</h2>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <pre><code>Example code block</code></pre>
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <h3>Sub-heading</h3>
        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
        <ol>
          <li>Vestibulum id ligula porta felis euismod semper.</li>
          <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
          <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
        </ol>
        <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">Another blog post</h2>
        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

        <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
        <blockquote>
          <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
      </div><!-- /.blog-post -->

      <div class="blog-post">
        <h2 class="blog-post-title">New feature</h2>
        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

        <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <ul>
          <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
          <li>Donec id elit non mi porta gravida at eget metus.</li>
          <li>Nulla vitae elit libero, a pharetra augue.</li>
        </ul>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
      </div><!-- /.blog-post -->

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          <li><a href="#">February 2014</a></li>
          <li><a href="#">January 2014</a></li>
          <li><a href="#">December 2013</a></li>
          <li><a href="#">November 2013</a></li>
          <li><a href="#">October 2013</a></li>
          <li><a href="#">September 2013</a></li>
          <li><a href="#">August 2013</a></li>
          <li><a href="#">July 2013</a></li>
          <li><a href="#">June 2013</a></li>
          <li><a href="#">May 2013</a></li>
          <li><a href="#">April 2013</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container --> --}}
{{-- 
<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
@yield('extra-js')
</body>
</html> --}} 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('extra-meta')
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Unistore &middot; Responsive E-Commerce Template</title>

    <meta name="description" content="Bootstrap template for you store - E-Commerce Bootstrap Template">
    <meta name="keywords" content="unistore, e-commerce bootstrap template, premium e-commerce bootstrap template, premium bootstrap template, bootstrap template, e-commerce, bootstrap template, sunrise digital">
    <meta name="author" content="Sunrise Digital">
    @yield('extra-script')
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">

    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/ecommerce.css') }}">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/carousel.css" rel="stylesheet">
    <link href="../assets/css/carousel-recommendation.css" rel="stylesheet">
    <link href="../assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" {{route('products.index')}} "> <i class="ion-cube"></i> Unistore</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="../">Home</a></li>
              <li><a href="../catalog/">Catalog</a></li>
              <li><a href="../gallery/">Gallery</a></li>
              <li class="dropdown">
                <a href="../catalog/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../catalog/product.html">Product</a></li>
                  <li><a href="../cart/">Cart</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Variations</li>
                  <li><a href="../home">Home</a></li>
            
                </ul>
              </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="{{route('cart.index')}}"> <i class="ion-bag"></i> Panier {{Cart::count()}} </a></li>
              {{-- <li class="nav-item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li> --}}
              @include('partials.auth')
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>


    <header>
      <div class="carousel" data-count="3" data-current="2">
        <!-- <button class="btn btn-control"></button> -->
        <ul class="markers">
          <li data-marker="1"><img src="../assets/img/carousel/newlaptops.jpg" alt="Background"/></li>
          <li data-marker="2" class="active"><img src="../assets/img/carousel/surfaces.jpg" alt="Background"/></li>
          <li data-marker="3"><img src="../assets/img/carousel/ipadair2.jpg" alt="Background"/></li>
        </ul>
      </div>
    </header>
    <br><br>
    
    
    <div class="subscribe">
      <div class="container align-center">
          <hr class="offset-md">

          <h1 class="h3 upp">Recherche </h1>
          <p>Seulement avec les 3 prémiere mots chercher à votre produit NOW!.</p>
          <hr class="offset-sm">

          <form action="{{ route('products.search') }}">
            <div class="input-group">
              <input id="searchinput" type="text" name="q" value="{{ request()->q ?? ''}}" placeholder="Mot Clé" required="" class="form-control">
              <span class="input-group-btn">
                <button id="buttonsearch" type="submit" class="btn btn-primary"> Search <i class="ion-android-send"></i> </button>
              </span>
            </div><!-- /input-group -->
          </form>
          <hr class="offset-lg">
          <hr class="offset-md">

          <hr class="offset-md">
          <hr class="offset-md">
      </div>
    </div>
    
    <hr class="offset-lg">
    <hr class="offset-lg">

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
    
   @yield('content')

    <hr class="offset-lg">
    <hr class="offset-lg">

    <footer>
      <div class="about">
        <div class="container">
          <div class="row">
            <hr class="offset-md">

            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-telephone-outline"></i>
                <h1>24/7 free <br> <span>support</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-star-outline"></i>
                <h1>Low price <br> <span>guarantee</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-gear-outline"></i>
                <h1> Manufacturer’s <br> <span>warranty</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-loop"></i>
                <h1> Full refund <br> <span>guarantee</span> </h1>
              </div>
            </div>

            <hr class="offset-md">
          </div>
        </div>
      </div>



      <div class="container">
        <hr class="offset-md">

        <div class="row menu">
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">About</a>
              <a href="#" class="list-group-item">Terms</a>
              <a href="#" class="list-group-item">How to order</a>
              <a href="#" class="list-group-item">Delivery</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Laptops</a>
              <a href="#" class="list-group-item">Tablets</a>
              <a href="#" class="list-group-item">Servers</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Returns</a>
              <a href="#" class="list-group-item">FAQ</a>
              <a href="#" class="list-group-item">Contacts</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Location</h1>

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#English"> <img src="../assets/img/flags/gb.png" alt="Eng"/> English</a></li>
                <li><a href="#Spanish"> <img src="../assets/img/flags/es.png" alt="Spa"/> Spanish</a></li>
                <li><a href="#Deutch"> <img src="../assets/img/flags/de.png" alt="De"/> Deutch</a></li>
                <li><a href="#French"> <img src="../assets/img/flags/fr.png" alt="Fr"/> French</a></li>
              </ul>
            </div>
            <hr class="offset-xs">

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Currency
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
              </ul>
            </div>

          </div>
          <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
            <h1 class="h4">Unistore, Inc.</h1>

              <address>
                Rue emlilia 06<br>
                Ordiciel , Rabat Maroc<br>
                <abbr title="Phone">P:</abbr> (+212) 456-7890
              </address>

              <address>
                <strong>Support</strong><br>
                <a href="mailto:#">support@unistore.com</a>
              </address>

          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-9 payments">
            <p>Pay your order in the most convenient way</p>

            <div class="payment-icons">
              <img src="../assets/img/payments/visa.svg" alt="visa">
              <img src="../assets/img/payments/master-card.svg" alt="mc">
              <img src="../assets/img/payments/discover.svg" alt="discover">
              <img src="../assets/img/payments/american-express.svg" alt="ae">
            </div>
            <br>

          </div>
          <div class="col-sm-4 col-md-3 align-right align-center-xs">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>Unistore Pro © 2020 <br>  <a href="" target="_blank"></a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <h4 class="modal-title">Forgot Your Password?</h4>
                  <br>

                  <form class="join" action="index.php" method="post">
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                    <a href="#Sign-In" data-action="Sign-In">Back ></a>
                  </form>
                </div>
                <div class="col-sm-6">
                  <br><br>
                  <p>
                    Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/core.js"></script>
    <script src="../assets/js/carousel.js"></script>
    @yield('extra-js')
  </body>
</html>
