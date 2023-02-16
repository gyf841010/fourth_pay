<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo ($sitename); ?>  - 注册</title>
<link href="<?php echo ($siteurl); ?>Public/Front/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
<link href="<?php echo ($siteurl); ?>Public/Front/css/font-awesome.css?v=4.4.0" rel="stylesheet">
<link rel="stylesheet" src="<?php echo ($siteurl); ?>Public/Front/bootstrapvalidator/css/bootstrapValidator.min.css">
<link href="<?php echo ($siteurl); ?>Public/Front/css/animate.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo ($siteurl); ?>Public/Front/login/css/style.css">
</head>
<body class="style-3">

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8">

                    <!-- Start Sign In Form -->
                    <form class="fh5co-form animate-box" data-animate-effect="fadeInRight" role="form" id="Formreg" method="post" action="<?php echo ($register_checkRegister); ?>" autocomplete="off">
                        <h2>注册成为会员</h2>
                        
                        <div class="form-group">
                            <label for="name" class="sr-only">用户名</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="请输入用户名" >
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">登录密码</label>
                           <input type="password" class="form-control" id="password" name="password" placeholder="请输入登录密码" >
                            <div class="progress password-progress">
                              <div id="strengthBar" class="progress-bar" role="progressbar" style="width: 0;"></div>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">再次输入密码</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="请再次输入登录密码" >
                        </div>
                        <div class="form-group">
                            <label for="re-password" class="sr-only">输入您的email</label>
                             <input type="email"  class="form-control" id="email" name="email" placeholder="请输入您的Email地址" >
                        </div>
                    <?php if($siteconfig['invitecode'] == 1): ?><div class="form-group">
                            <label for="re-password" class="sr-only">注册邀请码</label>
                             <input type="text" class="form-control" id="invitecode" name="invitecode" placeholder="必须有邀请码才能注册" value="">
                        </div><?php endif; ?>
                         <div class="form-group">
                <div id="messages"></div>
        </div>
                        
                        <div class="form-group">
                            <p>已经有账号? <a href="<?php echo ($user_login); ?>">点击登录</a></p>
                        </div>
                        <div class="form-group">
                       
                             <button type="submit" class="btn btn-primary">点击注册</button>
                        </div>
                    </form>
                    <!-- END Sign In Form -->


                </div>
            </div>
            <div class="row" style="padding-top: 60px; clear: both;">
               <div class="col-md-12 text-center"><p><small>&copy; <?php echo ($sitename); ?> All Rights Reserved.  </small></p></div>
            </div>
        </div>

<!-- 全局js -->
<script src="<?php echo ($siteurl); ?>Public/Front/js/jquery.min.js"></script>
<script src="<?php echo ($siteurl); ?>Public/Front/js/bootstrap.min.js"></script>
<script src="<?php echo ($siteurl); ?>Public/Front/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script src="<?php echo ($siteulr); ?>Public/Front/js/plugins/zxcvbn/4.4.2/zxcvbn.js"></script>
<script src="<?php echo ($siteurl); ?>Public/Front/js/plugins/layer/layer.min.js"></script>
<script src="<?php echo ($siteurl); ?>Public/Front/login/js/modernizr-2.6.2.min.js"></script>
<style>
    .password-progress {
        margin-top: 10px;
        margin-bottom: 0;
    }
</style>
<script>
    $(document).ready(function() {
        $('form').bootstrapValidator({
            //container: '#messages',
            message: 'This value is not valid',
            feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '用户名不能为空'
                        },
                        different: {
                            field: 'password',
                            message: '用户名不能和密码相同'
                        },
                        threshold:6,
                        stringLength: {
                            min: 5,
                            max: 20,
                            message: '用户名长度必须在5到20之间'
                        },
                        remote:{
                            url: "<?php echo ($checkuser); ?>",
                            message: '用户已存在',
                            delay :  1000,
                            type: 'POST'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: '用户名由数字字母下划线和.组成'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: '密码不能为空'
                        },
                        identical: {
                            field: 'confirmpassword',
                            message: '两次密码不一致'
                        },
                        different: {
                            field: 'username',
                            message: '不能和用户名相同'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '密码长度在6到30之间'
                        }
                    }
                },
                confirmpassword: {
                    message: '确认密码无效',
                    validators: {
                        notEmpty: {
                            message: '确认密码不能为空'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: '用户名长度必须在6到30之间'
                        },
                        identical: {
                        field: 'password',
                        message: '两次密码不一致'
                        },
                        different: {
                        field: 'username',
                        message: '不能和用户名相同'
                        }
                    }
                },
                email: {
                    message: '邮件验证失败',
                    validators: {
                        notEmpty: {
                            message: '邮件不能为空'
                        },
                        remote:{
                            url: "<?php echo ($checkemail); ?>",
                            message: '邮箱已存在',
                            delay :  1000,
                            type: 'POST'
                        },
                        regexp:{
                            regexp:/^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/,
                            message: '邮件格式有误，请核对'
                        }
                    }
                },
                <?php if($siteconfig['invitecode'] == 1): ?>invitecode: {
                    message: '邀请码验证失败',
                    validators: {
                        notEmpty: {
                            message: '邀请码不能为空'
                        },
                        remote:{
                            url: "<?php echo ($checkinvitecode); ?>",
                            message: '邀请码无效',
                            delay :  1000,
                            type: 'POST'
                        },
                    }
                },<?php endif; ?>
            }
        }).on('success.form.bv', function(e) {
            e.preventDefault();
            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            $.post($form.attr('action'), $form.serialize(), function(res) {
                if(res.errorno){
                    layer.msg(res.msg ? res.msg : '注册失败,请重新提交，谢谢！', {
                        time: 20000, //20s后自动关闭
                        btn: ['知道了'],
                        yes:function(){
                            window.location.reload();
                        }
                    });
                }else{
                    if(result['need_activate'] == 1) {
                        var data = res.msg;
                        layer.open({
                            type: 1
                            ,title: false
                            ,closeBtn: false
                            ,area: '300px;'
                            ,shade: 0.8
                            ,id: 'LAY_layuipro' //设定一个id，防止重复弹出
                            ,resize: false
                            ,btn: ['立刻激活', '晚点再说']
                            ,btnAlign: 'c'
                            ,moveType: 1 //拖拽模式，0或者1
                            ,content: '<div style="padding: 50px; line-height: 22px; background-color: #393D49; color: #fff; font-weight: 300;">' +
                            '<h3>恭喜您，注册成功！</h3>' +
                            '<p>我们已发送了一封验证邮件到 <strong>'+data.email+'</strong>, 请注意查收您的邮箱，点击其中的链接激活您的账号！</p>' +
                            '<p>如果您未收到验证邮件，请联系管理员重新发送验证邮件或手动帮您激活账号。</p>'
                            ,success: function(layero){
                                var btn = layero.find('.layui-layer-btn');
                                btn.find('.layui-layer-btn0').attr({href: data.mail,target: '_blank'});
                            }
                        });
                    } else {
                        layer.msg('注册成功！正在为您跳转到登录页面...');

                        setTimeout(function() {
                            window.location.href = "<?php echo ($siteurl); ?>" + "user_Login_index.html";
                        },3000 );
                    }

                }

            }, 'json');
        });
});
</script>
<?php echo tongji(0);?>
<!--统计代码，可删除-->
</body>
</html>