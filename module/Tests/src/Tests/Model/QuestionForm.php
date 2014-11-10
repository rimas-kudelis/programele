<?php

namespace Tests\Model;


    use Zend\Form\Annotation;
    use Zend\Form\Annotation\AnnotationBuilder;

    /**
     * @Annotation\Name("QuestionForm")
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     */
    class QuestionForm
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
        public $label;

        /**
         * @Annotation\Filter({"name":"StringTrim"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
         * @Annotation\Attributes({"type":"text"})
         * @Annotation\Options({"label":"Title:"})
        */
        public $id_category;

        /**
         * @Annotation\Filter({"name":"StringTrim"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
         * @Annotation\Attributes({"type":"text"})
         * @Annotation\Options({"label":"Title:"})
        */
        public $id;

    }
