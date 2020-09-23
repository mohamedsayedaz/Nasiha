<?php 
    if(comments_open()){
        echo '<div class="row">';
        echo '<div class="col-sm-10 comments">';
        echo '<h2 class="text-center comments-title">التعليقات</h2>';
        echo '<ul class="list-unstyled comments-list">';
        $comments_args = array(
            'max_depth'             => 3,
            'type'                  => 'comment',
            'avatar_size'           => 64,
            'reverse_top_level'     => true
        );
        wp_list_comments($comments_args);
        echo '</ul>';
        $form_fields =array(
                    'author'       => '<input name="author" type="text" class="form-control comment-form-in" placeholder="الاسم" />',
                    'email'        => '<input name="email" type="text" class="form-control comment-form-in" placeholder="الايميل" />');
        $form_args = array(
            'fields'           =>  $form_fields ,
            'comment_field'    => '<textarea name="comment" class="form-control comment-form-in" placeholder="التعليق"></textarea>',
            'label_submit'     => 'حفظ' ,
            'class_submit'     => 'btn btn-dark',
            'title_reply'      => 'كتابه تعليق' ,
            'comment_notes_before'  => '' 
            
        );
        apply_filters( 'comment_form_default_fields', $form_fields);
        comment_form($form_args);
        
        echo '</div>';
        echo '</div>';
    }
    else{
        //echo '<div class="empty-alert alert-danger text-center">التعليقات ممنوعه في هذا المقال</div>';
    }
?>