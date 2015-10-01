<?php
function setads()
{
//    $curads = '';
    if($_GET['ad_block'] == 1){
        $curads = false;
    }
    if (!isset($_COOKIE['curads']) || $_COOKIE['curads'] == 'ads3') {
        $curads = "ads1";
    } else {
        if ($_COOKIE['curads'] == 'ads1') {
            $curads = 'ads2';
        } else {
            $curads = 'ads3';
        }
    }
    return $curads;
}
    function set_curr_ads($curads) {
        setcookie('curads', $curads, time()+ 60*60*24*30, '/');
}