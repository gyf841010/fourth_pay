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
                        <li class="breadcrumb-item"><a href="javascript:void(0);">API</a></li>
                        <li class="breadcrumb-item active">Docking</li>
                    </ol>
                    <h4 class="page-title">API 接入帮助</h4>
                </div>
                <!-- End page title box -->
 <div class="row">
                    <div class="col-12">
                        <div class="card-box">
					
					
<div class="card-body">
                   <div class="layui-tab layui-tab-card">
  <ul class="layui-tab-title">
<li class="layui-this">支付请求</li><li>同步通知</li><li>异步通知</li><li>支付订单查询</li><li>代付接口</li><li>代付订单查询</li></ul>
<div class="layui-tab-content">
<div class="layui-tab-item layui-show">
  

   <div class="card m-b-30">
<div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> 
<i class="mdi mdi-help-circle mr-1 text-primary"></i> 支付请求接口说明</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
              <p>1，接口标准<br>在商户支付请求接口中，数据通信是使用HTTP协议，请求数据以POST形式提交。<br>2，MD5签名处理<br>签名生成的通用步骤如下：
第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。<br>
[1].	stringSignTemp="pay_amount={value}&pay_applydate={value}&pay_bankcode={value}&pay_callbackurl={value}&pay_memberid={value}&pay_notifyurl={value}&pay_orderid={value}&key=key"<br>[2].	sign=MD5(stringSignTemp).toUpperCase(); pay_md5sign=$sign;
            </blockquote>
</div></div>

                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.00</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt"><?php echo ($siteurl); ?>/Pay_Index.html</td>
                </tr>
                                <tr class="cen">
                    <td>请求方式</td>
                    <td class="lt">POST 请不要用 GET 方式提交</td>
                </tr>
            </tbody>
        </table>

        <table class="layui-table">
        <thead>
            <tr>
                <th align="center">参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">参与签名</th>
                <th align="center">必填</th>
                <th align="center">说明</th>
            </tr>
        </thead>
        <tbody>
                    <tr>
                <td align="center">pay_memberid</td>
                <td align="center">商户号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">平台分配商户号</td>
            </tr>
        
                    <tr>
                <td align="center">pay_orderid</td>
                <td align="center">商户订单号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">上送订单号唯一, 字符长度20</td>
            </tr>
                                <tr>
                <td align="center">pay_applydate</td>
                <td align="center">提交时间</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">时间格式：2018-12-28 18:18:18</td>
            </tr>
                                <tr>
                <td align="center">pay_bankcode</td>
                <td align="center">通道编码</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">开发文档[附件]银行编码参考，或通道费率中查看</td>
            </tr>
                                <tr>
                <td align="center">pay_notifyurl</td>
                <td align="center">异步回调</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">请给出有效的地址,地址后可以携带自定义get(?a=1&b=2)参数。（POST返回数据）</td>
            </tr>
                                <tr>
                <td align="center">pay_callbackurl</td>
                <td align="center">同步回调</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">请给出有效的地址,地址后可以携带自定义get(?a=1&b=2)参数。（POST返回数据）</td>
            </tr>
                                <tr>
                <td align="center">pay_amount</td>
                <td align="center">订单金额</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">订单金额 如：100 单位：元</td>
            </tr>
                                <tr>
                <td align="center">pay_md5sign</td>
                <td align="center">MD5数据签名</td>
                <td align="center">是</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>
                                <tr>
                <td align="center">pay_attach</td>
                <td align="center">附加字段</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">此字段在返回时按原样返回 (中文需要url编码)</td>
            </tr>
                                <tr>
                <td align="center">pay_productname</td>
                <td align="center">商品名称</td>
                <td align="center">是</td>
                <td align="center">否</td>
                <td align="left">商品名称</td>
            </tr>
                                <tr>
                <td align="center">pay_productnum</td>
                <td align="center">商户品数量</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">商户品数量</td>
            </tr>
                                <tr>
                <td align="center">pay_productdesc</td>
                <td align="center">商品描述</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">商品描述</td>
            </tr>
                      <tr>
                <td align="center">pay_producturl</td>
                <td align="center">商户链接地址</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">商户链接地址</td>
            </tr>
  <tr>
                <td align="center">type</td>
                <td align="center">返回数据格式</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">返回数据的格式，如果不传则返回html页面，如果值=json  则返回json串</td>
            </tr>
        </tbody>
        </table>
  <div class="card m-b-30">
