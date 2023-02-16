<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>转跳提示 - <?php echo ($sitename); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Icons css -->
        <link href="/Public/assetsqq572125157/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="/Public/assetsqq572125157/libs/dripicons/webfont/webfont.css" rel="stylesheet" type="text/css" />
        <link href="/Public/assetsqq572125157/libs/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css" />
        <!-- App css -->
        <!-- build:css -->
        <link href="/Public/assetsqq572125157/css/app.css" rel="stylesheet" type="text/css" />
        <!-- endbuild -->
    </head>
    <body class="bg-account-pages">
        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <div class="wrapper-page">
                            <div class="account-pages">
                                <div class="account-box">

                                    <!-- Logo box -->
                                    <div class="account-logo-box">

                                           <h1 class="text-danger font-size-40 font-weight-700">系统提示：</h1>
                                      <h2>正在登入 商户管理中心</h2>
                                    </div>

                                    <div class="account-content text-center">
                                        <h1 class="text-error">Welcome</h1>
                                        <h4 class="text-uppercase text-danger mt-3"><a id="href" href="<?php echo U('agent/Index/main');?>" class="btn btn-info btn-block margin-top-10">转跳中请稍等  <b id="wait">3</b>秒</a></h4>
                                        <p class="text-muted mt-3">友情提示： 耐心等待</a></p>

                                        <a class="btn btn-primary mt-3" href="<?php echo U('agent/Index/main');?>"><i class="mdi mdi-home mr-1"></i> 不想等待点这里进入</a>
                                    </div> <!-- end account-content -->

                                </div> <!-- end account-box -->
                            </div>
                            <!-- end account-page-->
                        </div>
                        <!-- end wrapper-page -->

                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- END HOME -->    
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
        <!-- jQuery  -->
        <script src="/Public/assetsqq572125157/libs/jquery/jquery.min.js"></script>
        <script src="/Public/assetsqq572125157/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- App js -->
        <script src="/Public/assetsqq572125157/js/jquery.core.js"></script>
        <script src="/Public/assetsqq572125157/js/jquery.app.js"></script>

    </body>
</html>