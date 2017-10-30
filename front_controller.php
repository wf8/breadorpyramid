<?php
// parse url
$url_parts = array_slice(explode('/',$_SERVER['REQUEST_URI']), 1);
$active = $url_parts[0];


if ($url_parts[0] == 'google82773dcd9a242f08.html') {
    echo 'google-site-verification: google82773dcd9a242f08.html';
} else {

    // insert header and nav for all views
    require_once('views/header.php');
    require_once('views/nav.php');

    if (isset($url_parts[1]))
        require_once('views/error.php');
    else {
        if ($url_parts[0] == '') {
            // load landing page
            //require_once('views/landing.php');
            require_once('views/about.php');
        } else if (file_exists('views/' . $url_parts[0] . '.php')) {
            // load other views
            require_once('views/' . $url_parts[0] . '.php');		
        } else {
            // default load error page
            require_once('views/error.php');
        }
    }
    // insert footer
    require_once('views/footer.php');
}
?>
