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
       提款设置
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
				  <h4 class="box-title">提款信息设置</h4>			
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
                <div class="layui-tab layui-tab-card">

                    <ul class="layui-tab-title">
                        <li class="layui-this">提款设置</li>
                        <li>提款时间</li>
                        <li>节假日设置</li>
                        <li>自动代付设置</li>
                    </ul>


                    <div class="layui-tab-content">
                        <div class="layui-tab-item layui-show">
                            <form class="layui-form" action="" id="profile">
	<input type="hidden" name="id" value="<?php echo ($configs['id']); ?>">
	<input type="hidden" name="u[issystem]" value="1">

	<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">单笔最小金额：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[tkzxmoney]" autocomplete="off" value="<?php echo ($configs["tkzxmoney"]); ?>"
				   placeholder="" class="layui-input">
		</div>
		 <label for="example-text-input" class="col-sm-1 col-form-label">单笔最大金额：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[tkzdmoney]" autocomplete="off" value="<?php echo ($configs["tkzdmoney"]); ?>"
				   placeholder="" class="layui-input">
		</div>
      
	</div>

	<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">当日总金额：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[dayzdmoney]" autocomplete="off" value="<?php echo ($configs["dayzdmoney"]); ?>"
				   placeholder="0.00" class="layui-input">
		</div>
		 <label for="example-text-input" class="col-sm-1 col-form-label">当日总次数：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[dayzdnum]" autocomplete="off" value="<?php echo ($configs["dayzdnum"]); ?>"
				   placeholder="" class="layui-input">
		</div>
	</div>

<div class="form-group row">
		 <label for="example-text-input" class="col-sm-2 col-form-label">单人单卡单日最高提现额：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[daycardzdmoney]" autocomplete="off" value="<?php echo ($configs["daycardzdmoney"]); ?>"
				   placeholder="0.00" class="layui-input">
		</div>
	</div>
	<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">结算方式：</label>
		<div class="col-sm-4">
			<input type="radio" name="u[t1zt]" <?php if($configs[t1zt] == 0): ?>checked<?php endif; ?> value="0" title="T+0"
			checked="">
			<input type="radio" name="u[t1zt]" <?php if($configs[t1zt] == 1): ?>checked<?php endif; ?> value="1" title="T+1">
			<input type="radio" name="u[t1zt]" <?php if($configs[t1zt] == 7): ?>checked<?php endif; ?> value="7" title="T+7 每周一允许结算">
			<input type="radio" name="u[t1zt]" <?php if($configs[t1zt] == 30): ?>checked<?php endif; ?> value="30" title="T+30 每月一号允许结算">
		</div>
	</div>

	<!--<div class="layui-form-item">
		<label class="layui-form-label">结算方式：</label>
		<div class="layui-input-block">
			<input type="radio" name="u[t0zt]" <?php if($configs[t0zt] == 0): ?>checked<?php endif; ?> value="0" title="关闭" checked="">
			<input type="radio" name="u[t0zt]" <?php if($configs[t0zt] == 1): ?>checked<?php endif; ?> value="1" title="开通">
		</div>
	</div>-->
<!-- 	<div class="layui-form-item">
		<label class="layui-form-label">购买T+0金额：</label>
		<div class="layui-input-inline">
			<input type="number" min="0" name="u[gmt0]" autocomplete="off" value="<?php echo ($configs["gmt0"]); ?>"
				   placeholder="0.00" class="layui-input">
		</div>
	</div> -->

	<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">手续费类型：</label>
		<div class="col-sm-2">
			<select name="u[tktype]" lay-verify="required" lay-search="">
				<option <?php if($configs['tktype'] == 0): ?>selected<?php endif; ?> value="0">按比例计算</option>
				<option <?php if($configs['tktype'] == 1): ?>selected<?php endif; ?> value="1">按单笔计算</option>
			</select>
		</div>
	</div>
