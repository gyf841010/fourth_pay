<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class="no-focus" lang="zh-CN">
<head>
    <meta charset="utf-8">
<title><?php echo ($sitename); ?> - 专业支付技术服务商 - 让支付简单、专业、快捷！</title>
    <meta name="keywords" content="支付系统,免签支付,聚合支付,个人免签,个人免签支付,第三方支付,第四方支付,支付接口,支付通道,云支付,易支付,支付宝免签,微信免签,个码免签,即时到账支付,聚合免签支付"/>
    <meta name="description" content="<?php echo ($sitename); ?>,专业支付系统服务商,聚合支付,让支付简单、专业、快捷!" />  
    <meta name="author" content="NestCloud">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />    
	<link rel="stylesheet" href="/Public/theme/view7/css/f5bd35c9387047cc800125ec5b2cf959.css">
    <link rel="stylesheet" href="/Public/theme/view7/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="/Public/theme/view7/css/oneui.css">
    <link rel="stylesheet" id="css-main" href="/Public/theme/view7/css/sweetalert2.min.css">
</head>
<body>
    <div id="page-container" class="header-navbar-fixed header-navbar-transparent">
        <header id="header-navbar" class="content-mini content-mini-full">
            <div class="content-boxed">
                <ul class="nav-header pull-right">
                    <li>
                        <div class="btn-group">
                            <button class="btn btn-link text-white dropdown-toggle" data-toggle="dropdown" type="button"><i class="si si-drop"></i></button>
                        </div>
                    </li>
                    <li class="hidden-md hidden-lg">
                        <button class="btn btn-link text-white pull-right" type="button" data-toggle="class-toggle" data-class="nav-main-header-o" data-action="sidebar_open" data-target=".js-nav-main-header"><i class="fa fa-navicon"></i></button>
                    </li>
                </ul>
                <ul class="js-nav-main-header nav-main-header pull-right">
                    <li class="text-right hidden-md hidden-lg">
                        <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button"> <i class="fa fa-times"></i> </button>
                    </li>
                    <li><a class="active" href="/">首页</a></li>
                    <li><a href="/demo/" target="_blank">DEMO</a></li>
                    <li><a href="<?php echo ($download_demo); ?>">开发文档</a></li>
                    <li><a href="<?php echo ($agent_login); ?>"  target="_blank">代理商登录</a></li>
                </ul>
                <ul class="nav-header pull-left">
                    <li class="header-content"> </li> <img width="130" height="36" class="logo" src="<?php echo ($logo); ?>" href="/"> </ul>
            </div>
        </header>
        <main id="main-container">
            <div class="bg-image" style="height:100%;background-image: url('/Public/theme/view7/images/hero_tech.jpg');">
                <div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed">
                        <div class="push-100-t push-50 text-center">
                            <br>
                            <h1 class="h2 text-white" href="/"><?php echo ($sitename); ?> / PayHelper</h1>
                            <br>
                            <br>
                            <h1 class="h4 text-white push-20 visibility-hidden" data-toggle="appear" data-class="animated fadeInDown">专业支付系统服务商，聚合API支付，让支付简单、专业、快捷！</h1>
                            <br>
                            <br>
                            <br>
                            <div class="push-50-t push-20 text-center"> <a class="btn btn-noborder btn-primary push-10-r push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInLeft" href="<?php echo ($user_login); ?>"><i class="si si-user"></i> 商户登录</a> <a class="btn btn-noborder btn-success push-10-r push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInRight" href="<?php echo ($register); ?>"><i class="si si-layers"></i> 商户注册</a> <a class="btn btn-noborder btn-warning push-10-r push-5 visibility-hidden" data-toggle="appear" data-class="animated fadeInRight" href="javascript:openKefuLink();"><i class="si si-paper-plane"></i> 商务合作</a> </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="bg-white">
                <section class="content content-full content-boxed">
                    <br>
                    <br>
                    <h1 class="h3 push-20 visibility-hidden text-center" data-toggle="appear">我们的特点</h1>
                    <div class="row items-push-3x nice-copy">
                        <div class="push-50-t push-50">
                            <div class="col-sm-4">
                                <div class="text-center push-30"> <span class="item item-2x item-circle border">
                                        <i class="si si-energy text-info"></i>
                                    </span> </div>
                                <h3 class="h5 font-w600 text-uppercase text-center push-10">支付更快捷</h3>
                                <p>用户提交订单后，通过扫描相应的二维码直接支付，资金直达您的支付宝、微信账户或商户账户中，并自动回调上分，无需公司资质免签约，即时到账。</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center push-30"> <span class="item item-2x item-circle border">
                                        <i class="si si-diamond text-success"></i>
                                    </span> </div>
                                <h3 class="h5 font-w600 text-uppercase text-center push-10">支持全业务场景</h3>
                                <p>为开发者提供支付功能接入解决方案，无需后端开发，拥有SDK/开发文档即可接入一套完整的支付系统，让您在各种不同的场景下轻松实现收款。</p>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center push"> <span class="item item-2x item-circle border">
                                        <i class="si si-fire text-city"></i>
                                    </span> </div>
                                <h3 class="h5 font-w600 text-uppercase text-center push-10">稳定持久</h3>
                                <p>金融级安全防护标准，多机房异地容灾系统，实时备份数据，多层有效抵御多种外部恶意入侵方式，支持同一时刻产生高并发交易，系统响应迅速。</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="bg-white">
                <section class="content content-full content-boxed">
                    <h1 class="h3 push-20 visibility-hidden text-center" data-toggle="appear">产品服务</h1>
                    <div class="row items-push-6x nice-copy">
                        <div class="push-50-t push-50">
                            <div class="col-sm-6 col-lg-3 visibility-hidden" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                                <a class="block block-bordered block-link-hover3 text-center">
                                    <div class="block-content block-content-full bg-amethyst">
                                        <div class="h1 font-w700 text-white push-10"><span class="h5 font-w600 text-white-op">多种接口</span></div>
                                    </div>
                                    <div class="block-content">
                                        <table class="table table-borderless table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td>无需公司资质免签约</td>
                                                </tr>
                                                <tr>
                                                    <td>聚合行业内主流支付接口</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3 visibility-hidden" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                                <a class="block block-bordered block-link-hover3 text-center">
                                    <div class="block-content block-content-full bg-city">
                                        <div class="h1 font-w700 text-white push-10"><span class="h5 font-w600 text-white-op">财务对账</span></div>
                                    </div>
                                    <div class="block-content">
                                        <table class="table table-borderless table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td>交易记录详细统计</td>
                                                </tr>
                                                <tr>
                                                    <td>用户账户收支一目了然</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3 visibility-hidden" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                                <a class="block block-bordered block-link-hover3 text-center">
                                    <div class="block-content block-content-full bg-success">
                                        <div class="h1 font-w700 text-white push-10"><span class="h5 font-w600 text-white-op">代理系统</span></div>
                                    </div>
                                    <div class="block-content">
                                        <table class="table table-borderless table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td>代理商分润系统</td>
                                                </tr>
                                                <tr>
                                                    <td>系统合伙人招募，佣金全返</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3 visibility-hidden" data-toggle="appear" data-offset="50" data-timeout="400" data-class="animated fadeInUp">
                                <a class="block block-bordered block-link-hover3 text-center">
                                    <div class="block-content block-content-full bg-info">
                                        <div class="h1 font-w700 text-white push-10"><span class="h5 font-w600 text-white-op">二维码支付</span></div>
                                    </div>
                                    <div class="block-content">
                                        <table class="table table-borderless table-condensed">
                                            <tbody>
                                                <tr>
                                                    <td>专业的收款工具</td>
                                                </tr>
                                                <tr>
                                                    <td>线下商户经营收款必备</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="bg-white">
                <section class="content content-full content-boxed">
                    <h1 class="h3 push-20 visibility-hidden text-center" data-toggle="appear">专业的支付帮手</h1>
                    <div class="row items-push-3x nice-copy">
                        <div class="push-50-t push-50">
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-city ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-desktop text-white-op"></i></div>
                                        <div class="text-white-op">PC网页支付</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-flat ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-mobile text-white-op"></i></div>
                                        <div class="text-white-op">手机网页支付</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-amethyst ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-send-o text-white-op"></i></div>
                                        <div class="text-white-op">手机APP支付</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-info ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-wechat  text-white-op"></i></div>
                                        <div class="text-white-op">公众号支付</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-success ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-codepen text-white-op"></i></div>
                                        <div class="text-white-op">小程序支付</div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-2 col-xs-6">
                                <a class="block block-rounded block-link-hover2">
                                    <div class="block-content block-content-full text-center bg-smooth ribbon ribbon-bookmark ribbon-crystal">
                                        <div class="item item-2x item-circle bg-crystal-op push-20-t push-20 visibility-hidden" data-toggle="appear" data-offset="50" data-class="animated fadeIn"><i class="fa fa-credit-card text-white-op"></i></div>
                                        <div class="text-white-op">扫码收银台</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="bg-image" style="background-image: url('images/photo2@2x.jpg');">
                <div class="bg-primary-dark-op">
                    <section class="content content-full content-boxed">
                        <div class="push-20-t push-20 text-center">
                            <h3 class="h4 push-20 visibility-hidden" style="color:#ffffff;" data-toggle="appear"><?php echo ($sitename); ?></h3>
                            <h3 class="h4 push-20 visibility-hidden" style="color:#ffffff;" data-toggle="appear">专业的支付帮手，让支付接口对接前所未有的简单</h3> </div>
                    </section>
                </div>
            </div>

            <footer class="bg-white">
                <div class="content content-boxed">
                    <div class="row push-30-t items-push-2x">
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">关于我们</h3>
                            <div class="font-s13 list list-simple-mini">
                                <li><?php echo ($sitename); ?> / PayHelper</li>
                                <li>专业支付系统服务商。</li>
                                <li>提供多场景支付解决方案。</li>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">联系我们</h3>
                            <div class="font-s13 list list-simple-mini">
                                <li>
                                    <a tabindex="-1" data-toggle="theme"> <i class="fa fa-envelope"></i>&nbsp;<span class="font-w600">Email：<?php echo ($siteconfig["email"]); ?></span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" data-toggle="theme"> <i class="fa fa-qq text-flat"></i>&nbsp;<span class="font-w600">QQ：<?php echo ($siteconfig["qq"]); ?>（7X24小时）</span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" data-toggle="theme"> <i class="fa fa-wechat text-flat"></i>&nbsp;<span class="font-w600">WeChat：<?php echo ($siteconfig["tel"]); ?></span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" data-toggle="theme"> <i class="fa fa-desktop text-flat"></i>&nbsp;<span class="font-w600">WebSite：<?php echo ($siteconfig["domain"]); ?></span></a>
                                </li>
                            </div>
                            <div style="height:7px;"></div>
                        </div>
                        <div class="col-sm-4">
                            <h3 class="h5 font-w600 text-uppercase push-20">友情链接</h3>
                            <ul class="list list-simple-mini font-s13">
                                <li><a class="font-w500" href="/"><?php echo ($sitename); ?>,专业支付系统服务商</a></li>
                                  <li><a class="font-w500" href="http://pay.weixin.com">微信支付</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="font-s12 push-20 clearfix">
                        <hr class="remove-margin-t">
                        <div class="pull-right"> </div>
                        <div class="pull-left"> <a class="font-500"><?php echo "Copyright © 2017-" . date("Y") . " "; echo ($sitename); ?> Rights Reserved. | 运营 · <?php echo ($sitename); ?>（香港）科技有限公司 |  <?php echo ($siteconfig["icp"]); ?></a> </div>
                    </div>
                </div>
            </footer>
        </main>
    </div>
    <script src="/Public/theme/view7/js/jquery.min.js"></script>
    <script src="/Public/theme/view7/js/bootstrap.min.js"></script>
    <script src="/Public/theme/view7/js/jquery.slimscroll.min.js"></script>
    <script src="/Public/theme/view7/js/jquery.scrolllock.min.js"></script>
    <script src="/Public/theme/view7/js/jquery.appear.min.js"></script>
    <script src="/Public/theme/view7/js/jquery.countto.min.js"></script>
    <script src="/Public/theme/view7/js/jquery.placeholder.min.js"></script>
    <script src="/Public/theme/view7/js/js.cookie.min.js"></script>
    <script src="/Public/theme/view7/js/app.js"></script>
    <script src="/Public/theme/view7/js/jquery.vide.min.js"></script>
    <script>
    jQuery(function() {
        App.initHelpers('appear');
    });
    </script>
	<script type="text/javascript">
    function openKefuLink()
      {
        window.open("http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($qq); ?>&site=<?php echo ($sitename); ?>&menu=yes",'_blank');
      }
</script>
</body>
</html>