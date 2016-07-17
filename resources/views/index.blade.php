<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home Bazaar</title>
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

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
  </head>
  <body>
      <!-- Rüfət: start -->
  <div class="container-fluid">
      <section class="header">
        <div class="row login">
          <ul class="list-inline left col-md-6 text-center">
            <li><a href="#">GİRİŞ</a></li>
            <li><a href="#">QEYDİYYAT</a></li>
            <li><a href="#">HESABIM</a></li>
          </ul>
          <ul class="list-inline col-md-6 text-center">
            <li><a href="#">AZ</a></li>
            <li><a href="#">RUS</a></li>
            <li><a href="wishlist">SEÇİLMİŞLƏR</a></li>
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
              
                <li><a href="index">ANA SƏHİFƏ</a></li>
                @foreach(\App\Category::get() as $cateName)
                    <li><a href="\shopsidebar/{!! $cateName->id !!}">{!! $cateName->CategoryName !!}</a></li>
                @endforeach
                <li><a href="bloglist">BLOQUMUZ</a></li>
                <li><a href="contact">ƏLAQƏ</a></li>

                <li><a href="addtocard"><i class="fa fa-2x fa-cart-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-2x fa-search" aria-hidden="true"></i></a></li>
              
              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>

      <div class="row sliderr">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active" id="slide1">
              @foreach($slider->all() as $slider)
               <img src="../uploads/images/{{ $slider->image1 }}" alt="no image" />
                <div class="carousel-caption">
                  <h1>{!! $slider->slogan1 !!} </h1>
                  <p>GIVE YOUR FULL OF LOVE FOR THIS PLANET</p>
                  <a href="\shopsidebar" class="btn-R"><span class="btn-Rspan">BÜTÜN MƏHSULLAR</span></a>
                </div>
              @endforeach
              </div>

              <div class="item" id="slide2">
              @foreach($slider->all() as $slider)
               <img src="../uploads/images/{{ $slider->image2 }}" alt="no image" />
                <div class="carousel-caption">
                  <h1>{!! $slider->slogan2 !!} </h1>
                  <p>GIVE YOUR FULL OF LOVE FOR THIS PLANET</p>
                  <a href="" class="btn-L">MƏHSULLARA BAX</a>
                  <a href="" class="btn-R"><span class="btn-Rspan">BÜTÜN MƏHSULLAR</span></a>
                </div>
              @endforeach
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control cr-L" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <!-- <span class="sr-only">Previous</span> -->
              </a>
              <a class="right carousel-control cr-R" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <!-- <span class="sr-only">Next</span> -->
              </a>
            </div>
        </div>
      </div>
      </section>
    </div>

      <!-- Rüfət:  end -->
    
      <!-- Murad: start -->
     <div class="bg-white padding-section">
        <div class="container">
          <div class="row txt-center">
            <h2 class="col-xs-12 txt-upper color-2b2b2b">HOMEBAZAAR-A XOŞ GƏLMİŞSİNİZ!</h2>

            <p class="col-xs-12 side-padding-10p color-949494 m-b-3">Siz burada evinizin daha səliqəli və rahat görünməsi üçün lazım olan ev təşkilatı çeşidli aksesuarlar əldə edə bilərsiniz.Eyni zamanda HomeBazaar sağlam həyat tərzi sürməyiniz üçün sizə müxtəlif detoks butulkalarını təklif edir...</p>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-b-2">
              <figure>
                <a href="about" class="display-b color-2b2b2b">
                  <img src="images/_slider.jpg" class="img-responsive" alt="">

                  <figcaption class="txt-upper m-t-2">Haqqımızda</figcaption>
                </a>
              </figure>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-b-2">
              <figure>
                <a href="offers" class="display-b color-2b2b2b">
                  <img src="images/_slider.jpg" class="img-responsive" alt="">

                  <figcaption class="txt-upper m-t-2">Xüsusi Endirimlər və təkliflər</figcaption>
                </a>
              </figure>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 m-b-2">
              <figure>
                <a href="delivery" class="display-b color-2b2b2b">
                  <img src="images/_slider.jpg" class="img-responsive" alt="">

                  <figcaption class="txt-upper m-t-2">Ödəniş və Çatdırılma</figcaption>
                </a>
              </figure>
            </div>
          </div>
        </div> <!-- end of .container welcome -->
      </div>

      <div class="bg-f1f1f1 padding-section">
        <div class="container">
          <div class="row txt-center">
            <h2 class="col-xs-12 txt-upper color-2b2b2b f-lato">ƏN ÇOX SATILANLAR</h2>

           {{--  <ul class="nav nav-tabs display-ib m-t-3" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Ana səhifə</a></li>

              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>

              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>

              <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
            </ul> <!-- end of .nav-tabs  --> --}}

            <div class="tab-content m-t-3">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                
                <div class="row">
                  @foreach($productBestSeller as $product)
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 m-b-3">
                    
                          <div class="thumbnail no-margin no-radius">
                            <a href="#" class="display-b">
                              <img src="../uploads/images/{!! $product->Picture  !!}" style="width: 100%; height: 200px;" alt="" />
                              <div class="caption" style="padding:0;">
                                <h3 class="f-lato">{!! $product->ProductName !!}</h3>
                                <p class="f-lato">{!! $product->UnitPrice !!}</p>
                              </div>
                            </a>
                          </div> <!-- end of .thumbnail -->
                          <span class="display-b">
                              <a href="#" class="f-lato btn-card btn btn-block no-radius color-2b2b2b">SİFARİŞ ET</a>
                          </span>
                      {{-- @endforeach --}}
                    </div>
                  @endforeach
                </div> <!-- end of .row -->
                 
                </div> <!-- end of .col-lg-6 main first -->


                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                  <div class="row">
                    <div class="col-xs-12 i-frame">
                      <h2 class="f-lato">We from France. <br><span class="color-green">BestWishes</span> for you</h2>

                      <p class="f-lato">Hawker & Jonre PSD Template is an awesome design idea for your online shop. Creative. Modern. Elegant. Clean. Also it will be very easy to customize, enable you to either create a stunning layout of your own or just do some minor and some adjustments.</p>

                      <a href="#" class="display-b color-3b3b3b headline headline-green f-lato">View more</a>
                    </div>
                  </div> <!-- end of .row  -->
                </div> <!-- end of .col-lg-6 main second  -->
              </div>

              <div role="tabpanel" class="tab-pane" id="profile">...</div>
              <div role="tabpanel" class="tab-pane" id="messages">...</div>
              <div role="tabpanel" class="tab-pane" id="settings">...</div>
            </div> <!-- end of .tab-content  -->

          </div>
        </div>
      </div>
      <!-- Murad:  end -->

      <!-- Gunel: start -->
      <section id="new_arrivals">
        <div class="container">
          <div class="row text-center">
            <h2>YENİ MƏHSULLAR</h2>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
             <div class="gift clearfix m-b-2"> 
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
              <a href="#">
                <img class="center-block img-responsive" src="images/plant1.jpg">
              </a>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h2 class="text-left">
                MORE THAN <br> A GIFT.<br>IT'S  <span>LOVE</span>. 
                </h2>
                    <p><a class="text-left headline headline-green" href="#">VIEW MORE</a></p>
              </div>
              </div>
            </div>
             @foreach($productBestSellerrow1 as $product)
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                  <div class="lil_arrival">
                    <a href="#">
                      <img class="center-block img-responsive" style="height:200px;" src="../uploads/images/{!! $product->Picture  !!}">
                    </a>
                    <h6 class="text-center">{!! $product->ProductName !!}</h6>
                    <p class="text-center">{!! $product->UnitPrice !!}</p>
                    <button type="button" class="btn btn-default btn-block btn-card">SİFARİŞ ET</button>
                  </div>
                </div>
            @endforeach
        </div>
        <div class="row">
          @foreach($productBestSellerrow2 as $product)
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                  <div class="lil_arrival">
                    <a href="#">
                      <img class="center-block img-responsive" style="height:200px;" src="../uploads/images/{!! $product->Picture  !!}">
                    </a>
                    <h6 class="text-center">{!! $product->ProductName !!}</h6>
                    <p class="text-center">{!! $product->UnitPrice !!}</p>
                    <button type="button" class="btn btn-default btn-block btn-card">SİFARİŞ ET</button>
                  </div>
                </div>
            @endforeach
        </div>
        </div>
      </section>
      <section id="video">
      <div id="youtubeden"></div>
        <!-- <div class="embed-responsive embed-responsive-4by3">
        
          <iframe id="ytplayer" style="width: 100%; height: 350px;" src="https://www.youtube.com/embed/GswHmpwy24A?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div> -->
       <!--  <div class="row">
         <h1>Fruit Infused Water Bottles</h1> 
        </div> -->
        
      </section>
      <!-- Gunel:  end -->

      <!-- Aysel: start -->
 <div class="container fluid">
            <div class="container">
                   <div class="row ourrow">
                      <h2 class="text-center">BLOQUMUZDAN</h2>
                   </div>

    <div class="row rowcol"> 
    <div class="col-md-5 col-md-offset-1"> 
          <div class="ourcol"><a href="bloglist"><img class="img-responsive" src="images/IMG_20160517_234110_-1704803325.jpg"></a></div>
           <div class="row rownewsleft">
               <a href="bloglist">
                      <div class="col-md-3">
                          <div id="datedayleft"><b>12</b>
                            <div id="datemonthleft"><b>MART</b></div>
                          </div>
                      </div>
                      <div class="col-md-9">
                          <div class="hhp">
                                <h4>Lorem ipsum dolor sit amet, consectetur adipisicit</h4>
                                <h6>Lorem ipsum dolor sit amet</h6>
                                <p>Lorem ipsum dolor sit amdolore magna alienim ad minim veniam,
                                quis nostrud exeint occaecat cupidatat non
                                proident, sunt anim id est laborum.</p>
                          </div>
                      </div>
                  </a>
            </div>
            </div>
    <div class="col-md-5">
    <div class="ourcol"><a href="bloglist"><img class="img-responsive" src="images/plant1.jpg"></a></div>
            <div class="row rownewsright">
              <a href="bloglist">
                  <div class="col-md-3">
                    <div id="datedayright"><b>23</b>
                      <div id="datemonthright"><b>MART</b></div>
                    </div>
                  </div>
                  <div class="col-md-9">
                  <div class="hhp">
                      <h4>Lorem ipsum dolor sit amet, consectetur adipisicit</h4>
                      <h6>Lorem ipsum dolor sit amet</h6>
                      <p>Lorem ipsum dolor sit amdolore magna alienim ad minim veniam,
                      quis nostrud exeint occaecat cupidatat non
                      proident, sunt anim id est laborum.</p>
                  </div>
                  </div>
              </a>
              </div>
      
    </div>
    </div>
    </div>
    </div>
  
  <div class="classrow">   
  <div class="hidden-xs">
    <div class="row ">
        <div class="col-md-2 col-md-offset-2 ">
          <div class="followinsta">BİZİ İNSTAGRAMDA İZLƏYİN</div>
       </div>
   </div>


  <div id="instafotos">
  
       <ul id="lightSlider">
        <li data-thumb="images/IMG_20160524_145055_-1147962981.jpg">
            <img src="images/IMG_20160524_145055_-1147962981.jpg" />
        </li>
        <li data-thumb="images/IMG_20160524_130824_427081888.jpg">
            <img src="images/IMG_20160524_130824_427081888.jpg" />
        </li>
        <li data-thumb="images/IMG_20160409_201802_1690742545.jpg">
            <img src="images/IMG_20160409_201802_1690742545.jpg" />
        </li>
        <li data-thumb="images/IMG_20160525_102358_105774757.jpg">
            <img src="images/IMG_20160525_102358_105774757.jpg" />
        </li>
        <li data-thumb="images/IMG_20160527_143933_1127977340.jpg">
            <img src="images/IMG_20160527_143933_1127977340.jpg" />
        </li>
        <li data-thumb="images/IMG_20160527_144854_747487239.jpg">
            <img src="images/IMG_20160527_144854_747487239.jpg" />
        </li>
      
        <li data-thumb="images/IMG_20160524_145055_-1147962981.jpg">
            <img src="images/IMG_20160524_145055_-1147962981.jpg" />
        </li>
        <li data-thumb="images/pitcher.jpg">
            <img src="images/pitcher.jpg" />
        </li>
        <li data-thumb="images/IMG_20160409_201802_1690742545.jpg">
            <img src="images/IMG_20160409_201802_1690742545.jpg" />
        </li>
        <li data-thumb="images/gostak.jpg">
            <img src="images/gostak.jpg" />
        </li>
        <li data-thumb="images/plant1.jpg">
            <img src="images/plant1.jpg" />
        </li>
       
          <li data-thumb="images/angel.jpg">
            <img src="images/angel.jpg" />
        </li>
        <li data-thumb="images/coaster.jpg">
            <img src="images/coaster.jpg" />
        </li>
        <li data-thumb="images/kidsinfuser.jpg">
            <img src="images/kidsinfuser.jpg" />
        </li>
       
    
    </ul>
                
 
          
      
   </div>

    <div class="row ">
        <div class="col-md-1 col-md-offset-9">
          <div class="natural"><b>HOME BAZAAR</b></div>
        </div>
    </div>
   </div> 
</div>
</div>
</div>
      <!-- Aysel:  end -->

      <!-- Arzu: start -->
      <section class="container-fluid footer">
      <div class="container">
      <div class="row">

        <!-- About us Start -->
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 aboutUs">
          <p><b>HAQQIMIZDA</b></p>
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
          <p><b>MƏLUMAT</b></p>
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
          <p><b>ABUNƏ OLUN</b></p>
          <hr/>
          <h4>&copy;HomeBazaar. Site by<br> Tacirler. All Right Reserved 2016.</h4>
          <input type="email" class="form-control" id="subscribeText" placeholder="E-mailiniz">
          <button class="btn btn-group" type="submit" name="subscribeText">GÖNDƏR</button>
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
    <!-- Main js -->
    <script src="/js/main.js"></script>

    
  </body>
</html>
