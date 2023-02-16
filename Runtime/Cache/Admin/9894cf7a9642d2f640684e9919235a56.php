<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       手动提款管理
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">withdrawal</a></li>
        <li class="breadcrumb-item active">withdrawal management</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">		  
        <div class="col-lg-12 col-12">
			<!-- Basic Forms -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">手动提款管理</h4>			
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
                      
            <!--条件查询-->
            <div class="ibox-content">
                <form class="layui-form" action="" method="get" autocomplete="off" id="withdrawalform">
                    <input type="hidden" name="m" value="<?php echo ($model); ?>">
                    <input type="hidden" name="c" value="Withdrawal">
                    <input type="hidden" name="a" value="index">
  
            <div class="layui-form-item">
                        <div class="layui-inline">
                          
                            <div class="layui-input-inline">
                                <input type="text" name="memberid" autocomplete="off" placeholder="请输入商户号"
                                       class="layui-input" value="<?php echo ($_GET['memberid']); ?>">
                            </div>

                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="createtime" id="createtime"
                                       placeholder="申请起始时间" value="<?php echo ($_GET['createtime']); ?>">
                            </div>
                          
                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="successtime" id="successtime"
                                       placeholder="打款起始时间" value="<?php echo ($_GET['successtime']); ?>">
                            </div>
                   </div>  
                  
    
                        <!--<div class="layui-input-inline">
                            <select name="bank">
                                <option value="">全部银行</option>
                                <?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($_GET[bank] == $vo[id]): ?>selected<?php endif; ?>
                                    value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div> -->
                        <div class="layui-inline">
                            <div class="layui-input-inline">
                                <select name="status">
                                    <option value="">全部状态</option>
                                    <option <?php if($_GET['status'] != '' && $_GET['status'] == 0): ?>selected<?php endif; ?> value="0">未处理</option>
                                    <option <?php if($_GET['status'] == 1): ?>selected<?php endif; ?> value="1">处理中</option>
                                    <option <?php if($_GET['status'] == 2): ?>selected<?php endif; ?> value="2">已打款</option>
                                    <option <?php if($_GET['status'] == 3): ?>selected<?php endif; ?> value="3">已驳回</option>
                                </select>
                            </div>
                            <div class="layui-input-inline">
                                <select name="T">
                                    <option value="">全部类型</option>
                                    <option <?php if($_GET[T] != '' && $_GET['T'] == 0): ?>selected<?php endif; ?>
                                    value="0">T+0</option>
                                    <option <?php if($_GET[T] == 1): ?>selected<?php endif; ?> value="1">T + 1</option>
                                    <option <?php if($_GET[T] == 7): ?>selected<?php endif; ?> value="7">T + 7</option>
                                    <option <?php if($_GET[T] == 30): ?>selected<?php endif; ?> value="30">T + 30</option>
                                </select>
                            </div>
                        </div>

                        <div class="layui-inline">
                            <button type="submit" class="layui-btn"><span
                                    class="glyphicon glyphicon-search"></span> 搜索
                            </button>
                            <a href="javascript:;" id="export" class="layui-btn layui-btn-danger"><span class="glyphicon glyphicon-export"></span> 导出数据</a>
                        </div>
                    </div>
                </form>
<div class="row mb-10">
  
<div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
							<div class="ribbon-wrapper-reverse">
									<div class="ribbon ribbon-bookmark bg-secondary"><i class="fa fa-check-circle"></i> 本日统计：</div>
								<p class="ribbon-content">结算总金额：<span class="label label-info"><?php echo ($stat["totay_total"]); ?> 元</span></p> 
                                  <p class="ribbon-content">待结算：<span class="label label-warning"><?php echo ($stat["totay_wait"]); ?> 元</span>  手续费利润：<span class="label label-info"><?php echo ($stat["totay_profit"]); ?> 元</span></p> 
                                  <p class="ribbon-content">完成笔数：<span class="label label-info"><?php echo ($stat["totay_success_count"]); ?> 笔</span> 驳回笔数：<span class="label label-danger"><?php echo ($stat["totay_fail_count"]); ?> 笔</span></p> 
								</div>
							</div>
  
<div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
								<div class="ribbon-wrapper-reverse">
									<div class="ribbon ribbon-bookmark ribbon-right bg-danger"><i class="fa fa-check-circle"></i> 本月统计</div>
								  <p class="ribbon-content">结算总金额：<span class="label label-info"><?php echo ($stat["month_total"]); ?> 元</span></p> 
                                  <p class="ribbon-content">待结算：<span class="label label-warning"><?php echo ($stat["month_wait"]); ?> 元</span>  手续费利润：<span class="label label-info"><?php echo ($stat["month_profit"]); ?> 元</span></p> 
                                  <p class="ribbon-content">完成笔数：<span class="label label-info"><?php echo ($stat["month_success_count"]); ?> 笔</span> 驳回笔数：<span class="label label-danger"><?php echo ($stat["month_fail_count"]); ?> 笔</span></p> 
								</div>
							</div>

   <div class="col-lg-3 col-md-4 col-sm-3 col-xs-12">
						<div class="ribbon-wrapper-reverse">
                                  <div class="ribbon ribbon-bookmark ribbon-right bg-primary"><i class="fa fa-heart"></i> 历史统计</div>							
									<p class="ribbon-content">结算总金额：<span class="label label-info"><?php echo ($stat["total"]); ?> 元</span> </p>
