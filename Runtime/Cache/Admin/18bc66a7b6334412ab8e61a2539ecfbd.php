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
  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo -->
	  <b class="logo-mini">
		  <span class="light-logo"><img src="Public/qq572125157/images/logo-light.png" alt="logo"></span>
		  <span class="dark-logo"><img src="Public/qq572125157/images/logo-dark.png" alt="logo"></span>
	  </b>
      <!-- logo-->
      <span class="logo-lg">
		  <img src="Public/qq572125157/images/logo-light-text.png" alt="logo" class="light-logo">
	  	  <img src="Public/qq572125157/images/logo-dark-text.png" alt="logo" class="dark-logo">
	  </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		  </a>
        </div>
 <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		  <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
             <span class="glyphicon glyphicon-user"></span>
            </a>
            <ul class="dropdown-menu scale-up">
              <!-- User image -->
              <li class="user-header">
                <img src="Public/qq572125157/images/user_admin.png" class="float-left rounded-circle" alt="User Image">

                <p style="font-size: 14px;">
                  <small class="mb-2"></small>
                    <small class="mb-2"></small>
                 <small class="mb-10">ID:<?php echo ($member["username"]); ?></small>
                       <small class="mb-10"><?php switch($member['groupid']): case "1": ?>总管理员<?php break;?>
            <?php case "2": ?>运营管理员<?php break;?>
			<?php case "3": ?>财务管理员<?php break; endswitch;?></small>
      </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row no-gutters">
                  <div class="col-12 text-left">
                    <a href="<?php echo U("admin/Menu/index");?>"><i class="ion ion-person"></i> 权限配置</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="<?php echo U("admin/System/editPassword");?>"><i class="ion ion-email-unread"></i> 修改密码</a>
                  </div>
                  <div class="col-12 text-left">
                    <a href="<?php echo U("admin/System/base");?>"><i class="ion ion-settings"></i> 系统设置</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo U("admin/System/mobile");?>"><i class="ti-settings"></i> 绑定手机</a>
                  </div>
				<div role="separator" class="divider col-12"></div>
				  <div class="col-12 text-left">
                    <a href="<?php echo U("Login/loginout");?>"> <i class="fa fa-power-off"></i> 安全退出</a>
                  </div>				
                </div>
                <!-- /.row -->
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
<nav class="navbar-default navbar-static-side" role="navigation">
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree" id="side-menu">
        
        <li class="user-profile treeview">
      <a href="javascript:void()">
			<img src="Public/qq572125157/images/user_admin.png" alt="user">
            <span> 身份：<?php switch($member['groupid']): case "1": ?>总管理员<?php break;?>
            <?php case "2": ?>运营管理员<?php break;?>
			<?php case "3": ?>财务管理员<?php break; endswitch;?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
<ul class="treeview-menu">
            <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>管理ID： <?php echo ($member["username"]); ?> </a></li>
			<li><a href="<?php echo U("Login/loginout");?>"><i class="fa fa-power-off mr-5"></i>安全退出</a></li>
          </ul>
        </li>
