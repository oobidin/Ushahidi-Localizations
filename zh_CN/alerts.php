<?php
	$lang = array(
	'alert_email' => array(
		'email' => '电子邮箱地址格式不正确。',
		'email_check' => '此电子邮箱地址已被注册接收本站警示信息。',
		'length' => '电子邮箱地址长度须在4至64个字符之间。',
		'required' => '打钩则电子邮箱地址为必填项。',
	),
	'alert_country' => array(
		'single_country' => '您报告的事件地点跨越了本网站部署的国家范围。请确保事件地点是在'.ORM::factory('country', Kohana::config('settings.default_country'))->country.'国家或地区范围内.'
	),
	'alert_lat' => array(
		'between' => '请您在地图上标记一个范围正确的地点。',
		'required' => '请您在地图上标记事件发生的地点。',
	),
	'alert_lon' => array(
		'between' => '请您在地图上标记范围正确的地点。',
		'required' => '请您在地图上标记事件发生的地点。',
	),
	'alert_mobile' => array(
		'length' => '手机号码的位数不正确。',
		'mobile_check' => '此手机号码已被注册接收本站警示信息。',
		'numeric' => '手机号码格式不正确，请输入数字，需包含国家代码。',
		'one_required' => '您必须输入手机号码或电子邮箱地址。',
		'required' => '打钩则手机号码为必填项。',
	),
	'alert_radius' => array(
		'in_array' => '请您在地图上设定正确的半径范围。',
		'required' => '请您在地图上设定半径范围。',
	),
  'alert_recipient' => array(
    'required' => '您还没有设置一个收件人，用来接收本站的警示信息。'
  ),
	'alerts_subscribed' => '您已订阅了本站以下类别的事件报道的警示信息。',
	'code_already_verified' => '验证码已过期。',
	'code_not_found' => '验证码没找到！请检查您输入的URL是否正确。',
	'code_verified' => '验证通过，当有事件发生时您会收到警示消息。',
	'confirm_request' => '要确认您的请求，请点击',
	'create_more_alerts' => '返回警示页面，创建更多警示',
	'email_alert_request_created' => '您的电子邮箱接收警示的请求已创建，验证信息将发送到',
	'email_code' => '请您在下面输入邮件验证信息中提到的验证码',
	'email_error_head' => '您的电子邮箱接收警示的请求没有被保存。',
	'email_ok_head' => '您的电子邮箱接收警示的请求已被保存。',
	'error' => '系统不能处理您的验证请求！',
	'mobile_alert_request_created' => '您的手机号码接收警示的请求已创建，验证信息将发送到',
	'mobile_code' => '请您在下面输入手机验证信息中提到的验证码',
	'mobile_error_head' => '您的手机号码接收警示的请求没有被保存。',
	'mobile_ok_head' => '您的手机号码接收警示的请求已被保存。',
	'settings_error' => '系统配置不正确，导致不能处理警示信息。',
	'unsubscribe' => '收到这封邮件是因为您订阅了事件警示信息。如果您不想再收到此类信息请点击',
	'unsubscribed' => '您将不会再收到本站的事件警示信息',
	'unsubscribe_failed' => '我们不能取消你的警报订阅，请检查您输入了正确的URL地址。',
	'verification_email_subject' => '事件警示 - 验证邮件',
	'verify_code' => '在确认这个请求之前，您不会收到事件警示信息。',
	);
?>
