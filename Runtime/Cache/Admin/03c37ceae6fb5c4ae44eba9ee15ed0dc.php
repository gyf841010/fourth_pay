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
       模板管理</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Template</a></li>
        <li class="breadcrumb-item active">Template Manager</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      <div class="row">		  
        <div class="col-lg-12 col-12">
			<!-- Basic Forms -->
			  <div class="box">
				<div class="box-header with-border">
				  <h4 class="box-title">前台模板管理</h4>	<span style="color: red;font-size: 12px;">*请谨慎操作，开关及时生效</span> 				
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

                    <div class="ibox-content">
                        <div class="box-controls pull-right" style="margin: 2px;">
<button type="button"  href="javascript:;" id="addTemplate" class="btn btn-primary btn-sm" style="margin: 2px;"><i class="mdi mdi-checkbox-marked-circle-outline"></i> 添加模板</button>	</div>
                        <div class="table-responsive">
                            <table class="layui-table">
                                <thead>
                                    <tr>

                                        <th>模板编号</th>
                                        <th>模板名称</th>
                                        <th>模板代码</th>
										<th>是否默认模板</th>
										<th>添加时间</th>
                                        <th>修改时间</th>
										<th>备注</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                                        <td><?php echo ($data["id"]); ?></td>
                                        <td><?php echo ($data["name"]); ?></td>
                                        <td><?php echo ($data["theme"]); ?></td>
                                        <td>
											<div class="layui-form">
											<input type="checkbox" <?php if($data['is_default']): ?>checked<?php endif; ?> name="status" value="1" data-id="<?php echo ($data["id"]); ?>" data-name="<?php echo ($data["name"]); ?>" lay-skin="switch" lay-filter="switchTest" lay-text="是|否">
											</div>
										</td>
										<td><?php echo (date("Y-m-d H:i:s",$data["add_time"])); ?></td>
										<td><?php echo (date("Y-m-d H:i:s",$data["update_time"])); ?></td>
										<td><?php echo ($data["remarks"]); ?></td>
                                        <td>
                                        	<?php if(($data['id']) != "1"): ?><div class="btn-group">
												<button class="btn btn-info btn-sm" onclick="admin_edit('编辑模板','<?php echo U('Template/addSave',array('id'=>$data[id]));?>')">编辑</button>
											  
											  	<button class="btn btn-info btn-sm" onclick="admin_del(this,'<?php echo $data[id];?>')">删除</button>
											</div><?php endif; ?>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>    
                                </tbody>
                            </table>
                        </div>
					    <div class="page"><?php echo ($page); ?></div>
                    </div>
                </div>
            </div>

        </div>
    </div>   </div>   </div>   </div>

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
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
layui.use(['layer', 'form'], function(){
  var form = layui.form
  ,layer = layui.layer;

  //监听指定开关
  form.on('switch(switchTest)', function(data){
	var id = $(this).attr('data-id'),
	is_default = this.checked ? 1 : 0,
	title = $(this).attr('data-name');
	$.ajax({
		url:"<?php echo U('Template/editDefalut');?>",
		type:'post',
		data:"id="+id+"&is_default="+is_default,
		success:function(res){
			if(res.status){
				layer.tips('温馨提示：'+title+'开启', data.othis);
			}else{
				layer.tips('温馨提示：'+title+'关闭', data.othis);
			}
			location.replace(location.href);
		}
	});
  });



});

  //监听提交
  $('#addTemplate').on('click',function(){
	var w=450,h=400;
	if (h == null || h == '') {
		h=($(window).height() - 50);
	};
	layer.open({
		type: 2,
		fix: false, //不固定
		maxmin: true,
		shadeClose: true,
		area: [w+'px', h +'px'],
		shade:0.4,
		title: "添加模板",
		content: "<?php echo U('Template/addSave');?>"
	});
  });

 //编辑
 function admin_edit(title,url){
	var w=450,h=400;
	if (h == null || h == '') {
		h=($(window).height() - 50);
	};
	layer.open({
		type: 2,
		fix: false, //不固定
		maxmin: true,
		shadeClose: true,
		area: [w+'px', h +'px'],
		shade:0.4,
		title: title,
		content: url
	});
 }

 /*删除*/
function admin_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			url:"<?php echo U('Template/del');?>",
			type:'post',
			data:'id='+id,
			success:function(res){
				if(res.status){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
				}
			}
		});
	});
}

</script>
</body>
</html>