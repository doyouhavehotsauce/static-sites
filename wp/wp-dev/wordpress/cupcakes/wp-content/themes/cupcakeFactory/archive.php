<h1>I'm the Archive Recipe Page</h1>
<?php 
 if( have_posts() ){
     while( have_posts() ){
         the_post();
         the_content();
     } 
 } else {
     echo '<h3>I couldn\'t find anything</h3>';
 }
  ?>