<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p注册</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />
		
		<link rel="stylesheet" href="lib/bootstrapvalidator/src/css/bootstrapValidator.css" />
		<!--注册页面样式-->
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
			  <div class="panel-heading">用户注册</div>
			  <div class="panel-body">
			   <form id="userform" method="post">
				  <div class="form-group">
				    <label for="username">用户账号</label>
				    <input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
				  </div>
				  <div class="form-group">
				    <label for="password1">用户密码</label>
				    <input type="password" class="form-control" id="password1" name="password1" placeholder="请输入密码">
				  </div>
				   <div class="form-group">
				    <label for="password2">确认密码</label>
				    <input type="password" class="form-control" id="password2" name="password2" placeholder="请确认密码">
				  </div>
				  <div class="form-group">
				    <label for="mobile">联系电话</label>
				    <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="请输入电话号码">
				  </div>
				  <div class="form-group">
				    <label for="realname">用户姓名</label>
				    <input type="text" class="form-control" name="realname" id="realname" placeholder="请输入姓名">
				  </div>
				  <div class="form-group">
				    <label>用户性别</label>
				    <label class="radio-inline">
					  <input type="radio" name="sex"  value="男"> 男
					</label>
					<label class="radio-inline">
					  <input type="radio" name="sex"  value="女"> 女
					</label>
				  </div>
				  <div class="form-group checkbox">
				    <label>
				      <input name="isAgree" type="checkbox"> 同意注册协议
				    </label>
				  </div>
				 <button type="submit" class="btn btn-danger">用户注册</button>
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
		<!--引入bootstrap 文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--引入bootatrapValidator 库-->
		<script src="lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js" type="text/javascript" charset="utf-8"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascripts/index.js" type="text/javascript"></script>
		<!--表单验证-->
		<script src="./src/javascripts/login.js" type="text/javascript"></script>
	</body>

</html>