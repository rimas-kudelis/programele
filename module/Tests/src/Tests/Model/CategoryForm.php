<?php

namespace Tests\Model;


/**
 * Test class for Additional builder enabled on the 'category' table.
 *
 */
class CategoryForm
{

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
