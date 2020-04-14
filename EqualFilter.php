<?php

include_once 'OperationFilterInterface.php';

class EqualFilter implements OperationFilterInterface
{
    public function filter($array, $value, $field)
    {
        return array_filter($array, function ($element) use ($field, $value) {
            return $element[$field] == $value;
        });
    }
}
