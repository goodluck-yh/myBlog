<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>多用户留言系统</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href='styles/1/basic.css' type='text/css' rel="stylesheet"> </link>
	<link href='styles/1/index.css' type='text/css' rel="stylesheet"> </link>
</head>

<body>


<?php 
	require 'includes\common.php';
	require ROOTPATH.'includes\common.fun.php';
	$StartTime=getTime();
	require ROOTPATH.'includes\head.inc.php';
?>

<div id='member'>
	<h2>新近会员</h2>
</div>

<div id='list'>
	<h2>帖子列表</h2>
</div>

<div id='pic'>
	<h2>最新图片</h2>
</div>

<?php 
	require ROOTPATH.'includes\foot.inc.php';
?>


</body>
</html>