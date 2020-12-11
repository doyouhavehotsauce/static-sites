<?php get_header(); ?>

 <div class="container">



<?php

if ( have_posts() ) :
  while( have_posts() ): the_post();?>

<section class="row">
  <div class="col-8">
    <h1>Hi Mom I ate the last pizza</h1>
    <a href="<?php the_permalink() ?>">
      <h2 class="post-header home-pg"><?php  the_title(); ?></h2>
    </a>

    <p class="post-content"><?php the_content(); ?></p>
  </div>
  <div class="col-4">
    <?php get_sidebar(); ?>
  </div>
</section>

<?php  endwhile;

else:

  echo '<p>Can"t find anything here!</p>';

endif;

?>


<?php get_footer(); ?>

 </div>








 ################################################




basic wp nav bar header thing, with the blog info name and the nave loop


 <header class="nav">
      <h1 class="nav-left"><a href="<?php echo home_url(); ?>"> <?php bloginfo( 'name' ); ?></a></h1>
      <div class="nav-right">
        <?php $args = ['theme location' => 'primary']; ?>
        <?php wp_nav_menu( $args ); ?>
      </div>
  </header>