<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">单笔提款比例（%）：</label>
		<div class="col-sm-1">
			<input type="number" min="0" step="0.1" name="u[sxfrate]" autocomplete="off"
				   value="<?php echo ($configs["sxfrate"]); ?>" placeholder="%" class="layui-input">
		</div>
		<label for="example-text-input" class="col-sm-1 col-form-label">单笔提款收取（元）：</label>
		<div class="col-sm-1">
			<input type="number" min="0" name="u[sxffixed]" autocomplete="off" value="<?php echo ($configs["sxffixed"]); ?>"
				   placeholder="0.00" class="layui-input">
		</div>
	</div>
<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">手续费扣方式：</label>
      
		<div class="col-sm-4">
			<input type="radio" name="u[tk_charge_type]" value="0" title="从到账金额扣" <?php if($configs['tk_charge_type'] == 0): ?>checked<?php endif; ?>>
	<input type="radio" name="u[tk_charge_type]" value="1" title="从商户余额扣" <?php if($configs['tk_charge_type'] == 1): ?>checked<?php endif; ?>>
	</div>

</div>

<div class="form-group row">
		 <label for="example-text-input" class="col-sm-1 col-form-label">提款状态：</label>
		<div class="col-sm-4">
			<input type="radio" name="u[tkzt]" <?php if($configs[tkzt] == 0): ?>checked<?php endif; ?> value="0" title="关闭" checked="">
			<input type="radio" name="u[tkzt]" <?php if($configs[tkzt] == 1): ?>checked<?php endif; ?> value="1" title="开通">
		</div>
	</div>	


	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit="submit" lay-filter="save"><i class="fa fa-check-square-o"></i> 提交保存</button>
		</div>
	</div>
</form>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="" id="settime">
	<input type="hidden" name="id" value="<?php echo ($configs['id']); ?>">	
	<div class="layui-form-item">
   <div class="form-group row">
                                     <label for="example-text-input" class="col-sm-1 col-form-label">提款时间：</label>
      <div class="layui-input-inline">
        
        <input type="text" class="layui-input" name="u[allowstart]" id="auto_tx_stime"
					   placeholder="提现开始时间" value="<?php echo ($configs["allowstart"]); ?>" lay-verify="required" >
  
    </div>
      <div class="layui-form-mid">-</div>
      <div class="layui-input-inline">
     <input type="text" class="layui-input" name="u[allowend]" id="auto_tx_etime"
					   placeholder="提现结束时间" value="<?php echo ($configs["allowend"]); ?>" lay-verify="required" >
    </div>
    </div>
	</div>
	<div class="layui-form-item">
		<div class="layui-input-block">
			<button class="layui-btn" lay-submit="submit" lay-filter="time"><i class="fa fa-check-square-o"></i> 提交保存</button>
		</div>
	</div>
</form>
                        </div>
                        <div class="layui-tab-item">
                            	<p class="text-danger"><strong>(这里可以排除指定的日期为节假日)</strong></p>
	
	<div class="layui-form">
	<div class="layui-form-item">
      
<div class="form-group row">
   <label for="example-text-input" class="col-sm-1 col-form-label">添加排除日期：</label>
