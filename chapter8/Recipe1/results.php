<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-2-26
 * Time: 下午6:29
 */
try {
    $mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
}catch (PDOException $e){
    die('链接失败： '.$e);
}
$returnStr = '';
$query = 'SELECT * From functions where languageId='.$_GET['id'];
if ($result = $mysql->query($query))
{
    if ($result->rowCount() > 0)
    {
        $resultStr.='<ul>';
        while ($row = $result->fetch())
        {
            $resultStr.= '<li><strong>'.$row['functionName'].'</strong> - '.$row['summary'];
            $resultStr.= '<div><pre>'.$row['example'].'</pre></div></li>';
        }
        $resultStr.= '</ul>';
    }
    else
    {
        $resultStr = 'Nothing Found';
    }
}
else
{
    echo 'error';
}
echo $resultStr;
?>