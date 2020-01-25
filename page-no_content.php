<?php get_header();

/*
Template Name: No Content
*/

 ?>

  <?php
  if(have_posts()):
    while(have_posts()): the_post(); ?>

    <h3><?php the_title() ?></h3>
    <!--  the_time()で記事の投稿された時間を表示し、the_category()で記事のカテゴリーを表示 -->
    <small>Posted on: <?php the_time(); ?><?php the_category(); ?> </small>
    <p><?php the_content() ?></p>

    <hr>

    <?php endwhile;
  endif;
  ?>
<?php get_footer(); ?>