<div class="col-sm-2">
<div id="setholiday" style="height: 38px; line-height: 38px; cursor: pointer; border-bottom: 1px solid #e2e2e2;"></div>
      </div>
    </div>
      
	</div>
	</div>
	<div class="layui-form" id="setdatebox">
		<?php if(is_array($holidays)): $i = 0; $__LIST__ = $holidays;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><button class="layui-btn layui-btn-small layui-btn-danger" onclick="del_btn(this,<?php echo ($vo["id"]); ?>)"><?php echo (date('Y-m-d',$vo["datetime"])); ?>  <i class="fa fa-trash-o"></i>  删除</button><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
                        </div>
                        <div class="layui-tab-item">
                            <form class="layui-form" action="" id="autodf">
		<input type="hidden" name="id" value="<?php echo ($configs['id']); ?>">
		<input type="hidden" name="u[issystem]" value="1">
		<div class="form-group row">
                                   <label for="example-text-input" class="col-sm-1 col-form-label">自动代付开关：</label>
			<div class="col-sm-2">
              <input type="radio" name="u[auto_df_switch]" lay-filter="autoDfSwitch" <?php if($configs[auto_df_switch] == 1): ?>checked<?php endif; ?> value="1" title="开"  checked="">
				<input type="radio" name="u[auto_df_switch]" lay-filter="autoDfSwitch" <?php if($configs[auto_df_switch] == 0): ?>checked<?php endif; ?> value="0" title="关">
			</div>
		</div>

		<div id="settingAutoDf" style="display:<?php if(!$configs[auto_df_switch]): ?>none<?php endif; ?>;">
		<div class="form-group row">
                                   <label for="example-text-input" class="col-sm-1 col-form-label">开始时间：</label>
			<div class="col-sm-1">
				<input type="text" class="layui-input" name="u[auto_df_stime]" id="auto_df_stime"
					   placeholder="自动代付开始时间" value="<?php echo ($configs["auto_df_stime"]); ?>" lay-verify="required" >
			</div>
			<label for="example-text-input" class="col-sm-1 col-form-label">结束时间：</label>
		<div class="col-sm-1">
				<input type="text" class="layui-input" name="u[auto_df_etime]" id="auto_df_etime"
				placeholder="自动代付结束时间" value="<?php echo ($configs["auto_df_etime"]); ?>" lay-verify="required" >
			</div>
		</div>
	<div class="form-group row">
                                   <label for="example-text-input" class="col-sm-1 col-form-label">最大金额：</label>
			<div class="col-sm-2">
				<input type="number" min="0" name="u[auto_df_maxmoney]" autocomplete="off" value="<?php echo ($configs["auto_df_maxmoney"]); ?>"
					   placeholder="单笔最大金额限制，填0表示不限制" class="layui-input"  lay-verify="required" >
				<P>单笔最大金额限制，填0表示不限制</P>
			</div>
		</div>
		<div class="form-group row">
                                   <label for="example-text-input" class="col-sm-2 col-form-label">商户每天自动代付笔数限制：</label>
			<div class="col-sm-2">
				<input type="number" min="0" name="u[auto_df_max_count]" autocomplete="off" value="<?php echo ($configs["auto_df_max_count"]); ?>"
					   placeholder="商户每天自动代付笔数限制，填0表示不限制" class="layui-input"  lay-verify="required" >
				<P>商户每天自动代付笔数限制，填0表示不限制</P>
			</div>
		</div>
		<div class="form-group row">
                                   <label for="example-text-input" class="col-sm-2 col-form-label">商户每天自动代付最大总金额限制：</label>
			<div class="col-sm-2">
				<input type="number" min="0" name="u[auto_df_max_sum]" autocomplete="off" value="<?php echo ($configs["auto_df_max_sum"]); ?>"
					   placeholder="商户每天自动代付最大总金额限制，填0表示不限制" class="layui-input"  lay-verify="required" >
			<P>商户每天自动代付最大总金额限制，填0表示不限制</P>
			</div>
		</div>
</div>
<div class="layui-form-item">
	<div class="layui-input-block">
		<button class="layui-btn" lay-submit="submit" lay-filter="autodf"> <i class="fa fa-check-square-o"></i>  提交保存</button>
	</div>
</div>
</form>



                        </div>
                    </div>
                </div>
            </div>
