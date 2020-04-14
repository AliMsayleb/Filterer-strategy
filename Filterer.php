<?php

include_once 'OperationFilterInterface.php';
include_once 'LessThanOrEqualFilter.php';
include_once 'GreaterThanOrEqualFilter.php';
include_once 'EqualFilter.php';

class Filterer
{
    private function getFilterStrategy($operator): OperationFilterInterface
    {
        switch($operator) {
            case '<=': return new LessThanOrEqualFilter();break;
            case '>=': return new GreaterThanOrEqualFilter();break;
            case '==': return new EqualFilter();break;
        }
    }

    public function filter($array, $field, $operator, $value)
    {
        $filterStrategy = $this->getFilterStrategy($operator);
        $array = $filterStrategy->filter($array, $value, $field);

        return $array;
    }
}
