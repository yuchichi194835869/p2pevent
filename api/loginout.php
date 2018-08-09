<?php
	//引入头部响应式
	
	header("Content-Type:text/html;charaet=utf-8");
	
	session_start();
	session_destroy();//销毁session
	
	echo "<script>alert('退出成功！欢迎下次再来');location.href='./';</script>"
	
?>