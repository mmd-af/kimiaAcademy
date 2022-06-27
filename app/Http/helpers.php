<?php

function ctpn($str)
{
    $english = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $persian = array('۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹');
    $convertedStr = str_replace($english, $persian, $str);
    return $convertedStr;
}
