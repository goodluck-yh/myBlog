<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>多用户留言系统-头像选择</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="styles/1/face.css" type='text/css' rel="stylesheet"></link>
	<script src="js/face.js" type="text/javascript"></script>
</head>

<body>

    <div>
    <h2>
        请选择头像：
    </h2>
     <?php 
     for($i=1;$i<10;$i++){
        echo '<img src="face/m0'.$i.'.gif" alt="头像0'.$i.'"></img>';
     }
     for($i=10;$i<65;$i++){
         echo '<img src="face/m'.$i.'.gif" alt="头像'.$i.'"></img>';
     }
     ?>
    </div>
</body>
</html>