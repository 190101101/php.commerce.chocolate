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
    $('.content_video').mouseleave(function(){
        $('.loader').css("opacity", '0');
    });
});

$(function(){
    $('.video_image img').on('click', function(){
        $('.video_inner').hide();
        $('.video_view').show();
        $('.video').show();
        $('.loader').css("opacity", '1');
    });
})

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

function history_render()
{
    if(!$('.history').hasClass('history-active')){
        history();
    }
}
