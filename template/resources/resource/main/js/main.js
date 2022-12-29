$(function(){
	 var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};
    var hamburgers = document.querySelectorAll(".hamburger");
    if (hamburgers.length > 0) {
      forEach(hamburgers, function(hamburger) {
        hamburger.addEventListener("click", function() {
          this.classList.toggle("is-active");
        }, false);
      });
    }
 });


/*открытия сайдбара */
$(function(){
  $('.toggle-btn').on('click', function () {
      $('.sidebar').toggleClass('active');
      $('.nav-logo').toggleClass('nav-logo-img-content');
    	$('.footer').toggleClass('hiddenfooter');
      $("body").toggleClass('no-scroll');
  });
});


$(function(){
	var all = $('.navbar-nav a');
	$('.navbar-nav a').on('click', function(){
		$(all).removeClass('cubic');
		$(this).toggleClass('cubic');
	});
});

$(function(){
  $('.video_box img').on('click', function(){
    $('.video_box span').hide();
    $('.video_box img').hide();
    $('.video_box .embed-responsive').show();
  });
})

// nav search
$(function (){
    $('#search_input').keyup(function(event){
        var html = $('#search_input').val();
        $("#search_href").attr("href",  "/search/" + html);
        if(event.which == 13){
            document.location.href = "/search/"+html;
        }
    });
});


$(function (){
    $('.sidebar_search_box #search_input').keyup(function(event){
        var html = $('.sidebar_search_box #search_input').val();
        $("#search_href").attr("href",  "/search/" + html);
        if(event.which == 13){
            document.location.href = "/search/"+html;
        }
    });
});

function history_update(url)
{
    $('#history_html').load(url);
    if(!$('.history').hasClass('history-active')){
        history();
    }
}

function history()
{
    $('.history').toggleClass('history-active');
    $("body").toggleClass('no-scroll');
}

function history_load(url)
{
    $('#history_html').load(url);
    history();
}
