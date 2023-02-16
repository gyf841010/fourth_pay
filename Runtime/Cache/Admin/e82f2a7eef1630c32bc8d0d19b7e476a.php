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

    <form class="layui-form"  id="profile">
      <input type="hidden" name="userid" value="<?php echo ($uid); ?>">
      
        <?php if(is_array($list)): $key1 = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key1 % 2 );++$key1;?><div class="layui-form-item">
            <span>【<?php echo ($key); ?>】：</span>
              
            <?php if(is_array($vo)): $key1 = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($key1 % 2 );++$key1;?><div class="layui-input-block">
              <input type="checkbox" name="account[<?php echo ($vo1["id"]); ?>]" title="<?php echo ($vo1["title"]); ?>" <?php if($vo1['checked']): ?>checked<?php endif; ?> value="<?php echo ($vo1["id"]); ?>">
              <div class="layui-unselect layui-form-checkbox">
                <span><?php echo ($vo1["title"]); ?>(<?php echo ($vo1["mch_id"]); ?>)</span>
                <i class="layui-icon layui-icon-ok"></i>
              </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>

          </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
        <div class="layui-form-item">
         <span>是否开启指定：</span>
          <div class="layui-input-block">
            <input type="radio" name="status" lay-filter="changeRule" <?php if($status == 1): ?>checked<?php endif; ?> value="1" title="是" checked="">
            <input type="radio" name="status" lay-filter="changeRule" <?php if(!$status): ?>checked<?php endif; ?> value="0" title="否">
          </div>
        </div>
          
      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit="submit"  id="save"   lay-filter="save"><i class="fa fa-check-square-o"></i> 提交保存</button>
        </div>
      </div>
          
    </form>
    </div>
  </div>
  
<!-- jQuery 3 -->
	<script src="Public/qq572125157/css/assets/vendor_components/jquery/dist/jquery.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="Public/qq572125157/css/assets/vendor_components/jquery-ui/jquery-ui.js"></script>
	
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	
	<!-- popper -->
	<script src="Public/qq572125157/css/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="Public/qq572125157/css/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>	
	
	<!-- Slimscroll -->
	<script src="Public/qq572125157/css/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="Public/qq572125157/css/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Morris.js charts -->
	<script src="Public/qq572125157/css/assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="Public/qq572125157/css/assets/vendor_components/morris.js/morris.min.js"></script>
	
	<!-- echarts -->
	<script src="Public/qq572125157/css/assets/vendor_components/echarts/dist/echarts-en.min.js"></script>
	<script src="Public/qq572125157/css/assets/vendor_components/echarts/echarts-liquidfill.min.js"></script>	

	
	<!-- Sparkline -->
	<script src="Public/qq572125157/css/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- Fab Admin App -->
	<script src="Public/qq572125157/js/template.js"></script>
	
	<!-- Fab Admin dashboard demo (This is only for demo purposes) -->
	<script src="Public/qq572125157/js/pages/dashboard.js"></script>
	
	<!-- Fab Admin for demo purposes -->
	<script src="Public/qq572125157/js/demo.js"></script>	
  
  
  <script src="/Public/Front/js/bootstrap.min.js"></script>
<script src="/Public/Front/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/Public/Front/js/plugins/layui/layui.js" charset="utf-8"></script>
<script src="/Public/Front/js/x-layui.js" charset="utf-8"></script>
<script src="/Public/Front/js/Util.js" charset="utf-8"></script>
<script>
    var polling = "<?php echo ($polling); ?>";
    var id = "<?php echo ($id); ?>";
    var pid = "<?php echo ($pid); ?>";
    layui.use(['layer', 'form','laydate'], function(){
        var form = layui.form
            ,laydate = layui.laydate
            ,layer = layui.layer;


     $('#save').click(function(){
            $.ajax({
              'url':"<?php echo U('Admin/User/saveChannelAccout');?>",
              'data':$('#profile').serialize(),
              'type':'post',
              'success':function(res){
                  if(res.status){
                    layer.alert("操作成功", {icon: 6},function () {
                          var index = parent.layer.getFrameIndex(window.name);
                    parent.location.reload();
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