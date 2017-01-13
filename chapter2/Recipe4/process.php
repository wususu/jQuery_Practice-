<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-13
 * Time: 下午9:30
 */
$responseString = 'Dear'.$_POST['fullname'].', Your contact information has been saved.';
$responseString.= 'You entered the following information: ';
$responseString.= '<br/>';
$responseString.= '<strong>E-mail:</strong> '.$_POST['email'];
$responseString.= '<br/>';
$responseString.= '<strong>Sex:</strong> '.$_POST['sex'];
$responseString.= '<br/>';
$responseString.= '<strong>Country:</strong> '.$_POST['country'];
header('Content-type:text/html');
echo $responseString;
?>