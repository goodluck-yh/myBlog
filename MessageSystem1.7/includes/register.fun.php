<?php 
    function check_username($username){
        $usr=trim($username);
        $mg=Array("王八蛋","shit","fuck");
        if(mb_strlen($usr)<2||mb_strlen($usr)>20){
            alert_back("用户名长度为2-20");
        }
        elseif (preg_match("/[<>\'\"\\\ ]/", $usr)){
            alert_back("用户名含有非法字符");
        }
        elseif (in_array($usr, $mg)){
            alert_back("敏感用户名");
        }
        
        return mysql_real_escape_string($usr);
    }
    
    function check_password($password, $repassword){
        if($password!=$repassword){
            alert_back("[密码]和[确认密码]不一致");
        }elseif (strlen($password)<6){
            alert_back("密码不能小于6位");
        }
        return sha1($password);
    }
    
    function check_question($question){
        if(mb_strlen($question)<2){
            alert_back("密码提示不能小于2位");
        }
        
        return trim($question);
    }
    
    function check_answer($question,$answer){
        if(trim($question)==trim($answer))
            alert_back("[密码提示]不能与[密码回答]一致");
        elseif (mb_strlen($answer)<2)
            alert_back("密码回答不能小于2位");
        return trim($answer);
        
    }
    
    function check_email($email){
        if(preg_match("/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/",$email)==false){
            alert_back("邮箱格式错误");
        }
        return $email;
    }
    
    function check_qq($qq){
        if(strlen($qq)!=0&&preg_match("/^[0-9]{5,12}$/", $qq)==false){
            alert_back("qq格式错误");
        }
        return $qq;
    }
    
    function check_address($address){
        if(strlen($address)!=0&&preg_match('/^(https:\/\/)?(\w+\.)?[\w\-\.]+(\.\w+)+$/', $address)==false){
            alert_back("主页格式错误");
        }
        return $address;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
?>