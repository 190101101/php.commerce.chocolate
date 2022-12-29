$(function(){
  $('body').on('click', '.show_modal', function(){
    data_img = $(this).attr("src");
    $(".img_modal .modal-content img").attr('src', data_img);
  });
});


$('body').on('click', '.piece_up', function(){
   url = $(this).attr('data-id');
    $('.main_modal .modal-body').load(url);
});