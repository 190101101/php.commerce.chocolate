<?php 

function f404()
{
	header('location: /404');
}

function http_referer($exit = FALSE)
{
	header("location: {$_SERVER['HTTP_REFERER']}");
    $exit == FALSE ?: exit;
}

function http_refresh($seconds = 3, $http = false)
{
	header('Refresh:'. $seconds .';'. $http);
}

function refresh($seconds = 2)
{
	header("Refresh: $seconds; /");
}

function redirect($url = false, $exit = false)
{
	header('location: /'.$url);
    $exit == false ?: exit;
}

function request()
{
	return $_SERVER['REQUEST_URI'];
}

function http_request($url)
{
    header('location: '.$url);
}

function referer()
{
	return $_SERVER['HTTP_REFERER'];
}

function http_cookie()
{
	return $_SERVER['HTTP_COOKIE'];
}

function remote_addr()
{
    return $_SERVER['REMOTE_ADDR'];
}

function message($code, $message = false, $time = 3){
    $_SESSION['message'] = [
        'code'    => $code, 
        'message' => $message,
        'time' => $time,
    ]; 
    echo json_encode($_SESSION['message']);
}

function _message($code, $message = false, $data = [], $option = [], $time = 3){
	$return = [
		'code' 	  => $code, 
		'message' => $message,
        'data'    => $data,
        'option'  => $option,
        'time'    => $time,
	]; 
    echo json_encode($return);
    exit;
}

function notification($code, $notice = []){
    $data = [
        'code'   => $code, 
        'notice' => $notice,
    ]; 
    echo json_encode($data);
}


function get_method()
{
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            return 'GET';
            break;
        case 'POST':
            return 'POST';
            break;
    }
}

function isXmlHttpRequest($redirect = 'home')
{
    $header = isset($_SERVER['HTTP_X_REQUESTED_WITH']) ? $_SERVER['HTTP_X_REQUESTED_WITH'] : null;
    ($header === 'XMLHttpRequest') == 1 ?: redirect($redirect, 1);
}