<div class="card-header"><i class="mdi mdi-amazon mr-1 text-primary"></i> 返回数据：HTML</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">如果传值type=json则返回json串：{"ststus":"1","msg":"下单成功","pay_amount":"100","pay_orderid":"20210928114755985410","payUrl":"http://xxx.xxx.cc/index/index/cashier.html?osn=20210928114755985410"}<br>如果传值type不等于json或为空，则系统直接将转跳至支付页面<br>如果失败返回{"status":"error","msg":"错误原因","data":[]}  </blockquote>
</div></div>
  </div>

        
            <div class="layui-tab-item"> 
              <div class="card m-b-30">
                <div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> 
                               <i class="mdi mdi-help-circle mr-1 text-primary"></i> 同步通知接口说明
                            </div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
              <p>接口标准：在商户同步通知接口中，数据通信是使用HTTP协议，同步回调数据以POST形式跳转。</p>
              </blockquote>
</div></div>
                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.0</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt">此回调不需要网关，根据你传递同步回调地址传参,不管交易是否成功都将跳转到该地址。</td>
                </tr>
                                <tr class="cen">
                    <td>返回方式</td>
                    <td class="lt">POST返回数据</td>
                </tr>
            </tbody>
        </table>

        <table class="layui-table">
        <thead>
            <tr>
                <th align="center">参数说明</th>
                <th align="center">参数名称</th>
                <th align="center">最大长度</th>
                <th align="center">必填</th>
                <th align="center">说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">交易订单号</td>
                <td align="center">orderid</td>
                <td align="center">40</td>
                <td align="center">否</td>
                <td align="left">订单号</td>
            </tr>
                    
        </tbody>
        </table>
  <div class="card m-b-30">
<div class="card-header"><i class="mdi mdi-amazon mr-1 text-primary"></i> 无需返回数据</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">可通过订单查询接口，查询订单是否交易成功！     </blockquote>
</div>
    </div></div>

        
 <div class="layui-tab-item"> 
              <div class="card m-b-30">
                <div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> <i class="mdi mdi-help-circle mr-1 text-primary"></i> 异步通知接口说明</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
       <p>1，接口标准<br>在商户异步通知接口中，数据通信是使用HTTP协议，请求数据以POST形式提交。<br>2，MD5签名处理<br>签名生成的通用步骤如下：
第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。<br>
[1].	stringSignTemp="pay_amount={value}&pay_applydate={value}&pay_bankcode={value}&pay_callbackurl={value}&pay_memberid={value}&pay_notifyurl={value}&pay_orderid={value}&key=key"<br>[2].	sign=MD5(stringSignTemp).toUpperCase(); pay_md5sign=$sign;
           </blockquote>
</div></div>
              
                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.0</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt">此回调不需要网关，根据你传递异步回调地址传参,只回调交易成功的订单信息。</td>
                </tr>
                                <tr class="cen">
                    <td>返回方式</td>
                    <td class="lt">POST返回数据</td>
                </tr>
            </tbody>
        </table>

        <table class="layui-table">
        <thead>
            <tr>
                <th align="center">参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">参与签名</th>
                <th align="center">参数说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">memberid</td>
                <td align="center">商户编号</td>
                <td align="center">是</td>
                <td align="left">平台分配商户号</td>
            </tr>
                                <tr>
                <td align="center">orderid</td>
                <td align="center">平台订单号</td>
                <td align="center">是</td>
                <td align="left">订单号唯一, 字符长度20</td>
            </tr>
                                <tr>
                <td align="center">amount</td>
                <td align="center">订单金额</td>
                <td align="center">是</td>
                <td align="left">订单金额 单位：元</td>
            </tr>
               <tr>
                <td align="center">true_amount</td>
                <td align="center">实际付款金额</td>
                <td align="center">是</td>
                <td align="left">订单金额 单位：元，新增参数，参与签名,回调的实际付款金额，以此参数为准</td>
            </tr>
                                <tr>
                <td align="center">transaction_id</td>
                <td align="center">交易流水号</td>
                <td align="center">是</td>
                <td align="left">交易流水号</td>
            </tr>
                                <tr>
                <td align="center">datetime</td>
                <td align="center">交易成功时间</td>
                <td align="center">是</td>
                <td align="left">时间格式：2018-12-28 18:18:18</td>
            </tr>
                                <tr>
                <td align="center">returncode</td>
                <td align="center">交易状态</td>
                <td align="center">是</td>
                <td align="left">“00” 为成功</td>
            </tr>
                                <tr>
                <td align="center">attach</td>
                <td align="center">扩展返回</td>
                <td align="center">否</td>
                <td align="left">商户附加数据返回</td>
            </tr>
                                <tr>
                <td align="center">sign</td>
                <td align="center">签名</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>
                     
                    
        </tbody>
        </table>
  <div class="card m-b-30">
