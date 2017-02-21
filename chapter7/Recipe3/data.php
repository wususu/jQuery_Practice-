<?php
/**
 * Created by PhpStorm.
 * User: janke
 * Date: 17-2-21
 * Time: 下午12:29
 */
    $page = $_GET['page'];
    switch ($page)
    {
        case 'PHP':
            echo 'PHP is a widely used, server side scripting language that is used to create dynamic web
            applications. PHP is very much popular among web developers and many top websites use PHP for their sites.';
            break;
        case 'jQuery':
            echo 'From the jQuery site: jQuery is a fast and concise JavaScript Library that simplifies HTML
            document traversing, event handling, animating, and Ajax interactions for rapid web development. jQuery is designed to 
            change the way that you write JavaScript.';
            break;
        case 'ajax':
            echo 'Ajax is a group of web development techniques used on the browser (client-side) to create interactive
            web applications. Ajax can be used to retrieve data from the server asynchronously in the background. XHTMLHttpRequest
            objects is generally used to contact the server side.';
            break;
        case 'json':
            echo 'JSON which stands for JavaScript Object Notation can be define as a lightweight data interchange format. 
            It is also said a fat-free lightweight alternative to xml. It is a text format which is programming language independent
            and is native data from of JavaScript. It is lighter and faster than xml. The credit to make json popular goes to Douglas Crockford.';
            break;
    }

?>