<?php 

function engine_csrf($return, $encoded_array = [], $diff = false)
{
    $encoded_array += in_array('request', array_keys($encoded_array)) ? [] : ['request' => '/'];

    if(compare_array_keys($encoded_array, ['csrf_time', 'request']) != FALSE)
        messagemanager::code(404, $return->ssl_attack);

    $session       = return_other_than_uncoded($_SESSION);
    $ssl_session   = ssl_decode_array($session);
    $request       = $encoded_array['request'];
    $session_unset = $ssl_session;

    if(time() > $encoded_array['csrf_time'])
        messagemanager::code(404, $return->time_over, $request);

    if($diff == true){
        if(array_shift($ssl_session) != array_shift($encoded_array)){
            messagemanager::code(404, $return->diff_token, $request);
        }
    }

    foreach(ssl_encode_each_keys($session_unset) as $keys)
        unset($_SESSION[$keys]);
}
