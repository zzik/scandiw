<?php

$request = $_SERVER['REQUEST_URI'];

echo json_decode($request);