<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-15
 * Time: 下午4:48
 */
$travelDetails = array(
    array(
        'origin' => 'London',
        'destination' => 'Paris',
        'passengers' => array(
            array('name' => 'Mr.Sherlock Holmes', 'age' => 34),
            array('name' => 'Mr.John H.Watson', 'age' => 32)
        ),
        'travelDate' => '17-Dec-2010'
    ),
    array(
        'origin' => 'Delhi',
        'destination' => 'London',
        'passengers' => array(
            array('name' => 'Mr.Alber Einstein', 'age' => 31),
            array('name' => 'Mr.Isaac Newton', 'age' => 43)
        ),
        'travelDate' => '25-Jan-2011'
    ),
    array(
        'origin' => 'Delhi',
        'destination' => 'London',
        'passengers' => array(
            array('name' => 'Prof.John Moriaty', 'age' => 44),
            array('name' => 'Miss Irene Adler', 'age' => 28)
        ),
        'travelDate' => '30-Mar-2011'
    )
);
header('Content-Type:text/json');
echo json_encode($travelDetails);