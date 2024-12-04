<?php

$raw = file_get_contents('php://input');
$receive = json_decode($raw, true);

error_log(print_r($receive,true),"3","/var/log/php.log");
