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

$(function(){
  $('.toggle-btn').on('click', function () {
      $('.admin-sidebar').toggleClass('active');
      $('.admin-page-content').toggleClass('active');
      $("body").toggleClass('no-scroll');    
  });
});

function history_update(url)
{
    $('#history_html').load(url);
    if(!$('.history').hasClass('history-active')){
        history();
    }
}

function history_load(url)
{
    $('#history_html').load(url);
    history();
}

function history_load_($url)
{
    $('#history_html').load(url);
    history();
}

function history()
{
    $('.history').toggleClass('history-active');
    $("body").toggleClass('no-scroll');
}

function _(el) {
    return document.getElementById(el);
}

function fileupload() {
    var file = _("archivefile").files[0];
    var formdata = new FormData();
    formdata.append("archivefile", file);
    var ajax = new XMLHttpRequest();
    ajax.upload.addEventListener("progress", progressHandler, false);
    ajax.open("POST", "");
    ajax.send(formdata);
}

function progressHandler(event) {
    _("uploadstatus").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
}


