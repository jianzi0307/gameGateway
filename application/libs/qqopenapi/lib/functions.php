<?php
/**
 * @param object $sdk OpenApiV3 Object
 * @param string $openid openid
 * @param string $openkey openkey
 * @param string $pf 平台
 * @return array
 */
function get_user_info($sdk, $openid, $openkey, $pf)
{
	$params = array(
		'openid' => $openid,
		'openkey' => $openkey,
		'pf' => $pf,
	);
	
	$script_name = '/v3/user/get_info';
	return $sdk->api($script_name, $params,'post');
}

/**
 * 用户是否已登录
 * @param $sdk
 * @param $openid
 * @param $openkey
 * @param $pf
 * @return mixed
 */
function user_is_login($sdk, $openid, $openkey, $pf)
{
    $params = array(
        'openid' => $openid,
        'openkey' => $openkey,
        'pf' => $pf,
    );

    $script_name = 'v3/user/is_login';
    return $sdk->api($script_name, $params, 'post');
}