$(window).on('load', function(){
	$(".loader").fadeOut("1000");
  $(".bgloader").fadeOut("1000");
  setTimeout(function(){
  $({blurRadius: 0}).animate({blurRadius: 10}, {
      duration: 2000,
      easing: 'swing',
      step: function() {
          $('#background').css({
              "transform": "scale(1.1)",
              "-webkit-filter": "blur("+this.blurRadius+"px)",
              "filter": "blur("+this.blurRadius+"px)"
          });
      }
  })
},1000)
})
