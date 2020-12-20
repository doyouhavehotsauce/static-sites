<?php

function custom_theme_assets() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );






function cp_menu(){
  $cp_nav_menu = array(
    'primary' => 'Full Width Menu for Desktop',
    'mobile' => 'Mobile Nav Menu'
  );
  register_nav_menus($cp_nav_menu);
}

add_action('init', 'cp_menu');
//DB Connection
// $servername = "localhost";
// $username = "RobGuy";
// $password = "gbUlg2vjSmfHXO3F";
// $dbname = "email-signup";

// if (isset($_POST['emailSubmit'])) {
//   echo "<script>alert('emailSubmit')</script>";
// }

//Insert data

//DB Connection
$servername = "localhost";
$username = "RobGuy";
$password = "gbUlg2vjSmfHXO3F";
$dbname = "email-signup";
if (isset($_POST['emailSubmit'])){
    echo "<h3 style='font-size:34px; color:red;'>I heard you</h3>";
}


?>