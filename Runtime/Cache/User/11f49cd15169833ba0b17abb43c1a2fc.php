<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php if(($fans[groupid]) == "5"): ?>代理中心<?php endif; if(($fans[groupid]) == "6"): ?>中级代理中心<?php endif; ?> <?php if(($fans[groupid]) == "7"): ?>高级代理中心<?php endif; ?> <?php if(($fans[groupid]) == "4"): ?>商户中心<?php endif; ?> - <?php echo ($sitename); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
<meta content="Coderthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- App favicon -->
<link rel="shortcut icon" href="/Public/assetsqq572125157/images/favicon.ico">
<!-- jvectormap -->
<link href="/Public/assetsqq572125157/libs/jqvmap/jqvmap.min.css" rel="stylesheet" />
<!-- DataTables -->
<link href="/Public/assetsqq572125157/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<link href="/Public/assetsqq572125157/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
<!-- Icons css -->
<link href="/Public/assetsqq572125157/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/assetsqq572125157/libs/dripicons/webfont/webfont.css" rel="stylesheet" type="text/css" />
<link href="/Public/assetsqq572125157/libs/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
<!-- App css -->
<!-- build:css -->
<link href="/Public/assetsqq572125157/css/app.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
<!-- endbuild -->
</head>
<body  style="overflow:hidden">

<div class="row">
<div class="col-12">
<div class="card-box">
        <table class="layui-table">
           <tr><td>商户编号：</td><td><strong class=""><?php echo ($order["pay_memberid"]); ?></strong></td></tr>
          <tr><td>交易金额：</td><td><strong class="text-danger"><?php echo ($order["pay_amount"]); ?></strong></td></tr>
          <tr><td>手续费：</td><td><strong class=""><?php echo ($order["pay_poundage"]); ?></strong></td></tr>
          <tr><td>实际金额：</td><td><strong class="text-success"><?php echo ($order["pay_actualamount"]); ?></strong></td></tr>
          <tr><td>提交时间：</td><td><strong class=""><?php echo (date('Y-m-d H:i:s',$order[pay_applydate])); ?></strong></td></tr>
          <tr><td>成功时间：</td><td><strong class="text-success"><?php echo (date('Y-m-d H:i:s', $order[pay_successdate])); ?></strong></td></tr>
          <tr><td>交易通道：</td><td><?php echo ($order["pay_bankname"]); ?></td></tr>
          <tr><td>交易银行：</td><td><?php echo ($order["pay_yzh_tongdao"]); ?></td></tr>
        <?php if($fans['memberid'] == $order['pay_memberid']): ?><tr><td>提交地址：</td><td> <a href="<?php echo ($order["pay_tjurl"]); ?>" target="_blank">点击查看提交地址</a></td></tr>
          <tr><td>同步返回地址：</td><td><a href="<?php echo ($order["pay_callbackurl"]); ?>" target="_blank">点击查看同步地址</a></td></tr>
          <tr><td>异步通知地址：</td><td><a href="<?php echo ($order["pay_notifyurl"]); ?>" target="_blank">点击查看异步地址</a></td></tr>
          <tr><td>订单描述：</td><td><?php echo ($order["pay_productname"]); ?></td></tr><?php endif; ?>
          <tr><td>状态：</td><td>
            <?php switch($order[pay_status]): case "0": ?><strong class="text-danger">未付，未处理</strong><?php break;?>
              <?php case "1": ?><strong class="text-success">已成功，</strong><strong class="text-danger">未通知>>>>[
                <?php if($order['pay_status'] == 1): ?><!--a href="<?php echo U('Pay/Pay/bufa', ['TransID'=>$order['pay_orderid'],'tongdao'=>$order['pay_ytongdao']]);?>" target="_blank"  style="text-decoration:none;">补发通知</a--><?php endif; ?>
                ]</strong><?php break;?>
              <?php case "2": ?><strong class="text-success">已成功，已通知</strong><?php break; endswitch;?>
          </td></tr>
        </table>
      </div>  </div>  </div>
<script src="/Public/Front/js/plugins/layui/layui.js" charset="utf-8"></script>
<script src="/Public/Front/js/x-layui.js" charset="utf-8"></script>
<script src="/Public/Front/js/Util.js" charset="utf-8"></script>
<script src="/Public/Front/js/jquery.min.js"></script>
<script src="/Public/Front/js/bootstrap.min.js"></script>
<script src="/Public/Front/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/Public/Front/js/content.js"></script>
<!-- jQuery  -->
        <script src="/Public/assetsqq572125157/libs/jquery/jquery.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- KNOB JS -->
        <script src="/Public/assetsqq572125157/libs/jquery-knob/jquery.knob.min.js"></script>
        <!-- Chart JS -->
        <script src="/Public/assetsqq572125157/libs/chart.js/Chart.bundle.min.js"></script>
        <!-- Jvector map -->
        <script src="/Public/assetsqq572125157/libs/jqvmap/jquery.vmap.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- Datatable js -->
        <script src="/Public/assetsqq572125157/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
        <!-- Dashboard Init JS -->
        <script src="/Public/assetsqq572125157/js/jquery.dashboard.js"></script>
        <!-- App js -->
        <script src="/Public/assetsqq572125157/js/jquery.core.js"></script>
        <script src="/Public/assetsqq572125157/js/jquery.app.js"></script>
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