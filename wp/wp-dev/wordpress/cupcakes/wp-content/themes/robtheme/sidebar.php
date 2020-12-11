<?php

query_posts( array( 'post_type' => array('post', 'finance') ) );

 ?>
<h2>Sidebar</h2>
<div class="widget-wrap">
  <h5>Finance Posts</h5>

  <?php  ?>
  <ul>
    <li> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></li>
  </ul>
</div>



<?php while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
        <p><?php echo get_the_excerpt(); ?></p>
<?php endwhile;?>
