<?php 
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>多用户留言系统-注册</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href='styles/1/basic.css' type='text/css' rel='stylesheet' />
	<link href='styles/1/register.css' type='text/css' rel='stylesheet'/>
	<script src='js/register.js' type="text/javascript"></script>
</head>

<body>
	<?php 
	   require 'includes/common.php';
	   require ROOTPATH.'includes/common.fun.php';
	   require ROOTPATH.'includes/register.fun.php';
	   require ROOTPATH.'includes/db.fun.php';
	   $StartTime=getTime();

	   
	   //alert_back("1");
		
	   if($_GET["action"]=="register"){
// 	       if($_POST["checkcode"]!=$_SESSION["code"]){
           if(1===0){
	           alert_back("验证码错误");
	       }
	       else{
	           echo 'enter new page';
	           /*$info['id']=get_uniqid();
	           $info["username"]=check_username($_POST["username"]);
	           $info["password"]=check_password($_POST["password"], $_POST["repassword"]);
	           $info["question"]=check_question($_POST["question"]);
	           $info["answer"]=check_answer($_POST["question"],$_POST["answer"]);
	           $info["sex"]=$_POST["sex"];
	           $info["email"]=check_email($_POST["email"]);
	           $info["qq"]=check_qq($_POST["qq"]); 
	           $info["address"]=check_address($_POST["address"]); */

	       }
	   }
	   
	   require ROOTPATH.'includes/head.inc.php';
	?>

<div id='register'>

	<h2>会员注册</h2>
	<h3>请认真填写以下信息</h3>
	<form method="post" action="register.php?action=register" id='form1'>
	<table>
	<tr>
	<td>用  户  名：</td><td><input type="text" class="textbox"  name="username"></input>(*必填，至少两位）</td>
	</tr>
	<tr>
	<td>密&nbsp&nbsp码：</td><td><input type="password" class="textbox" name="password"></input>(*必填，至少六位）</td>
	</tr>
	<tr>
	<td>确认密码：</td><td><input type="password" class="textbox" name="repassword"></input>(*必填，同上）</td>
	</tr>
	<tr>
	<td>密码提示：</td><td><input type="text" class="textbox" name="question"></input>(*必填，至少两位）</td>
	</tr>
	<tr>
	<td>密码回答：</td><td><input type="text" class="textbox" name="answer"></input>(*必填，至少两位）</td>
	</tr>
	<tr>
	<td>性&nbsp&nbsp别：</td> <td><input type="radio" value="male" name="sex" checked>男<input type="radio" value="famale" name="sex">女</input></td>
	</tr>
	</table>
	<img src="face/m01.gif" alt="头像1" id='face'></img>
	<table>
	<tr>
	<td>电子邮件：</td><td><input type="text" class="textbox" name="email"></input></td>
	</tr>
	<tr>
	<td>Q&nbsp&nbspQ&nbsp：</td><td><input type="text" class="textbox" name="qq"></input></td>
	</tr>
	<tr>
	<td>主页地址：</td><td><input type="text" class="textbox" name="address"></input></td>
	</tr>
	<tr>
	<td>验 证 码：</td><td><input type="text" class="textbox" id="checkcode" name="checkcode"></input><img src="code.php" id="checkcode_pic"></img></td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" id='submit' value="提交"></input></td>
	</tr>
	</table>
	
	</form>
</div>
	<?php 
		require ROOTPATH.'includes/foot.inc.php';
	?>
</body>
</html>