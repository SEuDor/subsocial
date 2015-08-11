<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 07.06.2015
 * Time: 2:42
 */

class Comparator
{
    public static function compare($val1, $val2, callable $compareFunction)
    {
        return $compareFunction($val1, $val2);
    }
} 