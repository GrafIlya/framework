<?php
$config = Dbconnect::instance();
$config->set(array(
    'host' => '127.0.0.1',
    'user' => 'root',
    'pass' => '',
    'name' => 'framearg'
));
$config->connect();
unset($config);