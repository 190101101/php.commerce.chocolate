<?php use library\cookies; ?>
<?php $model = new \moduls\main\requires\model\requireModel(); ?>
<div class="sidebar">
    <div class="sidebar_search_box">
        <div class="search-box">
            <input 
                type="text" 
                name="search" 
                class="search-txt" 
                placeholder="Что ищем?...вкладки, chrome,psd"
                id="sidebar_search_input" 
                aria-label="Search"
                required>
            <a 
                id="sidebar_search_href" 
                class="search-btn"
                type="submit">
                <img src="/resources/files/system/svg/search.svg" class="nav-search-icon">
          </a>
        </div>
    </div>
    <div class="cat" id="sidebar">
        <ul class="cat-btn-ul">
            <li class="cat-btn-li active">
                <img src="/resources/files/system/svg/react.svg" class="cat-img">
                <img src="/resources/files/system/svg/react.svg" class="filter">
                <div class="cat-word-box">
                    <span>настройка</span>
                </div>
                <span class="cat-circle"></span>
            </li>
            <div id="sidebarurl">
                <?php if(ulogin()): ?>
                <li class="cat-li">
                    <a class="cat-link profile_btn">профиль</a>
                    <span>Профиль пользователя</span>
                </li>

                <li class="cat-li">
                    <a class="cat-link buy_btn">покупки</a>
                    <span>покупки пользывателя</span>
                </li>
                <?php endif; ?>

                <li class="cat-li">
                    <a href="/list" class="cat-link">список продуктов</a>
                    <span>цена, порция продукта</span>
                </li>

                <li class="cat-li">
                    <a href="/gallery" class="cat-link">галерея</a>
                    <span>разные картинки</span>
                </li>

                <li class="cat-li">
                    <a href="/video" class="cat-link">видео</a>
                    <span>разные видео</span>
                </li>

                <li class="cat-li">
                    <a href="/blog/p/1" class="cat-link">блог</a>
                    <span>все посты</span>
                </li>

                <?php if(!ulogin()): ?>
                <li class="cat-li">
                    <a class="cat-link signin_btn">войти</a>
                    <span>войти в свой профиль</span>
                </li>

                <li class="cat-li">
                    <a class="cat-link signup_btn">зарегистрироваться</a>
                    <span>регистрация</span>
                </li>
                <?php else: ?>
                <li class="cat-li">
                    <a href="/signout" class="cat-link">выход</a>
                    <span>завершить сеанс</span>
                </li>
                <?php endif; ?>

            </div>
        </ul>

        <ul class="cat-btn-ul">
          <li class="cat-btn-li" data-toggle="collapse" data-target="#sidebarproduct"> 
            <img src="/resources/files/system/svg/category.svg" class="cat-img">
            <img src="/resources/files/system/svg/category.svg" class="filter">
            <div class="cat-word-box">
              <span>по категориям</span> 
            </div>
            <span class="cat-circle"></span>
          </li>
          <div id="sidebarproduct" class="collapse" aria-labelledby="headingthree" data-parent="#sidebar">
                <li class="cat-li">
                    <a href="/category/p/1" class="cat-link"> все категории </a>
                    <span>все категории </span>
                </li>
              <?php foreach($model->category() as $category): ?>
                    <li class="cat-li">
                        <a href="/shop/category/<?php echo seo($category->category_slug); ?>" class="cat-link">
                            <?php echo $category->category_title; ?>    
                        </a>
                        <span><?php echo $category->category_subtitle; ?></span>
                    </li>
                <?php endforeach; ?>
          </div>
        </ul>

        <ul class="cat-btn-ul">
            <li class="cat-btn-li" data-toggle="collapse" data-target="#sidebarlanguage">
                <img src="/resources/files/system/svg/react.svg" class="cat-img">
                <img src="/resources/files/system/svg/react.svg" class="filter">
                <div class="cat-word-box">
                    <span>выберите язык</span>
                </div>
                <span class="cat-circle"></span>
            </li>
            <div id="sidebarlanguage" class="collapse">
                <li class="cat-li">
                    <a data-id="az" class="cat-link">az</a>
                    <span>Azərbaycan dili</span>
                </li>

                <li class="cat-li">
                    <a data-id="ru" class="cat-link">ru</a>
                    <span>русский язык</span>
                </li> 

                <li class="cat-li">
                    <a data-id="en" class="cat-link">en</a>
                    <span>english language</span>
                </li>
            </div>
        </ul>
  </div>

<div class="fb-page" data-href="https://www.facebook.com/OrxanShirinov-107544985198748" data-tabs="timeline" data-width="300" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OrxanShirinov-107544985198748" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OrxanShirinov-107544985198748">OrxanShirinov</a></blockquote></div>
</div>

<script>
    $('body').on('click', '.buy_btn', function() {
        history_update('/buy');
    });

    $('body').on('click', '.profile_btn', function() {
        history_update('/profile');
    });
    
    $('body').on('click', '.signin_btn', function() {
        history_update('/signin');
    });

    $('body').on('click', '.signup_btn', function() {
        history_update('/signup');
    });

    $(function (){
        $('#sidebar_search_input').keyup(function(event){
            var html = $('#sidebar_search_input').val();
            url = html.split(' ').join('-');
            if(event.which == 13){
                document.location.href = "/search/p/"+url;
            }
        });
    });

    $('body').on('click', '.cat-li .cat-link', function() {
        $.ajax({
            type: 'GET',
            url: '/lang/'+$(this).attr("data-id"),
            success: function(data){
                var json = $.parseJSON(data);
                if(json.code == 200)
                {
                    _message(json);
                }
            }
        });
    });
</script>
