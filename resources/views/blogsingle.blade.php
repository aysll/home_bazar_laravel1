@extends('layout')

@section('content')
	 <div class="green">
        <h1>BLOG</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 blogSnDirect">
          <div class="col-md-4">home</div> 
          <div class="col-md-2"><i class="fa fa-angle-right" aria-hidden="true"></i></div> 
          <div class="col-md-6">about us</div>
        </div>
      </div>
    </div>  
    
    <hr>

    <div class="container">
      <div class="row blogSnImage">
        <img src="11.jpg" alt="">
      </div>

      <div class="row blogSnTitle">
        <h2 class="blogPageSnTitle">Zorka Men Spring/Summer Vacation</h2>
      </div>

      <div class="row blogPageSnTitleIcons">
        <div class="col-md-1"><i class="fa fa-user" aria-hidden="true"></i>  Admin</div>
        <div class="col-md-2"><i class="fa fa-commenting-o" aria-hidden="true"></i>  April 20,2015</div>
        <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i>  10 Comments</div>
      </div>

      <div class="row blogPageSnText">
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim, illo architecto ipsum, voluptate nostrum non quo, tempore quisquam itaque autem sit perferendis. Harum iste, illo aperiam ipsum voluptatibus in.</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, provident saepe ipsum numquam, pariatur eum dolorum distinctio. Placeat maxime quidem ab dolor optio atque odio, nisi eligendi suscipit, illo eum?</p>
        
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nihil praesentium, a culpa modi eaque cumque tenetur dolores quis velit dolorem inventore fuga sed voluptatibus facilis illo officiis porro ea!</p>
        
        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum assumenda provident hic illum inventore exercitationem voluptate, eius excepturi, fugiat, atque sed perferendis non consequatur culpa ipsum soluta, quibusdam placeat.</p>
        
        <br>

      </div>

      <div class="row blogPageShare">
        <div class="col-md-7">
          <div class="col-md-2 iconDiv">
            <h5 class="blogPageSnTitle">SHARE THIS:</h5>
          </div>
          <div class="col-md-1 iconDiv"><i class="fa fa-facebook" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-twitter" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-vk" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-instagram" aria-hidden="true"></i></div>
        </div>
      </div>
      
      <hr>

      <div class="row blogPageMainText">
        <div class="col-md-2 text-center">
          <img src="11.jpg" alt="">
          <h5 class="blogPageSnTitle">ANNA PANDORA</h5>
          <p>Stylist</p>
        </div>
        <div class="col-md-10 blogComm">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, expedita, facere cum magni quibusdam nobis impedit amet aut harum corrupti distinctio laudantium commodi. Ipsa, odio? Alias error quis saepe vitae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel error quo quidem nisi autem corrupti nulla illo dolorem voluptas hic praesentium adipisci, ut rem minus nemo ex, facilis non expedita. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit dolorum, nobis aspernatur cum, voluptatum nihil ut nisi ullam vitae reprehenderit similique odit, optio alias, debitis ducimus! Tempore laudantium, dolor impedit.</p>
        </div>
      </div>

      <hr>

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/az_AZ/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>


      <div class="fb-comments" data-href="https://www.facebook.com/zuck/posts/10101828640656261" data-width="1160px" data-numposts="5"></div>
    </div>
@stop