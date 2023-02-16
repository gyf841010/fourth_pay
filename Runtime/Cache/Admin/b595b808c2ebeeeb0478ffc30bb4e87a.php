<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>后台管理 - <?php echo ($sitename); ?></title>
  <!--[if lt IE 9]>
  <meta http-equiv="refresh" content="0;ie.html" />
  <![endif]-->
    <link rel="icon" href="Public/qq572125157/images/favicon.ico">
<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="Public/qq572125157/css/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="Public/qq572125157/css/assets/vendor_components/datatable/datatables.min.css"/>	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="Public/qq572125157/css/bootstrap-extend.css">	
	<!-- theme style -->
	<link rel="stylesheet" href="Public/qq572125157/css/master_style.css">
	<!-- Fab Admin skins -->
	<link rel="stylesheet" href="Public/qq572125157/css/skins/_all-skins.css">	
	<!-- Morris charts -->
	<link rel="stylesheet" href="Public/qq572125157/css/assets/vendor_components/morris.js/morris.css">
   <link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="wrapper">
<link rel="stylesheet" href="/Public/qq572125157/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">	
<!-- Bootstrap extend-->
<link rel="stylesheet" href="/Public/qq572125157/css/bootstrap-extend.css">
<!-- Theme style -->
<link rel="stylesheet" href="/Public/qq572125157/css/master_style.css">
<!-- Fab Admin skins -->
<link rel="stylesheet" href="/Public/qq572125157/css/skins/_all-skins.css">
<section class="bg-img h-p100" style="background-image: url(/Public/qq572125157/images/photo1.jpg);">
		<div class="container h-p100">
		  <div class="row h-p100 align-items-center justify-content-center">
			<div class="col-lg-8 col-11">		  
			  <div class="error-page bg-white rounded">
				<div class="error-content">
					<div class="row h-p100 align-items-center bg-bubbles-dark bg-danger">
						<div class="col-lg-6 col-md-12 bg-white text-dark">
							<div class="p-30">							
								<h1 class="text-danger font-size-80 font-weight-700">请稍等</h1>
								<h2>登录成功</h2>
								<h5>资源加载中!</h5>
								<p>正在转跳 平台管理中心 </p>
								<div class="mb-15">
								  <a id="href" href="<?php echo U('Admin/Index/main');?>" class="btn btn-info btn-block margin-top-10">不想等待点这里</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
						 	<div class="error-content-inner text-center p-15">
							  <h1 class="margin-top-0 headline"><i class="fa fa-warning text-white"></i></h1>
							  <h2> 账号验证成功!</h2>
								 <h4 class="mb-15">等待时间： <b id="wait">3</b> 秒</h4>
                              <h6> 安全监测即将完毕!</h6>
							</div>
						</div>
					</div>
				</div>
				<!-- /.error-content -->
			  </div>
			  <!-- /.error-page -->
			</div>
		  </div>
		</div>
	</section>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>