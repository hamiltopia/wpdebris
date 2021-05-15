
//Custom treatments for the login page


// Add custom stylesheet to WPLOGIN
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/stylesheets/screen.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

// changing the logo link from wordpress.org to your site
function mb_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'mb_login_url' );

// changing the alt text on the logo to show your site name
function mb_login_title() { return get_option( 'blogname' ); }
add_filter( 'login_headertitle', 'mb_login_title' );
