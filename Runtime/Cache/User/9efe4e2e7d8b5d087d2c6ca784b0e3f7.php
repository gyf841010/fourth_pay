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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">order</a></li>
                        <li class="breadcrumb-item active">manage</li>
                    </ol>
                    <h4 class="page-title">商户订单管理</h4>
                </div>
                <!-- End page title box -->
					
           <div class="row">
                    <div class="col-12">
                        <div class="card-box"> 
                        <!--条件查询-->
        <form class="layui-form" action="" method="get" autocomplete="off" id="orderform">
          <input type="hidden" name="m" value="User">
          <input type="hidden" name="c" value="Order">
          <input type="hidden" name="a" value="index">
          <input type="hidden" name="p" value="1">
<div class="col-auto">
  
                              <div class="layui-inline">                  
       <div class="layui-input-inline">
<input type="text" name="orderid" autocomplete="off" placeholder="请输入商户订单号"
                       class="layui-input" value="<?php echo ($orderid); ?>">
              </div>
              
              <div class="layui-input-inline">
                <input type="text" name="body" autocomplete="off" placeholder="请输入订单描述"
                       class="layui-input" value="<?php echo ($body); ?>">
              </div>
              
              <div class="layui-input-inline" style="width:214px">
                <input type="text" class="layui-input" name="createtime" id="createtime"
                       placeholder="创建起始时间" value="<?php echo ($createtime); ?>">
              </div>
              
              <div class="layui-input-inline" style="width:214px">
                <input type="text" class="layui-input" name="successtime" id="successtime"
                       placeholder="完成起始时间" value="<?php echo ($successtime); ?>">
              </div>   
            </div>
            
            <div class="layui-inline">
              
              <div class="layui-input-inline">
                <select name="tongdao">
                  <option value="">全部通道</option>
                  <?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($tongdao == $vo['code']): ?>selected<?php endif; ?>
                    value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              
 <div class="layui-input-inline">
     <select  name="status">
                  <option value="">全部状态</option>
                  <option value="0" <?php if($status == '3'): ?>selected<?php endif; ?>>未处理</option>
                  <option value="1" <?php if($status == '1'): ?>selected<?php endif; ?>>成功，未返回</option>
                  <option value="2" <?php if($status == '2'): ?>selected<?php endif; ?>>成功，已返回</option>
                </select>
              </div>
                    
              <div class="layui-input-inline">
                <select name="ddlx">
                  <option value="">订单类型</option>
                  <option <?php if($ddlx == 2): ?>selected<?php endif; ?> value="0">收款订单</option>
                  <option <?php if($ddlx == 1): ?>selected<?php endif; ?> value="1">充值订单</option>
                </select>
              </div>        </div>


  <div class="layui-inline">
            <div class="layui-inline">
              <button type="submit" class="btn btn-primary"><i class="mdi mdi-google"></i> 搜索</button>
              <a href="javascript:;" id="export" class="btn btn-primary"><i class="mdi mdi-format-align-bottom"></i> 导出数据</a>
            </div> 
</div></div>
</form>    
</div>

<div class="card-box"> 
         <?php if($_GET['status'] == '2'): ?><blockquote class="alert alert-primary" role="alert"  style='margin-top:5px'><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
今日成功交易总额：<span class='badge badge-danger' style='margin-left:5px'><?php echo ($stat["todaysum"]); ?>元</span>   今日成功交易笔数：<span class='badge badge-info' style='margin-left:5px'><?php echo ($stat["todaysuccesscount"]); ?>笔</span> 今日实际到账：<span class='badge badge-success' style='margin-left:5px'><?php echo ($stat["taodayactualamount"]); ?>元</span> 今日失败笔数：<span class='badge badge-warning' style='margin-left:5px'><?php echo ($stat["todayfailcount"]); ?>笔</span>
          </blockquote><?php endif; ?>
        <?php if($_GET['createtime'] OR $_GET['successtime']): ?><blockquote class="layui-elem-quote" style="font-size:14px;padding:8px;">订单交易总金额(含未付)：<span class="label label-info"><?php echo ($sum["pay_amount"]); ?>元</span>
           成功订单数：<span class="label label-info"><?php echo ($sum["success_count"]); ?></span> 失败订单数：<span class="label label-danger"><?php echo ($sum["fail_count"]); ?></span>
           投诉保证金已返回金额：<span class="label label-info"><?php echo ($sum["complaints_deposit_unfreezed"]); ?></span> 投诉保证金冻结金额：<span class="label label-danger"><?php echo ($sum["complaints_deposit_freezed"]); ?></span>
        </blockquote><?php endif; ?>     
<table class="layui-table" lay-data="{width:'100%',limit:<?php echo ($rows); ?>,id:'userData'}">
                          <thead>
                           <tr>
