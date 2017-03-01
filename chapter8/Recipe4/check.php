<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-2-27
 * Time: 下午10:44
 */
 $mysql = new PDO('mysql:host=localhost;dbname=exampleDB', 'root', 'root');
 $query = 'select * from users where username=\''.$_POST['username'].'\'';
 $result = $mysql->query($query);
if ($result->rowCount()>0){
    echo false;
}else{
    echo true;
}

