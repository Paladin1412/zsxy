<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:34:"./themes/default/login/editpd.html";i:1571815554;}*/ ?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>钻石报告</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<link href="__PUBLIC__/css/mui.min.css" rel="stylesheet" />
		<script src="__PUBLIC__/js/mui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style1.css"/>
		<script src="__PUBLIC__/js/jquery.min.js"></script>
	</head>
	<body>
		<header class="mui-bar mui-bar-nav"  style="background-color:#f7572d;">
		<a class="mui-icon mui-icon-left-nav mui-pull-left" href="<?php echo url('index/index/index'); ?>" style="color: #fff;"></a>
		    <h1 class="mui-title" style="color: #fff;">修改密码</h1>
		</header>
		<div class="mui-content">
		   <div class="dl-a" style="padding-top: 30px;">
		   		<!-- <div class="dl-a-a">
		   			<img src="__PUBLIC__/img/logo.jpg"/>
		   		</div> -->
		   		<div class="dl-b">
			   		<div class="dl-a-b">
			   			<div class="dl-a-b-l">
			   				新密码
			   			</div>
			   			<div class="dl-a-b-r">
			   				<input id='ecitpassword' name="password" type="password" placeholder="请输入您的密码">
			   			</div>
			   		</div>
		   		</div>
		   		<div class="dl-b">
			   		<div class="dl-a-b">
			   			<div class="dl-a-b-l">
			   				确认密码
			   			</div>
			   			<div class="dl-a-b-r">
			   				<input id='xpassword' name="xpassword" type="password" placeholder="请输入您的密码">
			   			</div>
			   		</div>
		   		</div>
		   		<div class="btn">
		   			<button id="btn"  style="background-color:#f7572d; color:#fff">登录</button>
		   			
		   		</div>
		   </div>
		</div>
		<script>
	$('#btn').click(function(){
        
        var xpossword=$('#ecitpassword').val();
        var password=$('#xpassword').val();
        if(xpossword == ''){
							alert('密码不能为空');
							return;
						}
		if(password == ''){
							alert('确认密码不能为空');
							return;
						}
        if(xpossword != password){
        	alert('两次密码必须一致！');
			return;
        }
        //console.log(possword);
        $.ajax({
				url:'<?php echo url('api/login/editpd'); ?>',
				type:"post",
				datatype:'json',

				data:{'xpossword':xpossword},
				
				success:function(data){
					// json=$.parseJSON(data);
					//alert(data);
					            if(data.status=='success'){
					            	//alert(data.msg);
                window.location.href="<?php echo url('index/index/index'); ?>";
            }else if(data.status=='error'){
                alert(data.msg);
                return false;
            }
					 }
				});
      });
        </script>
	</body>
</html>