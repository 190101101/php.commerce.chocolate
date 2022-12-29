<!-- facebook page -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v13.0&appId=598319978289966&autoLogAppEvents=1" nonce="3dVWFKBj"></script>
<!-- facebook page -->

<script src="/resources/resource/general/bower/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/resources/resource/general/bower/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/resources/resource/general/js/page.js"></script>
<script src="/resources/resource/general/js/popper.min.js"></script>
<script src="/resources/resource/general/js/bootstrap.min.js"></script>
<script src="/resources/resource/general/js/alertify.min.js"></script>
<script src="/resources/resource/general/js/general.js"></script>
<script src="/resources/resource/admin/render/create.js"></script>
<script src="/resources/resource/admin/render/update.js"></script>
<script src="/resources/resource/admin/js/ajax.js"></script>
<script src="/resources/resource/admin/js/status.js"></script>
<script src="/resources/resource/admin/js/create.js"></script>
<script src="/resources/resource/admin/js/update.js"></script>
<script src="/resources/resource/admin/js/delete.js"></script>
<script src="/resources/resource/admin/js/admin.js"></script>

<?php if(isset($_SESSION['message'])) : ?>
    <script type="text/javascript">
        message = <?php echo json_encode($_SESSION['message']); ?>;
        _message(message);
    </script>
    <?php unset($_SESSION['message']); ?>
<?php endif; ?>

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

