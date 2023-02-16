<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><?php if(($fans[groupid]) == "5"): ?>代理中心<?php endif; if(($fans[groupid]) == "6"): ?>中级代理中心<?php endif; ?> <?php if(($fans[groupid]) == "7"): ?>高级代理中心<?php endif; ?> <?php if(($fans[groupid]) == "4"): ?>商户中心<?php endif; ?> - <?php echo ($sitename); ?></title>
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
<!-- build:css -->
<link href="/Public/assetsqq572125157/css/app.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/Public/Front/js/plugins/layui/css/layui.css">
<!-- endbuild -->
</head>
<body  style="overflow:hidden">

<div class="row">
<div class="col-12">
<div class="card-box">
            <form class="layui-form" action="" autocomplete="off" id="bankform">
                <input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>">
             <div class="form-group row">
                  <label class="col-sm-3 col-form-label">开户行：</label>
                    <div class="col-sm-6">
                        <select name="b[bankname]" lay-filter="" lay-search="" lay-verify="required" class="form-control select2">
                            <option value="">选择开户行</option>
                            <?php if(is_array($banklist)): $i = 0; $__LIST__ = $banklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vobank): $mod = ($i % 2 );++$i;?><option <?php if($b['bankname'] == $vobank['bankname']): ?>selected<?php endif; ?>
                                value="<?php echo ($vobank["bankname"]); ?>"><?php echo ($vobank["bankname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
             <div class="form-group row">
                  <label class="col-sm-3 col-form-label">支行名称：</label>
                    <div class="col-sm-6">
                        <input type="text" name="b[subbranch]" lay-verify="" autocomplete="off"
                               class="form-control" value="<?php echo ($b["subbranch"]); ?>" lay-verify="required" placeholder="XXX银行XXX支行">
                    </div>
                </div>
              
                  <div class="form-group row">
                  <label class="col-sm-3 col-form-label">开户名：</label>
                       <div class="col-sm-6">
                        <input type="text" name="b[accountname]" lay-verify="" autocomplete="off" placeholder="姓名"
                               class="form-control" value="<?php echo ($b["accountname"]); ?>" lay-verify="required">
                    </div>
                </div>
              
                   <div class="form-group row">
                  <label class="col-sm-3 col-form-label">银行卡号：</label>
                       <div class="col-sm-6">
                        <input type="input" name="b[cardnumber]" lay-verify="" autocomplete="off" placeholder="银行卡号"
                               class="form-control" value="<?php echo ($b["cardnumber"]); ?>" lay-verify="required">
                    </div>
                </div>
              
                 <div class="form-group row">
                  <label class="col-sm-3 col-form-label">所属省：</label>
                           <div class="col-sm-6">
                            <input type="tel" name="b[province]" lay-verify="" autocomplete="off"
                                   class="form-control" value="<?php echo ($b["province"]); ?>" lay-verify="required" placeholder="XX省">
                        </div>
                    </div>
              
                   <div class="form-group row">
                  <label class="col-sm-3 col-form-label">所属城市：</label>
                          <div class="col-sm-6">
                            <input type="text" name="b[city]" lay-verify="" autocomplete="off" class="form-control"
                                   value="<?php echo ($b["city"]); ?>" lay-verify="required"  placeholder="XX市">
                        </div>
                    </div>

                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">备注：</label>
                      <div class="col-sm-6">
                        <input type="text" name="b[alias]" lay-verify="" autocomplete="off" placeholder=""
                               class="form-control" value="<?php echo ($b["alias"]); ?>">
                    </div>
                </div>            
  <?php if($verifyGoogle and $verifysms): ?><div class="form-group row"  id="auth_type">
              <label class="col-sm-3 col-form-label">验证方式：</label>
                    <div class="col-sm-6">
                      <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_22" value="1" title="谷歌安全码" checked>
                       <input type="radio" name="auth_type" lay-filter="auth_type" id="radio_21" value="0" title="短信验证码" checked>
                        
                       
                    </div>
                </div>
                
              <?php else: ?>
                <input type="hidden" name="auth_type" value="<?php echo ($auth_type); ?>"><?php endif; ?>
  <?php if(($verifysms) == "1"): ?><div class="form-group row"  id="auth_sms">
<label for="example-week-input" class="col-sm-3 col-form-label">短信验证码：</label>
                <div class="col-sm-6">
        <div class="input-group">
                  <input type="text" name="code"  autocomplete="off" placeholder="请输入短信验证码"  class="form-control" value="">
          <div class="input-group-append">
                                                <button href="javascript:;"   id="sendBtn" data-mobile="<?php echo ($fans['mobile']); ?>" data-bind="<?php echo ($fans['mobile']); ?>"  class="btn btn-danger waves-effect waves-light" type="button"  data-toggle="tooltip" data-placement="top" title="" data-original-title="点击发送短信验证码"><i class="icon-call-end"></i> 发送验证码</button>
                                            </div>
                </div>
				</div></div><?php endif; ?>
            <?php if(($verifyGoogle) == "1"): ?><div class="form-group row"  id="auth_google" <?php if($verifyGoogle and $verifysms): ?>style="display: none"<?php endif; ?>>
						  <label for="example-week-input" class="col-sm-3 col-form-label">谷歌安全码：</label>
                    <div class="col-sm-6">
                        <input type="text" name="google_code" autocomplete="off"
                               placeholder="请输入谷歌安全码" class="form-control"   value="">
                    </div>
                </div><?php endif; ?>
                   <div class="form-group row"> <label class="col-sm-3 col-form-label">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                      <div class="col-sm-6">
                        <button class="btn btn-primary" lay-submit="" lay-filter="save"><i class="icon-like"></i> 立即提交</button>
                    </div>
                 
                </div>
            </form>
        </div>
    </div>
</div>
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
      //短信验证是否开启
    var sms_is_open = "<?php echo ($sms_is_open); ?>";
    layui.use(['laydate', 'form', 'layer', 'table', 'element'], function() {
        var laydate = layui.laydate //日期
            , form = layui.form //分页
            , layer = layui.layer //弹层
            , table = layui.table //表格
            , element = layui.element; //元素操作
        //监听提交
        form.on('submit(save)', function(data){
            $.ajax({
                url:"<?php echo U('Account/addBankcard');?>",
                type:"post",
                data:$('#bankform').serialize(),
                success:function(res){
                    if(res.status){
                        layer.alert("操作成功", {icon: 6},function () {
                            parent.location.reload();
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
                    }else{
                        layer.alert(res.msg ? res.msg :"操作失败", {icon: 5},function () {
                            parent.location.reload();
                            var index = parent.layer.getFrameIndex(window.name);
                            parent.layer.close(index);
                        });
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