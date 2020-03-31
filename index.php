<?php
session_start();

header("Content-type: text/html; charset=utf-8");

require './class/function.php';
require './class/db.class.php';
require './lib/Smarty.class.php';

$smarty = new Smarty;

$db = ConnectMysqli::getIntance();
$wxagentid="1000002";
$wxstate="";
$weixin = $db->getRow('select * from config where k="weixin"');
	
$wxcfg = json_decode($weixin['v'], true);

$wmj = $db->getRow('select * from config where k="wmj"');
	
$config = json_decode($wmj['v'], true);

if(!$_GET['code']) {

	$redirect_uri = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
	$redirect_uri = urlencode($redirect_uri);

	$jump_url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=".$wxcfg['appid']."&redirect_uri=".$redirect_uri."&response_type=code&scope=snsapi_userinfo&agentid=".$wxcfg['agentid']."#wechat_redirect";
	
	// $jump_url='https://www.wmj.com.cn/rs.php'."?appid=".$wxcfg['appid']."&back_url=".$redirect_uri."&scope=snsapi_userinfo";
	header("Location:".$jump_url);
}
//print_r($_GET['code']);

$access_token = getAccessToken($wxcfg['appid'], $wxcfg['appsecret']);
//echo $access_token;
//$output = httpGet('https://qyapi.weixin.qq.com/cgi-bin/gettoken?corpid='.$wxcfg['appid'].'&corpsecret='.$wxcfg['appsecret'].'');
//$output = httpGet('https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$wxcfg['appid'].'&secret='.$wxcfg['appsecret'].'&code='.$_GET['code'].'&grant_type=authorization_code');
//echo $wxcfg['appsecret'];
//$output = json_decode($output, true);

//$user_info = httpGet('https://api.weixin.qq.com/sns/userinfo?access_token='.$output['access_token'].'&openid='.$output['openid'].'&lang=zh_CN');

//$user_info = json_decode($user_info, true);



$user_info_m = httpGet('https://qyapi.weixin.qq.com/cgi-bin/user/getuserinfo?access_token='.$access_token.'&code='.$_GET['code'].'');
$user_info_m = json_decode($user_info_m, true);
//print_r($user_info_m);

if(!$user_info_m['UserId']) {
	$data = array(
		'state'     => 0,
		'subscribe' => 1,
		'msg'       => '不是该企业职工不能开！',
	);
	
} else
{
   $ticketdata = array
     (
     "user_ticket" => $user_info_m['user_ticket'],
     );
   $user_ticket_json = json_encode($ticketdata);
   $user_info_d  = httpPost('https://qyapi.weixin.qq.com/cgi-bin/user/getuserdetail?access_token='.$access_token.'',$user_ticket_json);;
   //print_r($user_info_d);
   $user_info_d = json_decode($user_info_d, true);
	$user = $db->getRow('select * from user where openid="'.$user_info_m['UserId'].'"');

	if (!$user && $user_info_m['UserId'])
    {
		$data = array(
			'nickname' => $user_info_d['name'],
			'avatar'   => $user_info_d['avatar'],
			'openid'   => $user_info_d['userid'],
			'dateline' => time(),
		);
		
		$user['id'] = $db->insert("user", $data);
	}

	if ($_GET['id']) {
		
		$lock = $db->getRow('select * from locks where id='.$_GET['id']);
        $line="0";
        if($_GET['line'])
        {
          $line = $_GET['line'];
        }
          
		//echo $_GET['id'];
		$key = $db->getRow('select * from user_key where uid='.$user['id'].' AND lock_id='.$lock['id']);
		
		if (!$key) {
			
			$key_arr = array(
				'uid' => $user['id'],
				'lock_id' => $lock['id'],
				'add_time' => time(),
                'isauth' => 0,
			);
			
			$db->insert("user_key", $key_arr);
			
			$template = array(
				'touser' => $user_info_m['openid'],
				'template_id' => $wxcfg['tpl_msg'],
				'url' => "http://".$_SERVER['HTTP_HOST'].'/index.php',
				'data' => array(
					'first' => array(
						'value' => '',
					),
					'keyword1' => array(
						'value' => $user_info_d['name'],
					),
					'keyword2' => array(
						'value' => $lock['name'],
					),
					'keyword3' => array(
						'value' => '',
					),
					'remark' => array(
						'value' => '',
					),
				)
			);

			$json_template = json_encode($template);

			$url = "https://api.weixin.qq.com/cgi-bin/message/template/send?access_token=".$access_token;

			httpPost($url, $json_template);
		}
		
		if ($config['aeskey']) {
			$lock['sn'] = aesEncrypt($lock['sn'], $config['aeskey']);
		}
        $authkey = $db->getRow('select * from user_key where uid='.$user['id'].' AND lock_id='.$lock['id']);
        //print_r($authkey['isauth']);
		if($authkey['isauth'])
        {
          if($lock['type']==3)
          {
            $result = httpPost('https://www.wmj.com.cn/api/openlock.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'].'&line='.$line, $lock['sn']);
            //print_r($result);
          }
          else
          {
            $result = httpPost('https://www.wmj.com.cn/api/openlock.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'], $lock['sn']);
          }
		
	    //echo $result;
		$result = json_decode(trim($result, "\xEF\xBB\xBF"), true);
		
		$data = array(
			'lock_id'  => $lock['id'],
			'uid'      => $user['id'],
			'msg'      => $result['state_msg'],
			'addtime'  => time(),
		);
		
		$db->insert("log", $data);
		
		if ($result['state']) {
			$data = array(
				'state' => 1,
				'msg'   => '开门成功',
			);
		} else {
			$data = array(
				'state' => 0,
				'msg'   => '开门失败',
			);
		}
		
	}
      else
      {
        $data = array(
				'state' => 0,
				'msg'   => '没有权限！',
			);
      }
    }
  else 
  {
		
	}
	
}

$smarty->assign('get', $_GET);

$smarty->assign('data', $data);

$smarty->display('index.html');

?>