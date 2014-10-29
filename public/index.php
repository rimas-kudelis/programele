<?php

    chdir(realpath(dirname(__DIR__)));

    require_once 'vendor/autoload.php';
    require_once 'propel/generated-conf/config.php';

    Zend\Mvc\Application::init(require 'config/application.config.php')->run();