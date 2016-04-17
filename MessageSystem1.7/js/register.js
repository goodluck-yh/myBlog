/**
 * 该页是register.php的js脚本
 */
 
 window.onload = function (){
 	var face= document.getElementById('face');
 	face.onclick=open_face;
 	
 	var checkcode=document.getElementById("checkcode_pic");
 	checkcode.onclick=function(){
 		this.src="code.php?tm=Math.Random()";
 	};
 	
 	var fm=document.getElementsByTagName('form')[0];
 	fm.onsubmit=function(){
 		var username=fm.username;
 		if(username.value.toString().length<2||username.value.toString().length>20){
 			alert("用户名不得小于2位大于20位");
 			username.value="";
 			username.focus();
 			return false;
 		}
 		if (/[<>\'\"\ \　]/.test(username.value)) {
			alert('用户名不得包含非法字符');
			username.value = ''; 
			username.focus(); 
			return false;
		}
 		if (fm.password.value.length < 6) {
			alert('密码不得小于6位');
			fm.password.value = ''; //清空
			fm.repassword.value = ''; //清空
			fm.password.focus(); //将焦点以至表单字段
			fm.repassword.focus();
			return false;
		}
		if (fm.password.value != fm.repassword.value) {
			alert('密码和密码确认必须一致');
			fm.password.value = ''; //清空
			fm.repassword.value = ''; //清空
			fm.password.focus(); //将焦点以至表单字段
			return false;
		}
		if (fm.question.value.length < 2 || fm.question.value.length > 20) {
			alert('密码提示不得小于2位或者大于20位');
			fm.question.value = ''; //清空
			fm.question.focus(); //将焦点以至表单字段
			return false;
		}
		if (fm.answer.value.length < 2 || fm.answer.value.length > 20) {
			alert('密码回答不得小于2位或者大于20位');
			fm.answer.value = ''; //清空
			fm.answer.focus(); //将焦点以至表单字段
			return false;
		}
		if (fm.answer.value == fm.question.value) {
			alert('密码提示和密码回答不得相等');
			fm.answer.value = ''; //清空
			fm.answer.focus(); //将焦点以至表单字段
			return false;
		}
		
		if (!/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/.test(fm.email.value)) {
			alert('邮件格式不正确');
			fm.email.value = ''; //清空
			fm.email.focus(); //将焦点以至表单字段
			return false;
		}
		if (fm.qq.value != '') {
			if (!/^[1-9]{1}[\d]{4,9}$/.test(fm.qq.value)) {
				alert('QQ号码不正确');
				fm.qq.value = ''; //清空
				fm.qq.focus(); //将焦点以至表单字段
				return false;
			}
		}
		
		if (fm.address.value != '') {
			if (!/^https?:\/\/(\w+\.)?[\w\-\.]+(\.\w+)+$/.test(fm.url.value)) {
				alert('网址不合法');
				fm.address.value = ''; //清空
				fm.address.focus(); //将焦点以至表单字段
				return false;
			}
		}
		
		if (fm.checkcode.value.length != 4) {
			alert('验证码必须是4位');
			fm.checkcode.value = ''; //清空
			fm.checkcode.focus(); //将焦点以至表单字段
			return false;
		}
		alert("success");
		return false;
 	};
 	//alert(face.src);
 };
 
 var open_face= function (){
 	window.open('face.php','请选择头像','width=400, height=400,top=0,left=0');
 }
 