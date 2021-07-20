<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>登录页</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font/iconfont.css">
		<style>
			body,html{
				height: 100%;
			}
			body{
				background-color: #3e3e3e;
			}
			.modal-dialog{
				width: 440px;
			}
			.modal-content{
				background-color: #787878;
				border: 1px solid #fff;
			}
		</style>
	</head>
	<body>
		<section class="w-100 h-100 d-flex justify-content-center align-items-center">
			
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header justify-content-center">
			        <h5 class="text-white">后台管理系统</h5>
			      </div>
			      <div class="modal-body">
			        <form action="" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class=" iconfont icon-yonghu"></i></span>
							</div>
							<input type="text" class="form-control" placeholder="请输入用户名" name="username">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class=" iconfont icon-mima"></i></span>
							</div>
							<input type="password" class="form-control" placeholder="请输入密码" name="password">
						</div>
						<button class="btn btn-primary btn-block mb-3 ">登录</button>
					</form>
			      </div>
			    </div>
			  </div>
		</section>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
