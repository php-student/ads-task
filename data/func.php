<?php
/**
 * Created by PhpStorm.
 * User: LIS
 * Date: 30.09.2015
 * Time: 21:00
 */
function setads()
{
    $curads = '';
    if (!isset($_COOKIE['ads']) || $_COOKIE['ads'] == ' - ������� #3') {
        $curads = " - ������� #1";
    } else {
        if ($_COOKIE['ads'] == ' - ������� #1') {
            $curads = ' - ������� #2';
        } else {
            $curads = ' - ������� #3';
        }
    }
    return $curads;
}
    function set_curr_ads($curads) {
        setcookie('curads', $curads, time()+ 60*60*24*30, '/');
}