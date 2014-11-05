<?php

namespace Tests\Model;


/**
 * Test class for Additional builder enabled on the 'question' table.
 *
 */
class QuestionForm
{

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
