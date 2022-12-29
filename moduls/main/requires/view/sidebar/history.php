<div class="history-brand histoy-btn">
    <img src="/resources/files/system/svg/react.svg" class="history-logo panel">
</div>

<div class="history">
    <div class="history-sidebar main_history">
        <div class="loader spinner-border spinner-border-sm text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div id="history_html"></div>
    </div>
</div>

<script>
    $('body').on('click', '.histoy-btn', function() {
        history_load('/cart');
    });
</script>
