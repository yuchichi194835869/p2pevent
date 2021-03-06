//文档准备就绪就初始化配置
$(function() {
    //对那个表单做验证
    $('#userform')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            message: 'This value is not valid', //表单出错的全局提示信息
            //表单验证的状态提示图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },
            //对那些表单元素做验证
            fields: {
                //用户名验证
                username: {
                    message: '用户名验证失败', //表单出错的局部提示信息
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度范围
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        }
                    }
                },
                //确认密码验证
                password2: {
                    validators: {
                        notEmpty: {
                            message: '确认密码必须填写'
                        },
                        //一致性的验证： identical完全相同
                        identical: {
	                        field: 'password1', //与那个字段做比较
	                        message: '两次密码输入不一致'
	                    }
                    }
                },
                //真实姓名
                realname: {
                    validators: {
                        notEmpty: {
                            message: '真实姓名不能为空'
                        }
                    }
                },
                //手机号码的验证
                mobile: {
                    validators: {
                        notEmpty: {
                            message: '手机号码必须填写'
                        },
                        //正则表达式的验证
                        regexp: {
				           regexp: /^[1][3,4,5,7,8,9][0-9]{9}$/,
				           message: '手机号码格式不正确'
	                    }
                    }
                },
                //性别的验证
                sex: {
                	validators:{
                		notEmpty: {
                            message: '请选择性别'
                        }
                	}
                },
                //同意注册协议
                isAgree: {
                	validators: {
                		//多个中必须选择一个
//              		choice: {
//	                        min: 1,
//                          max: 3, 
//	                        message: '请选择查看注册协议并同意'
//	                    },
						notEmpty: {
                            message: '请选择查看注册协议并同意'
                        }
                	}
                }
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');
            
            // 使用ajax发送提交表单的数据请求
            var postUrl="../../api/addUser.php";
            var postData=$form.serialize();
            console.log(postData);
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData ,function(result) {
               console.log(result);
               
                //根据ajax返回的结果处理前端的业务逻辑
                //
                $("#myModal .modal-title").text("用户注册提示信息");
                console.log(result.isSuccess);
                if(result.isSuccess){
                	//设置模态框内容
                	$("#myModal .modal-body").html(result.msg+"<span id='min'>5</span>秒后跳转到登录页面"+"<span class='glyphicon glyphicon-ok'></span>");
                	//显示模态框
                	$("#myModal").modal("show");
                	hometime();
                }else{
                	$("#myModal .modal-body").html(result.msg+"<span id='min' class='glyphicon glyphicon-remove'>5</span>秒后自动关闭");
                	//显示模态框
                	$("#myModal").modal("show");
                	
                }
            },'json');
        });
        
        //用户登录
            $('#loginform')
        //调用验证方法，验证方法中是一个配置对象
        .bootstrapValidator({
            message: 'This value is not valid', //表单出错的全局提示信息
            //表单验证的状态提示图标
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok', //通过
                invalid: 'glyphicon glyphicon-remove', //失败
                validating: 'glyphicon glyphicon-refresh' //正在验证中
            },
            //对那些表单元素做验证
            fields: {
                //用户名验证
                username: {
                    message: '用户名验证失败', //表单出错的局部提示信息
                    validators: {
                        //非空
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        //长度范围
                        stringLength: {
                            min: 6,
                            max: 18,
                            message: '用户名长度必须在6~18位之间'
                        }
                    }
                },
                //密码验证
                password1: {
                    validators: {
                        notEmpty: {
                            message: '密码必须填写'
                        },
                        stringLength: {
                            min: 6,
                            message: '密码长度必须大于6位'
                        }
                    }
                },  
            }
        })
        //success验证成功后的处理函数，error验证出错的事件
        .on('success.form.bv', function(e) {
            // 由于使用ajax提交表单注册，所有此处阻止表单提交的默认行为
            e.preventDefault();
            // 获取验证的表单实例
            var $form = $(e.target);
            // 获取表单验证实例
            var bv = $form.data('bootstrapValidator');
            
            // 使用ajax发送提交表单的数据请求
            var postUrl="../../api/logincheck.php";
            var postData=$form.serialize();
            
            // $.post("提交的url地址",对象形式或者字符串拼接的数据,callback回调函数, 数据返回的类型)
            $.post(postUrl, postData ,function(result) {
               console.log(result);
               
                //根据ajax返回的结果处理前端的业务逻辑
                //
                $("#myModal .modal-title").text("用户注册提示信息");
                console.log(result.isSuccess);
                if(result.isSuccess){
                	//设置模态框内容
                	$("#myModal .modal-body").html(result.msg+"<span id='min'>5</span>秒后跳转到登录页面"+"<span class='glyphicon glyphicon-ok'></span>");
                	//显示模态框
                	$("#myModal").modal("show");
                	suntime();
                }else{
                	$("#myModal .modal-body").html(result.msg+"<span id='min' class='glyphicon glyphicon-remove'>5</span>秒后自动关闭");
                	//显示模态框
                	$("#myModal").modal("show");
                	console.log(result.msg); 
                }
            },'json');
        });
});




function hometime(){
	var num=5;
	var timeid=setInterval(function(){
	num--;
	
	$("#min").text(num);
	if(num==0){
		clearInterval(timeid);
		location.href="../../login.php";
	}

},1000);
}

	
function suntime(){
	var num=5;
	var timeid=setInterval(function(){
	num--;
	
	$("#min").text(num);
	if(num==0){
		clearInterval(timeid);
		location.href="../../personal.php";
	}

},1000);
}
