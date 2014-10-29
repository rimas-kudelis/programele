<?php

    namespace Tests\Model;

    use Tests\Model\Base\Category as BaseCategory;
    use Zend\Form\Annotation;

    /**
     * @Annotation\Name("Category")
     * @Annotation\Hydrator("Zend\Stdlib\Hydrator\ObjectProperty")
     */
    class Category extends BaseCategory
    {

        /**
         * @Annotation\Exclude()
         */
        protected $id;

        /**
         * @Annotation\Filter({"name":"StringTrim"})
         * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
         * @Annotation\Attributes({"type":"text"})
         * @Annotation\Options({"label":"Title:"})
         */
        protected $title;

    }