<div class="card-header"><i class="mdi mdi-amazon mr-1 text-primary"></i> 返回数据格式：string</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">返回文本均为小写不能有任何其它字符。<br>成功返回:OK （OK两个字母大写）<br>失败返回:fail
             </blockquote>
</div></div></div>


 <div class="layui-tab-item"> 
              <div class="card m-b-30">
                <div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
支付订单查询接口说明</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
              <p>1，接口标准<br>在商户订单查询接口中，数据通信是使用HTTP协议，请求数据以POST形式提交。<br>2，MD5签名处理<br>签名生成的通用步骤如下：
第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。<br>
[1].	stringSignTemp="pay_memberid={value}&pay_orderid={value}&key=key"<br>[2].	sign=MD5(stringSignTemp).toUpperCase(); pay_md5sign=$sign;
         </blockquote>
</div></div>
                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.0</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt"><?php echo ($siteurl); ?>/Pay_Trade_query.html</td>
                </tr>
                                <tr class="cen">
                    <td>请求方式</td>
                    <td class="lt">POST 请不要用 GET 方式提交</td>
                </tr>
            </tbody>
        </table>

        <table class="layui-table">
        <thead>
          <tr>
                <th align="center">参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">是否必填</th>
                <th align="center">参与签名</th>
                <th align="center">参数说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">pay_memberid</td>
                <td align="center">商户号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">平台分配商户号</td>
            </tr>
                                <tr>
                <td align="center">pay_orderid</td>
                <td align="center">商户订单号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">上送订单号唯一, 字符长度20</td>
            </tr>
                                <tr>
                <td align="center">pay_md5sign</td>
                <td align="center">数据签名</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>
                    
        </tbody>
        </table>

               <div class="card m-b-30">
<div class="card-header"><i class="mdi mdi-amazon mr-1 text-primary"></i> 返回数据格式：JSON</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"memberid":"商户编号",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"orderid":"商户订单号",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"amount":"订单金额",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"true_amount":"实付金额",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"time_end":"支付成功时间",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"transaction_id":"交易流水号",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"returncode":"交易状态",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"trade_state":"支付状态",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"sign":"签名",<br>}
   </blockquote>
</div></div></div>

        
  <div class="layui-tab-item"> 
              <div class="card m-b-30">
                <div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
代付请求接口说明</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
             <p>1，接口标准<br>在商户代付请求接口中，数据通信是使用HTTP协议，请求数据以POST形式提交。<br>2，MD5签名处理<br>签名生成的通用步骤如下：
第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。<br>
[1].	stringSignTemp="accountname=accountname&bankname=bankname&cardnumber=cardnumber&city=city&extends=base64_encode(json_encode(extends))=&mchid=mchid&money=money&out_trade_no=out_trade_no&province=province&subbranch=subbranch&key=key"<br>[2].	sign=MD5(stringSignTemp).toUpperCase(); pay_md5sign=$sign;
          </blockquote>
