<?php get_header();?>
<!-- Slider -->
<?php echo do_shortcode('[smartslider3 slider="3"]'); ?> 
<!-- Exams Section-->
<div class="jumbotron exam-section">
    <div class="row">
        <div class="col-sm-12 center-d">
            <h2 class="section-title">الفحوصات</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="exam-section-parag">
                 نبذه عن هذا القسم وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن 
هذا القسم وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن هذا القسم 
وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن  هذا القسم  وما 
يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا
            </p>
        </div>
    </div>
    <div class="row">
        <?php 
        if(have_posts()){
            $posts = get_posts(array(
                'numberposts'       => 6,
                'category'          => 2
            ));
            foreach($posts as $post){
                ?>
                <div class="col-sm-6">
                    <div class="exam-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="exam-block-title"><?php echo the_title(); ?></h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="<?php echo the_permalink(); ?>" class="btn exam-button">عرض</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>
<!-- Q&A Section-->
<div class="jumbotron q-a">
    <div class="row">
        <div class="col-sm-12 center-d">
            <h2 class="section-title"><span style="color:black;">سؤال</span> و جواب</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <p class="qa-section-parag">
                نبذه عن هذا القسم وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن 
هذا القسم وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن هذا القسم 
وما يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا نبذه عن  هذا القسم  وما 
يحتويه والتفاصيل الخاصه به وشرح مبسط له وهكذا
            </p>
        </div>
    </div>
</div>
<!-- Conact Us-->

<div class="jumbotron" id="contactus">
    <div class="row">
        <div class="col-sm-12 center-d">
            <h2 class="section-title">تواصل معنا</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6" id="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="38" title="ContactUs"]'); ?>
        </div>
        <div class="col-sm-5" id="social-info">
            <h4 class="social-info-title"><img src="<?php echo get_template_directory_uri() . '/img/phone.svg'; ?>" class="img-thumbnail contact-icon" />01029915313</h4>
            <h4 class="social-info-title"><img src="<?php echo get_template_directory_uri() . '/img/mail.svg'; ?>" class="img-thumbnail contact-icon" />sayedaziz@gmail.com</h4>
            <div class="row">
                    <div class="col-sm-12">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/img/facebook.svg'; ?>" class="img-thumbnail social-contact-icon" />
                        </a>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/img/twitter.svg'; ?>" class="img-thumbnail social-contact-icon" />
                        </a>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/img/youtube.svg'; ?>" class="img-thumbnail social-contact-icon" />
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>
<?php get_footer(); ?> 