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
			<form class="layui-form" action="" id="payaccess">
			<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
			  <div class="layui-form-item">
				<label class="layui-form-label">中文名称</label>
				<div class="layui-input-inline">
				  <input type="text" name="name" lay-verify="required" autocomplete="off" value="<?php echo ($info["name"]); ?>" placeholder="中文名称" class="layui-input">
				</div>
			  </div>

			  <div class="layui-form-item">
				<label class="layui-form-label">代码名称</label>
				<div class="layui-input-inline">
				  <input type="text" name="theme" lay-verify="required" placeholder="代码名称" value="<?php echo ($info["theme"]); ?>" style="text-transform:capitalize;" autocomplete="off" class="layui-input">
				</div>
				  <div class="layui-form-mid layui-word-aux"></div>
			  </div>
			  
			  <div class="layui-form-item">
				<label class="layui-form-label">状态：</label>
				<div class="layui-input-block">
				  <input type="radio" name="is_default" <?php if($info[is_default] == 1): ?>checked<?php endif; ?> value="1" title="开启" checked="">
				  <input type="radio" name="is_default" <?php if($info[is_default] == 0): ?>checked<?php endif; ?> value="0" title="关闭">
				</div>
			  </div>
			  
			  <div class="layui-form-item">
				<label class="layui-form-label">备注：</label>
				<div class="layui-input-inline">
				  <input type="text" name="remarks" lay-verify="required" placeholder="备注" value="<?php echo ($info["remarks"]); ?>" style="text-transform:capitalize;" autocomplete="off" class="layui-input">
				</div>
				  <div class="layui-form-mid layui-word-aux"></div>
			  </div>

			  <div class="layui-form-item">
				<div class="layui-input-block">
				  <button class="layui-btn" lay-submit="submit" lay-filter="add"><i class="fa fa-check-square-o"></i> 提交保存</button>
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
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['layer', 'form'], function(){
  var form = layui.form
  ,layer = layui.layer;
  
  //监听提交
  form.on('submit(add)', function(data){
    $.ajax({
		url:"<?php echo U('Template/addSave');?>",
		type:"post",
		data:$('#payaccess').serialize(),
		success:function(res){
			if(res.status){
				layer.alert("编辑成功", {icon: 6},function () {
					parent.location.reload();
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				});
			}else{
                layer.msg("操作失败!", {icon: 5},function () {
                    var index = parent.layer.getFrameIndex(window.name);
                    parent.layer.close(index);
                });
                return false;
            }
		}
	});
    return false;
  });
});



</script>
</body>
</html>