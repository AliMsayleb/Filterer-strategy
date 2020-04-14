<?php

include_once 'OperationFilterInterface.php';

class LessThanOrEqualFilter implements OperationFilterInterface
{
    public function filter($array, $value, $field)
    {
        return array_filter($array, function ($element) use ($field, $value) {
            return (float) $element[$field] <= (float) $value;
        });
    }
}
