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

			<form class="layui-form" action="" id="profile">
			<input type="hidden" name="userid" value="<?php echo ($u["id"]); ?>">

	 <div class="layui-form-item">	<div class="input-group">
            <span class="input-group-addon">商户名</span>
                <input type="text" class="form-control" name="u[username]" lay-verify="required" autocomplete="off"
						 value="<?php echo (htmlentities($u["username"])); ?>"
						 placeholder="用户名"
						 <?php if($u["id"] > 0): ?>disabled="disabled"<?php endif; ?>>
			  </div>  </div>

                 <div class="layui-form-item"> <div class="input-group">
            <span class="input-group-addon">上级代理ID</span>
                <input type="text" class="form-control" name="u[parentid]" lay-verify="required" autocomplete="off"
						 value="<?php echo (htmlentities($u["parentid"])); ?>"
						 placeholder="无代理请填0">
			  </div>代理ID减去10000，无代理请填0</div>
                      
              
         <div class="layui-form-item">     
	  <div class="input-group">
				<span class="input-group-addon">姓名：</span>
				  <input type="text" name="u[realname]" lay-verify="required" autocomplete="off"
						 value="<?php echo (htmlentities($u["realname"])); ?>"
						 placeholder="姓名"
						 class="form-control">
				</div></div>

			
			  
			  <div class="layui-form-item">
				<div class="input-group">
				<span class="input-group-addon">身份证号：</span>
				  <input type="text" name="u[sfznumber]" lay-verify="required" autocomplete="off" value="<?php echo (htmlentities($u["sfznumber"])); ?>" placeholder="身份证号" class="form-control">
				</div>
			  </div>
			  <div class="layui-form-item">
				<div class="input-group">
				<span class="input-group-addon">出生日期：</span>
				  <input class="form-control" name="u[birthday]" placeholder="出生日期" id="birthday" value="<?php echo (date("Y-m-d",$u[birthday])); ?>">
				</div>
			  </div>
			  
			  <div class="layui-form-item">
				<div class="input-group">
				<span class="input-group-addon">手机号码：</span>
				  <input type="text" name="u[mobile]"  autocomplete="off" value="<?php echo (htmlentities($u["mobile"])); ?>" placeholder="手机号码" class="form-control">
				</div>
			  </div>
			  
			  <div class="layui-form-item">
					<div class="input-group">
				<span class="input-group-addon">联系QQ：</span>
				  <input type="text" name="u[qq]" autocomplete="off" value="<?php echo (htmlentities($u["qq"])); ?>" placeholder="联系QQ"
						 class="form-control">
				</div>
			  </div>
			  
			  <div class="layui-form-item">
				<div class="input-group">
				<span class="input-group-addon">Email：</span>
				  <input type="text" name="u[email]" lay-verify="required" autocomplete="off" value="<?php echo (htmlentities($u["email"])); ?>" placeholder="Email" class="form-control">
				</div>
			  </div>
			  
                         <div class="layui-form-item">
	<div class="input-group">
            <span class="input-group-addon">谷歌验证码：</span>
          <input type="text" name="u[google_secret_key]" lay-verify="" autocomplete="off" value="<?php echo (htmlentities($u["google_secret_key"])); ?>"  placeholder="未绑定" readonly onfocus="this.removeAttribute('readonly');" class="form-control">
        </div>
      </div>   
			  
			  <div class="layui-form-item">
				<div class="input-group">
				<span class="input-group-addon">联系地址：</span>
					  <input type="text" name="u[address]" lay-verify="required" autocomplete="off" value="<?php echo (htmlentities($u["address"])); ?>" placeholder="联系地址" readonly onfocus="this.removeAttribute('readonly');" class="form-control">
					</div>
				
			</div>

		<!--<div class="layui-form-item">
				<label class="layui-form-label">登录密码：</label>
				<div class="layui-input-inline">
					<input type="password" name="u[password]" autocomplete="off" value="<?php echo (htmlentities($u["password"])); ?>"  readonly onfocus="this.removeAttribute('readonly');" class="layui-input"><div class="layui-form-mid layui-word-aux">若不修改登陆密码，请留空</div>
				</div>
			</div>
<div class="layui-form-item">
				<label class="layui-form-label">登录密码：</label>
				<div class="layui-input-inline">
					<input type="password" name="u[password]" autocomplete="off" value="" placeholder="登录密码" class="layui-input">
				</div>
			</div>-->

  			<div class="layui-form-item layui-form-text">
    			<div class="input-group">
				<span class="input-group-addon">登录IP白名单：</span>
      				<textarea name="u[login_ip]" placeholder="请输入内容" class="form-control"><?php echo ($u[login_ip]); ?></textarea>
    			</div>
  			</div>
              
  			<div class="layui-form-item layui-form-text">
    			<div class="input-group">
				<span class="input-group-addon">支付提交</br> IP白名单：</span>
      				<textarea name="u[pay_ip]" placeholder="提交订单的服务器IP，多个以英文逗号分隔，不填则不限制" class="form-control"><?php echo ($u[pay_ip]); ?></textarea>
    			</div>
  			</div>
              
                <div class="layui-form-item">
                  <label class="layui-form-label">性别：</label>