</div>
                    </section>
    </div>
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
    <script>
        layui.use(['layer', 'form', 'laydate','element'], function () {
            var form = layui.form
                ,$ = layui.jquery
                , laydate = layui.laydate
                ,element = layui.element
                , layer = layui.layer;
                laydate.render({
                    elem: '#auto_df_stime'
                    , type: 'time'
                    ,theme: 'molv'
                    ,format: 'HH:mm'
                });
                laydate.render({
                    elem: '#auto_df_etime'
                    , type: 'time'
                    ,theme: 'molv'
                    ,format: 'HH:mm'
                });
          
            laydate.render({
                    elem: '#auto_tx_stime'
                    , type: 'time'
                    ,theme: 'molv'
                    ,format: 'HH:mm'
                });
                laydate.render({
                    elem: '#auto_tx_etime'
                    , type: 'time'
                    ,theme: 'molv'
                    ,format: 'HH:mm'
                });
            //监听radio
            form.on('radio(changeRule)', function (data) {
                //console.log(data.elem); //得到radio原始DOM对象
                //console.log(data.value); //被点击的radio的value值
                if (data.value == 1) {
                    $('#changeRule').css('display', '');
                } else if (data.value == 0) {
                    $('#changeRule').css('display', 'none');
                }
            });
            //监听radio
            form.on('radio(autoDfSwitch)', function(data){
                if(data.value==1){
                    $('#settingAutoDf').css('display','');
                }else if(data.value==0){
                    $('#settingAutoDf').css('display','none');
                }
            });
            //监听提交
            form.on('submit(save)', function (data) {
                $.ajax({
                    url: "<?php echo U('Withdrawal/saveWithdrawal');?>",
                    type: "post",
                    data: $('#profile').serialize(),
                    success: function (res) {
                        if (res.status) {
                            layer.alert("编辑成功", {icon: 6}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }else{
                            layer.alert("操作失败", {icon: 5}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }
                    }
                });
                return false;
            });

            //选中后的回调
            laydate.render({
                elem: '#setholiday'
                ,done: function(value, date){
                    $.ajax({
                        url: "<?php echo U('Withdrawal/addHoliday');?>",
                        type: "post",
                        data: "datetime="+value,
                        success: function (res) {
                            if (res.status) {
                                layer.msg("编辑成功", {icon: 6}, function () {
                                    location.reload();
                                    var index = parent.layer.getFrameIndex(window.name);
                                    parent.layer.close(index);
                                });
                            }else{
                                layer.msg(res.msg, {icon: 5}, function () {
                                    location.reload();
                                    var index = parent.layer.getFrameIndex(window.name);
                                    parent.layer.close(index);
                                });
                            }
                        }
                    });
                }
            });

            //监听时间
            form.on('submit(time)', function (data) {
                $.ajax({
                    url: "<?php echo U('Withdrawal/settimeEdit');?>",
                    type: "post",
                    data: $('#settime').serialize(),
                    success: function (res) {
                        if (res.status) {
                            layer.msg("编辑成功", {icon: 6}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }else{
                            layer.msg("操作失败", {icon: 5}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }
                    }
                });
                return false;
            });
            //监听自动代付设置
            form.on('submit(autodf)', function (data) {
                $.ajax({
                    url: "<?php echo U('Withdrawal/autoDfEdit');?>",
                    type: "post",
                    data: $('#autodf').serialize(),
                    success: function (res) {
                        if (res.status) {
                            layer.msg("编辑成功", {icon: 6}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }else{
                            layer.msg("操作失败", {icon: 5}, function () {
                                location.reload();
                                var index = parent.layer.getFrameIndex(window.name);
                                parent.layer.close(index);
                            });
                        }
                    }
                });
                return false;
            });
        });
        //监听button
        function del_btn(obj,id){
            console.log(obj);
            $.ajax({
                url: "<?php echo U('Withdrawal/delHoliday');?>",
                type: "post",
                data: "id="+id,
                success: function (res) {
                    if (res.status) {
                        layer.msg("删除成功", {icon: 6}, function () {
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                        $(obj).remove();
                    }else{
                        layer.msg(res.msg, {icon: 5}, function () {
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                    }
                }
            });
        }
    </script>
    </body>
    </html>