<li class="header nav-small-cap">Management</li>    
<?php if(is_array($navmenus)): $i = 0; $__LIST__ = $navmenus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nm): $mod = ($i % 2 );++$i;?><li class="treeview">         
                  <a   href="<?php if(!count($nm[$nm['id']])): echo U($nm[menu_name]); else: ?>#<?php endif; ?>"> <i class="<?php echo ($nm['icon']); ?>"></i> 
                    <span class="nav-label"><?php echo ($nm['title']); ?></span><?php if($nm[$nm['id']]): ?><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span><?php endif; ?>
                    </a>
                    <?php if($nm[$nm['id']]): ?><ul  class="treeview-menu">
                        <?php if(is_array($nm[$nm['id']])): $i = 0; $__LIST__ = $nm[$nm['id']];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li class=""><a  href="<?php echo U($sub['menu_name']);?>"><i
                                    class="<?php echo ($sub['icon']); ?>"></i> <?php echo ($sub['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; ?>                    
                </li><?php endforeach; endif; else: echo "" ;endif; ?>

  <li class="header nav-small-cap">其他功能</li>
            <li class="treeview">  
                 <a   href="#"> <i class="fa fa-refresh"></i> 
                    <span class="nav-label">异常订单排查</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">
 <li class=""><a href="<?php echo U('Admin/Order/frozenOrder');?>" class="J_menuItem">  <i class="fa fa-refresh"></i>   异常订单排查</a></li> </ul>    
              
               <li class="treeview">  
                 <a   href="#"> <i class="fa fa-align-justify"></i> 
                    <span class="nav-label">批量删除订单</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">
                      <li><a href="<?php echo U('Admin/Order/delAll');?>" class="J_menuItem">
                          <i class="fa fa-fw fa-align-justify"></i>   批量删除订单</a></li></ul>    
                 
                    <li class="treeview">  
                 <a   href="#"> <i class="fa fa-apple"></i> 
                    <span class="nav-label">模板管理</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">
                        <li><a href="<?php echo U('Admin/Template/index');?>" class="J_menuItem">
                          <i class="fa fa-fw fa-apple"></i> 模板管理</a></li></ul>    
                      
                  <li class="treeview">  
                 <a   href="#"> <i class="fa fa-weixin"></i> 
                    <span class="nav-label">用户分类管理</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">       
                       <li><a href="<?php echo U('Admin/User/agentCateList');?>" class="J_menuItem">
                          <i class="fa fa-fw fa-weixin"></i> 用户分类管理</a></li></ul>    
                    
                     <li class="treeview">  
                 <a   href="#"> <i class="fa fa-user"></i> 
                    <span class="nav-label">谷歌验证器</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">           
            <li><a href="<?php echo U('Admin/Auth/google');?>"  class="J_menuItem">
                          <i class="fa fa-user-secret"></i>谷歌验证器</a></li></ul>    
                       
                           <li class="treeview">  
                 <a   href="#"> <i class="fa fa-jsfiddle"></i> 
                    <span class="nav-label">清除缓存</span><span class="pull-right-container">
                      <i class="fa fa-angle-right pull-right"></i></span>                    </a>
                    <ul  class="treeview-menu">   
                      <li>  <a href="<?php echo U('Admin/Index/clearCache');?>" class="J_menuItem"><i class="fa fa-fw fa-jsfiddle"></i> 清除缓存 </a></li></ul>    
      </ul>
</section>
  </aside>
  </nav>
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       订单管理
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">System setting</a></li>
        <li class="breadcrumb-item active">Order History</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">		  
        <div class="col-lg-12 col-12">
			<!-- Basic Forms -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">订单流水管理</h4>			
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					<li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<!-- /.box-header -->
                <div class="box-body">
				  <div class="row">
					<div class="col-12">
                      
        <form class="layui-form" action="" method="get" autocomplete="off" id="orderform">
          <input type="hidden" name="m" value="<?php echo ($model); ?>">
          <input type="hidden" name="c" value="Order">
          <input type="hidden" name="a" value="index" id="action">
          <input type="hidden" name="p" value="1">
          <div class="layui-form-item">
            <div class="layui-inline">
              <div class="layui-input-inline">
                <input type="text" name="memberid" autocomplete="off" placeholder="请输入商户号/商户名"
                       class="layui-input" value="<?php echo ($memberid); ?>">
              </div>
              <div class="layui-input-inline">
                <input type="text" name="payorderid" autocomplete="off" placeholder="请输入平台订单号"
                       class="layui-input" value="<?php echo ($payOrderid); ?>">
              </div>

              <div class="layui-input-inline">
                <input type="text" name="orderid" autocomplete="off" placeholder="请输入下游订单号"
                       class="layui-input" value="<?php echo ($orderid); ?>">
              </div>
              <div class="layui-input-inline">
                <input type="text" name="body" autocomplete="off" placeholder="请输入订单描述/交易金额"
                       class="layui-input" value="<?php echo ($body); ?>">
              </div>
                <div class="layui-input-inline">
                <input type="text" name="order_ip" autocomplete="off" placeholder="请输入订单提交IP/异常回调IP"
                       class="layui-input" value="<?php echo ($order_ip); ?>">
              </div>
              <div class="layui-input-inline">
                <input type="text" class="layui-input" name="createtime" id="createtime"
                       placeholder="创建起始时间" value="<?php echo ($createtime); ?>">
              </div>
              <div class="layui-input-inline">
                <input type="text" class="layui-input" name="successtime" id="successtime"
                       placeholder="成功时间范围" value="<?php echo ($successtime); ?>">
              </div>
            </div>
            <div class="layui-inline">
              <div class="layui-input-inline">
                <select name="tongdao">
                  <option value="">全部通道</option>
                  <?php if(is_array($tongdaolist)): $i = 0; $__LIST__ = $tongdaolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($tongdao == $vo['id']): ?>selected<?php endif; ?>
                    value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
               <div class="layui-input-inline">
                <select name="zizhanghao">
                  <option value="">全部子账号</option>
                  <?php if(is_array($zizhanghaolist)): $i = 0; $__LIST__ = $zizhanghaolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($zizhanghao == $vo['id']): ?>selected<?php endif; ?>
                    value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["id"]); ?>-<?php echo ($vo["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="bank">
                  <option value="">全部银行</option>
                  <?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($bank == $vo['id']): ?>selected<?php endif; ?>
                    value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="status">
                  <option value="">全部状态</option>
                  <option <?php if($status != '' && $status == 0): ?>selected<?php endif; ?> value="0">未处理</option>
                  <option <?php if($status == 1): ?>selected<?php endif; ?> value="1">成功，未返回</option>
                  <option <?php if($status == 2): ?>selected<?php endif; ?> value="2">成功，已返回</option>
                  <option <?php if($status == '1or2'): ?>selected<?php endif; ?> value="1or2">成功，已/未返回</option>
                </select>
              </div>
              <div class="layui-input-inline">
                <select name="ddlx">
                  <option value="">订单类型</option>
                  <option <?php if($ddlx != '' && $ddlx == 0): ?>selected<?php endif; ?> value="0">收款订单</option>
                  <option <?php if($ddlx == 1): ?>selected<?php endif; ?> value="1">充值订单</option>
                </select>
              </div>
            </div>

            <div class="layui-inline">
              <button type="submit" class="layui-btn"><span
                      class="glyphicon glyphicon-search"></span> 搜索
              </button>
              <a href="javascript:;" id="export" class="layui-btn layui-btn-danger"><span class="glyphicon glyphicon-export"></span> 导出数据</a>
              <a id="rush" class="layui-btn layui-btn-danger" style="background:#999;"><span class="glyphicon glyphicon-export"></span> <span id="rushtext">点击开启自动刷新</span></a>
              <!--<?php if(($isrootadmin) == "true"): ?><a href="javascript:;" id="delorder" onclick="chooseOrder_del()" class="layui-btn layui-btn-danger"><span class="glyphicon glyphicon-trash"></span> 选择删除无效订单</a><?php endif; ?>-->
              
            </div>
          </div>
         
        </form>
       
          <blockquote class="layui-elem-quote" style="font-size:14px;padding;8px;">30分钟成功率：<span class="label label-info"><?php echo ($banxiaoshicgl); ?>%</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1小时成功率：<span class="label label-info"><?php echo ($onetimecgl); ?>%</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3小时成功率：<span class="label label-info"><?php echo ($shours); ?>%</span>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6小时成功率：<span class="label label-info"><?php echo ($liutimecgl); ?>%</span>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;今日成功率：<span class="label label-info"><?php echo ($dangricgl); ?>%</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;昨日成功率：<span class="label label-info"><?php echo ($zrcgl); ?>%</span>
          </blockquote>
        <?php if($_GET['status'] == '1or2' OR $_GET['status'] == 1 OR $_GET['status'] == 2): ?><blockquote class="layui-elem-quote" style="font-size:14px;padding;8px;">今日成功交易总额：<span class="label label-info"><?php echo ($stat["todaysum"]); ?>元</span> 今日实际付款总额：<span class="label label-info"><?php echo ($stat["todaytruesum"]); ?>元</span> 今日平台利润：<span class="label label-info"><?php echo ($stat["platform"]); ?>元</span>
             今日代理收入：<span class="label label-info"><?php echo ($stat["agentIncome"]); ?>元</span>
          </blockquote>
          <blockquote class="layui-elem-quote" style="font-size:14px;padding;8px;">本月成功交易总额：<span class="label label-info"><?php echo ($stat["monthsum"]); ?>元</span>  本月平台利润：<span class="label label-info"><?php echo ($stat["monthPlatform"]); ?>元</span>
            本月代理收入：<span class="label label-info"><?php echo ($stat["monthAgentIncome"]); ?>元</span>
          </blockquote>
        <blockquote class="layui-elem-quote" style="font-size:14px;padding;8px;">成功交易总金额：<span class="label label-info"><?php echo ($stamount); ?>元</span> 真实付款总额：<span class="label label-info"><?php echo ($t_amount); ?>元</span>(减去提交与实际支付不一致的金额) 
           平台利润：<span class="label label-info"><?php echo ($strate); ?>元</span> 代理收入：<span class="label label-info"><?php echo ($memberprofit); ?>元</span>  商户收入总金额：<span class="label label-info"><?php echo ($strealmoney); ?>元</span>   成功订单数：<span class="label label-info"><?php echo ($success_count); ?></span> 失败订单数：<span class="label label-danger"><?php echo ($fail_count); ?></span><br>成功率：<span class="label label-danger"><?php echo ($chenggonglv); ?>%</span>
       投诉保证金已返回金额：<span class="label label-info"><?php echo ($complaints_deposit_unfreezed); ?></span> 投诉保证金冻结金额：<span class="label label-danger"><?php echo ($complaints_deposit_freezed); ?></span>
        </blockquote><?php endif; ?>
        <?php if($_GET['status'] == '0'): ?>今日未支付订单总额：<span class="label label-danger"><?php echo ($stat["todaynopaidsum"]); ?>元</span>
          本月未支付订单总额：<span class="label label-danger"><?php echo ($stat["monthNopaidsum"]); ?>元</span>
          总未支付订单总额：<span class="label label-danger"><?php echo ($stat["totalnopaidsum"]); ?>元</span><?php endif; ?>
        <!-- <div class="ibox float-e-margins chart item">
        <div class="ibox-title"><h5>交易统计</h5></div>
          <div class="ibox-content no-padding">
            <div class="panel-body">
              <div class="panel-group" id="version">
                <div class="col-lg-12"><div id="dmonth" style="height:280px;"></div></div>
              </div>
            </div>
          </div>
        </div> -->
          <!--交易列表-->
          <table class="layui-table" lay-data="{width:'100%', limit:<?php echo ($rows); ?>,id:'userData'}" ay-size="lg">
                 <colgroup>
        <col width="150">
        <col width="200">
        <col>
      </colgroup>
            <thead>
            <tr>
             <!-- <th lay-data="{field:'key',width:60}">序号</th>
              <th lay-data="{field:'ddlx', width:90}">订单类型</th>-->
              <th lay-data="{field:'pay_orderid', width:230,style:'color:#060;'}">平台订单号 OR 商户订单号</th>
              <th lay-data="{field:'yichang', width:120}" style="color:ff0000;">终端/异常信息</th>
              <th lay-data="{field:'pay_memberid', width:110}">商户名/号</th>
              <th lay-data="{field:'amount', width:100,style:'color:#060;'}">交易金额</th>
            <!--th lay-data="{field:'true_amount', width:100}">实付金额</th-->
              <th lay-data="{field:'rate', width:80}">手续费</th>
              <th lay-data="{field:'actualamount', width:100,style:'color:#C00;'}">商户实收金额</th>
              <th lay-data="{field:'applydate', width:170}">提交时间  OR 成功时间</th>
              <!--<th lay-data="{field:'successdate', width:170}">成功时间</th>-->
              <th lay-data="{field:'zh_tongdao', width:110}">支付通道</th>
              <!--
              <th lay-data="{field:'memberid', width:80}">子账号</th>-->
              <th lay-data="{field:'bankname', width:90}">支付类别</th>
           <!-- <th lay-data="{field:'body', width:100}">订单描述</th>-->
              
            <th lay-data="{field:'order_ip', width:130}">客户端IP</th>
              <th lay-data="{field:'status', width:130}">状态</th>
              <th lay-data="{field:'op',width:300}">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <!--<td><?php echo ($vo["id"]); ?></td>
               <td>
                  <?php switch($vo['ddlx']): case "1": ?>充值<?php break;?>
                    <?php default: ?>收款<?php endswitch;?>
                </td>
               -->
               <td style="text-align:center; color:#090;"><?php echo ($vo['pay_orderid']); ?><br><?php echo ($vo['out_trade_id']?$vo['out_trade_id']:$vo['pay_orderid']); ?></td>
                <td style="text-align:center;">
                	
                 	 <?php echo ($vo['mobile']); ?><br>
                 	<?php  $orderip = M('order')->where(array('pay_orderid'=>$vo['pay_orderid']))->getField("yichang"); $tijiaomoey = M('order')->where(array('pay_orderid'=>$vo['pay_orderid']))->getField("tijiaomoey"); if($orderip == "1"){ echo'<b style="color:#ff0000;">异常(非法回调)</b><br>'; }else{ echo '正常订单'; } ?>
              <?php echo ($vo['yichangip']); ?>
            <?php if(!empty($tijiaomoey)){ echo'<b style="color:#ff0000;"><br>提交'.$tijiaomoey.'</b>';} ?>
                 </td>
                <td style="text-align:center;">
                
                 	<span style="color:#007bff;"><?php echo ($vo["pay_username"]); ?></span><br>
                 	<?php echo ($vo["pay_memberid"]); ?>
                 	</td>
                <td style="text-align:center; color:#060"><?php echo ($vo["pay_amount"]); ?></td>
                  <!--td style="text-align:center; color:#060"><?php echo ($vo["true_amount"]); ?></td-->
                <td style="text-align:center; color:#666"><?php echo ($vo["pay_poundage"]); ?></td>
                <td style="text-align:center; color:#C00"><?php echo ($vo["pay_actualamount"]); ?></td>
                <td style="text-align:center;"><?php echo (date('Y-m-d H:i:s',$vo["pay_applydate"])); ?><br><?php if($vo['pay_successdate']): echo (date('Y-m-d H:i:s',$vo["pay_successdate"])); else: ?> 未付<?php endif; ?></td>
                 <!--  <td style="text-align:center;"><?php if($vo['pay_successdate']): echo (date('Y-m-d H:i:s',$vo["pay_successdate"])); else: ?> 未付<?php endif; ?></td>-->
                <td style="text-align:center;"><?php echo ($vo["pay_zh_tongdao"]); ?></td>
                <!--
                <td style="text-align:center;"><?php echo ($vo["pay_channel_account"]); ?></td> -->
                <td style="text-align:center;"><?php echo ($vo["pay_bankname"]); ?></td>
                <!--
                  <td style="text-align:center;"><?php echo ($vo["pay_productname"]); ?></td>-->
                   
                   <td style="text-align:center;">
                   	
                   		<?php  $str11=date("Y-m-d")." 00:00:00";?>
						
						<?php  $str222=date("Y-m-d")." 23:59:59";?>
                  	<?php $heiIP = M('order')->where(['pay_applydate'=>['between', [strtotime($str11), strtotime($str222)]],['order_ip'=>$vo['order_ip'],'pay_status'=>0]])->count();?>
                   <?php if($heiIP >= 5) { ?>
                  <?php echo '<b style="color:#ff0000;">恶意请求'.$heiIP.'次</b>' ?>
                 <?php }else if($heiIP != 0){ ?>
                   
                   <?php echo '未付请求'.$heiIP.'次' ?>
                    <?php }else{ ?>
                    <?php $baiIP = M('order')->where(['pay_applydate'=>['between', [strtotime($str11), strtotime($str222)]],['order_ip'=>$vo['order_ip'],'pay_status'=>['in', '1,2']]])->count();?>
                     <?php echo '正常付款'.$baiIP.'次' ?>
                     <?php } ?>
                   <br><?php echo ($vo["order_ip"]); ?>
                   	</td> 
               
                <td style="text-align:center; color:#369"><?php echo (status($vo['pay_status'])); if(($vo["is_budan"]) == "1"): ?><span class="layui-badge">补</span><?php endif; ?></td>
                <td>
                	<button  class="btn btn-info btn-xs" style="background-color:#ff7f00;" onclick="order_hei('<?php echo ($vo["pay_orderid"]); ?>','<?php echo U('Admin/Order/show',['oid'=>$vo['id']]);?>',380,680,'<?php echo ($vo["order_ip"]); ?>')">封</button>
                	<button  class="btn btn-info btn-xs" onclick="order_view('系统订单号:<?php echo ($vo["pay_orderid"]); ?>','<?php echo U('Admin/Order/show',['oid'=>$vo['id']]);?>',380,680)">订单详情</button>
                 
                  <?php if(($vo["pay_status"]) == "0"): ?><button  class="btn btn-danger btn-xs" onclick="setOrderPaid('设置订单为已支付','<?php echo U('Admin/Order/setOrderPaid',['orderid'=>$vo['id']]);?>',310,380)">设置为已支付</button><?php endif; ?>
                  
                <?php if(($vo["pay_status"]) != "0"): if($vo['lock_status']==1): ?><button class="btn btn-secondary btn-xs">订单冻结中</button><?php endif; endif; ?>
                  
                    <?php if(($vo["pay_status"]) != "0"): if($vo['lock_status']==0): ?><button class="btn btn-success btn-xs" onclick="forzenOrder(this,'<?php echo ($vo["id"]); ?>')">冻结订单</button><?php endif; ?>
                       <?php if($vo['lock_status']==2): ?><button class="btn btn-default btn-xs">已解冻订单</button><?php endif; endif; ?>
                </td>
                <td>
                	<?php echo ($vo["huidiao_url"]); ?>
                </td>
              </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
          </table>
          <!--交易列表-->
          <div class="page">
            
              <form class="layui-form" action="" method="get" id="pageForm"  autocomplete="off">
                <?php echo ($page); ?>
                  <select name="rows" style="height: 29px;" id="pageList" lay-ignore >
                      <option value="">显示条数</option>
                     <option <?php if($rows != '' && $rows == 30): ?>selected<?php endif; ?> value="30">30条</option>
                    <option <?php if($rows == 40): ?>selected<?php endif; ?> value="40">40条</option>
                      <option <?php if($rows == 50): ?>selected<?php endif; ?> value="50">50条</option>
                      <option <?php if($rows == 80): ?>selected<?php endif; ?> value="80">80条</option>
                      <option <?php if($rows == 100): ?>selected<?php endif; ?> value="100">100条</option>
                  </select>
          
              </form> </div>
          
      </div>
    </div> </div>

</div></div> </div></div>
<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="/" target="_blank">平台首页</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="javascript:layer.alert('当前版本<?php echo C('SOFT_NAME');?>！<br>版本号：<?php echo C('SOFT_VERSION');?><br>系统购买联系QQ：<?php echo C('supportqq');?>',{icon:6});"><?php echo C('SOFT_NAME');?> 系统版本:<?php echo C('SOFT_VERSION');?></a>
		  </li>
		</ul>
    </div>
	  &copy; 2018-2019 <a href="/"><?php echo ($sitename); ?></a> 版权所有
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
       <!--<li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-cog fa-spin"></i></a></li> -->
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Contact Author</h3>
        <ul class="control-sidebar-menu">
        
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-warning"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading"> 联系QQ : <?php echo C('supportqq');?></h4>
              </div>
            </a>
          </li>
      
        </ul>
        <!-- /.control-sidebar-menu -->
</div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<!-- ./wrapper -->
	<div class="control-sidebar-bg"></div>
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
<script src="Public/qq572125157/js/pages/validation.js"></script>
<!-- Fab   -->
<script src="/Public/Front/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/Public/Front/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/Public/Front/js/iNotify.js"></script>
<script>
    layui.use(['laypage', 'layer', 'form'], function () {
        var form = layui.form,
            layer = layui.layer,
            $ = layui.jquery;
    });
    function reset_pwd(title,url,w,h){
        x_admin_show(title,url,w,h);
    }
</script>
<script>
   /*提现语音提示开始*/
    var iNotify = new iNotify({
        message: '有消息了。',//标题
        effect: 'flash', // flash | scroll 闪烁还是滚动
        interval: 300,
        audio:{
            //file: ['/Public/sound/msg.mp4','/Public/sound/msg.mp3','/Public/sound/msg.wav']
            file:'https://tts.baidu.com/text2audio?lan=zh&ie=UTF-8&spd=5&text=有客户申请提现请及时处理'
        }
    });
  <?php if(($withdraw) == "1"): ?>setInterval(function() {
            $.ajax({
                type: "GET",
                url: "<?php echo U('Withdrawal/checkNotice');?>",
                cache: false,
                success: function (res) {
                    if (res.num>0) {
                        iNotify.setFavicon(res.num).setTitle('<?php echo ($sitename); ?>提现通知').notify({
                            title: "<?php echo ($sitename); ?>后台通知：",
                            body: "有客户申请提现，请及时处理！"
                        }).player();
                    }
                }
            });
        },10000);<?php endif; ?>
   /*提现语音提示结束*/
</script>
<script src="/Public/Front/js/echarts.common.min.js"></script>
<script>
      $('#pageList').change(function(){
        $('#pageForm').submit();
    });
    layui.use(['laydate', 'laypage', 'layer', 'table', 'form'], function() {
        var laydate = layui.laydate //日期
            , laypage = layui.laypage //分页
            ,layer = layui.layer //弹层
            ,form = layui.form //表单
            , table = layui.table; //表格
        //日期时间范围
        laydate.render({
            elem: '#createtime'
            , type: 'datetime'
            ,theme: 'molv'
            , range: '|'
        });
        //日期时间范围
        laydate.render({
            elem: '#successtime'
            , type: 'datetime'
            ,theme: 'molv'
            , range: '|'
        });
    });
    /*订单-查看*/
    function order_hei(orderid,url,w,h,ip){
    	console.log(orderid,url,w,h,ip);
    	if(!confirm('您确定要封禁 IP ('+ip+') 吗？,此操作不可逆,谨慎使用'))return;
    	
    	$.post('/mayi_Order_fengIp',{orderid:orderid,url: url,w: w,'h':h,'ip':ip,},function(data){
			layer.msg(data.info)
    	},'json')
    	
    }
    /*订单-查看*/
    function order_view(title,url,w,h,hei){
    	
        x_admin_show(title,url,w,h);
    }
    /*订单-批量删除*/
    function delAllOrder(title, url, w, h) {
        x_admin_show(title, url, w, h);
    }
    /*订单-设置订单状态为已支付*/
      function setOrderPaid(title, url, w, h) {
          x_admin_show(title, url, w, h);
      }
    $('#export').on('click',function(){       
        window.location.href
          "<?php echo U('Admin/Order/exportorder');?>?memberid=<?php echo ($_GET['memberid']); ?>&orderid=<?php echo ($_GET['orderid']); ?>&pay_orderid=<?php echo ($_GET['pay_orderid']); ?>&order_ip=<?php echo ($_GET['order_ip']); ?>&createtime=<?php echo ($_GET['createtime']); ?>&successtime=<?php echo ($_GET['successtime']); ?>&tongdao=<?php echo ($_GET['tongdao']); ?>&bank=<?php echo ($_GET['bank']); ?>&status=<?php echo ($_GET['status']); ?>&ddlx=<?php echo ($_GET['ddlx']); ?>";
    });
      function forzenOrder(obj, id) {
          layer.confirm('确认要冻结该订单吗？', function (index) {
              $.ajax({
                  url:"./admin_Order_doForzen.html",
                  type:'post',
                  data:'orderid='+id,
                  success:function(res){
                      if(res.status=="1"){
                          layer.alert('冻结成功！',function () {
                              location.replace(location.href);
                          });
                      }else{
                          layer.alert('冻结失败!!');
                      }
                  }
              });
          });
      }

    function chooseOrder_del() {
        var createtime=$("#createtime").val();
        if(createtime==""){
            layer.alert('请选择删除无效订单创建时间段');
            return;
        }
        layer.confirm('删除操作为真实删除，确定要删除时间段从'+createtime.replace('|','到')+'的无效订单吗？',function(index){
            $.ajax({
                url:"<?php echo U('Order/delOrder');?>",
                type:'post',
                data:{'createtime':createtime},
                success:function(res){
                    if(res.status){
                        layer.alert('删除成功！',function () {
                            location.replace(location.href);
                        });
                    }else{
                        layer.alert('删除失败！');
                    }
                }
            });
        });
    }
    
    var myChart = echarts.init(document.getElementById('dmonth'));
    myChart.setOption({
        tooltip : {
            trigger: 'axis',
            axisPointer: {
                type: 'cross',
                label: {
                    backgroundColor: '#6a7985'
                }
            }
        },
        legend: {
            data:['交易金额','收入金额','支出金额']
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : [<?php echo (implode($mdata["mdate"],",")); ?>]
            }
        ],
        yAxis : [
            {
                type : 'value'
            }
        ],
        series : [
            {
                name:'交易金额',
                type:'line',
                stack: '总量',
                areaStyle: {normal: {}},
                data:[<?php echo (implode($mdata["amount"],",")); ?>]
            },
            {
                name:'收入金额',
                type:'line',
                stack: '总量',
                areaStyle: {normal: {}},
                data:[<?php echo (implode($mdata["rate"],",")); ?>]
            },
            {
                name:'支出金额',
                type:'line',
                stack: '总量',
                areaStyle: {normal: {}},
                data:[<?php echo (implode($mdata["total"],",")); ?>]
            },
        ]
    });

</script>

       <?php if($_SESSION['admin_auth']['username']=="taoke"){ ?>
       
<script>
       //提示框
     /*  msg('刷新成功！');*/
    function msg(text, time) {
    	var d = document.createElement('div');
    	d.id='tmsg';
    	d.innerHTML = text;
    	d.style.cssText = 'top:40vh;left:20%;right:20%;color:#fff;margin:0 auto;opacity:0;padding:5px;font-size:15px;max-width:300px;position:fixed;text-align:center;border-radius:8px;background-color:#333;border:1px solid #000;box-shadow:5px 4px 45px 6px #bbb;transition:opacity 0.6s';
    	window.tmsg&&document.body.removeChild(window.tmsg);
    	document.body.appendChild(d);
    	setTimeout(function(){
    		d.style.opacity = 0.8;
    		setTimeout(function() {
    			d.style.opacity = 0;
    			setTimeout(function(){
    				document.body.removeChild(d)
    			},600);
    		},(time||3)*1000);
    	},0);
    	navigator.vibrate&&navigator.vibrate(200);
    }
</script>
      <?php } ?>
<script>

function rushpage(on){
  	if(!on){
		rush.style.backgroundColor = '#899B9E';
  	$('#rushtext').html('点击开启自动刷新');
  		return clearTimeout(window.rushtime);
  	}
  	rush.style.backgroundColor = '#FF6837';
  	$('#rushtext').html('已经开启，点击关闭自动刷新');
  	window.rushtime = setTimeout(function(){
          	if(on){
          		location.reload();
          	}
  	},localStorage.rushdate||10000);
 }
  $('#rush').on('contextmenu',function(e) {
  	    e.preventDefault();
  	    var time = prompt('请设置自动刷新间隔时间 秒/s',(localStorage.rushdate||10000)/1000);
  		if(time){
  			localStorage.rushdate = time * 1000;
   		}
  });
  $('#rush').click(function(){
  	if(sessionStorage.rushcond=='true'){
		sessionStorage.rushcond = 'false';
  		rushpage(false);
  	}else{
  		sessionStorage.rushcond ='true';
  		rushpage(true);
  	}
    console.log(sessionStorage.rushcond);
  });
  if(sessionStorage.rushcond=='true'){
    	rushpage(true);
  }
</script>
</body>
</html>