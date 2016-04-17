<?php 
	
	isAuthorty();
	$StopTime=getTime();
	$RunTime=round(($StopTime-$StartTime)*1000,2);
?>
<div id='footer'>
	<h3>版权所有 翻版必究 运行时间<?php echo $RunTime;?>微秒</h3>
	<h3>本程序由<a href='http://www.baidu.com'>瓢城web俱乐部</a> 源代码可以任意修改或发布 （c） yc60.com</h3>
</div>