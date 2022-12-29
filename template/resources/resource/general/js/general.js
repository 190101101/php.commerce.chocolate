function _message(code)
{
	if(code.code == 200)
	{
		alertify.success(code.message);
	}
	else if(code.code == 300)
	{
        alertify.warning(code.message);
	}
	else if(code.code == 404)
	{
        alertify.error(code.message);
	}
}

$(function(){
  $('.history-btn').on('click', function () {
    	$('.history').toggleClass('history-active');
      $("body").toggleClass('no-scroll');
  });
});

