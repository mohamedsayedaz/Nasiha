<?php get_header(); ?>
<div class="jumbotron" id="exam-cat">
    <?php 
            if(have_posts()){
              
                while(have_posts()){
                      the_post();
                    ?>
              <div class="row">
                <div class="col-sm-6 exam-post center-d">
                    <h3><a href="<?php the_permalink(); ?>" class="btn exam-post-title"><?php the_title(); ?></a></h3>
                    <?php the_post_thumbnail('',['class' => 'img-thumbnail exam-post-img' , 'title' => 'Post Image']); ?>
                    <a href="<?php the_permalink(); ?>" class="btn exam-link">عرض الاجابه</a>
                </div>
             </div>
             <?php 
                echo '<div class="post-pagination">';
                echo add_numeric_pagination();
                echo '</div>';
                ?>
             <?php
                }
            }
            else{
                ?>
                <div class="alert alert-danger text-center empty-alert">لايوجد اي اسئله حاليا</div>
                <?php
            }
        ?>

</div>
<?php get_footer();?>