<th  lay-data="{field:'key',width:70, sort: true}">序号</th>
            <th lay-data="{field:'ddlx', width:80, sort: true}">类型</th>
            <th lay-data="{field:'out_trade_id', width:230,style:'color:#060;'}">商户订单号</th>
            <th lay-data="{field:'memberid', width:130}">商户编号</th>
            <th lay-data="{field:'amount', width:130,style:'color:#060;',sort: true}">交易金额</th>
            <th lay-data="{field:'true_amount', width:130,style:'color:#060;',sort: true}">实付金额</th>
            <th lay-data="{field:'rate', width:120}">手续费</th>
            <th lay-data="{field:'actualamount', width:120,style:'color:#C00;'}">实收金额</th>
            <th lay-data="{field:'applydate', width:180,sort: true}">提交时间</th>
            <th lay-data="{field:'successdate', width:180,sort: true}">成功时间</th>
             <!--<th lay-data="{field:'zh_tongdao', width:120}">支付通道</th>-->
            <th lay-data="{field:'bankname', width:130,sort: true}">支付类型</th>
              <!--<th lay-data="{field:'tjurl', width:100}">来源地址</th>-->
           <th lay-data="{field:'body', width:100}">订单描述</th>
            <th lay-data="{field:'status', width:110}">支付状态</th>
            <th lay-data="{field:'op',width:130}">操作</th>
            </tr>
                          </thead>
                          <tbody>
                             <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
              <td style="text-align:center;"><?php echo ($vo["id"]); ?></td>
             <td style="text-align:center;">
                <?php switch($ddlx): case "1": ?>充值<?php break;?>
                  <?php default: ?>收款<?php endswitch;?>
              </td>
       <td style="text-align:center; color:#090;"><?php echo ($vo['out_trade_id']?$vo['out_trade_id']:$vo['pay_orderid']); ?></td>
              <td style="text-align:center;"><?php echo ($vo["pay_memberid"]); ?></td>
              <td style="text-align:center; color:#060"><?php echo ($vo["pay_amount"]); ?></td>
              <td style="text-align:center; color:#060"><?php echo ($vo["true_amount"]); ?></td>
              <td style="text-align:center; color:#666"><?php echo ($vo["pay_poundage"]); ?></td>
              <td style="text-align:center; color:#C00"><?php echo ($vo["pay_actualamount"]); ?></td>
              <td style="text-align:center;"><?php echo (date('Y-m-d H:i:s',$vo["pay_applydate"])); ?></td>
              <td style="text-align:center;"><?php if($vo['pay_successdate']): echo (date('Y-m-d H:i:s',$vo["pay_successdate"])); else: ?> ---<?php endif; ?></td>
               <!--<td style="text-align:center;"><?php echo ($vo["pay_zh_tongdao"]); ?></td>-->
              <td style="text-align:center;"><?php echo ($vo["pay_bankname"]); ?></td>
             <!-- <td style="text-align:center;"><a href="<?php echo ($vo["pay_tjurl"]); ?>" target="_blank" title="<?php echo ($vo["pay_tjurl"]); ?>">
                来源地址</a></td>--> 
              <td style="text-align:center;"><?php echo ($vo["pay_productname"]); ?></td>
              <td style="text-align:center; color:#369"><?php echo (status($vo["pay_status"])); ?></td>
              <td style="text-align:center;">
               <a href="javascript:;" class="btn btn-danger btn-sm"  onclick="m_admin_show('商户订单号:<?php echo ($vo["out_trade_id"]); ?>','<?php echo U('User/Order/show',['oid'=>$vo['id']]);?>',370,600)"><i class="mdi mdi-asterisk"></i> 订单详情</a> 
              </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>  </tbody>
                        </table>
                        

            
            <form class="layui-form" action="" method="get" id="pageForm" autocomplete="off">     
                      <?php echo ($page); ?>                  
                <select name="rows" style="height: 30px;" id="pageList" lay-ignore >
                    <option value="">显示条数</option>
                    <option <?php if($rows != '' && $rows == 15): ?>selected<?php endif; ?> value="15">15条</option>
                    <option <?php if($rows == 30): ?>selected<?php endif; ?> value="30">30条</option>
                    <option <?php if($rows == 50): ?>selected<?php endif; ?> value="50">50条</option>
                    <option <?php if($rows == 80): ?>selected<?php endif; ?> value="80">80条</option>
                    <option <?php if($rows == 100): ?>selected<?php endif; ?> value="100">100条</option>
                    <option <?php if($rows == 1000): ?>selected<?php endif; ?> value="1000">1000条</option>
                </select>
            </form>
       
</div>
                    </div>
                  </div>
                </div>
              </div>  </div>

      
 

 
<script src="/Public/assetsqq572125157/libs/RWD-Table-Patterns/js/rwd-table.min.js"></script>
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
            $(function() {
                $('.table-responsive').responsiveTable({
                    addDisplayAllBtn: 'btn btn-secondary'
                });
            });
        </script>

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
    function order_view(title,url,w,h){
        x_admin_show(title,url,w,h);
    }
    /*订单-删除*/
    function order_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            $.ajax({
                url:"<?php echo U('Order/delOrder');?>",
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
    $('#export').on('click',function(){
        window.location.href
            ="<?php echo U('User/Order/exportorder',array('orderid'=>$orderid,'createtime'=>$createtime,'successtime'=>$successtime,'status'=>$status));?>";
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
</body>
</html>