<?php

namespace Tests\Model;


/**
 * Test class for Additional builder enabled on the 'answer' table.
 *
 */
class AnswerForm
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
public $id_question;

/**
 * @Annotation\Filter({"name":"StringTrim"})
 * @Annotation\Validator({"name":"StringLength", "options":{"min":1, "max":255}})
 * @Annotation\Attributes({"type":"text"})
 * @Annotation\Options({"label":"Title:"})
 */
public $id;

}
