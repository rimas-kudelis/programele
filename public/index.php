<?php

    chdir(realpath(dirname(__DIR__)));

    require_once 'vendor/autoload.php';

    Zend\Mvc\Application::init(require 'config/application.config.php')->run();