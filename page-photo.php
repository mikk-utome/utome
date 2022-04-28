<?php
/*
Template Name: Фото
*/
?>
<!-- Шапка -->
<div class="wrapper" style="background-image: url(<?php the_field('background_photo')?>);
        background-repeat: no-repeat; background-position: center center; 
        background-attachment: fixed; background-size: cover;">
<?php get_header( ); ?>
<!-- Основная часть -->
        <div class="main">
                <div class="gallery_box">
                        <?php
                        $pageid = get_the_id();
                        $content_post = get_post($pageid);
                        $content = $content_post->post_content;
                        $content = apply_filters('the_content', $content);
                        echo $content;
                        ?>
                </div>   
        </div>
<!-- Подвал -->
<?php get_footer( ); ?>
</div>