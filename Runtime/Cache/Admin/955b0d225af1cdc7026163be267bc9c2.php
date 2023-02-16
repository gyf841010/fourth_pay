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
        <table class="layui-table" style="table-layout:fixed;">
          <tr><td>商户编号：</td><td><?php echo ($order["pay_memberid"]); ?></td></tr>
          <tr><td>商户用户名：</td><td><?php echo ($order["username"]); ?></td></tr>
          <!--<tr><td>商户姓名：</td><td><?php echo ($order["realname"]); ?></td></tr>-->
          <tr><td>商户订单号：</td><td><strong class="text-success"><?php echo ($order["out_trade_id"]); ?></strong></td></tr>
          <tr><td>交易金额：</td><td><strong class="text-danger"><?php echo ($order["pay_amount"]); ?></strong></td></tr>
          <tr><td>手续费：</td><td><strong class=""><?php echo ($order["pay_poundage"]); ?></strong></td></tr>
          <tr><td>实际金额：</td><td><strong class="text-success"><?php echo ($order["pay_actualamount"]); ?></strong></td></tr>
          <tr><td>提交时间：</td><td><strong class="text-warning"><?php echo (date('Y-m-d H:i:s',$order['pay_applydate'])); ?></strong></td></tr>
          <tr><td>成功时间：</td><td><strong class="text-danger"><?php echo (date('Y-m-d H:i:s', $order['pay_successdate'])); ?></strong></td></tr>
          <tr><td>交易通道：</td><td><?php echo ($order["pay_bankname"]); ?></td></tr>
          <tr><td>交易银行：</td><td><?php echo ($order["pay_yzh_tongdao"]); ?></td></tr>
          <tr><td>提交地址：</td><td><a href="<?php echo ($order["pay_tjurl"]); ?>" target="_blank">点击查看</a></td></tr>
          <tr><td>返回地址：</td><td><a href="<?php echo ($order["pay_callbackurl"]); ?>" target="_blank">点击查看</a></td></tr>
          <tr><td>通知地址：</td><td><a href="<?php echo ($order["pay_notifyurl"]); ?>" target="_blank">点击查看</a></td></tr>
          <tr><td>订单状态：</td><td><?php switch($order['pay_status']): case "0": ?><strong class="text-danger">未处理</strong><?php break;?>
              <?php case "1": ?><strong class="text-warning">已成功，未返回 【<?php if($order['pay_status'] == 1): ?><a href="javascript:void(0)" TransID="<?php echo $order['pay_orderid']; ?>" tongdao="<?php echo $order['pay_ytongdao']; ?>" class="qdbtn qdbtn2 notify-order">补发通知</a><?php endif; ?>】	</br>  <!--a href="<?php echo U('Pay/Pay/mayibufa', ['TransID'=>$order['pay_orderid'],'tongdao'=>$order['pay_ytongdao']]);?>" target="_blank"><br>上面的补发按钮无效时点这里补发</a--></strong><?php break;?>
              <?php case "2": ?><font color=#008B00>已成功，已返回</font>
               <!--a href="<?php echo U('Pay/Pay/mayibufa', ['TransID'=>$order['pay_orderid'],'tongdao'=>$order['pay_ytongdao']]);?>" target="_blank"><br>补发通知</a--><?php break; endswitch;?></td></tr>
          <tr><td>商户返回内容：</td><td><?php echo ($order["notify_msg"]); ?></td></tr>
          <tr><td>上游返回内容：</td><td style="word-wrap:break-word;"><?php echo ($order["tongdao_msg"]); ?></td></tr>
        </table>
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
<script src="/static/common/js/jquery.cookie.js"></script>
<script src="/static/common/js/cxCalendar/js/jquery.cxcalendar.min.js"></script>
<script src="/static/common/js/jquery.min.js"></script>
	<script src="/static/common/js/bootstrap.min.js"></script>
	<script src="/static/common/js/common.js"></script>
	<!--element js-->
	<script src="/static/common/vue/vue.js"></script>
	<script src="/static/common/element/index.js"></script>
	<!--element js-->
	<!--layer-->
	<script src="/static/common/layer/layer.js"></script>

<script>
 //补单
        $('.notify-order').click(function () {
            var TransID = $(this).attr('TransID');
                       $.ajax({
                type: 'POST',
                url: '/Pay_pay_mayibufa?TransID=<?php echo $order['pay_orderid']; ?>&tongdao=<?php echo $order['pay_ytongdao']; ?>',
                data: "TransID=<?php echo $order['pay_orderid']; ?>",
                dataType: 'json',
                success: function (str) {
                    if (str.pay_status == 1) {
                        alert(str.msg);
                    }else{
                    	  alert(str.msg);
                    }
                }
            });
       
    });
               
</script>
<script>
layui.use(['laydate', 'laypage', 'layer', 'table', 'carousel', 'upload', 'element'], function() {
        var laydate = layui.laydate //日期
            , laypage = layui.laypage //分页
            ,layer = layui.layer //弹层
            , table = layui.table; //表格
    });
</script>
</body>
</html>