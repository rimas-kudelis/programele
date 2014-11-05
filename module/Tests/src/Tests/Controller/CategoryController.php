<?php

    namespace Tests\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\Form\Exception;
    use Zend\View\Model\ViewModel;
    use Tests\Model\CategoryForm;

    /**
     * Class CategoryController
     * @package Tests\Controller
     */
    class CategoryController extends AbstractActionController
    {
        /**
         * @return ViewModel
         */
        public function indexAction()
        {
            $form = CategoryForm::getForm();
            $form->prepare();

            $view = new ViewModel();
            $view->setVariable('form', $form);

            return $view;
        }
    }