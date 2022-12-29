<?php 

function create_user_session($row)
{
    return $_SESSION['USER'] =  [
        'ID'           => $row->user_id, 
        'IP'           => $row->user_ip,
        'EMAIL'        => $row->user_email, 
        'LOGIN'        => $row->user_login, 
        'PASSWORD'     => $row->user_password, 
        'LEVEL'        => $row->user_level,
        'CARD'         => $row->user_card, 
        'TYPE'         => $row->user_type, 
        'STATUS'       => $row->user_status, 
        'LEVEL'        => $row->user_level, 
        'PHONE'        => $row->user_phone,
        'ADDRESS'      => $row->user_address,
        'CREATED'      => $row->user_created_at,
        'UPDATED'      => $row->user_updated_at,
        'TIME'         => time(),
        'REQUEST'      => NULL,
        'POST'         => 0,
        'GET'          => 0,
    ];
}

function has_session($session)
{
    return isset($_SESSION[$session]) ? TRUE : FALSE;
}

function get_user()
{
    return has_session('USER') ? $_SESSION['USER'] : FALSE;
}

function get_user_id()
{
    return has_session('USER') ? $_SESSION['USER']['ID'] : FALSE;
}


function get_user_ip()
{
    return has_session('USER') ? $_SESSION['USER']['IP'] : FALSE;
}

function get_user_phone()
{
    return has_session('USER') ? $_SESSION['USER']['PHONE'] : FALSE;
}

function get_user_address()
{
    return has_session('USER') ? $_SESSION['USER']['ADDRESS'] : FALSE;
}

function get_user_image()
{
    return has_session('USER') ? $_SESSION['USER']['IMAGE'] : FALSE;
}

function get_user_email()
{
    return has_session('USER') ? $_SESSION['USER']['EMAIL'] : FALSE;
}

function get_user_login()
{
    return has_session('USER') ? $_SESSION['USER']['LOGIN'] : FALSE;
}

function get_user_card()
{
    return has_session('USER') ? $_SESSION['USER']['CARD'] : FALSE;
}

function get_user_color()
{
    return has_session('USER') ? $_SESSION['USER']['COLOR'] : FALSE;
}

function get_user_password()
{
    return has_session('USER') ? $_SESSION['USER']['PASSWORD'] : FALSE;
}

function get_user_decode()
{
    return has_session('USER') ? $_SESSION['USER']['DECODE'] : FALSE;
}

function get_user_type()
{
    return has_session('USER') ? $_SESSION['USER']['TYPE'] : FALSE;
}

function get_user_status()
{
    return has_session('USER') ? $_SESSION['USER']['STATUS'] : FALSE;
}

function get_user_level()
{
    return has_session('USER') ? $_SESSION['USER']['LEVEL'] : FALSE;
}

function get_user_not_ban()
{
    return get_user_status() == 1 ? TRUE : FALSE;
}

function get_user_created()
{
    return has_session('USER') ? $_SESSION['USER']['CREATED'] : FALSE;
}

function get_user_updated()
{
    return has_session('USER') ? $_SESSION['USER']['UPDATED'] : FALSE;
}

function get_user_get()
{
    return has_session('USER') ? $_SESSION['USER']['GET'] : FALSE;
}

function get_user_post()
{
    return has_session('USER') ? $_SESSION['USER']['POST'] : FALSE;
}

function get_user_session_key($p1)
{
    return $_SESSION['USER'][$p1];
}

function add_user_session_key($p1, $p2 = [])
{
    return $_SESSION['USER'][$p1] += $p2;
}

function user_session_clear($p1)
{
    $_SESSION['USER'][$p1] = [];
}

function update_user_session($p1, $p2)
{
    return $_SESSION['USER'][$p1] = $p2;
}

function update_session_array($p1 = [])
{
    foreach($p1 as $key => $value){
        $_SESSION['USER'][$key] = $value;
    }
}

function session_increment($p1)
{
    $p2 = "get_user_".strtolower($p1);
    return update_user_session(strtoupper($p1), $p2() + 1);
}

function session_decrement($p1)
{
    $p2 = "get_user_".strtolower($p1);
    return update_user_session(strtoupper($p1), $p2() - 1);
}

function update_session($p1, $p2, $p3)
{
    return $_SESSION[$p1][$p2] = $p3;
}

function drop_session($p1)
{
    return update_user_session($p1, 0);
}

function is_admin()
{
    return has_session('USER') ? $_SESSION['USER']['LEVEL'] >= 99 ? TRUE : FALSE : FALSE;
}

function ulogin()
{
    return has_session('USER');
}

function csrf($time = 5)
{
    $session = $_SESSION['csrf'] = (time() + 5);
    echo "<input type='hidden' name='csrf_time' value='".$session."'>";
}

function csrf_token()
{
    $time = $_SESSION[ssl_encode('TIME')] = ssl_encode((time() + 3600));
    $code = $_SESSION[ssl_encode('TOKEN')] = ssl_encode(uniqid());
    echo "<input type='hidden' name=".ssl_encode('csrf_time')." value='". $time ."'>";
    echo "<input type='hidden' name=".ssl_encode('csrf_token')." value='". $code ."'>";
}

function csrf_code($p1)
{
    $session = $_SESSION[ssl_encode($p1)] = ssl_encode(uniqid());
    echo "<input type='hidden' name=".ssl_encode('csrf_code')." value='". $session ."'>";
}

function get_session_method()
{
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            session_increment('GET');
            break;
        case 'POST':
            session_increment('POST');
            break;
    }
}

function determine_type($level)
{
    if($level == 1)
    {
        return 'user';
    }
    else if($level == 2)
    {
        return 'moderator';
    }
}
