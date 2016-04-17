<?php 
    define(HOST, '127.0.0.1');
    define(USERNAME,'root');
    define(PASSWORD,'root');
    function db_connect(){
        global $link;
        $link=mysql_connect(HOST,USERNAME,PASSWORD);
        if($link==null){
            die('数据库连接失败'.mysql_error());
        }
        mysql_select_db('TestGuest') or die('数据库选择失败'.mysql_error());
        mysql_query('SET NAMES UTF8')or die('数据库选择失败'.mysql_error());
    }
    
?>