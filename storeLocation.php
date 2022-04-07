<?php
require 'partials/autoLoader.php';
$json = file_get_contents('php://input');
$data = json_decode($json);

session_start();

$user->setLocation($_SESSION['userID'], $data->long, $data->lat);