</div></div>
                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.0</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt"><?php echo ($siteurl); ?>/Payment_Dfpay_add.html</td>
                </tr>
                                <tr class="cen">
                    <td>请求方式</td>
                    <td class="lt">POST</td>
                </tr>
            </tbody>
        </table>

        <table class="layui-table">
        <thead>
            <tr>
                <th align="center">参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">是否必填</th>
                <th align="center">参与签名</th>
                <th align="center">参数说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">mchid</td>
                <td align="center">商户号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">平台分配商户号</td>
            </tr>
                                <tr>
                <td align="center">out_trade_no</td>
                <td align="center">商户代付订单号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">上送订单号唯一, 字符长度20</td>
            </tr>
                                <tr>
                <td align="center">money</td>
                <td align="center">代付金额</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">单位：元</td>
            </tr>
              <tr>
                <td align="center">bankname</td>
                <td align="center">开户行名称</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">代付银行卡 开户行名称</td>
            </tr>
              <tr>
                <td align="center">subbranch</td>
                <td align="center">支行名称</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">代付银行卡 支行名称</td>
            </tr>
              <tr>
                <td align="center">accountname</td>
                <td align="center">结算卡 开户名</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">结算卡 开户名</td>
            </tr>
              <tr>
                <td align="center">cardnumber</td>
                <td align="center">结算卡 银行卡号</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">银行卡号</td>
            </tr>
              <tr>
                <td align="center">money</td>
                <td align="center">代付金额</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">单位：元</td>
            </tr>
              <tr>
                <td align="center">province</td>
                <td align="center">省份</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">省份 如：广东省</td>
            </tr>
              <tr>
                <td align="center">city</td>
                <td align="center">城市</td>
                <td align="center">是</td>
                <td align="center">是</td>
                <td align="left">城市 如：广州市</td>
            </tr>
              <tr>
                <td align="center">extends</td>
                <td align="center">附加字段</td>
                <td align="center">否（平台有扩展字段 则是）</td>
                <td align="center">是</td>
                <td align="left">格式：数组，具体需要哪些字段以及字段的含义，<br>对接时请咨询上级站点，如果不需要扩展字段不传<br>注：extends字段具体需要上送哪些字段以及字段的含义，<br>对接时请咨询平台方，如果不需要扩展字段则不传。不为空时，格式：先转化为JSON，<br>接着进行Base64加密
例如：扩展字段为phone和lhh，extends[phone]=13800138000，<br>extends[lhh]=111111111111111111。首先将extends转化为JSON格式得到{"phone":"13800138000","lhh":"111111111111111111"}，<br>然后将此JSON字符串进行base64加密得到eyJwaG9uZSI6IjEzODAwMTM4MDAwIiwiaWRubyI6IjExMTExMTExMTExMTExMTExMSJ9，<br>最终得到extends=eyJwaG9uZSI6IjEzODAwMTM4MDAwIiwiaWRubyI6IjExMTExMTExMTExMTExMTExMSJ9。</td>
            </tr>
                            
              <tr>
                <td align="center">pay_md5sign</td>
                <td align="center">数据签名</td>
                <td align="center">否</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>       
        </tbody>
        </table>

                   <div class="card m-b-30">
<div class="card-header"><i class="mdi mdi-amazon mr-1 text-primary"></i> 代付返回数据：json</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
{<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"status":"成功:success 失败：error",<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"msg":"状态描述"<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"transaction_id":"平台流水号,成功时返回"<br>} </blockquote>
</div></div></div>


        
 <div class="layui-tab-item"> 
              <div class="card m-b-30">
                <div class="ribbon-box">
<div class="ribbon-two ribbon-two-success"><span>HELP</span></div></div>
<div class="card-header text-center"> <i class="mdi mdi-help-circle mr-1 text-primary"></i> 
代付查询求接口说明</div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
             <p>1，接口标准<br>在代付查询接口中，数据通信是使用HTTP协议，请求数据以POST形式提交。<br>2，MD5签名处理<br>签名生成的通用步骤如下：
第一步，设所有发送或者接收到的数据为集合M，将集合M内非空参数值的参数按照参数名ASCII码从小到大排序（字典序），使用URL键值对的格式（即key1=value1&key2=value2…）拼接成字符串。
第二步，在stringA最后拼接上key得到stringSignTemp字符串，并对stringSignTemp进行MD5运算，再将得到的字符串所有字符转换为大写，得到sign值signValue。<br>
[1].	stringSignTemp="out_trade_no={value}&mchid={value}&key=key"<br>[2].	sign=MD5(stringSignTemp).toUpperCase(); pay_md5sign=$sign;
          </blockquote>