<div class="layui-input-block">
				  <select name="u[sex]" lay-search="" class="form-control">
					<option value=""></option>
                    <option <?php if($u['sex'] == 1): ?>selected<?php endif; ?> value="1">男</option>
					<option <?php if($u['sex'] == 0): endif; ?> value="0">女</option>
				  </select>
				</div>
  </div>
			 <div class="layui-form-item">
                  <label class="layui-form-label">类型：</label>
<div class="layui-input-block">
				  <select name="u[groupid]" lay-verify="required" lay-search="" class="form-control select2">
					<option value=""></option>
						<?php if(is_array($groupId)): foreach($groupId as $k=>$v): ?><option <?php if($u['groupid'] == $k): ?>selected<?php endif; ?>
							  value="<?php echo ($k); ?>"><?php echo ($v); ?></option><?php endforeach; endif; ?>
				  </select>
				</div>
			  </div>

			<div class="layui-form-item">
              <span>代付API接口状态：</span>

				<div class="layui-input-block">
					<input type="radio" name="u[df_api]" lay-filter="df_api" value="1" title="开启" <?php if($u['df_api'] == 1): ?>checked<?php endif; ?>>
					<input type="radio" name="u[df_api]" lay-filter="df_api" value="0" title="关闭" <?php if($u['df_api'] == 0): ?>checked<?php endif; ?>>
				</div>
			</div>
			<div class="layui-form-item" id="df_auto_check" <?php if($u['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
			<span>代付API自动审核：</span>
			<div class="layui-input-block">
				<input type="radio" name="u[df_auto_check]" lay-filter="df_auto_check" value="1" title="开启" <?php if($u['df_auto_check'] == 1): ?>checked<?php endif; ?>>
				<input type="radio" name="u[df_auto_check]" lay-filter="df_auto_check" value="0" title="关闭" <?php if($u['df_auto_check'] == 0): ?>checked<?php endif; ?>>
			</div>
		</div>
		<div class="layui-form-item" id="df_domain" <?php if($u['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
		<span>代付域名报备：</span>

				<textarea name="u[df_domain]" placeholder="如：www.baidu.com，多个域名请换行，一行一个域名" class="layui-textarea"><?php echo ($u[df_domain]); ?></textarea>

			<label class="layui-form-label"></label><div class="layui-form-mid layui-word-aux">注意：无需填写http://或https://，也不需要填写具体路径，结尾不加 /，一行一个域名。下级商户只能从这些域名发起代付请求！</div>
		</div>
		<div class="layui-form-item" id="df_ip" <?php if($u['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
			<span>代付IP报备：</span>

			<textarea name="u[df_ip]" placeholder="如：127.0.0.1，多个IP请换行，一行一个IP" class="layui-textarea"><?php echo ($u[df_ip]); ?></textarea>

		<label class="layui-form-label"></label><div class="layui-form-mid layui-word-aux">注意：请填写发起代付请求的服务器公网IP一行一个IP地址。</div>
		</div>
			<div class="layui-form-item">
				<div class="layui-input-block">
				  	<button class="layui-btn" lay-submit="submit" lay-filter="save"><i class="fa fa-check-square-o"></i> 提交保存</button>
				</div>    </div>
			</form>

        </div></div></div>

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
layui.use(['layer', 'form','laydate'], function(){
  var form = layui.form
  ,laydate = layui.laydate
  ,layer = layui.layer;

    //常规用法
    laydate.render({
        elem: '#birthday'
    });
    form.on('radio(df_api)',function(data){
        if(data.value == 1) {
            $('#df_auto_check').show();
            $('#df_domain').show();
            $('#df_ip').show();
        } else {
            $('#df_auto_check').hide();
            $('#df_domain').hide();
            $('#df_ip').hide();
        }
    });
  //监听提交
  form.on('submit(save)', function(data){
    $.ajax({
		url:"<?php echo U('User/saveUser');?>",
		type:"post",
		data:$('#profile').serialize(),
		success:function(res){
			if(res.status){
				layer.alert("编辑成功", {icon: 6},function () {
					parent.location.reload();
					var index = parent.layer.getFrameIndex(window.name);
					parent.layer.close(index);
				});
			}else{
                layer.alert("操作失败:" + res.msg, {icon: 5},function (index) {
                    layer.close(index)
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