function _message(code)
{
	if(code.code == 200)
	{
		alertify.success(code.message, code.time);
	}
    else if(code.code == 202)
    {
         alertify.notify(code.message, code.time);
    }
	else if(code.code == 300)
	{
        alertify.warning(code.message, code.time);
	}
	else if(code.code == 404)
	{
        alertify.error(code.message, code.time);
	}
    else if(code.code == 100)
    {
        // console.log(code.message);
    }
}

function PushNotifications(message, body)
{
    notifSet(message, body);
}

function PushNotification(notice)
{
    notifSet(notice.notice_message, notice.notice_body);
}

function notifyMe (message, body) {
    var notification = new Notification (message, {
        tag : "ache-mail",
        body : body,
        icon : "/resources/files/system/content/404.png"
    });
}

function notifSet (message, body) {
    if (Notification.permission === "granted")
        setTimeout(notifyMe(message, body), 2000);
    else if (Notification.permission !== "denied") {
        Notification.requestPermission (function (permission) {
            if (!('permission' in Notification))
                Notification.permission = permission;
            if (permission === "granted")
                setTimeout(notifyMe(message, body), 2000);
        });
    }
}

$(function(){
  $('.history-btn').on('click', function () {
        $('.history').toggleClass('history-active');
      $("body").toggleClass('no-scroll');
  });
});

