<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit">
<title><?php echo C("WEB_TITLE");?></title>
<link rel="shortcut icon" href="favicon.ico">
<link href="/Public/Front/css/bootstrap.min.css" rel="stylesheet">
<link href="/Public/Front/css/font-awesome.min.css" rel="stylesheet">
<link href="/Public/Front/css/animate.css" rel="stylesheet">
<link href="/Public/Front/css/style.css" rel="stylesheet">
<link href="/Public/Front/js/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <!-- Content -->
                <div class="ibox-content">
					<blockquote class="layui-elem-quote layui-quote-nm">
					<p>可用余额：<span class="text-danger"><?php echo ($info["balance"]); ?></span>元</p>
					<p>冻结余额：<span class="text-danger"><?php echo ($info["blockedbalance"]); ?></span>元</p>
                    <p>投诉保证金：<span class="text-danger"><?php echo ($info["complaintsDeposit"]); ?></span>元</p>
					</blockquote>
                    <button class="layui-btn layui-btn-danger"
                            onclick="money_incr('增加/减少资金','<?php echo U('User/incrMoney',['uid'=>$info[id]]);?>',415,600)">
                        加/减余额</button>
                    <button class="layui-btn layui-btn-danger "
                            onclick="money_frozen('T1冻结资金管理','<?php echo U('User/frozenTiming',['uid'=>$info[id]]);?>',1300,800)"
                    >T1冻结资金管理</button><br><br>
                    <button class="layui-btn layui-btn-danger "
                            onclick="money_frozen('手动冻结余额','<?php echo U('User/frozenMoney',['uid'=>$info[id]]);?>',415,600)"
                    >手动冻结余额</button>
                    <button class="layui-btn layui-btn-danger "
                            onclick="money_frozen('手动冻结余额管理','<?php echo U('User/frozenOrder',['uid'=>$info[id]]);?>',1300,800)"
                    >手动冻结余额管理</button>
                </div>
                <!-- Content -->
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
        layui.use(['form','laydate','layer'], function(){
                var form = layui.form
                    ,layer = layui.layer
                    ,laydate = layui.laydate;
        });

        /*用户-加减余额*/
        function money_incr(title,url,w,h){
            if (title == null || title == '') {
                title=false;
            };
            if (url == null || url == '') {
                url="404.html";
            };
            if (w == null || w == '') {
                w=800;
            };
            if (h == null || h == '') {
                h=($(window).height() - 50);
            };
            parent.layer.open({
                type: 2,
                area: [w+'px', h +'px'],
                fix: false, //不固定
                maxmin: true,
                shadeClose: true,
                shade:0.4,
                title: title,
                content: url
            });
        }
        /*用户-冻结、解冻余额*/
        function money_frozen(title,url,w,h){
            if (title == null || title == '') {
                title=false;
            };
            if (url == null || url == '') {
                url="404.html";
            };
            if (w == null || w == '') {
                w=800;
            };
            if (h == null || h == '') {
                h=($(window).height() - 50);
            };
            parent.layer.open({
                type: 2,
                area: [w+'px', h +'px'],
                fix: false, //不固定
                maxmin: true,
                shadeClose: true,
                shade:0.4,
                title: title,
                content: url
            });
        }

        function pauseUnfreezing(userId) {
            $.ajax({
                url:"<?php echo U('User/pauseUnfreezingDeposit');?>",
                type:"post",
                data:{"userid": userId},
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
        }
        function unpauseUnfreezing(userId) {
            $.ajax({
                url:"<?php echo U('User/unpauseUnfreezingDeposit');?>",
                type:"post",
                data:{"userid": userId},
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
        }
    </script>
</body>
</html>