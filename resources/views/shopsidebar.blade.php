@extends('layout')

@section('content')
	     <!-- Shop SideBar page start -->

    <!-- green blog start-->
 <!-- green blog start-->
<section class="shopSidebar">

     <div class="container-fluid">
      <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 green_contact">
            <h1>SHOP</h1>
          </div>
        </div>
      </div>
    <!-- green blog end -->

   <div class="container">
        <div class="row">
          <div class="navbar-contact">
            <ul class="nav navbar-nav">
              <li><a href="index">home</a></li>
              <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">shop sidebar</a></li>
            </ul>
          </div>
      </div>
    </div>

    <hr>

    <div class="container">
     <!-- Showing Results line start -->   
            <div class="showingResults">
              <h5>SHOWING 1-9 OF 100 RESULTS</h5>
            </div>

            
     
     <!-- Showing Results line end -->
    </div>

    <div class="container">  <hr>
     
        <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class=" col-xs-11 col-sm-6 col-md-12 col-lg-12">
            <div class="filter">
                <h3 class="text-center">FILTER</h3>
                <div id="double_number_range" data-min="25" data-max="2541" ></div>
                 <h5 class="pull-md-left pull-lg-left">PRICE: 12$-100$</h5>
                <button type="button" class="btn btn-secondary">Filter</button>
            </div>
          </div>
        
          <div class=" col-xs-11 col-sm-6 col-md-12 col-lg-12">
              <div class="social">
                  <ul>
                      <li><a href="https://www.facebook.com/homebazaarbaku/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.instagram.com/homebazaar_baku/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  </ul>
                 <div class="input-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" class="form-control col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Search">
                </div>
              </div>
          </div>
         
          <div class=" col-xs-11 col-sm-8 col-md-12 col-lg-12">
            <div class="category">
              <h2 class="text-center">Categories</h2>
              <ul class="list-group">
                @foreach(\App\Category::get() as $cateName)
                    <li class="list-group-item"><a href="\shopsidebar/{!! $cateName->id !!}">{!! $cateName->CategoryName !!}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">




          @foreach($getProductByCategoryId as $categoryID)
              <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <div class="lil_arrival">
                  <a href="\shopsingle/{!! $categoryID->id !!}">
                    <img class="center-block img-responsive" style="height: 200px;" src="../uploads/images/{!! $categoryID->Picture !!}">
                  </a>
                  <h6 class="text-center">{!! $categoryID->ProductName !!}</h6>
                  <p class="text-center">{!! $categoryID->UnitPrice !!}</p>
                  <a href="shopsingle"><button type="button" class="btn btn-default btn-block btn-card">SİFARİŞ ET</button> </a>
                </div>
              </div>
          @endforeach




        </div>
          
        </div>
        </div>

      <div class="container"><hr>
        <div class="row pages">
          
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary">1</button>
                <button type="button" class="btn btn-secondary">2</button>
                <button type="button" class="btn btn-secondary">3</button>
                <button type="button" class="btn btn-secondary">5</button>
                <button type="button" class="btn btn-secondary">6</button>
                <a href="#"></a><button type="button" class="btn btn-default btnI"><i class="fa fa-angle-right" aria-hidden="true"></i></button></a>
              </div>
            </div>
          </div>
   
      </div>
</section>


  <!-- Shop SideBar page end -->
@stop