<?php get_header() ?>
<div class="jumbotron min-wid" id="post-cat">
    <div class="row">
        <div class="col-sm-10 single-exam-post center-d" id="single-post">
    <?php 
            if(have_posts()){
              
                while(have_posts()){
                      the_post();
                    ?>
                    <h3 class="exam-post-title"><?php the_title(); ?></h3>
                    <?php the_post_thumbnail('',['class' => 'img-thumbnail exam-post-img single-post-img' , 'title' => 'Post Image']); ?>
                    <div class="single-post-content">
                    <?php echo the_content(); ?>
                    </div>
                    <?php
                }
            }
        ?>
        </div>
    </div>
    <?php comments_template(); ?>
    
</div>
<?php get_footer(); ?>