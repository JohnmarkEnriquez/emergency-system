<?php
use Core\Validator;
use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


if(!isset($_SESSION['auth']))
{
    $_SESSION['error'] = 'Login to Access Dashboard';
    header('location: /login');
}else{
    if($_SESSION['roles'] != '1' && $_SESSION['roles'] != '2')
    {
        $_SESSION['error'] = 'You are not Authorized';
        header('location: /login');
    }
}
?>