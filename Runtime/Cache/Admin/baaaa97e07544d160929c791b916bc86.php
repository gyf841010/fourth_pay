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
					<div class="col-12">
                      
			<form class="layui-form" action="" id="form" autocomplete="off" >
				<input type="hidden" name="orderid" value="<?php echo ($order["id"]); ?>">
			  <div class="layui-form-item">
				<div class="input-group">
            <span class="input-group-addon">订单号：</span>
					<input type="text" class="form-control" value="<?php echo ($order["pay_orderid"]); ?>" readonly>
				</div>
			  </div>
				<div class="layui-form-item">
				<div class="input-group">
            <span class="input-group-addon">金额：</span>
						<input type="text" class="form-control" value="<?php echo ($order["pay_amount"]); ?>" readonly>
					</div>
				</div>
				<?php if($verifyGoogle and $verifysms): ?><div class="layui-form-item">
				<div class="form-group row" id="df_auto_check">
					<label class="col-sm-1 col-form-label">验证方式：</label>
<div class="col-sm-2">
						<input type="radio" name="auth_type" lay-filter="auth_type" value="1" title="谷歌安全码" checked>
						<input type="radio" name="auth_type" lay-filter="auth_type" value="0" title="短信验证码">
	
				</div></div>
					<?php else: ?>
					<input type="hidden" name="auth_type" value="<?php echo ($auth_type); ?>"><?php endif; ?>
				<?php if(($verifyGoogle) == "1"): ?><div class="layui-form-item">
				<div class="input-group" id="auth_google">
				<span class="input-group-addon">谷歌安全码：</span>

						<input type="text" name="google_code" autocomplete="off"
							   placeholder="请输入谷歌安全码" class="form-control" value="">
				</div></div><?php endif; ?>
              
				<?php if(($verifysms) == "1"): ?><div class="layui-form-item">
					<div class="input-group" id="auth_sms" <?php if($verifyGoogle and $verifysms): ?>style="display: none"<?php endif; ?>>
               <div class="input-group-prepend">
                  <button href="javascript:;" type="button"   id="sendBtn" data-mobile="<?php echo ($mobile); ?>" class="btn btn-danger">发送验证码</button>
                  <input type="text" name="code"  autocomplete="off"
							   placeholder="请输入短信验证码" class="form-control" value="">
                </div>
                </div>
            </div><?php endif; ?>
			<div class="layui-form-item">
				<div class="layui-input-block">
				  	<button class="layui-btn" lay-submit="submit" lay-filter="save"><i class="fa fa-check-square-o"></i> 确定提交</button>
				</div>
			</div>
			</form>
            </div>
        </div></div>

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
var issubmit=false;
layui.use(['layer', 'form','laydate'], function(){
  var form = layui.form
  ,laydate = layui.laydate
  ,layer = layui.layer;

    //常规用法
    laydate.render({
        elem: '#createtime',
		type: 'datetime',
        theme: 'molv',
        range: '|'
    });
  //监听提交
  form.on('submit(save)', function(data){
      layer.confirm('确认要将该订单设置为已支付吗？<br>订单号：【<?php echo ($order["pay_orderid"]); ?>】<br>该操作不可恢复，请谨慎操作！',{
          btn: ['确定','取消'] //按钮
      }, function(){
          $.ajax({
              url:"<?php echo U('Order/setOrderPaid');?>",
              type:"post",
              data:$('#form').serialize(),
              success:function(res){
                  if(res.status){
                      layer.alert(res.msg? res.msg :"设置成功！", {icon: 6},function () {
                          parent.location.reload();
                          var index = parent.layer.getFrameIndex(window.name);
                          parent.layer.close(index);
                      });
                  }else{
                      layer.alert(res.msg, {icon: 5},function (index) {
                          layer.close(index)
                      });
                  }
              }
          });
      }, function(){
      });
   	 return false;
  });
    form.on('radio(auth_type)',function(data){
        if(data.value == 1) {
            $('#auth_google').show();
            $('#auth_sms').hide();
        } else {
            $('#auth_google').hide();
            $('#auth_sms').show();
        }
    });
});
</script>
<script>
    $(function (){
        var sendUrl = "<?php echo U('Order/setOrderPaidSend');?>";
        // 手机验证码发送
        $('#sendBtn').click(function(){
            var mobile = $(this).data('mobile');
            if(mobile == '') {
                layer.alert('请先绑定手机号码',{icon: 5}, function() {
                    location.href = "<?php echo U('System/bindMobileShow');?>";
                });
                return;
			}
            sendSms(this, mobile, sendUrl);
        });
    })
</script>
</body>
</html>