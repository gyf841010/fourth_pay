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
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       平台基本设置
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">System</a></li>
        <li class="breadcrumb-item active">System setting</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">		  
        <div class="col-lg-12 col-12">
			<!-- Basic Forms -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">系统设置</h4>			
					<ul class="box-controls pull-right">
					  <li><a class="box-btn-close" href="#"></a></li>
					  <li><a class="box-btn-slide" href="#"></a></li>	
					  <li><a class="box-btn-fullscreen" href="#"></a></li>
					</ul>
				</div>
				<!-- /.box-header -->
      <form class="layui-form" action="" autocomplete="off" id="baseForm">
        <input type="hidden" name="id" id="id" value="<?php echo ($vo["id"]); ?>">
				<div class="box-body">
				  <div class="row">
					<div class="col-10">
						<div class="form-group row">
                          <label for="example-email-input" class="col-sm-2 col-form-label">平台名称：<span class="text-danger">*</span></label>
            <div class="col-sm-4">
							<input class="form-control"  type="text" name="config[websitename]" onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\(\(\)\\//]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\(\(\)\\//]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\(\(\)\\//]/g,'')" value="<?php echo ($vo["websitename"]); ?>" lay-verify="required" autocomplete="off" placeholder="聚合支付系统"  id="example-text-input">
						 <small>注意：为安全起见,请同步手动修改配置文件 <br>/Application/Common/Conf/website.php</small>
                          </div> 
						</div>
						<div class="form-group row">
						  <label for="example-search-input" class="col-sm-2 col-form-label">平台网址：<span class="text-danger">*</span></label>
	  <div class="col-sm-4">
							<input class="form-control"  type="text" name="config[domain]" onkeyup="value=value.replace(/[^\0-9\:\/\a-\z\A-\Z]/g,'')" onpaste="value=value.replace(/[^\0-9\:\/\a-\z\A-\Z]/g,'')" oncontextmenu = "value=value.replace(/[^\0-9\:\/\a-\z\A-\Z]/g,,'')" value="<?php echo ($vo["domain"]); ?>" lay-verify="required"   autocomplete="off"  placeholder="例如：www.hhjpay.com"  id="example-search-input"><small>无需输入HTTP://</small>
		<small>注意：为安全起见,请同步手动修改配置文件 <br>/Application/Common/Conf/website.php</small>
                          </div>
						</div>
						<div class="form-group row">
						  <label for="example-email-input" class="col-sm-2 col-form-label">联系邮箱：</label>
						  <div class="col-sm-4">
							<input class="form-control" type="email" name="config[email]" value="<?php echo ($vo["email"]); ?>"  lay-verify="email"
                               autocomplete="off" placeholder="例如：zhifu@qq.com" id="example-email-input">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-url-input" class="col-sm-2 col-form-label">客服电话：</label>
						  <div class="col-sm-4">
							<input class="form-control"  type="text" name="config[tel]" value="<?php echo ($vo["tel"]); ?>"  onkeyup="value=value.replace(/[^0-9]/g,'')" onpaste="value=value.replace(/[^0-9]/g,'')" oncontextmenu = "value=value.replace(/[^0-9]/g,'')" v autocomplete="off" placeholder="例如：400 0000 000 " id="example-url-input">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-tel-input" class="col-sm-2 col-form-label">客服QQ：</label>
						  <div class="col-sm-4">
							<input class="form-control"  type="text" name="config[qq]" value="<?php echo ($vo["qq"]); ?>" onkeyup="value=value.replace(/[^0-9]/g,'')" onpaste="value=value.replace(/[^0-9]/g,'')" oncontextmenu = "value=value.replace(/[^0-9]/g,'')"  autocomplete="off"  placeholder="例如：123456" id="example-tel-input">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-password-input" class="col-sm-2 col-form-label">后台目录：</label>
						  <div class="col-sm-4">
                             <input type="text" name="config[directory]" readonly='readonly'  value="<?php echo C('HOUTAINAME');?>" onkeyup="value=value.replace(/[^\a-\z\A-\Z]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z]/g,'')"  placeholder="默认为admin，留空为默认" autocomplete="off"  class="form-control">
                            <small>请手动修改配置文件/Application/Common/Conf/website.php第8行</small>
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-number-input" class="col-sm-2 col-form-label">前台目录：</label>
						  <div class="col-sm-4">
						<input type="text" name="config[login]" readonly='readonly' onkeyup="value=value.replace(/[^\a-\z\A-\Z]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z]/g,'')" value="<?php echo C('LOGINNAME');?>" autocomplete="off"
                           class="form-control" placeholder="只能是英文字母">
                            <small>请手动修改配置文件/Application/Common/Conf/website.php第7行</small>
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-datetime-local-input" class="col-sm-2 col-form-label">平台备案号：</label>
						  <div class="col-sm-4">
							 <input type="text" name="config[icp]" value="<?php echo ($vo["icp"]); ?>"  onkeyup="value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')" autocomplete="off"
                           class="form-control" placeholder="网站备案号">
						  </div>
						</div>
						<div class="form-group row">
						  <label for="example-date-input" class="col-sm-2 col-form-label">公司名称：</label>
						  <div class="col-sm-4">
							<input type="text" name="config[company]" value="<?php echo ($vo["company"]); ?>" onkeyup="value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z\0-9\u4E00-\u9FA5]/g,'')"  autocomplete="off"
                           class="form-control" placeholder="公司名称">
						  </div>
						</div>
                      
					<div class="form-group row">
						  <label for="example-month-input" class="col-sm-2 col-form-label">平台logo：</label>
						  <div class="col-sm-8">
                            <button type="button" class="btn btn-primary btn-sm"  id="test1"><i class="fa fa-save"></i> 上传LOGO</button> 
                           <input type="hidden" name="config[logo]"  lay-filter="required"  id="wx_img" autocomplete="off"  value="<?php echo ($vo["logo"]); ?>">
  <span style="color: red;font-size: 12px;">*如果无法上传请开启上传组件</span> 
                         <p></p><img class="form-control" style="width: 40%" src="<?php echo ($vo["logo"]); ?>" id="demo1">
                        <p id="demoText"></p>
						  </div>
						</div>
                      
                      
						<div class="form-group row">
						  <label for="example-week-input" class="col-sm-2 col-form-label">商户代付功能：</label>
						  <div class="col-sm-10">
			
                            
                            <fieldset class="controls">
									<input name="config[payingservice]" type="radio"  id="radio_1"  title="开启" value="1"<?php if($vo['payingservice'] == 1): ?>checked<?php endif; ?>>

									<input name="config[payingservice]" type="radio" id="radio_2" title="关闭" value="0" <?php if($vo['payingservice'] == 0): ?>checked<?php endif; ?>>
							
								</fieldset>

                            
						  </div>
						</div>
                  
                    <div class="form-group row">
               <label class="col-sm-2 col-form-label">随机分配商户号：</label>
               <div class="col-sm-8">
                    <input type="radio" name="config[random_mchno]" value="1"  id="radio_15" title="开启" <?php if($vo['random_mchno'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[random_mchno]" value="0"  id="radio_16" title="关闭" <?php if($vo['random_mchno'] == 0): ?>checked<?php endif; ?>>
                </div>
            </div>
                  
                  		<div class="form-group row">
						  <label for="example-color-input" class="col-sm-2 col-form-label">注册需要邀请码：</label>
						  <div class="col-sm-10">
						<input type="radio" name="config[invitecode]" value="1"   id="radio_5"  title="需要" <?php if($vo['invitecode'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[invitecode]" value="0"   id="radio_6"  title="不需要" <?php if($vo['invitecode'] == 0): ?>checked<?php endif; ?>>
						  </div>
						</div>
                  
						<div class="form-group row">
						  <label for="example-time-input" class="col-sm-2 col-form-label">商户认证方式：</label>
						  <div class="col-sm-10">
                              <input type="radio" name="config[authorized]" value="0" title="自动认证"  id="radio_4"  <?php if($vo['authorized'] == 0): ?>checked<?php endif; ?>>
						 <input type="radio" name="config[authorized]" value="1" title="人工认证"  id="radio_3" <?php if($vo['authorized'] == 1): ?>checked<?php endif; ?>>
						  </div>
						</div>
                
				
        
        	 <div class="form-group row">
                <label class="col-sm-2 col-form-label">商户激活方式：</label>
                <div class="col-sm-8">
                   <input type="radio" name="config[register_need_activate]" value="0" id="radio_18" title="自动激活" <?php if($vo['register_need_activate'] == 0): ?>checked<?php endif; ?>>
               
                    <input type="radio" name="config[register_need_activate]" value="1" id="radio_17" title="人工审核" <?php if($vo['register_need_activate'] == 1): ?>checked<?php endif; ?>>
                   
                </div>
            </div>
        
        <div class="form-group row">
						  <label for="example-color-input" class="col-sm-2 col-form-label">后台商户提现通知：</label>
						  <div class="col-sm-10">
					 <input type="radio" name="config[withdraw]" value="1" id="radio_7" title="开启" <?php if($vo['withdraw'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[withdraw]" value="0"  id="radio_8" title="关闭" <?php if($vo['withdraw'] == 0): ?>checked<?php endif; ?>>
          <span style="color: red;font-size: 12px;">*提现通知只限于 后台首页提示 其他页面无提示</span>
						  </div>
						</div>
    
      <div class="form-group row">
						  <label for="example-color-input" class="col-sm-2 col-form-label">允许重复订单：</label>
						  <div class="col-sm-2">
					 <input type="radio" name="config[is_repeat_order]" value="1" id="radio_9" title="开启" <?php if($vo['is_repeat_order'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[is_repeat_order]" value="0"  id="radio_10" title="关闭" <?php if($vo['is_repeat_order'] == 0): ?>checked<?php endif; ?>>
						  </div>
						</div>

      <div class="form-group row">
                <label class="col-sm-2 col-form-label">IP登录白名单：</label>
               <div class="col-sm-4">
                    <textarea placeholder="" class="form-control" required name="config[login_ip]"><?php echo ($vo["login_ip"]); ?></textarea>
                    <span style="color: red;font-size: 12px;">*输入多个IP请换行，如果不输入默认所有IP可登录</span>
                </div>
            </div>
           
               <div class="form-group row">
                <label class="col-sm-2 col-form-label">网站统计代码：</label>
              <div class="col-sm-4">
                    <textarea placeholder="" class="form-control" name="config[tongji]"><?php echo ($vo["tongji"]); ?></textarea>
                        <span style="color: red;font-size: 12px;">*支持HTML代码</span>
                </div>
            </div>
              
               <div class="form-group row">
                <label class="col-sm-2 col-form-label">谷歌令牌验证：</label>
           <div class="col-sm-8">
                    <input type="radio" name="config[google_auth]" value="1"  id="radio_11" title="开启" <?php if($vo['google_auth'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[google_auth]" value="0"  id="radio_12"  title="关闭" <?php if($vo['google_auth'] == 0): ?>checked<?php endif; ?>>
                 <span style="color: red;font-size: 12px;">*测试期间请勿开启，否则将无法通过谷歌验证</span>
                </div>
            </div>
       
               <div class="form-group row">
             <label class="col-sm-2 col-form-label">代付API功能：</label>
             <div class="col-sm-8">
                    <input type="radio" name="config[df_api]" value="1"  id="radio_13" title="开启" <?php if($vo['df_api'] == 1): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[df_api]" value="0"  id="radio_14" title="关闭" <?php if($vo['df_api'] == 0): ?>checked<?php endif; ?>>
                </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">允许管理员多处登录：</label>
                <div class="col-sm-8">
                   <input type="radio" name="config[admin_alone_login]" value="0" id="radio_20" title="允许" <?php if($vo['admin_alone_login'] == 0): ?>checked<?php endif; ?>>
                    <input type="radio" name="config[admin_alone_login]" value="1" id="radio_19" title="不允许" <?php if($vo['admin_alone_login'] == 1): ?>checked<?php endif; ?>>              
              <span style="color: red;font-size: 12px;">*选 “不允许 ” 将禁止管理员多处登录并强制下线</span>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">登录验证限制次数：</label>
                <div class="col-sm-2">
                    <input type="text" name="config[max_auth_error_times]" value="<?php echo ($vo["max_auth_error_times"]); ?>" placeholder="3" autocomplete="off" class="form-control" style="text-transform: capitalize;">
                    <span>错误最大次数，包括商户登录，后台管理员登录，短信验证码，支付密码，谷歌验证码</span>
                </div>
              
            </div>

          <div class="form-group row">
                <label class="col-sm-2 col-form-label">登录验证冻结时间：</label>
                 <div class="col-sm-2">
                    <input type="text" name="config[auth_error_ban_time]" value="<?php echo ($vo["auth_error_ban_time"]); ?>" placeholder="3" autocomplete="off" class="form-control" style="text-transform: capitalize;">
                   <span style="color: red;font-size: 12px;">单位：分钟错误超限，输入错误密码/验证码超限后，这个时间内系统拒绝验证</span>
                </div>
              
            </div>

            <?php if($verifyGoogle and $verifysms): ?><div class="form-group row"  id="df_auto_check">
              <label class="col-sm-2 col-form-label">验证方式：</label>
                    <div class="col-sm-8">
                        <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_21" value="1" title="谷歌安全码" checked>
                        <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_22" value="0" title="短信验证码">
                    </div>
                </div>
                <?php else: ?>
                <input type="hidden" name="auth_type" value="<?php echo ($auth_type); ?>"><?php endif; ?>
            <?php if(($verifyGoogle) == "1"): ?><div class="form-group row"  id="auth_google">
						  <label for="example-week-input" class="col-sm-2 col-form-label">谷歌安全码：</label>
                    <div class="col-sm-2">
                        <input type="text" name="google_code" autocomplete="off"
                               placeholder="请输入谷歌安全码" class="form-control"   value="">
                    </div>
                </div><?php endif; ?>

            <?php if(($verifysms) == "1"): ?><div class="input-group row" id="auth_sms" <?php if($verifyGoogle and $verifysms): ?>style="display: none"<?php endif; ?>>
             <label for="example-week-input" class="col-sm-2 col-form-label">短信验证码：</label>
            <div class="input-group-prepend col-sm-3">
                  <input type="text" name="code"  autocomplete="off" placeholder="输入验证码" class="form-control" value="">
                <button href="javascript:;" type="button"  id="sendBtn" data-mobile="<?php echo ($mobile); ?>"   class="btn btn-xs btn-danger" title="点击获取短信验证码"><i class="glyphicon glyphicon-stats"></i> 获取短信验证码</button>
                </div>
				</div>
 <p class="my-20"></p><?php endif; ?>

				  <!-- /.row -->
<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-2">
					<button type="button" class="btn btn-success btn-sm" lay-submit="" lay-filter="add"><i class="fa fa-check-square-o"></i> 提交保存</button>
                  <button type="reset" class="btn btn-secondary btn-sm"><i class="glyphicon glyphicon-remove"></i>  重置</button>
		</div>	
                  </div>
				</div>
				<!-- /.box-body -->    

</form>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


 <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<!-- ./wrapper -->
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
  <!-- /.content-wrapper -->

<script>
layui.use(['form', 'laydate','upload'], function(){
    var layer = layui.layer
        ,form = layui.form
        ,laydate = layui.laydate
     
        ,upload = layui.upload;
          
          //普通图片上传 
        var uploadInst = upload.render({
            elem: '#test1'
            ,url: '<?php echo U("System/uploadImg");?>'
            ,before: function(obj){
              //预读本地文件示例，不支持ie8
              obj.preview(function(index, file, result){
                $('#demo1').attr('src', result); //图片链接（base64）
              });
            }
            ,done: function(res){
              console.log(res);
              //如果上传失败
              $('#wx_img').val(res['data']);
              {
                        layer.alert("LOGO上传成功，无需提交及时生效", {icon: 6},function () {
                            location.reload();
                        });
                    }
              //上传成功
            }
            ,error: function(){
              //演示失败状态，并实现重传
              var demoText = $('#demoText');
              demoText.html('<span style="color: #FF5722;">上传失败</span> <a class="layui-btn layui-btn-mini demo-reload">重试</a>');
              demoText.find('.demo-reload').on('click', function(){
                uploadInst.upload();
              });
            }
        });
  
   //监听禁止提交危险支付
function cleanSpelChar(th){     
	    if(/["'!#$%&*()<￥！@#￥%……&*（）>%;)(&+-]/.test(th.value)){           
	    $(th).val(th.value.replace(/["'!#$%&*()<￥！@#￥%……&*（）>%;)(&+-]/,""));     
	    } 
	}
function processSpelChar() {
    var code;
    var character;
    if (document.all) {
        code = window.event.keyCode;
    } else {
        code = arguments.callee.caller.arguments[0].which;
    }
    var character = String.fromCharCode(code);
    var txt = new RegExp(/["'!#$%&*()<￥！@#￥%……&*（）>%;)(&+-]/);
    if (txt.test(character)) {
        if (document.all) {
            window.event.returnValue = false;
        } else {
            arguments.callee.caller.arguments[0].preventDefault();
        }
    }
}
        //监听提交
        form.on('submit(add)', function(data){
            $.ajax({
                url:"<?php echo U('System/saveBase');?>",
                type:"post",
                data:$('#baseForm').serialize(),
                success:function(res){
                    if(res.status){
                        layer.alert("操作成功", {icon: 6},function () {
                            location.reload();
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                    }else{
                        layer.msg(res.msg?res.msg:"数据无变动,操作失败!", {icon: 5},function () {
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                        return false;
                    }
                }
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
$(function (){
    var sendUrl = "<?php echo U('System/sysconfigSend');?>";
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