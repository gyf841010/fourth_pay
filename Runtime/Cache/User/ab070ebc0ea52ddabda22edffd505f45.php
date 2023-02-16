<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php if(($fans['groupid']) == "5"): ?>代理中心<?php endif; if(($fans['groupid']) == "6"): ?>中级代理中心<?php endif; ?> <?php if(($fans['groupid']) == "7"): ?>高级代理中心<?php endif; ?> <?php if(($fans['groupid']) == "4"): ?>商户中心<?php endif; ?> - <?php echo ($sitename); ?></title>
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
  <link href="/Public/assetsqq572125157/libs/RWD-Table-Patterns/css/rwd-table.min.css" rel="stylesheet" type="text/css"/>

<!-- build:css -->
<link href="/Public/assetsqq572125157/css/app.css" rel="stylesheet" type="text/css" />
<link href="/Public/assetsqq572125157/libs/dropzone/dropzone.css" rel="stylesheet" />
<link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
<!-- endbuild -->
</head>
<body>
        <!-- Navigation Bar-->
        <header id="topnav">
            <nav class="navbar-custom">

                <div class="container-fluid">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle nav-link">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <!--<span class="badge badge-danger badge-pill noti-icon-badge"></span>-->
                            </a>
                           
                        </li>
    
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="/Public/assetsqq572125157/images/users/avatar-1.jpg" alt="user" class="rounded-circle"> <span class="ml-1">快捷菜单 <i class="mdi mdi-chevron-down"></i> </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="<?php echo U("Account/profile");?>" class="dropdown-item notify-item">
                                    <i class="dripicons-user"></i> <span>基本信息</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo U("Account/editPassword");?>" class="dropdown-item notify-item">
                                    <i class="dripicons-gear"></i> <span>修改登录密码</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo U("Account/editPaypassword");?>" class="dropdown-item notify-item">
                                    <i class="dripicons-help"></i> <span>修改支付密码</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo U("Account/google");?>" class="dropdown-item notify-item">
                                    <i class="dripicons-lock"></i> <span>Google身份验证</span>
                                </a>
    
                                <!-- item-->
                                <a href="<?php echo U("Login/loginout");?>" class="dropdown-item notify-item">
                                    <i class="dripicons-power"></i> <span>安全退出</span>
                                </a>
    
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <a href="<?php echo U("Index/main");?>" class="logo">
                                <span class="logo-lg">
                                    <img src="/Public/assetsqq572125157/images/logo.png" alt="" height="50">
                                </span>
                                <span class="logo-sm">
                                    <img src="/Public/assetsqq572125157/images/logo_sm.png" alt="" height="28">
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>
            <!-- end topbar-main -->

            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="<?php echo U("Index/main");?>"><i class="mdi mdi-view-dashboard"></i> <span style="color:#333;">管理首页</span></a>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-atom"></i><span style="color:#333;">账户信息</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="<?php echo U("Account/profile");?>"><i class="mdi mdi-account-card-details mr-1 text-primary"></i>基本信息</a></li>
                                            <li><a href="<?php echo U("Account/bankcard");?>"><i class="mdi mdi-bank mr-1 text-primary"></i>银行卡管理</a></li>
                                            <li><a href="<?php echo U("Account/editPassword");?>"><i class="mdi mdi-onepassword mr-1 text-primary"></i>登录密码</a></li>
                                            <li><a href="<?php echo U("Account/editPaypassword");?>"><i class="mdi mdi-paypal mr-1 text-primary"></i>支付密码</a></li>            
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="mdi mdi-pocket mr-1 text-primary"></i>安全相关</a></li>
                                            <li><a href="<?php echo U("Account/loginrecord");?>"><i class="mdi mdi-radiator mr-1 text-primary"></i>登录记录</a></li>
                                            <li><a href="<?php echo U("Account/google");?>"><i class="mdi mdi-account-alert mr-1 text-primary"></i>谷歌身份验证</a></li>  
                                             <li><a href="<?php echo U("Account/authorized");?>"><i class="mdi mdi-wordpress mr-1 text-primary"></i>认证信息</a></li>
                                        </ul>
                                    </li>
                                   <?php if($fans['groupid'] == 4 and $fans['open_charge'] == 1): ?><li>
                                        <ul>
                                            <li><a href="javascript:void(0);"><i class="icon-organization mr-1 text-primary"></i>我的收银台</a></li>
                                            <li><a href="<?php echo U("Account/link");?>"><i class="icon-social-linkedin mr-1 text-primary"></i>我要收款</a></li>
                                            <li><a href="<?php echo U("Account/qrcode");?>"><i class="icon-credit-card mr-1 text-primary"></i>收款二维码</a></li>                 
                                        </ul>
                                    </li><?php endif; ?>
                                </ul>
                            </li>

                         <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-email-outline"></i><span style="color:#333;">订单管理</span></a>

                                <ul class="submenu">
                                  <li class="has-submenu"><a href="<?php echo U("Order/index");?>"><i class="mdi mdi-calendar-multiple mr-1 text-primary"></i>所有订单</a></li>
                                 <li class="has-submenu"><a href="<?php echo U("Order/index",['status'=>2]);?>"><i class="mdi mdi-calendar-check mr-1 text-primary"></i>成功订单</a></li>
                                 <li class="has-submenu"><a href="<?php echo U("Order/index",['status'=>1]);?>"><i class="mdi mdi-calendar-question mr-1 text-primary"></i>手动补发</a></li>
                                     <?php if(($fans['groupid']) != "4"): ?><li class="has-submenu"><a href="<?php echo U("Agent/order");?>"><i class="mdi mdi-calendar-multiple-check mr-1 text-primary"></i>商户订单管理</a></li>
                                         <?php if($siteconfig['df_api'] and $fans['df_api']): ?><li class="has-submenu"><a href="<?php echo U("Withdrawal/check");?>"><i class="mdi mdi-camera-account mr-1 text-primary"></i>商户代付订单管理</a></li><?php endif; endif; ?>
                                </ul>
                         
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-cube-outline"></i><span style="color:#333;">财务管理</span></a>
                                <ul class="submenu">
                                    <li>
                                        <a href="<?php echo U("Account/changeRecord");?>"><i class="mdi mdi-beats mr-1 text-primary"></i>资金变动记录</a>
                                    </li>      
                                    <li class="has-submenu">
                                        <a href="<?php echo U("Account/channelFinance");?>"><i class="mdi mdi-backup-restore mr-1 text-primary"></i>通道成功率分析</a>
                                       
                                    </li>      
                                    <li class="has-submenu">
                                        <a href="<?php echo U("Account/complaintsDeposit");?>"><i class="mdi mdi-at mr-1 text-primary"></i>保证金明细</a>
                                        
                                    </li>
                                    <li class="has-submenu">
                                        <a href="<?php echo U("Account/frozenMoney");?>"><i class="mdi mdi-asterisk mr-1 text-primary"></i>冻结资金明细</a>
                                       
                                    </li>
                                  <?php if(($fans['groupid']) == "4"): ?><li class="has-submenu">
                                            <a href="<?php echo U("Account/reconciliation");?>"><i class="mdi mdi-av-timer mr-1 text-primary"></i>商户对账单</a>                                          
                                        </li><?php endif; ?>
                                   
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-buffer"></i><span style="color:#333;">结算管理</span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo U("Withdrawal/clearing");?>"><i class="mdi mdi-currency-cny mr-1 text-primary"></i>提现申请</a></li>
                                    <li><a href="<?php echo U("Withdrawal/index");?>"><i class="mdi mdi-currency-usd-off mr-1 text-primary"></i>提现记录</a></li>
                                  <?php if($siteconfig['payingservice']): ?><li><a href="<?php echo U("Withdrawal/dfapply");?>"><i class="mdi mdi-currency-twd mr-1 text-primary"></i>代付申请</a></li>
                                    <li><a href="<?php echo U("Withdrawal/payment");?>"><i class="mdi mdi-currency-usd mr-1 text-primary"></i>代付记录</a></li><?php endif; ?>
                                
                                </ul>
                            </li>
                          <?php if(($fans['groupid']) != "4"): ?><li class="has-submenu">
                                <a href="#"><i class="mdi mdi-buffer"></i><span style="color:#333;">代理管理</span></a>
                                <ul class="submenu">
                                  <?php if($siteconfig['invitecode']): ?><li><a href="<?php echo U("Agent/invitecode");?>"><i class="mdi mdi-camera-front-variant mr-1 text-primary"></i>注册邀请码</a></li><?php endif; ?>
                                    <li><a href="<?php echo U("Agent/member");?>"><i class="mdi mdi-bell-sleep mr-1 text-primary"></i>下级商户管理</a></li>
                                </ul>
                            </li><?php endif; ?>

                            <li class="has-submenu">
                                <a href="#"><i class="mdi mdi-file-multiple"></i><span style="color:#333;">通道管理</span></a>
                                <ul class="submenu">
                                    <li><a href="<?php echo U("Channel/index");?>"><i class="mdi mdi-brightness-7 mr-1 text-primary"></i>通道费率</a></li>
                                  <?php if(($fans['groupid']) == "4"): ?><li><a href="<?php echo U("Channel/apidocumnet");?>"><i class="mdi mdi-brightness-auto mr-1 text-primary"></i>对接参数</a></li>
                                    <li><a href="<?php echo U("Channel/api");?>"><i class="mdi mdi-account-convert mr-1 text-primary"></i>帮助中心</a></li><?php endif; ?>
                                </ul>
                            </li>

                        </ul>
                        <!-- End navigation menu -->

                        <div class="clearfix"></div>
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->
        
        
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page title box -->
                <div class="page-title-alt-bg"></div>
                <div class="page-title-box">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Aggregate Payment</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Business</a></li>
                        <li class="breadcrumb-item active">Information</li>
                    </ol>
                    <h4 class="page-title">商户信息</h4>
                </div>
                <!-- End page title box -->
 <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title m-t-0">商户基本资料</h4>
                            <?php if($fans['status'] ==1): else: ?><p class="text-muted font-13"><small>激活状态：<code class="text-danger">未激活</code> 请联系平台客服激活后使用</small></p><?php endif; ?>
                <!--用户信息-->
           <form class="layui-form" action="" autocomplete="off" id="profile">
                    <input type="hidden" name="id" value="<?php echo ($p["id"]); ?>">
                    <div class="form-group row">
                       <label class="col-sm-2 col-form-label">上级代理ID：</label>
                        <div class="col-sm-6">
                            <input type="text" name="p[parentid]" lay-verify="title" autocomplete="off"  placeholder="无上级代理" class="form-control"   disabled autocomplete="off"  value="<?php echo (htmlentities($p["parentid"])); ?>">
                    <code style="color: red;">*ID为0表示无上级代理,如需修改上级代理请联系平台客服</code>
                        </div>
                    </div>
                 
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">姓名：</label>
                        <div class="col-sm-6">
                            <input type="text" name="p[realname]" lay-verify="title" autocomplete="off"
                                   placeholder="姓名" class="form-control" value="<?php echo (htmlentities($p["realname"])); ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">身份证号码：</label>
                        <div class="col-sm-6">
                            <input type="text" name="p[sfznumber]" lay-verify="identity" placeholder="身份证号码" autocomplete="off" class="form-control" value="<?php echo (htmlentities($p["sfznumber"])); ?>">
                        </div>
                    </div>

                   <div class="form-group row">
                            <?php if($sms_is_open): ?><label class="col-sm-2 col-form-label">手机：<?php if($p['mobile']): ?><a href="javascript:;" class="btn btn-success btn-sm"  data-toggle="tooltip" data-placement="top" title="" data-original-title="点击修改手机号码" onclick="m_admin_show('修改手机号码','<?php echo U('Account/editMobileShow');?>?id=<?php echo ($p["id"]); ?>',300,300)">修改手机号码</a>            
                                    <?php else: ?>
                                      <a href="javascript:;" class="btn btn-success btn-sm"  data-toggle="tooltip" data-placement="top" title="" data-original-title="点击绑定手机号码" onclick="m_admin_show('绑定手机号码','<?php echo U('Account/bindMobileShow');?>?id=<?php echo ($p["id"]); ?>'300,300)">绑定手机号码</a><?php endif; ?>   </label>
                                 <div class="col-sm-6">
                                    <input type="text"  lay-verify="phone" disabled autocomplete="off"
                                           class="form-control" value="<?php echo (htmlentities($p["mobile"])); ?>">
                                </div>
                            <?php else: ?>
                                <label class="col-sm-2 col-form-label">手机：</label>
                              <div class="col-sm-6">
                                    <input type="text"  lay-verify="phone" name="p['mobile']" autocomplete="off"
                                           class="form-control" value="<?php echo (htmlentities($p["mobile"])); ?>">
                                </div><?php endif; ?>
                        </div>
                     

                 <div class="form-group row">
                        <label class="col-sm-2 col-form-label">QQ：</label>
                           <div class="col-sm-6">
                                <input type="text" name="p[qq]" lay-verify="" autocomplete="off"
                                       class="form-control" value="<?php echo (htmlentities($p["qq"])); ?>">
                            </div>
                         </div> 
                  
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">生日：</label>
                            <div class="col-sm-6">
                                <input type="text" name="p[birthday]" id="date" lay-verify="date" placeholder="YYYY-MM-dd" autocomplete="off" class="form-control" value="<?php echo (date('Y-m-d',$p["birthday"])); ?>">
                            </div>
                        </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">性别：</label>
                        <div class="col-sm-6">
                         <input class="custom-control-input" type="radio" <?php if($p['sex'] == 1): ?>checked<?php endif; ?> name="p['sex']" value="1"
                            title="男" checked="">
                            <input class="custom-control-input" type="radio" <?php if($p['sex'] == 0): ?>checked<?php endif; ?> name="p['sex']" value="0"
                            title="女">
                        </div>
                    </div>
   
                     <div class="form-group row">
                        <label class="col-sm-2 col-form-label">联系地址：</label>
                         <div class="col-sm-6">
                            <input type="text" name="p[address]" lay-verify="title" autocomplete="off"
                                   placeholder="联系地址" class="form-control" value="<?php echo (htmlentities($p["address"])); ?>">
                        </div>
                    </div>

                   <div class="form-group row">
                        <label class="col-sm-2 col-form-label">登录IP：</label>
                        <div class="col-sm-6">
                            <textarea name="p['login_ip']" placeholder="如：127.0.0.1，多个IP请换行，一行一个IP"  class="form-control" rows="3"><?php echo ($p['login_ip']); ?></textarea>
                            <code style="color: red;">*输入多个IP请换行，如果不输入默认所有IP可登录</code>
                        </div>
                    </div>
                    
                    <?php if(($df_api) == "1"): ?><div class="form-group row">
                        <label class="col-sm-2 col-form-label">代付API接口状态：</label>
                        <div class="col-sm-6">
                            <input type="radio" name="p[df_api]" lay-filter="df_api" value="1" title="开启" <?php if($p['df_api'] == 1): ?>checked<?php endif; ?>>
                            <input type="radio" name="p[df_api]" lay-filter="df_api" value="0" title="关闭" <?php if($p['df_api'] == 0): ?>checked<?php endif; ?>>
                        </div>
                    </div>
          
                        <div class="form-group row" id="df_auto_check" <?php if($p['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
                           <label class="col-sm-2 col-form-label">代付API自动审核：</label>
                           <div class="col-sm-6">
                                <input type="radio" name="p[df_auto_check]" lay-filter="df_auto_check" value="1" title="开启" <?php if($p['df_auto_check'] == 1): ?>checked<?php endif; ?>>
                                <input type="radio" name="p[df_auto_check]" lay-filter="df_auto_check" value="0" title="关闭" <?php if($p['df_auto_check'] == 0): ?>checked<?php endif; ?>>
                            </div>
                        </div>
                    
                        <div class="form-group row" id="df_domain" <?php if($p['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
                           <label class="col-sm-2 col-form-label">代付域名报备：</label>
                             <div class="col-sm-6">
                                <textarea name="p['df_domain']" placeholder="如：www.baidu.com，多个域名请换行，一行一个域名" class="form-control" rows="3"><?php echo ($p['df_domain']); ?></textarea>
                      <code style="color: red;">注意：无需填写http://或https://，也不需要填写具体路径，结尾不加 /，一行一个域名。只允许从这些域名发起代付请求！</code>
                        </div></div>

                        <div class="form-group row" id="df_ip" <?php if($p['df_api'] == 0): ?>style="display: none;"<?php endif; ?>>
                           <label class="col-sm-2 col-form-label">代付IP报备：</label>
                           <div class="col-sm-6">
                                <textarea name="p['df_ip']" placeholder="如：127.0.0.1，多个IP请换行，一行一个IP" class="form-control"><?php echo ($p['df_ip']); ?></textarea>
                            <code style="color: red;">注意：请填写发起代付请求的服务器公网IP一行一个IP地址。</code>
                        </div></div><?php endif; ?>
              

                      
 <?php if($verifyGoogle and $verifysms): ?><div class="form-group row"  id="auth_type">
              <label class="col-sm-2 col-form-label">验证方式：</label>
                    <div class="col-sm-8">
                      <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_22" value="1" title="谷歌安全码" checked>
                       <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_21" value="0" title="短信验证码" checked>
                        
                       
                    </div>
                </div>
                
              <?php else: ?>
                <input type="hidden" name="auth_type" value="<?php echo ($auth_type); ?>"><?php endif; ?>
  <?php if(($verifysms) == "1"): ?><div class="form-group row"  id="auth_sms">
<label for="example-week-input" class="col-sm-2 col-form-label">短信验证码：</label>
                <div class="col-sm-2">
        <div class="input-group">
                  <input type="text" name="code"  autocomplete="off" placeholder="请输入短信验证码"  class="form-control" value="">
          <div class="input-group-append">
                                                <button href="javascript:;"   id="sendBtn" data-mobile="<?php echo ($fans['mobile']); ?>" data-bind="<?php echo ($fans['mobile']); ?>"  class="btn btn-danger waves-effect waves-light" type="button"  data-toggle="tooltip" data-placement="top" title="" data-original-title="点击发送短信验证码"><i class="icon-call-end"></i> 发送验证码</button>
                                            </div>
                </div>
				</div></div><?php endif; ?>
            <?php if(($verifyGoogle) == "1"): ?><div class="form-group row"  id="auth_google" <?php if($verifyGoogle and $verifysms): ?>style="display: none"<?php endif; ?>>
						  <label for="example-week-input" class="col-sm-2 col-form-label">谷歌安全码：</label>
                    <div class="col-sm-2">
                        <input type="text" name="google_code" autocomplete="off"
                               placeholder="请输入谷歌安全码" class="form-control"   value="">
                    </div>
                </div><?php endif; ?>

          

   
                 <div class="form-group row">
                   <label class="col-sm-2 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary" lay-submit="" lay-filter="profile"><i class="icon-like"></i> 立即提交</button>
                        </div>
                    </div>
                </form>
                <!--用户信息-->
            </div>
        </div>
    </div>   
</div>   
</div> 


  
<!-- Main File-->
      <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <?php echo "Copyright © 2017-" . date("Y") . " "; ?> <?php echo ($sitename); ?> Rights Reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
          <div class="right-bar">
          
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">商户信息</h5>
            </div>
          
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="/Public/assetsqq572125157/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="<?php echo U("Account/profile");?>" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
                    
                    <h5><a href="#">商户ID：<?php echo ($fans["memberid"]); ?></a> </h5>
                    <p class="text-muted mb-0"><small>商户名称：<?php echo ($fans["username"]); ?></small></p>
                       <p class="text-muted mb-0"><small>认证状态：<?php if($fans['authorized'] ==1): ?><code class="text-success">已认证</code><?php else: ?><code class="text-danger">未认证</code><?php endif; ?></small></p>
                       <p class="text-muted mb-0"><small>激活状态：<?php if($fans['status'] ==1): ?><code class="text-success">已激活</code><?php else: ?><code class="text-danger">未激活</code><?php endif; ?></small></p>
                    
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">版权所有：<?php echo ($sitename); ?> 版本：<?php echo C('SOFT_VERSION');?></h5>
                <hr class="mb-0" />

                


               
            </div>
        </div>
        <!-- /Right-bar -->
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
            $(document).ready(function() {
                // Default Datatable
                $('#datatable').DataTable({
                    "pageLength": 5,
                    "searching": false,
                    "lengthChange": false
                });
            } );
        </script>
<script>
     /*订单-查看*/
 function order_view(title,url,w,h){
        x_admin_show(title,url,w,h);
    }
layui.use(['laydate', 'laypage', 'layer', 'form', 'element'], function() {
    var laydate = layui.laydate //日期
        ,layer = layui.layer //弹层
        ,form = layui.form //弹层
        , element = layui.element; //元素操作
    //日期
    laydate.render({
        elem: '#date'
    });
    //监听提交
    form.on('submit(profile)', function(data){
        $.ajax({
            url:"<?php echo U('Account/saveProfile');?>",
            type:"post",
            data:$('#profile').serialize(),
            success:function(res){
                if(res.status){
                    layer.alert(res.msg, {icon: 6},function () {
                        location.reload();
                    });
                }else{
                    layer.alert(res.msg, {icon: 5});
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
  
  
form.on('radio(df_api)',function(data){
        if(data.value == 1) {
            $('#df_auto_check').show();
            $('#df_domain').show();
            $('#df_ip').show();
        } else {
            $('#df_auto_check').hide();
            $('#df_domain').hide();
            $('#df_ip').hide();
        }
    });
});

function m_admin_show(title,url,w,h){
    if (title == null || title == '') {
        title=false;
    };
    if (url == null || url == '') {
        url="404.html";
    };
    if (w == null || w == '') {
        w=($(window).width());
    };
    if (h == null || h == '') {
        h=($(window).height());
    };
    layer.open({
        offset: 'auto',
        type: 2,
        fix: true, //不固定 
      shadeClose: true,
     scrollbar: false,
        title: title,
        content: [url,'no']
    });
}
</script>
<script>
    layui.use(['form','table',  'laydate', 'layer'], function () {
        var form = layui.form
            ,table = layui.table
            , layer = layui.layer
            , laydate = layui.laydate;
    });
 function m_admin_show(title,url,w,h){
    if (title == null || title == '') {
        title=false;
    };
    if (url == null || url == '') {
        url="404.html";
    };
    if (w == null || w == '') {
        w=($(window).width());
    };
    if (h == null || h == '') {
        h=($(window).height());
    };
    layer.open({
        type: 2,
        area: [w+'px', h +'px'],
        fix: true, //不固定 
        shadeClose: true,
        shade:0.4,
        title: title,
        content: url
    });
}

  </script>
<script>
    $(function (){
        // 手机验证码发送
        $('#sendBtn').click(function(){
            var mobile = $(this).attr('data-mobile');
            var first_bind = $(this).data('bind');
            var sendUrl = "<?php echo ($sendUrl); ?>";
            if(!mobile){
                //判断用户是否准备绑定手机号
                if(!first_bind){
                    layer.alert('请先填写手机号码',{icon: 5}, function() {
                        location.href = "<?php echo U('Account/profile');?>";
                    });
                }else{
                    layer.alert('请先填写手机号码',{icon: 5});
                }
                return;
            }
            sendSms(this, mobile, sendUrl);
        });
    })
</script>
</body>
</html>