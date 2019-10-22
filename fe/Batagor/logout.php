<?php

session_start();
require 'php/utility.php';
require 'php/config.php';

session_destroy();
redirect($baseURL);