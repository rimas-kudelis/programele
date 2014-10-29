<?php

    namespace Tests;

    /**
     * Class Module
     * @package Tests
     */
    class Module
    {
        /**
         * @return mixed
         */
        public function getConfig()
        {
            return include __DIR__ . '/config/module.config.php';
        }

        /**
         * @return array
         */
        public function getAutoloaderConfig()
        {
            return [
                'Zend\Loader\StandardAutoloader' => [
                    'namespaces' => [
                        __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    ],
                ],
            ];
        }
    }