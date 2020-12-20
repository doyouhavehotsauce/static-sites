<?php 

get_header();
?>
<h1>The Front Pagethe Recipes blog list page</h1>
<h3>I see you</h3>
<?php

if( have_posts() ){
    while( have_posts() ){
        the_post();
        the_content();
    }
}

?>