<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-13
 * Time: 下午9:54
 */
sleep(10);
if ($_GET['what'] == 'good')
{
    $names = array('Sherlock Holmes', 'John Watson', 'Hercule Poirot', 'Jane Marple');
    echo getHTML($names);
}
elseif ($_GET['what'] == 'bad')
{
    $name = array('Professor Moriarty', 'Sebastian Moran', 'Charles Milverton', 'Von Bork', 'Count Sylvius');
    echo getHTML($name);
}

function getHTML($names){
    $strResult = '<ul>';
    for ($i=0; $i<count($names); $i++){
        $strResult .= '<li>'.$names[$i].'</li>';
    }
    $strResult .= '</ul>';
    return $strResult;
}
?>