<?php
    defined('supershop') or die('Access denied');
    echo 'hi';
    //�����
	define('PATH', 'http://supershop');
    //������
    define('MODEL', 'model/model.php');
    //����������
    define('COTROLLER', 'controller/controller.php');
    //����
    define('VIEW', 'views/');
    //�������� ������
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
    define('TITLE', '�������� ������� SuperShop');
    //
    mysql_connect(HOST, USER, PASS) or die ('No connect to Server');
    mysql_select_db(DB) or die ('No connect to DB');
    mysql_query("SET NAMES 'UTF8'")  or die ('Cant set charset');
?>