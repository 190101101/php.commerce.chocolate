<!-- facebook page -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v13.0&appId=598319978289966&autoLogAppEvents=1" nonce="3dVWFKBj"></script>
<!-- facebook page -->


<!-- facebook chat -->
<!-- 
<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
 -->
<!-- facebook chat -->

<!-- 
<div id="preloader">
    <div id="preloader-inner">
        <div id="preloader-inner-spinner"></div>
    </div>
</div>
 -->


<script src="/resources/resource/general/bower/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/resources/resource/general/bower/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/resources/resource/general/js/page.js"></script>
<script src="/resources/resource/general/js/popper.min.js"></script>
<script src="/resources/resource/general/js/bootstrap.min.js"></script>
<script src="/resources/resource/general/js/alertify.min.js"></script>
<script src="/resources/resource/general/js/general.js"></script>
<script src="/resources/resource/main/render/create.js"></script>
<script src="/resources/resource/main/render/read.js"></script>
<script src="/resources/resource/main/render/update.js"></script>
<script src="/resources/resource/main/render/delete.js"></script>
<script src="/resources/resource/main/js/main.js"></script>
<script src="/resources/resource/main/js/modal.js"></script>
<script src="/resources/resource/main/js/create.js"></script>
<script src="/resources/resource/main/js/update.js"></script>
<script src="/resources/resource/main/js/delete.js"></script>
<script src="/resources/resource/main/js/ajax.js"></script>
<script src="/resources/resource/main/js/jquery.preloader.js"></script>

<!-- 
<script type="text/javascript">
    $(window).preloader({
        delay: 500
    });
</script>
 -->


<?php if(isset($_SESSION['message'])) : ?>
    <script type="text/javascript">
        _message(<?php echo json_encode($_SESSION['message']); ?>);
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>
<!-- 
<script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "107544985198748");
    chatbox.setAttribute("attribution", "biz_inbox");
</script>
 -->

<script>
    $( document ).ready(function() {
        setInterval(function(){
            $.ajax({
                type: 'GET',
                url: '/notice/user',
                success: function(data){
                    var json = $.parseJSON(data);
                    if(json.code == 200)
                    {
                        notice = json.notice;
                        PushNotifications(notice.notice_message, notice.notice_body);
                    }
                }
            });

            $.ajax({
                type: 'GET',
                url: '/notice/all',
                success: function(data){
                    var json = $.parseJSON(data);
                    if(json.code == 200)
                    {
                        notice = json.notice;
                        PushNotifications(notice.notice_message, notice.notice_body);
                    }
                }
            });
        }, 10000);
    });
</script>
