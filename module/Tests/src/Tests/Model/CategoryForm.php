<?php

namespace Tests\Model;


    use Zend\Form\Annotation;
    use Zend\Form\Annotation\AnnotationBuilder;

    /**
     * @Annotation\Name("CategoryForm")
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     */
    class CategoryForm
    {

        /**
         * @return \Zend\Form\Form
         */
        public static function build()
        {
            $builder = new AnnotationBuilder();
            $form    = $builder->createForm(new self);

            return $form;
        }

        /**
         * @Annotation\Filter({"name":"StringTrim"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
         * @Annotation\Attributes({"type":"text"})
         * @Annotation\Options({"label":"Title:"})
        */
        public $title;

        /**
         * @Annotation\Filter({"name":"StringTrim"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
         * @Annotation\Attributes({"type":"text"})
         * @Annotation\Options({"label":"Title:"})
        */
        public $id;

    }
