<?php 
    $uri = [
        '/panel/admin',
        '/panel/guest',
    ];

if(!in_array($_SERVER['REQUEST_URI'], $uri)): ?>
    <div class="history-brand admin-btn">
        <img src="/resources/files/system/svg/react.svg" class="history-logo panel">
    </div>
<?php endif; ?>

<div class="history">
    <div class="history-sidebar">
        <div class="loader spinner-border spinner-border-sm text-success" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        <div id="history_html"></div>
    </div>
</div>


