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
    <link rel="icon" href="/Public/qq572125157/images/favicon.ico">
    <!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<!-- Data Table-->
	<link rel="stylesheet" type="text/css" href="/Public/qq572125157/css/assets/vendor_components/datatable/datatables.min.css"/>
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="/Public/qq572125157/css/bootstrap-extend.css">
	<!-- theme style -->
	<link rel="stylesheet" href="/Public/qq572125157/css/master_style.css">
    <link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_components/select2/dist/css/select2.min.css">
    <!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_plugins/iCheck/all.css">
    <!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	<!-- Fab Admin skins -->
	<link rel="stylesheet" href="/Public/qq572125157/css/skins/_all-skins.css">	
	<!-- Morris charts -->
	<link rel="stylesheet" href="/Public/qq572125157/css/assets/vendor_components/morris.js/morris.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
    <link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
</head>
<body class="hold-transition skin-blue-light sidebar-mini">
<div class="box-body">
<div class="row">
  <div class="col-sm-12">
				<p class="text-danger" style="padding: 15px;">注：费率为千分位，例如：千分之三则填0.003</p>
			<form class="layui-form" action="" id="rate">
				<input type="hidden" name="userid" value="<?php echo ($_GET['uid']); ?>">
				<!--产品列表-->
				<table class="layui-table" lay-even="" lay-skin="line" id="tab">
				<thead>
				<tr>
				  <th>接口</th>
				  <th>T+0运营费率</th>
				  <th>T+0封顶费率</th>
					<th>T+1运营费率</th>
					<th>T+1封顶费率</th>
				</tr> 
				</thead>
				<tbody>
				<?php if(is_array($products)): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><tr>
					<td><?php echo ($p["name"]); ?></td>
					<td>
						<div class="layui-input-inline" style="width: 100px;">
						<input type="text" name="u[<?php echo ($p["id"]); ?>][t0feilv]" placeholder="" autocomplete="off" class="layui-input" value="<?php echo ($p["t0feilv"]); ?>">
						</div>
					</td>
					<td>
						<div class="layui-input-inline" style="width: 100px;">
						<input type="text" name="u[<?php echo ($p["id"]); ?>][t0fengding]" placeholder="" autocomplete="off" class="layui-input" value="<?php echo ($p["t0fengding"]); ?>">
						</div>
					</td>
					<td>
						<div class="layui-input-inline" style="width: 100px;">
							<input type="text" name="u[<?php echo ($p["id"]); ?>][feilv]" placeholder="" autocomplete="off" class="layui-input" value="<?php echo ($p["feilv"]); ?>">
						</div>
					</td>
					<td>
						<div class="layui-input-inline" style="width: 100px;">
							<input type="text" name="u[<?php echo ($p["id"]); ?>][fengding]" placeholder="" autocomplete="off" class="layui-input" value="<?php echo ($p["fengding"]); ?>">
						</div>
					</td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
				</table>
				<!--产品列表-->
				<div class="layui-form-item">
					<div class="layui-input-block">
					  <button class="layui-btn" lay-submit="submit" lay-filter="save"><i class="fa fa-check-square-o"></i> 提交保存</button>
					</div>
				</div>
			</form>
            </div>
        </div>
    </div>

<script src="/Public/Front/js/jquery.min.js"></script>
<script src="/Public/Front/js/bootstrap.min.js"></script>
<script src="/Public/Front/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/Public/Front/js/content.js"></script>
<script src="/Public/Front/js/plugins/layui/layui.js" charset="utf-8"></script>
<script src="/Public/Front/js/x-layui.js" charset="utf-8"></script>

<script>
layui.use(['layer', 'form','laydate'], function(){
  var form = layui.form
  ,laydate = layui.laydate
  ,layer = layui.layer;
  
  //监听提交
  form.on('submit(save)', function(data){
    $.ajax({
		url:"<?php echo U('User/saveUserRate');?>",
		type:"post",
		data:$('#rate').serialize(),
		success:function(res){
			if(res.status){
			layer.alert("编辑成功", {icon: 6},function () {
				parent.location.reload();
				var index = parent.layer.getFrameIndex(window.name);
				parent.layer.close(index);
			});
			}
		}
	});
    return false;
  });
});
</script>
<!--统计代码，可删除-->
</body>
</html>