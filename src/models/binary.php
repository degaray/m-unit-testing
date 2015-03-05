<?php
/**
 * Created by PhpStorm.
 * User: degaray
 * Date: 3/5/15
 * Time: 12:29 PM
 */

namespace m\models;

class binary
{
    public function textToBinary($string)
    {
        $value = unpack('H*', $string);

        return base_convert($value[1], 16, 2);
    }

    public function binaryToText($binary)
    {
        $value = base_convert($binary, 2, 16);

        return pack('H*', $value);
    }
}