<?php
    defined('supershop') or die('Access denied');
    echo 'hi';
    //домен
	define('PATH', 'http://supershop');
    //модель
    define('MODEL', 'model/model.php');
    //контроллер
    define('COTROLLER', 'controller/controller.php');
    //виды
    define('VIEW', 'views/');
    //активный шаблон
    define('TEMPLATE', 'supershop/');
    //
    define('HOST','localhost');
    //
    define('USER','superadmin');
    //
    define('PASS','123456');
    //
    define('DB','supershop');
    //
    define('TITLE', 'Интернет магазин SuperShop');
    //
    mysql_connect(HOST, USER, PASS) or die ('No connect to Server');
    mysql_select_db(DB) or die ('No connect to DB');
    mysql_query("SET NAMES 'UTF8'")  or die ('Cant set charset');
?>