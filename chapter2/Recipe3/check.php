<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-13
 * Time: 下午9:06
 */
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
    echo 'YaY!!! Request successful.';
}
else
{
    echo 'This is not an AJAX request. This page cannot be accessed directly.';
}
?>