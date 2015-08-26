<?php
class Comparator
{
    public static function compare($val1, $val2, callable $compareFunction)
    {
        return $compareFunction($val1, $val2);
    }
} 
