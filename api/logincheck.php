<?php
//1.引入公共连接配置
include_once("./conn.php");


//2.接收数据

$username=$_POST["username"];
$password=$_POST["password"];

//3.构造sql语句

$sqlStr="select * from userinfo where username='$username'and password='$password'";


//4.执行sql语句
$rs=mysqli_query($conn, $sqlStr);

   //5. 根据执行的结果返回json到前端
   
   $row=mysqli_fetch_assoc($rs);
   
   if($row){
   	//成功
   	$jsonArray=["isSuccess"=>true,"msg"=>"登录成功"];
   	echo json_encode($jsonArray);
	
	//验证用户登录成功 就创建session
	session_start();//创建session
	$_SESSION["username"]=$row["username"];
	$_SESSION["userid"]=$row["userid"];
	
   }else{
   	//失败
	$jsonArray=["isSuccess"=>false,"msg"=>"登录失败"];
	echo json_encode($jsonArray);
	
   }
?>