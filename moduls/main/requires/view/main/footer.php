<?php $model = new \moduls\main\requires\model\requireModel(); ?>
<?php $setting = $model->setting(); ?>

<div class="link_box">
    <?php if(get_user_level() > 1):?>
    <a href="/panel/admin">
        <img src="/resources/files/system/svg/slack.svg">
    </a>
    <?php endif; ?>
    
    <a href="https://wa.me/<?php echo $setting->phone; ?>" target="_blank" rel="noopener noreferrer" id="whatsapp_link">
        <img src="/resources/files/system/svg/whatsapp.png">
    </a>
</div>

<footer class="footer">
    <div class="footer-upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-footer-col-up">
                        <div class="footer-brand">
                            <div class="footer-brand-left">
                                <img src="/resources/files/system/svg/react.svg" class="footer-brand-logo">
                            </div>
                            <div class="footer-brand-right">
                                <span>Crems</span>
                                <span>мастерить вкусные сладости</span>
                            </div>
                        </div>
                    </div>
                    <div class="inner-footer-col-up-under">
                        <span class="footer-down-txt"><?php echo $setting->footer_text; ?></span>
                        <div class="footer_link_box">
                            <a href="https://<?php echo $setting->instagram; ?>" class="footer-link"> 
                                <img src="/resources/files/system/svg/instagram.svg" class="footer-link-btn-svg">
                            </a>
                            <a href="https://<?php echo $setting->facebook; ?>" class="footer-link">
                                <img src="/resources/files/system/svg/facebook.svg" class="footer-link-btn-svg"> 
                            </a>
                            <a href="https://<?php echo $setting->twitter; ?>" class="footer-link">
                                <img src="/resources/files/system/svg/twitter.svg" class="footer-link-btn-svg"> 
                            </a>
                            <a href="https://<?php echo $setting->youtube; ?>" class="footer-link"> 
                                <img src="/resources/files/system/svg/youtube.svg" class="footer-link-btn-svg"> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-info">
                        <span>Проводить исследования</span>
                    </div>

                    <div class="inner-footer-up-info">
                        <div class="footer-box">
                            <div class="footer_box_inner">
                                <div>
                                    <img src="/resources/files/system/svg/phone.svg" width="25">
                                </div>
                                <div>
                                    <span>Телефон:</span>
                                    <span><?php echo $setting->phone; ?></span>
                                </div>
                            </div>
                            <div class="footer_box_inner">
                                <div>
                                    <img src="/resources/files/system/svg/location.svg" width="25">
                                </div>
                                <div>
                                    <span>наше местоположение:</span>
                                    <span><?php echo $setting->location; ?></span>
                                </div>
                            </div>

                            <div class="footer_box_inner">
                                <div>
                                    <img src="/resources/files/system/svg/email.svg" width="25">
                                </div>
                                <div>
                                    <span>е-мейл:</span>
                                    <span><?php echo $setting->email; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower">
        <div class="copyright">
            <span> © Copyright 2022 </span>
        </div>
    </div>
</footer>

