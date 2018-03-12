<?php
if (isset($_REQUEST['controller']) && isset($_REQUEST['action'])) {
    $controller = $_REQUEST['controller'];
    $action     = $_REQUEST['action'];
} else {
    $controller = 'posts';
    $action     = 'get_all_posts';
}

  require_once('routs.php');
