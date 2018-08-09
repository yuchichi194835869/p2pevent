<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>p2p会员中心</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css" />

		<link rel="stylesheet" href="dist/css/autonym.css" />
	</head>
	<body>
		<!--引入页头-->
		<?php
			include_once("./header.html")
		?>
		<!--内容-->
		<div id="person" class="container">
			<div class="row">

				<!--引入左边栏html结构-->
				<?php
					include_once("./left.html")
				?>
			</div>
				<!--右边内容-->
				<div id="rightBox" class="col-lg-9 col-md-10 col-sm-12">
					<div id="loginReg">
						<div class="panel panel-default">
							<div class="panel-heading">
								实名认证
							</div>
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="username">用户账号</label>
										<input type="text" class="form-control" name="username" id="username" placeholder="请输入用户名">
									</div>
									<div class="form-group">
										<label for="usename">姓名</label>
										<input type="text" class="form-control" name="realname" id="realname" placeholder="">
									</div>
									<div class="form-group">
										<label for="number">证件号码</label>
										<input type="text" class="form-control" name="password2" id="password2" placeholder="">
									</div>
									<div class="form-group">
										<label for="data">出生日期</label>
										<input type="text" class="form-control" name="data" id="data" placeholder="请输入出生日期">
									</div>
									<div class="form-group">
										<label for="address">证件地址</label>
										<input type="text" class="form-control" name="site" id="site" placeholder="">
									</div>
									<div class="form-group">

										<label>用户性别</label>
										<label class="radio-inline">
										<input type="radio" name="sex" value="男">
										男 </label>
										<label class="radio-inline">
										<input type="radio" name="sex" value="女">
										女 </label>
									</div>
									<div class="checkbox">
										<label>
										<input type="checkbox">
										同意注册协议 </label>
									</div>
									<button type="submit" class="btn btn-danger">
									立即注册
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--引入页脚-->
		<?php
include_once("./footer.html")
		?>
		<!--引入jquery-->
		<script src="lib/jquery/jquery.js" type="text/javascript" charset="utf-8"></script>
		
		<script src="src/javascripts/personal.js" type="text/javascript" charset="utf-8"></script>
		
		<!--引入bootstrap  js文件-->
		<script src="lib/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<!--自定义文件  副导航提示框-->
		<script src="src/javascripts/index.js" type="text/javascript"></script>

	</body>
</html>
