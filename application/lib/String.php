<?php
/**
 * Created by PhpStorm.
 * User: Женя
 * Date: 08.05.2015
 * Time: 16:38
 */

/**
 * Class String
 *
 * This class contains methods that process strings
 */
class String
{
    /**
     * Generates random string of specified length
     *
     * @param int $length Length of string to be generated. Default value - 8
     * @return string Generated line
     */
    public static function generateLine($length = 8)
    {
        $res = '';
        for($i = 0; $i < $length; $i++)
        {
            $rndVal = rand(97, 122);
            /*if($rndVal >= 48 && $rndVal <= 64 && $rndVal >= 91 && $rndVal <= 96)
            {
                $res .= $rndVal[strlen($rndVal)-1];
            }*/
            $res .= chr($rndVal);
        }
        return $res;
    }
} 