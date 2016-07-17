@extends('layout')

@section('content')
	<!-- Murad: start -->
      <div class="container-fluid">
        <div class="row">
          <figure class="col-xs-12 section-intro">
            <!-- <img src="images/_slider.jpg" alt=""> -->
            <span class="section-introText">Shop</span>
          </figure>
        </div>

        <div class="container">
          <ol class="breadcrumb bg-white m-t-2">
            <li><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Shop Single</li>
          </ol>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <ul id="lightSlider-shop">
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-1.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-1.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-2.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-2.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-3.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-3.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-4.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-4.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-5.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-5.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-6.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-6.jpg" />
                </li>
                <li data-thumb="http://sachinchoolur.github.io/lightslider/img/thumb/cS-7.jpg">
                    <img src="http://sachinchoolur.github.io/lightslider/img/cS-7.jpg" />
                </li>
            </ul>
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="color-1f1f1f">Blue Stripes Summer Supreme</h1>

            <div>
              <span class="display-ib color-878787 fs-15 m-t-1">30 Reviews</span>
              <div id="stars-default" class="display-ib side-padding"><input type=hidden name"rating"/></div>
            </div>

            <span class="display-b color-red fs-36 m-t-3">$290.5</span>

            <p class="m-t-3 fs-15">This is a Demo Online Store. No orders shall be fulfilled. <br> Zorka is a Design-Driven Shop Theme for WooCommerce and WordPress. If you’re planning to start an online store right away, look no further, get this theme on ThemeForest. <br> This product page demonstrates a “Simple Product“.</p>

            <div class="m-t-3"><a href="addtocard" class="f-lato btn-card btn no-radius color-2b2b2b side-padding-10p">Add to card</a></div>

            <div class="m-t-3">
              <span class="txt-upper fs-15 color display-ib btn-wishlist">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span class="color-777777 side-padding">Add to wishlist</span>
              </span>
            </div>

            <hr class="m-t-1 m-b-1" />

            <div>
              <span class="fs-15">Categories: </span>
              <a href="#" class="display-ib color-green fs-15">Jackets & Coats</a>,
              <a href="#" class="display-ib color-green fs-15">Jackets & Coats</a>,
              <a href="#" class="display-ib color-green fs-15">Jackets & Coats</a>
            </div>

            <hr class="m-t-1 m-b-1" />

            <div>
              <span class="fs-15">Color: </span>
              <a href="#" class="display-ib color-green fs-15">Pink</a>,
              <a href="#" class="display-ib color-green fs-15">Blue</a>,
              <a href="#" class="display-ib color-green fs-15">Yellow</a>
            </div>

            <div>
              <span class="fs-15">Size: </span>
              <a href="#" class="display-ib color-green fs-15">25*10*24</a>,
            
            </div>

            <select>
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <!-- <hr class="m-t-1 m-b-1" /> -->
          </div>
          <!-- end of .col-lg-6 -->
        </div> <!-- end of .row -->

        <hr />

        <div class="row m-b-8 m-t-3">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-b-3">
            <ul class="nav nav-stacked nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Additional Information</a></li>
              <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews(10)</a></li>
            </ul>
          </div> 

          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">Cras ut magna quis metus tristique vulputate. Ut a sapien scelerisque, fermentum lorem a, aliquet mi. Ut lobortis lorem nisl, vel euismod ligula ornare quis. In consectetur elit sed leo fringilla, a placerat ipsum mollis.</div>

              <div role="tabpanel" class="tab-pane" id="profile">dapibus augue a lorem luctus aliquet. Duis consectetur eros arcu, eget consequat orci mattis non.Nam nec ex maximus sem egestas elementum. Duis nisl arcu, sodales ut porttitor at, tincidunt vitae risus. Suspendisse eu nunc ligula. </div>

              <div role="tabpanel" class="tab-pane" id="messages">Proin suscipit metus vitae lectus malesuada scelerisque. Quisque interdum malesuada nisi non accumsan. Suspendisse eget lorem libero. Pellentesque mauris risus, cursus eget aliquet quis, iaculis vel purus. Nam in ligula vel mi interdum tincidunt sit amet eget leo. Phasellus</div>
            </div>
        </div>
      </div> <!-- end of .row -->
    </div> <!-- end of .container -->
    <!-- Murad: end -->

@stop