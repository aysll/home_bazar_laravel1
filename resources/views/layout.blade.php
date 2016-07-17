<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Bazaar</title>

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awes#ome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link type="text/css" rel="stylesheet" href="/css/lightslider.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
  </head>
  <body>
      <!-- Rüfət: start -->
  <div class="container-fluid">
      <section class="header">
        <div class="row login">
          <ul class="list-inline left col-md-6 text-center">
            <li><a href="#">LOG IN</a></li>
            <li><a href="#">REGISTER</a></li>
            <li><a href="#">ACCOUNT</a></li>
          </ul>
          <ul class="list-inline col-md-6 text-center">
            <li><a href="#">ENG</a></li>
            <li><a href="#">AZ</a></li>
            <li><a href="wishlist">WISHLIST</a></li>
          </ul> 
        </div>
      
        <div class="logo">
          <a href="#"><img src="images/Home-bazaar-logo.png"  style="width:200px;"></a>
        </div>

        <div class="row menu">
          <nav class="navbar navbar-default navbar-center">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="/">HOME</a></li>
                @foreach(\App\Category::get() as $cateName)
                    <li><a href="\shopsidebar/{!! $cateName->id !!}">{!! $cateName->CategoryName !!}</a></li>
                @endforeach
                <li><a href="bloglist">BLOG</a></li>
                <li><a href="contact">CONTACT</a></li>
                <li><a href="#"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-2x fa-search" aria-hidden="true"></i></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
        </div>



        @yield('content')







        <section class="container-fluid footer" style="margin-top: 40px;">
      <div class="container">
      <div class="row">

        <!-- About us Start -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 aboutUs">
          <p><b>ABOUT US</b></p>
          <hr/>
         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="images/home-bazaar-logo-white.png" alt="no image">
         </div>
          <h4>HomeBazaar - I appreciate all the positive feedback. It means a lot</h4>
          <ul>
              <li><a href="https://www.facebook.com/homebazaarbaku/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
              <li><a href="https://www.instagram.com/homebazaar_baku/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <!-- About us End -->

        <!-- Information Start -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 information">
          <p><b>INFORMATION</b></p>
          <hr/>
          <ul>
            <li><a href="about">Haqqımızda</a></li>
            <li><a href="delivery">Ödəniş və Çatdırılma</a></li>
            <li><a href="#">Hesabım</a></li>
            <li><a href="shopsidebar">Məhsullarımız</a></li>
          </ul>
        </div>
        <!-- Information End -->

        <!-- Subscribe Start -->
        <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4 subscribe">
          <p><b>SUBSCRIBE</b></p>
          <hr/>
          <h4>&copy;HomeBazaar. Site by<br> Tacirler. All Right Reserved 2016.</h4>
          <input type="email" class="form-control" id="subscribeText" placeholder="Your Email">
          <button class="btn btn-group" type="submit" name="subscribeText">SEND US</button>
        </div>
        <!-- Subscribe End -->

      </div>
    </div>
</section>
      <!-- Arzu:  end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- slider plugin -->
     <script src="/js/lightslider.js"></script>
     <!-- Rating plugin -->
     <script src="/js/rating.js"></script>
    <!-- Main js -->
    <script src="/js/main.js"></script>

    <script>
     

    </script> 
  </body>
</html>



