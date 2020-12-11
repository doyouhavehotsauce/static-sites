<?php
/**
* Template Name: Post-Template
*
* @package WordPress

*/ ?>
<?php get_header(); ?> ?>


<div class="container">

<?php
if ( have_posts() ) :
  while (have_posts() ): the_post(); ?>


  <section class="row ">
    <div class="col-8 page-wrap">
      <h2 class="post-header"><?php  the_title(); ?></h2>
      <p class="post-content"><?php the_content(); ?></p>
    </div>
  </section>

<?php endwhile

  else :
    echo '<p>nothing!</p>';

  endif;
?>


<?php get_footer(); ?>

</div>