</div></div>
                    <table class="layui-table mb-15">
            <thead>
                <tr>
                    <th style="width:100px;">属性</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cen">
                    <td>版本</td>
                    <td class="lt">1.0</td>
                </tr>
                                <tr class="cen">
                    <td>网关</td>
                    <td class="lt"><?php echo ($siteurl); ?>/Payment_Dfpay_query.html</td>
                </tr>
                                <tr class="cen">
                    <td>提交方式</td>
                    <td class="lt">POST ，请不要用 GET 方式提交</td>
                </tr>
            </tbody>
        </table>
              
                <table class="layui-table">
        <thead>
            <tr>
                <th align="center">请求参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">参与签名</th>
                <th align="center">参数说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">out_trade_no</td>
                <td align="center">商户代付订单号</td>
                <td align="center">是</td>
                <td align="left">代付订单号唯一, 字符长度20</td>
            </tr>
                                <tr>
                <td align="center">mchid</td>
                <td align="center">商户号</td>
                <td align="center">是</td>
                <td align="left">平台分配商户号</td>
            </tr>
                                <tr>
                <td align="center">pay_md5sign</td>
                <td align="center">签名</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>
          
          </tbody>
        </table>
          

        <table class="layui-table">
        <thead>
            <tr>
                <th align="center">代付结果查询返回字段：参数名称</th>
                <th align="center">参数含义</th>
                <th align="center">参与签名</th>
                <th align="center">参数说明</th>
            </tr>
        </thead>
        <tbody>
        
                    <tr>
                <td align="center">status</td>
                <td align="center">提现状态</td>
                <td align="center">是</td>
                <td align="left">success：请求成功,不代表业务成功<br>error：请求失败</td>
            </tr>
                                <tr>
                <td align="center">msg</td>
                <td align="center">状态描述</td>
                <td align="center">是</td>
                <td align="left">代付结果描述</td>
            </tr>
                                <tr>
                <td align="center">mchid</td>
                <td align="center">商户号</td>
                <td align="center">是</td>
                <td align="left">status=success时返回</td>
            </tr>
                                <tr>
                <td align="center">out_trade_no</td>
                <td align="center">商户代付订单号</td>
                <td align="center">是</td>
                <td align="left">status=success时返回</td>
            </tr>
                                <tr>
                <td align="center">amount</td>
                <td align="center">代付金额</td>
                <td align="center">是</td>
                <td align="left">status=success时返回</td>
            </tr>
                                <tr>
                <td align="center">transaction_id</td>
                <td align="center">平台流水号</td>
                <td align="center">是</td>
                <td align="left">status=success时返回</td>
            </tr>
            <tr>
                <td align="center">refCode</td>
                <td align="center">业务状态</td>
                <td align="center">是</td>
                <td align="left">status=success时返回<br>refCode返回值：1	成功   2	失败</td>
            </tr>
            <tr>
                <td align="center">refMsg</td>
                <td align="center">业务描述</td>
                <td align="center">是</td>
                <td align="left">status=success时返回</td>
            </tr>
            <tr>
                <td align="center">success_time</td>
                <td align="center">代付成功时间</td>
                <td align="center">是</td>
                <td align="left">status=success，refCode=1时返回</td>
            </tr>
            <tr>
                <td align="center">pay_md5sign</td>
                <td align="center">签名</td>
                <td align="center">否</td>
                <td align="left">请看MD5签名处理</td>
            </tr>
                    
        </tbody>
        </table>

                <div class="card m-b-30">
     
               <div class="card-header">
                              <i class="mdi mdi-amazon mr-1 text-primary"></i> 返回数据：json
                            </div>
 <div class="card-body">
<blockquote class="card-bodyquote mb-2">
            注：当status=success和refCode=1同时成立时才表示转账成功<br>refCode返回值：
返回值	含义
1	成功
2	失败
3	处理中
4	待处理<br>
5	审核驳回
6	待审核
7	交易不存在
8	未知状态
 </blockquote>
                  </div></div></div>

        

</div></div>
<!-- e -->
</div></div>
</div></div></div></div></div></div></div></div>
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
</body>
<script>
    var apikey;
    var index;
    layui.use('layer', function(layer){
        apikey = function (obj) {
            index = layer.prompt({
                        formType: 1,
                        title: '为了安全起见，请输入支付密码',
                        close: false,
                        btn: ['<span style="color: #FFf;">确定</span>','取消']
                    }, function (value){
                        if(!value){
                            layer.msg('请输入支付密码', {icon: 5});
                            return false;
                        }
                        show(value)
                    });
        };
    });
    
layui.use('element', function(){
  var element = layui.element;
  
  //一些事件监听
  element.on('tab(demo)', function(data){
    console.log(data);
  });
});
    function show(code){
        var data = {};
        if(code){
            data = {code:code};
        }
        $.ajax({
            url:"<?php echo U('User/Channel/Apikey');?>",
            type:"post",
            data: data,
            success:function(res){
                if(res.status){
                    $('#apikey-query').hide();
                    $('#apikey').text(res.apikey).removeClass('hide')
                    layer.close(index);
                }else {
                    layer.msg(res.msg, {icon: 5});
                    return false;
                }
            }
        });
    }
</script>
</html>