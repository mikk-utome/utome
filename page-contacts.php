<?php
/*
Template Name: Связь
*/
?>
<!-- Шапка -->
<div class="wrapper" style="background-image: url(<?php the_field('background_contacts')?>);
        background-repeat: no-repeat; background-position: center center; 
        background-attachment: fixed; background-size: cover;">
<?php get_header( ); ?>
<!-- Основная часть -->
        <div class="main">
                <div class="phon_1">
                        <a class="phon-link-1" href="tel:mikkseja@gmail.com">+79036114060</a>
                </div>
                <div class="phon_2">
                        <a class="phon-link-2" href="tel:mikkseja@gmail.com">+79998035185</a>
                </div>                
                <div class="mail">
                        <a class="mail-link" href="mailto:mikkseja@gmail.com">mikkseja@mail.ru</a>
                </div>
                <div class="form">
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