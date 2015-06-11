<?php
if( isset($_GET['url']))
{
    $url = filter_var( $_GET['url'], FILTER_SANITIZE_URL);
    file_put_contents( './images/'.basename($url), file_get_contents($url));
    header('location: http://'.$_SERVER['HTTP_HOST'] . '/wp-content/themes/t24blackcard/images/' . basename($url));
}else{
    header('location: http://'.$_SERVER['HTTP_HOST']);
}
