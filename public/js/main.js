$(document).ready(function(){
	$("#lightSlider").lightSlider({
		item: 8,
		// slideMove: 1,
		// controls: true,
	});


  $('#lightSlider-shop').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9,
    mode: "slide"
  });

});
// Load the IFrame Player API code asynchronously.
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/player_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      // Replace the 'ytplayer' element with an <iframe> and
      // YouTube player after the API code downloads.
      var player;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('youtubeden', {
          height: '390',
          width: '100%',
          playerVars : {
                autoplay : 0,
                 showinfo:0,
                controls: 0
            },
          rel:0,
         
          videoId: 'GswHmpwy24A',
        });
      }

      $(window).scroll(function() {
        $("iframe").each( function() {
            if( $(window).scrollTop() > $(this).offset().top - 400 ) {
                $(this).css('opacity',1);
                player.playVideo();
            } else {
                $(this).css('opacity',0);
                player.pauseVideo();
            }
        }); 
    });
      

$("#stars-default").rating('create', {
		coloron:'#ffd24d',
		cursor: 'pointer',
		coloroff: '#dddddd',
		size: '16px',
		onClick:function() {
			console.log( this.attr('data-rating') );
		}
	} );

$('.btn-wishlist').click(function() {
  var iconHeart = $(this).find('.fa');

  if($(this).hasClass('btn-wishlistActive')) {
    $(this).removeClass('btn-wishlistActive');
    iconHeart.removeClass('fa-heart color-red').addClass('fa-heart-o');
    return false;
  }

  $(this).addClass('btn-wishlistActive');
  iconHeart.removeClass('fa-heart-o').addClass('fa-heart color-red');
});