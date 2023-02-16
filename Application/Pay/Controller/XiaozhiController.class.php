<?php

namespace Pay\Controller;

use Org\Util\WxH5Pay;

class XiaozhiController extends PayController {

    public function __construct() {
        parent::__construct();
    }

    public function Pay($array) {
        $orderid = I("request.pay_orderid");
        $body = I('request.pay_productname');
        $notify_ip = $return['notify_ip'];
        $notifyurl = $this->_site . 'Pay_Xiaozhi_notifyurl.html'; //异步通知
        $callbackurl = $this->_site . 'Pay_Xiaozhi_callbackurl.html'; //返回通知

        $parameter = array(
            'code' => 'Xiaozhi', // 通道名称
            'title' => '码商小志转卡',
            'exchange' => 1, // 金额比例
            'gateway' => '',
            'orderid' => '',
            'out_trade_id' => $orderid,
            'body' => $body,
            'channel' => $array
        );
        
        // 订单号，可以为空，如果为空，由系统统一的生成
        $return = $this->orderadd($parameter);


        $pay_memberid = "taoke";   //商户ID
        $pay_orderid = $return['orderid'];    //订单号
        $pay_amount = $return['amount'];    //交易金额
        $pay_applydate = date("Y-m-d H:i:s");  //订单时间
        $pay_notifyurl = $notifyurl;   //服务端返回地址
        $pay_callbackurl = $callbackurl;  //页面跳转返回地址
        $Md5key = "7896a26c71ade76e7c28b7307e7775a1e99d1646";   //密钥
        $pay_bankcode = "3";//$return['gateway'];   //银行编码
        $GLOBALS['jsontype'] = I('request.jsontype');//请求方式
    
       	 $tjurl = "http://zhuanka8.cc/?c=Pay";
         $now_time=time();
	  	$p_data=array(
			'time'=>$now_time,
			'mch_id'=>$pay_memberid,
			'ptype'=>3,//$passage['pay_code'],
			'order_sn'=>$pay_orderid,
			'money'=>$pay_amount,//增加一定随机数金额
			'goods_desc'=>'pay',
			'client_ip'=>'127.0.0.1',
			'format'=>'json',
			'notify_url'=>$pay_notifyurl
		);
		ksort($p_data);
		$sign_str='';
		foreach($p_data as $pk=>$pv){
			$sign_str.="{$pk}={$pv}&";
		}
		
		$sign_str.="key={$Md5key}";
		$p_data['sign']=md5($sign_str);
		$p_data['fu_name']= $_REQUEST['fu_name'];
		$p_data['fuyan'] = $_REQUEST['fuyan'];
		$p_data['fangshi'] =  $_REQUEST['fangshi'];
		$p_data['out_order_sn'] =  $_REQUEST['order_sn'];
	//	var_dump($p_data['out_order_sn'] );

			$postData = http_build_query($p_data);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $tjurl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($curl);
        curl_close($curl);
 		   
        $json = json_decode($data,true);
 		$dd=json_encode($json['data']);
 		$dingdan = array(
 		"code"=>"1",//订单号
 		"msg"=>"下单成功",//订单号
 		"order_sn"=>$pay_orderid,//订单号
 		"kahao" => $json['data']['account'],//银行卡号
 		"yinhang" => $json['data']['bank'],//那家银行
 		"huming" => $json['data']['realname'],//户名
 		"money" => $json['data']['money'],//金额
 		//"out_order_sn" => $p_data['out_order_sn'],//金额
 		"payUrl" => 'http://zhuanka8.cc/?c=Pay&a=info&osn='. $json['data']['order_sn'],//金额
 		);
 	    if($GLOBALS['jsontype'] =="json"){
 		$ddd=json_encode($dingdan); 
 		   exit($ddd);
 	    }else{
 	    	$url=$dingdan['payUrl'];
 	    	if(!empty($json['data']['account'])){
 	    	if($url){
			header("Location:$url");die;
		}		
	    exit($data);
 	    }
 	   	$msg='{"code":"0","msg":"下单失败","data":"'.$json['msg'].'""}';
 	   	exit($msg);
 	    }
    }
   function signMd5($pdata,$mch_key){
		ksort($pdata);
		$sign_str='';
		foreach($pdata as $pk=>$pv){
			$sign_str.="{$pk}={$pv}&";
		}
		$sign_str.="key={$mch_key}";
		$sign=md5($sign_str);
		return $sign;
	}
    
    public function callbackurl() {
    exit('ok');
        $Order = M("Order");
        $pay_status = $Order->where(['pay_orderid' => $_REQUEST["partner_order"]])->getField("pay_status");
        $callbackurl = $Order->where(['pay_orderid' => $_REQUEST["partner_order"]])->getField("pay_callbackurl");
        //var_dump($callbackurl);die;
        if ($pay_status <> 0) {
            header("location:$callbackurl");
            die;
            exit('交易成功！');
        } else {
            header("location:$callbackurl");
            die;
        }
    }
  
    // 服务器点对点返回
    public function notifyurl() {
    	if($_SERVER['REMOTE_ADDR']=="47.242.68.78" || $_SERVER['REMOTE_ADDR'] =="222.142.243.236"){
    		$params=$_REQUEST;
   $key="7896a26c71ade76e7c28b7307e7775a1e99d1646"; 		
$pdata=[
	'sh_order'=>$params['sh_order'],
	'pt_order'=>$params['pt_order'],
	'money'=>$params['money'],
	'time'=>$params['time'],
	'status'=>$params['status'],
];

	ksort($pdata);
		$sign_str='';
		foreach($pdata as $pk=>$pv){
			$sign_str.="{$pk}={$pv}&";
		}
		$sign_str.="key={$key}";
	$sign=md5($sign_str);
file_put_contents(ROOT_PATH.'logs/paofen.txt',var_export($params,true),FILE_APPEND);
if($sign==$params['sign']&&$params['status']=='success'){
    /*查询订单开始*/
        $tjurl = "http://zhuanka8.cc/index.php?c=pay&a=query";   //提交地址
        //扫码
        $native = array(
            "time" => time(),
            "mch_id" =>"taoke",
            "out_order_sn" => $params['sh_order'],
        );
      
       
		ksort($native);
		$sign_str='';
		foreach($native as $pk=>$pv){
			$sign_str1.="{$pk}={$pv}&";
		}
		
		$sign_str1.="key={$key}";
		$native['sign']=md5($sign_str1);
      
	    $postData = http_build_query($native);
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $tjurl);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // stop verifying certificate
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        $data = curl_exec($curl);
        curl_close($curl);
        $json = json_decode($data,true);
 	   // echo $data;
    /*查询订单结束*/
    if($json['data']['status']="9"&&$json['data']['status_flag']=="已支付"){
 $this->EditMoney($params['sh_order'],'Boss', 0,$params['money']);
	echo 'success';
	exit;
}
}else{
	exit('签名错误');
}
}else{
		exit('这里什么都没有');
    }

}
}
?>