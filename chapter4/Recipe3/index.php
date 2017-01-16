<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-15
 * Time: 下午3:51
 */
$json = <<<JSON
{
    "origin": "Delhi",
    "destination": "London",
    "passengers": 
    [
        {
            "name": "Mr.Perry Mason",
            "type": "Adult",
            "age": 28
        },
        {
            "name": "Miss Irene Adler",
            "type": "Adult",
            "age": 25
        }
    ],
    "travelDate": "17-Dec-2010"
}
JSON;

$objJson = json_decode($json);
switch (json_last_error())
{
    case JSON_ERROR_NONE:
        echo 'Travel date is:'.$objJson->travelDate;
        break;
    case JSON_ERROR_DEPTH:
        echo 'The Json strng has exceeded maximum allowed stack depth';
        break;
    case JSON_ERROR_CTRL_CHAR:
        echo 'Control character error';
        break;
    case JSON_ERROR_SYNTAX:
        echo 'Incorrect JSON: Please check your JSON syntax';
        break;
}
?>
