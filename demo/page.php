<?php
header('Content-type:text/html;charset=utf-8');
   $ReturnArray = array( // 返回字段
            "memberid" => $_REQUEST["memberid"], // 商户ID
            "orderid" =>  $_REQUEST["orderid"], // 订单号
            "amount" =>  $_REQUEST["amount"], // 交易金额
            "datetime" =>  $_REQUEST["datetime"], // 交易时间
            "transaction_id" =>  $_REQUEST["transaction_id"], // 流水号
            "returncode" => $_REQUEST["returncode"]
        );
      
        $Md5key = "ud7xh8rc24c6c7jm0l3cxdmcyewi84a2";
		ksort($ReturnArray);
        reset($ReturnArray);
        $md5str = "";
        foreach ($ReturnArray as $key => $val) {
            $md5str = $md5str . $key . "=" . $val . "&";
        }
        $sign = strtoupper(md5($md5str . "key=" . $Md5key)); 

        if ($sign == $_REQUEST["sign"]) {
            if ($_REQUEST["returncode"] == "00") {
				   $str = "交易成功！订单号：".$_REQUEST["orderid"];                
            }
        }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>支付结果</title>
</head>
<body onload='setTimeout("mm()",10)'>
  <script>function mm(){ window.opener=null;
window.close();} </script>
<script>alert('DEMO测试，支付成功！请关闭窗口\n测试数据不支持退款提现');window.close();</script>
</body>
</html>