<p class="ribbon-content">待结算：<span class="label label-warning"><?php echo ($stat["total_wait"]); ?> 元</span>  平台手续费利润：<span class="label label-info"><?php echo ($stat["total_profit"]); ?> 元</span> </p>
<p class="ribbon-content">完成笔数：<span class="label label-info"><?php echo ($stat["total_success_count"]); ?> 笔</span> 驳回笔数：<span class="label label-danger"><?php echo ($stat["alltotal_fail_count"]); ?> 笔</span></p> 
								</div>
							</div>
         </div>
<p style="margin: 10px 0;">
                    <a href="javascript:;" id="checkAll" class="btn btn-primary btn-sm"><i class="mdi mdi-arrange-bring-forward"></i> 一键全选</a>
                    <a href="javascript:;" id="submitAllOrder" class="btn btn-danger btn-sm"><i class="mdi mdi-auto-fix"></i> 一键完成</a>
                    <a href="javascript:;" id="rejectAllOrder"  class="btn btn-secondary btn-sm"><i class="mdi mdi-arrow-down-bold-hexagon-outline"></i> 一键驳回</a>
                      
                     
                </p>
                <table class="layui-table" lay-data="{width:'100%',limit:<?php echo ($rows); ?>,id:'userData'}">
                    <thead>
                    <tr>
                        <th lay-data="{field:'check' , width:60}">选中</th>
                        <!--<th lay-data="{field:'key', width:60}">序号</th>-->
                        <th lay-data="{field:'t', width:180}"><span style="text-align:center;">操作</span></th>
                      <th lay-data="{field:'status', width:100}">状态</th>
                      <th lay-data="{field:'op',width:60}">类型</th>
                        <th lay-data="{field:'userid', width:105,style:'color:#060;'}">商户编号</th>
                        <th lay-data="{field:'username',width:100}">商户名称</th>
                        <th lay-data="{field:'tkmoney', width:110}">结算金额</th>
                        <th lay-data="{field:'sxfmoney', width:100,style:'color:#060;'}">手续费</th>
                        <th lay-data="{field:'money', width:110}">到账金额</th>
                        <th lay-data="{field:'bankname', width:120,style:'color:#C00;'}">银行名称</th>
                        <th lay-data="{field:'bankzhiname', width:160}">支行名称</th>
                        <th lay-data="{field:'banknumber', width:200}">银行卡号</th>
                        <th lay-data="{field:'bankfullname', width:100}">开户名</th>
                        <th lay-data="{field:'sheng', width:100}">所属省</th>
                        <th lay-data="{field:'shi', width:120}">所属市</th>
                        <th lay-data="{field:'sqdatetime', width:170}">申请时间</th>
                        <th lay-data="{field:'cldatetime', width:170}">处理时间</th>                        
                        <th lay-data="{field:'memo', width:180}">备注</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="ec_line">
                            <td><input type="checkbox"  title="" value="<?php echo ($vo["id"]); ?>" class='checkIds' lay-skin="primary"></td>
                            <!--<td><?php echo ($vo["id"]); ?></td>-->
                          <td>
                                <?php if($vo['status'] < 2): ?><button class="layui-btn layui-btn-warm layui-btn-mini" onclick="widthdrawal_op('商户编号:<?php echo ($vo["userid"]+10000); ?>','<?php echo U('Admin/Withdrawal/editStatus',['id'=>$vo[id]]);?>',260,340)">结算设置</button>  
                             
                                     
	<a href="javascript:void(0);" id="rcopy" onclick="copy(this)" class="layui-btn layui-btn-warm layui-btn-mini"><i class="mdi mdi-auto-fix"></i>复制账号</a><?php endif; ?>
                  

                            </td>
                           
                            <td>
                                <?php switch($vo["status"]): case "0": ?><span style="color:#F00;">未处理</span><?php break;?>
                                    <?php case "1": ?><span style="color:#06F;">处理中</span><?php break;?>
                                    <?php case "2": ?><span style="color:#060;">已打款</span><?php break;?>
                                    <?php case "3": ?><span class="text-danger">已驳回</span><?php break;?>
                                    <?php default: endswitch;?>
                            </td>
                            <td>T+<?php echo ($vo["t"]); ?></td>
                            <td><?php echo ($vo["userid"]+10000); ?></td>
                            <td> <?php $us = M('member')->where(['id'=>$vo['userid']])->find(); echo $us['username']; ?></td>
                            <td><?php echo ($vo["tkmoney"]); ?> 元</td>
                            <td><?php echo ($vo["sxfmoney"]); ?> 元</td>
                            <td><?php echo ($vo["money"]); ?> 元</td>
                            <td><?php echo ($vo["bankname"]); ?></td>
                            <td><?php echo ($vo["bankzhiname"]); ?></td>
                            <td><?php echo ($vo["banknumber"]); ?></td>
                            <td><?php echo ($vo["bankfullname"]); ?></td>
                            <td><?php echo ($vo["sheng"]); ?></td>
                            <td><?php echo ($vo["shi"]); ?></td>
                            <td><?php echo ($vo["sqdatetime"]); ?></td>
                            <td><?php echo ($vo["cldatetime"]); ?></td>
                              <td><?php echo ($vo["memo"]); ?></td>
                            
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <!--交易列表-->
    

                <div class="page">
                  <form class="layui-form" action="" method="get" id="pageForm" autocomplete="off">
                    <?php echo ($page); ?> 
