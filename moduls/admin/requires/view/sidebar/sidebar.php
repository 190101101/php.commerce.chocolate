<?php $model = new \moduls\admin\requires\model\requireModel(); ?>
<div class="admin-sidebar">
    <div class="cat" id="sidebar">
        <?php foreach($model->section() as $section): ?>
            <ul class="cat-btn-ul">
                <li class="cat-btn-li" data-toggle="collapse" data-target="#<?php echo $section->section; ?>"
                >
                    <img src="/resources/files/system/svg/<?php echo $section->section_icon; ?>" class="cat-img">
                    <img src="/resources/files/system/svg/<?php echo $section->section_icon; ?>" class="filter">
                    <span><?php echo $section->section_title; ?></span>
                    <span class="cat-circle"></span>
                </li>
                <div aria-labelledby="headingone" data-parent="#sidebar">
                    <?php foreach($model->menu() as $menu): ?>
                    <?php if($menu->section_id == $section->section_id){ ?>
                    <li class="cat-li <?php if(substr($_SERVER['REQUEST_URI'], 1) == 'panel/'.$menu->menu_slug): echo 'active-cat'; endif; ?>">
                        <a href="/panel/<?php echo $menu->menu_slug; ?>" 
                            class="cat-link"><?php echo $menu->menu_title; ?></a>
                        <span><?php echo $menu->menu_subtitle ?></span>
                    </li>
                    <?php } endforeach; ?>
                </div>
            </ul>
        <?php endforeach; ?>
    </div>

    <div class="sign-content">
        <ul class="nav sidebar-option" role="tablist">
          <li>
            <a class="option">
              <img src="/resources/files/system/svg/user.svg">
              <span><?php echo get_user_login(); ?></span>
            </a>
          </li>
         <li>
            <a href="/signout" class="option">
              <img src="/resources/files/system/svg/logout.svg">
              <span>sign out</span>
           </a>
          </li>
        </ul>
    </div>
    
    <div class="fb-page" data-href="https://www.facebook.com/OrxanShirinov-107544985198748" data-tabs="timeline" data-width="300" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OrxanShirinov-107544985198748" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OrxanShirinov-107544985198748">OrxanShirinov</a></blockquote></div>

</div>


