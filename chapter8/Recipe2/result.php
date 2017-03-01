<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-2-26
 * Time: 下午11:19
 */

if ($_GET['type'] == 'get')
{
    $resultStr = '';
    try {
        $mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
    }catch (PDOException $e){
        die('数据库链接错误'.$e);
    }
    $query = 'SELECT * FROM language';
    $result = $mysql->query($query);
    if ($result->rowCount() > 0)
    {
        while ($row = $result->fetch())
        {
            $resultStr.= "<option value=\"$row[0]\">$row[1]</option>";
        }
    }else{
        $resultStr = '暂无数据';
    }
    $result = null;
    $mysql = null;
    echo $resultStr;
}
if (IS_POST){
    if ($_POST['functionName']!='' && $_POST['summary']!='' && $_POST['example']!=''){
        $language = $_POST['language'];
        $functionName = $_POST['functionName'];
        $summary = $_POST['summary'];
        $example = $_POST['example'];
        try {
            $mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
        }catch (Exception $e){
            die('连接失败'.$e);
        }
        $query = "INSERT INTO functions(languageId, functionName, summary, example) VALUES ($language, $functionName, $summary, $example)";
        $result = $mysql->exec($query);
        if ($result == 1){
            echo 'ok';
        }
        $mysql = null;
    }
    return 'fail';
}