<select name="rows" style="height: 29px;" id="pageList" lay-ignore >
                            <option value="">显示条数</option>
                            <option <?php if($_GET[rows] != '' && $_GET[rows] == 30): ?>selected<?php endif; ?> value="30">30条</option>
                            <option <?php if($_GET[rows] == 50): ?>selected<?php endif; ?> value="50">50条</option>
                            <option <?php if($_GET[rows] == 80): ?>selected<?php endif; ?> value="80">80条</option>
                            <option <?php if($_GET[rows] == 100): ?>selected<?php endif; ?> value="100">100条</option>
                            <option <?php if($_GET[rows] == 1000): ?>selected<?php endif; ?> value="1000">1000条</option>
                        </select>
                       

                    </form>
                    
                </div> 
            </div>
        </div>
    </div></div>
</div></div></div></div>
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

	<script type="text/javascript">
	function copy(e) {
	    var tr = $(e).parents('tr[data-index]');
	    var text = '';
	    text += '\n'+$('td[data-field="money"]',tr).text();
	    text += '\n'+$('td[data-field="bankfullname"]',tr).text();
	    text += '\n'+$('td[data-field="banknumber"]',tr).text();
	    text += '\n'+$('td[data-field="bankname"]',tr).text();
	    text += '\n'+$('td[data-field="bankzhiname"]',tr).text();
	    console.log(text);
	    copyText(text);
	    msg('复制成功！');
	}
    function copyText(t) {
    	var p = document.createElement('textarea');
    	p.value = t;
    	p.style.opacity=0;
    	document.body.appendChild(p);
    	p.select();
    	document.execCommand("Copy");
    	document.body.removeChild(p);
    }
    //提示框
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
//
	</script>

<script>

 
             
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
    function widthdrawal_op(title,url,w,h){
        x_admin_show(title,url,w,h);
    }

  
    $('#export').on('click',function(){
        window.location.href
            ="<?php echo U('Admin/Withdrawal/exportorder',array('memberid'=>$_GET[memberid],'T'=>$_GET[T],'createtime'=>$_GET[createtime],'successtime'=>$_GET[successtime],'tongdao'=>$_GET[tongdao],'status'=>$_GET[status]));?>";
    });

    $('#submitAllOrder').on('click', function(){
        var id = '';
        $('.checkIds').each(function(){
            var _this = $(this);
            if( _this.is(':checked')  ){
                id = id + _this.val() + ','; 
            }
        });
        if(id){
            layer.confirm('确认要一键完成吗？',function(index) {
                $.ajax({
                    url:"<?php echo U('Admin/Withdrawal/editwtAllStatus');?>",
                    type: 'post',
                    data: {'id':id ,'status':2},
                    success: function (res) {
                        if (res.status!='error') {
                            layer.msg(res.msg, {icon: 1, time: 1000},function () {
                                location.replace(location.href);
                            });  
                        }else{
                            layer.msg(res.msg, {icon: 2, time: 1000},function () {
                               location.replace(location.href);
                            });
                        }
                    }
                });
            });
        }else{
            layer.msg('请选择结算申请', {icon: 2, time: 1000},function () {});
        }
    });

    $('#rejectAllOrder').on('click', function(){
        var id = '';
        $('.checkIds').each(function(){
            var _this = $(this);
            if( _this.is(':checked')  ){
                id = id + _this.val() + ',';
            }
        });
        if(id){
            layer.confirm('确认要一键驳回吗？',function(index) {
                $.ajax({
                    url:"<?php echo U('Admin/Withdrawal/editwtAllStatus');?>",
                    type: 'post',
                    data: {'id':id,'status':3},
                    success: function (res) {
                        if (res.status) {
                            layer.msg(res.msg, {icon: 1, time: 1000},function () {
                                location.replace(location.href);
                            });
                        }else{
                            layer.msg(res.msg, {icon: 2, time: 1000});
                        }
                    }
                });
            });
        }else{
            layer.msg('请选择结算申请', {icon: 2, time: 1000},function () {});
        }
    });

    $('#checkAll').on('click', function(){
        var child = $('table').next().find('tbody input[type="checkbox"]');  ;
        child.each(function(){
            $(this).attr('checked', true);
        });
        $('.layui-form-checkbox').addClass('layui-form-checked');
       
    });
    $('#pageList').change(function(){
        $('#pageForm').submit();
    });
</script>
</body>
</html>