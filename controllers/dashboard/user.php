<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$hotlines = $db->query('select * from hotlines')->get();


view("dashboard/user.view.php", [
    'heading' => 'Dashboard',
    'hotlines' => $hotlines
]);