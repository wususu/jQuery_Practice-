<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-1-22
 * Time: 下午2:54
 */
sleep(5);
$str = 'Your following infomation has been submitted:';
$str .= '<br>';
$str .= 'Name - '.$_POST['name'];
$str .= '<br>';
$str .= 'Address - '.$_POST['address'];
$str .= '<br>';
$str .= 'City - '.$_POST['city'];
$str .= '<br>';
$str .= 'Country - '.$_POST['country'];
echo $str;
?>