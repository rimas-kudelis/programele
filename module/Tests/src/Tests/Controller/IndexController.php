<?php

    namespace Tests\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\View\Model\ViewModel;

    /**
     * Class IndexController
     * @package Tests\Controller
     */
    class IndexController extends AbstractActionController
    {
        /**
         * @return ViewModel
         */
        public function indexAction()
        {
            return new ViewModel();
        }
    }