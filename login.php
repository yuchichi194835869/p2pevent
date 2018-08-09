<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p登录</title>
		<meta name="viewport" content="width=device- width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="lib/bootstrapvalidator/src/css/bootstrapValidator.css" />
		<link rel="stylesheet" href="dist/css/loginrigister.css" />
	</head>
	<body>
		<!--引入页头-->
		<?php
			include_once("./header.html")
		?>
		<!--中间内容-->
		<div class="container">
			<div class="panel panel-default">
			  <div class="panel-heading">用户登录</div>
			  <div class="panel-body">
			   <form id="loginform">
				  <div class="form-group">
				    <label for="username">用户账号</label>
				    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
				  </div>
				  <div class="form-group">
				    <label for="password">用户密码</label>
				    <input type="password" class="form-control" id="password" name="password" placeholder="请输入密码">
				  </div>
				
				 <button type="submit" class="btn btn-danger">立即登录</button>
				</form>
			  </div>
			</div>
		</div>
	
		<!--底部-->
	   <!--引入页脚-->
		<?php
			include_once("./footer.html")
		?>
		
				<!-- Button trigger modal -->

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title"></h4>
			      </div>
			      <div class="modal-body">
			        
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">关闭窗口</button>
			      </div>
			    </div>
			  </div>
			</div>
		
		
		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--引入第三方验证js文件-->
		<script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascripts/index.js" type="text/javascript"></script>
		<!--引入验证js-->
		<script src="src/javascripts/login.js" type="text/javascript"></script>
	</body>

</html>