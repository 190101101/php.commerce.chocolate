<!-- slider -->
<div class="slider_content">
    <div class="slider_box">
        <div class="carousel_title_box">
            <div class="carousel_title">
                <span>Авторские вкусные сладости</span>    
                <span>и шоколад</span>    
            </div>
            <div class="carousel_subtitle">
                Lorem ipsum dolor sit amet consectetur adipisicing.
            </div>
        </div>
        <div id="carouselcontrol" class="carousel slide carousel-fade" data-ride="carousel">
            
        <div class="carousel-inner">
            <?php foreach ($data->slider as $slide): ?>
                <div class="carousel-item <?php echo $i++ == 1 ? 'active' : ''; ?>">
                    <img src="/resources/files/upload/slider/<?php echo $slide->slider_image; ?>">
                </div>
            <?php endforeach; ?>
        </div>

          <a class="carousel-control-prev" href="#carouselcontrol" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselcontrol" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="slider_under">
            <a href="/shop" class="read_more">
                <span>
                    магазин сладостей &#8594;
                </span>
            </a>
        </div>
    </div>
</div>
<!-- slider -->

<!-- center content -->
<div class="center_container">
    <div class="row">
        <div class="col-lg-6">
            <div class="left_column">
                <div class="left_column_box first">
                    <div class="left_column_inner">
                        <span>Наша кондитерская производит</span>
                        <span>уникальные сладости</span> 
                        <span>для любителей вкусненького</span>
                    </div>
                </div>
                <div class="left_column_box second">
                    <div class="left_column_inner">
                        Curabitur tortor ante, vestibulum vel lacus id, semper malesuada sem. Sed sit amet tortor augue. Integer magna neque
                    </div>
                </div>
                <div class="left_column_box third">
                    <div class="left_column_inner">
                        <div>
                            <img src="/resources/files/system/svg/file.svg">
                            <span>Цена на все товары</span>
                        </div>
                        <div>
                            <a href="/list">Проводить исследования &#8594;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="right_column">
                <div class="right_column_box first">
                    <div class="right_column_inner">
                        <div>
                            <img src="/resources/files/system/svg/wheat.svg">
                        </div>
                        <div>
                            <span>Натуральный органический продукт</span>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum cupiditate quo non omnis eligendi, asperiores.</span>
                        </div>
                    </div>
                </div>
                <div class="right_column_box second">
                    <div class="right_column_inner">
                        <div>
                            <img src="/resources/files/system/svg/present.svg">
                        </div>
                        <div>
                            <span>Дизайн упаковки</span>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum cupiditate quo non omnis eligendi, asperiores.</span>
                        </div>
                    </div>
                </div>
                <div class="right_column_box third">
                    <div class="right_column_inner">
                        <div>
                            <img src="/resources/files/system/svg/cocoa.svg">
                        </div>
                        <div>
                            <span>Какао лучшего качества</span>
                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum cupiditate quo non omnis eligendi, asperiores.</span>
                        </div>
                    </div>                                        
                </div>
            </div>
        </div>
    </div>
</div>

<!-- center content -->
<div class="center_animate">
    <div class="center_animate_content">
        Сделано с любовью <span>уникальные сладости</span> для гурманов
    </div>
</div>
<!-- center_animate -->

<!-- about_online -->
<div class="online_store">
    <div class="online_store_head">
        <span>онлайн магазин</span>
        <span>Откройте для себя сладкое вкусное</span>
    </div>

    <div class="online_store_box">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mx-auto">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/online/chocolate (1).png">
                        <div>
                            <span>Lorem, ipsum dolor.</span>
                            <span>42.68$</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/online/chocolate (2).png">
                        <div>
                            <span>Lorem, ipsum, dolor.</span>
                            <span>27.13$</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/online/chocolate (3).png">
                        <div>
                            <span>Lorem, ipsum dolor.</span>
                            <span>33.23$</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/online/chocolate (4).png">
                        <div>
                            <span>Lorem, ipsum, dolor.</span>
                            <span>29.11$</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- about_online -->

<!-- content_video -->
<div class="content_video">
    <div class="video_inner">
        <div class="video_image">
            <span>смотреть видео</span>
            <img src="/resources/files/system/svg/videolink.svg">
        </div>
    </div>
    <div class="video_view">
        <video class="video" controls>
            <source src="/resources/files/upload/video/<?php echo $data->video->video_video; ?>" type="video/mp4">
        </video>
    </div>
</div>
<!-- content_video -->

<!-- content_galler -->
<div class="content_galler">
    <div class="content_galler_head">
        <span>галерея</span>
        <span>“Наши кондитеры создают только сладости</span>
        <span>с творчеством и любовью”</span>
    </div>
    <div class="content_galler_box">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto my-2">
                <img src="/resources/files/system/content/gallery (1).jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto my-2">
                <img src="/resources/files/system/content/gallery (2).jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto my-2">
                <img src="/resources/files/system/content/gallery (3).jpg">
            </div>
            <div class="col-lg-3 col-md-6 col-sm-8 mx-auto my-2">
                <img src="/resources/files/system/content/gallery (4).jpg">
            </div>
        </div>
    </div>
    
    <div class="read_more_box">
        <a href="/gallery" class="read_more">
            <span> Проводить исследования &#8594; </span>
        </a>
    </div>
</div>
<!-- content_galler -->

