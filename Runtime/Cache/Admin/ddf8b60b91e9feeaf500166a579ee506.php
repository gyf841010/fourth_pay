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
				<form class="layui-form layui-form-pane" action="" id="profile">
					<input type="hidden" name="data[user_id]" value="<?php echo ($_GET['uid']); ?>">
					<input type="hidden" name="data[id]" value="<?php echo ($info["id"]); ?>">
                    <div class="layui-form-item">
                      <span style="padding-left: 15px;">
                        <b style="color:red">注意:不需要风控的事项请默认0</b>
                      </span>
                    </div>
					<div class="layui-form-item">
						<label class="layui-form-label">应用规则：</label>
						<div class="layui-input-block">
							<input type="radio" name="data[systemxz]" lay-filter="changeRule" <?php if($info[systemxz] == 0): ?>checked<?php endif; ?> value="0" title="系统规则" checked="">
							<input type="radio" name="data[systemxz]" lay-filter="changeRule" <?php if($info[systemxz] == 1): ?>checked<?php endif; ?> value="1" title="个人规则">
						</div>
					</div>
					<div id="changeRule"  style="display:<?php if(!$info[systemxz]): ?>none<?php endif; ?>;">
						<div class="layui-form-item">
							<label class="layui-form-label">单笔最小：</label>
							<div class="layui-input-inline">
								<input type="number" min="0" name="data[min_money]" autocomplete="off" value="<?php echo ($info["min_money"]); ?>" placeholder="" class="layui-input">
							</div>

							<label class="layui-form-label">单笔最大：</label>
							<div class="layui-input-inline">
								<input type="number" min="0" name="data[max_money]" autocomplete="off" value="<?php echo ($info["max_money"]); ?>" placeholder="" class="layui-input">
							</div>
						</div>
				  
						<div class="layui-form-item">
							<label class="layui-form-label">当日总金额：</label>
							<div class="layui-input-inline">
								<input type="number" min="0" name="data[all_money]" autocomplete="off" value="<?php echo ($info["all_money"]); ?>" placeholder="0.00" class="layui-input">
							</div>


						</div>
				  
			            <div class="layui-form-item">
				            <div class="layui-inline">
								<label class="layui-form-label">开始时间：</label>
								<div class="layui-input-inline">
									<select name="data[start_time]">
										<option <?php if($info['start_time'] == 0): ?>selected<?php endif; ?> value="0">0:00</option>
										<option <?php if($info['start_time'] == 1): ?>selected<?php endif; ?> value="1">1:00</option>
										<option <?php if($info['start_time'] == 2): ?>selected<?php endif; ?> value="2">2:00</option>
										<option <?php if($info['start_time'] == 3): ?>selected<?php endif; ?> value="3">3:00</option>
										<option <?php if($info['start_time'] == 4): ?>selected<?php endif; ?> value="4">4:00</option>
										<option <?php if($info['start_time'] == 5): ?>selected<?php endif; ?> value="5">5:00</option>
										<option <?php if($info['start_time'] == 6): ?>selected<?php endif; ?> value="6">6:00</option>
										<option <?php if($info['start_time'] == 7): ?>selected<?php endif; ?> value="7">7:00</option>
										<option <?php if($info['start_time'] == 8): ?>selected<?php endif; ?> value="8">8:00</option>
										<option <?php if($info['start_time'] == 9): ?>selected<?php endif; ?> value="9">9:00</option>
										<option <?php if($info['start_time'] == 10): ?>selected<?php endif; ?> value="10">10:00</option>
										<option <?php if($info['start_time'] == 11): ?>selected<?php endif; ?> value="11">11:00</option>
										<option <?php if($info['start_time'] == 12): ?>selected<?php endif; ?> value="12">12:00</option>
										<option <?php if($info['start_time'] == 13): ?>selected<?php endif; ?> value="13">13:00</option>
										<option <?php if($info['start_time'] == 14): ?>selected<?php endif; ?> value="14">14:00</option>
										<option <?php if($info['start_time'] == 15): ?>selected<?php endif; ?> value="15">15:00</option>
										<option <?php if($info['start_time'] == 16): ?>selected<?php endif; ?> value="16">16:00</option>
										<option <?php if($info['start_time'] == 17): ?>selected<?php endif; ?> value="17">17:00</option>
										<option <?php if($info['start_time'] == 18): ?>selected<?php endif; ?> value="18">18:00</option>
										<option <?php if($info['start_time'] == 19): ?>selected<?php endif; ?> value="19">19:00</option>
										<option <?php if($info['start_time'] == 20): ?>selected<?php endif; ?> value="20">20:00</option>
										<option <?php if($info['start_time'] == 21): ?>selected<?php endif; ?> value="21">21:00</option>
										<option <?php if($info['start_time'] == 22): ?>selected<?php endif; ?> value="22">22:00</option>
										<option <?php if($info['start_time'] == 23): ?>selected<?php endif; ?> value="23">23:00</option>
									</select>
					            </div>

				    <label class="layui-form-label">结束时间：</label>
				              	<div class="layui-input-inline">
									<select name="data[end_time]">
										<option <?php if($info['end_time'] == 0): ?>selected<?php endif; ?> value="0">0:00</option>
										<option <?php if($info['end_time'] == 1): ?>selected<?php endif; ?> value="1">1:00</option>
										<option <?php if($info['end_time'] == 2): ?>selected<?php endif; ?> value="2">2:00</option>
										<option <?php if($info['end_time'] == 3): ?>selected<?php endif; ?> value="3">3:00</option>
										<option <?php if($info['end_time'] == 4): ?>selected<?php endif; ?> value="4">4:00</option>
										<option <?php if($info['end_time'] == 5): ?>selected<?php endif; ?> value="5">5:00</option>
										<option <?php if($info['end_time'] == 6): ?>selected<?php endif; ?> value="6">6:00</option>
										<option <?php if($info['end_time'] == 7): ?>selected<?php endif; ?> value="7">7:00</option>
										<option <?php if($info['end_time'] == 8): ?>selected<?php endif; ?> value="8">8:00</option>
										<option <?php if($info['end_time'] == 9): ?>selected<?php endif; ?> value="9">9:00</option>
										<option <?php if($info['end_time'] == 10): ?>selected<?php endif; ?> value="10">10:00</option>
										<option <?php if($info['end_time'] == 11): ?>selected<?php endif; ?> value="11">11:00</option>
										<option <?php if($info['end_time'] == 12): ?>selected<?php endif; ?> value="12">12:00</option>
										<option <?php if($info['end_time'] == 13): ?>selected<?php endif; ?> value="13">13:00</option>
										<option <?php if($info['end_time'] == 14): ?>selected<?php endif; ?> value="14">14:00</option>
										<option <?php if($info['end_time'] == 15): ?>selected<?php endif; ?> value="15">15:00</option>
										<option <?php if($info['end_time'] == 16): ?>selected<?php endif; ?> value="16">16:00</option>
										<option <?php if($info['end_time'] == 17): ?>selected<?php endif; ?> value="17">17:00</option>
										<option <?php if($info['end_time'] == 18): ?>selected<?php endif; ?> value="18">18:00</option>
										<option <?php if($info['end_time'] == 19): ?>selected<?php endif; ?> value="19">19:00</option>
										<option <?php if($info['end_time'] == 20): ?>selected<?php endif; ?> value="20">20:00</option>
										<option <?php if($info['end_time'] == 21): ?>selected<?php endif; ?> value="21">21:00</option>
										<option <?php if($info['end_time'] == 22): ?>selected<?php endif; ?> value="22">22:00</option>
										<option <?php if($info['end_time'] == 23): ?>selected<?php endif; ?> value="23">23:00</option>
									</select>
				            	</div>

				            </div>
			            </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">时间限制：</label>
                            <div class="layui-input-inline">
                                <input type="number" min="0" name="data[unit_interval]" autocomplete="off" value="<?php echo ($info["unit_interval"]); ?>" placeholder="0.00" class="layui-input">
                            </div>

                            <label class="layui-form-label">限制单位：</label>
                            <div class="layui-input-inline">
                                <select name="data[time_unit]">
                                    <option <?php if($info['time_unit'] == 's'): ?>selected<?php endif; ?> value="s">秒</option>
                                    <option <?php if($info['time_unit'] == 'i'): ?>selected<?php endif; ?> value="i">分</option>
                                    <option <?php if($info['time_unit'] == 'h'): ?>selected<?php endif; ?> value="h">时</option>
                                    <option <?php if($info['time_unit'] == 'd'): ?>selected<?php endif; ?> value="d">天</option>     
                                </select>
                            </div>
                        </div>
                        <div class="layui-form-item">
                            <label class="layui-form-label">单位次数：</label>
                            <div class="layui-input-inline">
                                <input type="number" min="0" name="data[unit_number]" autocomplete="off" value="<?php echo ($info["unit_number"]); ?>"
                                       placeholder="" class="layui-input">
                            </div>
                            <label class="layui-form-label">单位金额：</label>
                            <div class="layui-input-inline">
                                <input type="number" min="0" name="data[unit_all_money]" autocomplete="off" value="<?php echo ($info["unit_all_money"]); ?>"
                                       placeholder="" class="layui-input">
                            </div>
                        </div>
			            <div class="layui-form-item">
			                <label class="layui-form-label">风控状态：</label>
			                <div class="layui-input-block">
			                    <input type="radio" name="data[status]" <?php if($info['status'] == 0): ?>checked<?php endif; ?> value="0" title="关闭" checked="">
			                    <input type="radio" name="data[status]" <?php if($info['status'] == 1): ?>checked<?php endif; ?> value="1" title="开通">
			                </div>
			            </div>
			            <div class="layui-form-item">
						    <label class="layui-form-label">防封域名：</label>
						    <div class="layui-input-block">
						      <textarea name="data[domain]" placeholder="最大能输入五个，每个请用换行，如:&#10;www.xxx1.com&#10;www.xxx2.com&#10;www.xxx3.com&#10;www.xxx4.com&#10;www.xxx5.com" class="layui-textarea"><?php echo ($info['domain']); ?></textarea>
						    </div>
						</div>
					</div>		  
					<div class="layui-form-item">
						<div class="layui-input-block">
							<button class="layui-btn" lay-submit="submit" lay-filter="save"><i class="fa fa-check-square-o"></i> 提交保存</button>
						</div>
					</div>
				</form>
            </div>
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
layui.use(['layer', 'form','laydate'], function(){
  var form = layui.form
  ,laydate = layui.laydate
  ,layer = layui.layer;
    //监听radio
    form.on('radio(changeRule)', function(data){
        if(data.value==1){
            $('#changeRule').css('display','');
        }else if(data.value==0){
            $('#changeRule').css('display','none');
        }
    });
  
  //监听提交
  form.on('submit(save)', function(data){
    $.ajax({
		url:"<?php echo U('Transaction/editAddConfig');?>",
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
				layer.alert(res['msg'], {icon: 2});
			}
		}
	});
    return false;
  });
});
</script>
</body>
</html>