<?php
namespace Sirius\Validation\Rule;

class Number extends AbstractValidator
{

    protected static $defaultMessageTemplate = 'This input must be a number';

    function validate($value, $valueIdentifier = null)
    {
        $this->value = $value;
        $this->success = (bool)filter_var($value, FILTER_VALIDATE_FLOAT);
        return $this->success;
    }
}
