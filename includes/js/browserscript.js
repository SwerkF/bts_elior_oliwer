$(window).on('load', function(){
	$(".loader").fadeOut("1000");
})
$(document).ready(function(){
	$.ajax({
		type:'GET',
		url:'http://www.stadjutor-sio.com/ptitdej/dist/php/getbonus.php',
		sync:false,
		data:{},
		success : function (data)
							{
								console.log(data);
								bonus(data);
							}
})
function bonus(data)
{
	

}
  $(".hamburger").fadeTo( 1000, 1) ;
  $("#next").fadeTo( 1000, 1) ;
  var animation = bodymovin.loadAnimation({
  container: document.getElementById('Home_title'),
  renderer: 'svg',
  loop: false,
  autoplay: true,
  path: ''
})
setTimeout(function(){
$(".lead").fadeTo( 1000, 1) ;
},1000)
  var i=-1;
  console.log(i);
	$('#bthome').on('click',function(){
    if (i==-1) {

    }
    else if (i==0) {
      $(".Contact").removeClass("animated fadeInUp");
      $("#classement").removeClass("animated fadeInUp");
      $("#classement").addClass("animated fadeOutDown");
			$("#classement").css("display", "none");
      $(".home").removeClass("animated fadeOutUp");
      $(".home").removeClass("animated fadeOutDown");
			$('.home').css("display", "block");
      $(".home").addClass("animated fadeInUp");
      $( "body" ).animate({
               backgroundColor: "#011832",
             }, 1000 );
      i=-1;
      console.log(i);
    }
    else if (i==1) {
      $("#classement").removeClass("animated fadeOutUp");
      $(".Contact").removeClass("animated fadeInUp");
      $(".Contact").removeClass("animated fadeOutDown");
      $(".Contact").addClass("animated fadeOutDown");
			$(".Contact").css("display", "none");
      $(".home").removeClass("animated fadeOutUp");
      $(".home").removeClass("animated fadeOutDown");
			$('.home').css("display", "block");
      $(".home").addClass("animated fadeInUp");
      $( "body" ).animate({
               backgroundColor: "#011832",
             }, 1000 );
      i=-1;
      console.log(i);
      $(".Contact").removeClass("animated fadeOutDown");
    }
  })


  $('#btclassement').on('click',function(){
    if (i==-1) {
      /*$("#classement").removeClass("animated fadeOutDown");
      $(".home").removeClass("animated fadeInUp");
      $(".home").addClass("animated fadeOutDown");
      $("#classement").removeClass("animated fadeOutUp");
      $("#classement").addClass("animated fadeInUp");
      $( "body" ).animate({
               backgroundColor: "#1A237E",
             }, 1000 );
      i=0;
      console.log(i);
      setTimeout(function(){
      $("#classement").addClass("animated fadeInUp");},700)*/
      $(".home").removeClass("animated fadeOutup");
      $(".home").removeClass("animated fadeInUp");
      $("#classement").removeClass("animated fadeOutDown");
      $(".home").addClass("animated fadeOutUp");
      $( "body" ).animate({
               backgroundColor: "#1A237E",
             }, 1000 );
     i=i+1;
     console.log(i);
		 $(".home").css("display", "none");
		 $('#classement').css("display", "block");
     setTimeout(function(){
     $("#classement").addClass("animated fadeInUp");},700)
    }
    else if (i==0) {

    }
    else if (i==1) {
      $("#classement").removeClass("animated fadeOutUp");
			$("#classement").removeClass("animated fadeOutDown");
      $(".Contact").removeClass("animated fadeInUp");
      $(".Contact").addClass("animated fadeOutDown");
      $(".Contact").removeClass("animated fadeOutDown");

      $( "body" ).animate({
               backgroundColor: "#1A237E",
             }, 1000 );
      i=0;

      setTimeout(function(){
			$(".Contact").css("display", "none");
			$('#classement').css("display", "block");
      $("#classement").addClass("animated fadeInUp");},700)
      console.log(i);
    }
  })

  $('#btcontact').on('click',function(){
    if (i==-1) {
      $("#classement").removeClass("animated fadeOutDown");
      $(".home").removeClass("animated fadeInUp");
      $(".home").addClass("animated fadeOutDown");
			$(".home").css("display", "none");
 		 	$('.Contact').css("display", "block");
      $(".Contact").removeClass("animated fadeOutUp");
      $(".Contact").addClass("animated fadeInUp");
      $( "body" ).animate({
               backgroundColor: "#311B92",
             }, 1000 );
      i=1;
      console.log(i);
    }
    else if (i==0) {
      $(".Contact").removeClass("animated fadeOutDown");
      $("#classement").removeClass("animated fadeInUp");
      $("#classement").addClass("animated fadeOutDown");
			$("#classement").css("display", "none");
 		 	$('.Contact').css("display", "block");
      $(".Contact").removeClass("animated fadeOutUp");
      $(".Contact").addClass("animated fadeInUp");
      $( "body" ).animate({
               backgroundColor: "#311B92",
             }, 1000 );
      i=1;
      console.log(i);
    }
    else if (i==1) {

    }
  })



   $('#next').on('click',function(){
     if (i==-1) {
       $(".home").removeClass("animated fadeOutup");
       $(".home").removeClass("animated fadeInUp");
       $("#classement").removeClass("animated fadeOutDown");
       $(".home").addClass("animated fadeOutUp");
       $( "body" ).animate({
                backgroundColor: "#1A237E",
              }, 1000 );
      i=i+1;
      console.log(i);
			$('#classement').css("display", "block");
      setTimeout(function(){
			$(".home").css("display", "none");
      $("#classement").addClass("animated fadeInUp");},700)
      }
      else if (i==0) {
        $( "body" ).animate({
                 backgroundColor: "#311B92",
               }, 1000 );
        $("#classement").removeClass("animated fadeInUp");
        $("#classement").addClass("animated fadeOutUp")
				$('.Contact').css("display", "block");
        setTimeout(function(){
				$("#classement").css("display", "none");
        $(".Contact").addClass("animated fadeInUp");},700)
        i=i+1;
        console.log(i);
      }
      else if(i==1) {
        $("#classement").removeClass("animated fadeOutUp");
        $(".Contact").removeClass("animated fadeInUp");
        $(".Contact").removeClass("animated fadeOutDown");
        $(".Contact").addClass("animated fadeOutDown");
        $(".home").removeClass("animated fadeOutUp");
        $(".home").removeClass("animated fadeOutDown");
				setTimeout(function(){
				$(".Contact").css("display", "none");
				$(".home").css("display", "block");
        $(".home").addClass("animated fadeInUp");},700)
        $( "body" ).animate({
                 backgroundColor: "#011832",
               }, 1000 );
        i=-1;
        console.log(i);
        $(".Contact").removeClass("animated fadeOutDown");
      }
    })
}, 1000)
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();
    });

    function hamburger_cross() {

      if (isClosed == true) {
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }

  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });
});


$(document).ready(function(){
  /*Highcharts.chart('chart', {

  });*/

})
