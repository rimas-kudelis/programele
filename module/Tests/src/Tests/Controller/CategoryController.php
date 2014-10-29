<?php

    namespace Tests\Controller;

    use Zend\Code\Annotation\AnnotationCollection;
    use Zend\Code\Reflection\ClassReflection;
    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\Stdlib\ArrayObject;
    use Zend\Form\Exception;
    use Zend\View\Model\ViewModel;
    use Zend\Form\Annotation\AnnotationBuilder;

    /**
     * Class SuperAnnotationBuilder
     * @package Tests\Controller
     */
    class SuperAnnotationBuilder extends AnnotationBuilder {

        /**
         * @param object|string $entity
         *
         * @return ArrayObject
         */
        public function getFormSpecification($entity)
        {
            if (!is_object($entity)) {
                if ((is_string($entity) && (!class_exists($entity))) // non-existent class
                    || (!is_string($entity)) // not an object or string
                ) {
                    throw new Exception\InvalidArgumentException(sprintf(
                            '%s expects an object or valid class name; received "%s"',
                            __METHOD__,
                            var_export($entity, 1)
                        ));
                }
            }

            $this->entity      = $entity;
            $annotationManager = $this->getAnnotationManager();
            $formSpec          = new ArrayObject();
            $filterSpec        = new ArrayObject();

            $reflection  = new ClassReflection($entity);
            $annotations = $reflection->getAnnotations($annotationManager);

            if ($annotations instanceof AnnotationCollection) {
                $this->configureForm($annotations, $reflection, $formSpec, $filterSpec);
            }

            foreach ($reflection->getProperties() as $property) {

                if ($entity !== $property->class) {

                    continue;
                }

                $annotations = $property->getAnnotations($annotationManager);

                if ($annotations instanceof AnnotationCollection) {
                    $this->configureElement($annotations, $property, $formSpec, $filterSpec);
                }
            }

            if (!isset($formSpec['input_filter'])) {
                $formSpec['input_filter'] = $filterSpec;
            }

            return $formSpec;
        }
    }

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
            $builder = new SuperAnnotationBuilder();
            $form    = $builder->createForm('Tests\Model\Category');

            $form->prepare();

            $view = new ViewModel();
            $view->setVariable('form', $form);

            return $view;
        }
    }