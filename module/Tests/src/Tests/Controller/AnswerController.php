<?php

    namespace Tests\Controller;

    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\Form\Exception;
    use Zend\View\Model\ViewModel;
    use Tests\Model\AnswerForm;

    /**
     * Class AnswerController
     * @package Tests\Controller
     */
    class AnswerController extends AbstractActionController
    {
        /**
         * @return ViewModel
         */
        public function indexAction()
        {
            $form = AnswerForm::build();
            $form->prepare();

            $view = new ViewModel();
            $view->setVariable('form', $form);

            return $view;
        }
    }