<?php
//1.引入公共Conn.php

include_once("./conn.php");

//2.接收表单变量的值
$username=$_POST["username"];
$password=$_POST["password1"];
$realname=$_POST["realname"];
$mobile=$_POST["mobile"];
$sex=$_POST["sex"];

//3.构造sql语句
$sqlStr= "insert into userinfo(username,password,realname,mobile,sex) values('$username','$password','$realname','$mobile','$sex')";
//4.执行sql语句并放回结果

$result=mysqli_query($conn,$sqlStr);

//5.通过是否成功，返回json对象给前端
if($result){
	
	$jsonArray=["isSuccess"=>true,"msg"=>"用户注册成功"];
	
	echo json_encode($jsonArray);
}else{
	
	$jsonArray=["isSuccess"=>false,"msg"=>"用户注册失败  原因:".mysqli_error($conn)];
	echo json_encode($jsonArray);
}
?>