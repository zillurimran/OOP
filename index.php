<?php
require_once 'vendor/autoload.php';
use App\classes\Home;


$message = new Home();
$message = $message->index();