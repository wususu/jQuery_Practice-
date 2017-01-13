<?php
/**
 * Created by PhpStorm.
 * User: wususu
 * Date: 17-1-13
 * Time: 下午3:02
 */
if ($_GET['what'] == 'good'){
    $name = array('Sherlock Holmes', 'John Watson', 'Hercule Poirot', 'Jane Marple');
    echo getHTML($name);
}elseif ($_GET['what'] == 'bad'){
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