<?php 
function db()
{
    return new database\database(DBHOST, DBNAME, UTF, DBUSER, DBPASS);
}

function ee()
{
	echo '<body style="background: #000 !important; color: #e84118 !important;">';
	echo '<div class="dd-class"><pre>';
		print_r('exit');
	echo '</pre></div></body>';
	exit;
}

function dd($data)
{
	echo '<div class="dd-class"><pre>'; print_r($data); echo '<pre></div>';
}

function ddx($data)
{	
	echo '<body style="background: #000 !important; color: #e84118 !important;">';
	echo '<div class="dd-class"><pre>'; print_r($data); echo '<pre></div></body>';
	exit;
}

function qq($data)
{
	echo '<div class="dd-class"><pre>'; var_dump($data); echo '<pre></div>';
}

function qqx($data)
{
	echo '<body style="background: #000 !important; color: #e84118 !important;">';
	echo '<div class="dd-class"><pre>'; var_dump($data); echo '<pre></div></body>';
	exit;
}

function ssl_encode($p1)
{
	return openssl_encrypt($p1, "AES-128-ECB", "password");
}

function ssl_decode($p1)
{
	return openssl_decrypt($p1, "AES-128-ECB", "password");
}

function ssl_encode_each($p1)
{
	$return = [];
	foreach($p1 as $p2)
		$return[] = openssl_encrypt($p2, "AES-128-ECB", "password");
	return $return;
}

function ssl_decode_each_keys($p1)
{
	$return = [];
	foreach($p1 as $p2 => $p3)
		$return[] = openssl_decrypt($p2, "AES-128-ECB", "password");
	return $return;
}

function ssl_encode_each_keys($p1)
{
	$return = [];
	foreach($p1 as $p2 => $p3)
		$return[] = openssl_encrypt($p2, "AES-128-ECB", "password");
	return $return;
}

function base64_url_ssl_encode($url)
{
	return base64_encode(ssl_encode($url));
}

function base64_url_ssl_decode($url)
{
	return ssl_decode(base64_decode($url));
}

function base64_url_encode($url)
{
	return base64_encode($url);
}

function base64_url_decode($url)
{
	return base64_decode($url);
}

function end_date($p1)
{
	return date("Y-m-d H:i:s", strtotime($p1));
}

function percentageof( $number, $everything, $decimals = 2 )
{
  return round( $number / $everything * 100, $decimals );
}

function end_time()
{
	return (time() + 600);
}

function form_char($p1)
{
	$p1 = strip_tags($p1);
	$p1 = htmlspecialchars($p1);
	$p1 = htmlentities($p1);
	$p1 = html_entity_decode($p1);
	$p1 = rtrim($p1);
	return $p1;
}

function xhtml($p1)
{
	$p1 = strip_tags($p1);
	$p1 = htmlspecialchars($p1);
	$p1 = htmlentities($p1);
	$p1 = html_entity_decode($p1);
	$p1 = rtrim($p1);
	return $p1;
}

function peel($p1 = [])
{
    foreach($p1 as $key => $value)
    {
        $p1[$key] = form_char($value);
    }
    return $p1;
}

function xss($p1)
{
	$p1 = str_replace(")","",$p1);
	$p1 = str_replace("(","",$p1);
	$p1 = str_replace("'","",$p1);
	$p1 = str_replace(";","",$p1);
	$p1 = str_replace('"',"",$p1);
	$p1 = str_replace("iframe","",$p1);
	$p1 = str_replace("eval","",$p1);
	$p1 = str_replace("refresh","",$p1);
	$p1 = str_replace("style","",$p1);
	$p1 = str_replace("script","",$p1);
	$p1 = str_replace("<alert>","",$p1);
	$p1 = str_replace("<script>","",$p1);
	$p1 = str_replace("<script","",$p1);
	$p1 = str_replace("</script","",$p1);
	$p1 = str_replace("/script","",$p1);
	$p1 = str_replace("<?","",$p1);
	$p1 = str_replace("?>","",$p1);
	$p1 = str_replace("SELECT *","",$p1); 
	$p1 = str_replace("DELETE FROM","",$p1); 
	return $p1;
}

function is_not_empty($p1)
{
	return $p1 != '' || $p1 != null || $p1 != false || !empty($p1);
}

function is_empty($p1)
{
	return $p1 == '' || $p1 == null || $p1 == false || empty($p1);
}

function uniqid_code()
{
    return substr(uniqid(), -5).substr(uniqid(), -5);
}

function return_stripos($p1, $p2)
{
    if(stripos($p1, $p2) !== FALSE) 
    {
        return TRUE;
    } 
}

function date_dy($date)
{
	$explode = explode(' ', $date);
	$ymd     = $explode[0];
	$his     = $explode[1];

	$his = explode(':', $his);
	$his = $his[0].':'.$his[1];

	$ymd = explode('-', $ymd);
	$ymd = array_reverse($ymd);
	$ymd = $ymd[0].'-'.$ymd[1].'-'.substr($ymd[2], -2);

	$date = $his.' | '.$ymd;
	return $date;
}

function date_c($p1)
{
	return date('Y-m-d H:i:s', strtotime($p1));
}

function put($data)
{
    #put($stmt->queryString);
    $fp = fopen('libs/tmp/terminal.sql', 'a');
    fwrite($fp, $data . "\n");
    fclose($fp);
}

function get_anti_bot()
{
	if((time() - get_user_time()) >= 600)
	{
		if(get_user_get() >= 600)
		{
			db()->whereupdate('user', 'user_status = 0', 'user_id =?', [
				get_user_id()
			]); redirect('signout');
		}
		if(get_user_post() > 200)
		{
			db()->whereupdate('user', 'user_status = 0', 'user_id =?', [
				get_user_id()
			]); redirect('signout');
		}
		update_session_array(['GET' => 0, 'POST' => 0, 'TIME' => time(), 'VISIT' => date('Y-m-d H:i:s')]);
	}
}


function counter_file($path)
{
    $dir = opendir($path);
    $count = 0;
    while($file = readdir($dir)){
        if($file == '.' || $file == '..' || is_dir($path . $file)){
            continue;
        }
        $count++;
    }
    return $count;
}

function count_files($dir) { 
    $c = 0;

    $d = dir($dir);

    while ($str=$d->read()) { 
        if ($str[0] != '.') { 
            if (is_dir($dir.'/'.$str)){
                $c += count_files($dir.'/'.$str); 
            }else{
                $c++; 
            }
        } 
    } 

    $d->close();
    return $c; 
}

function byte($size){
	$metrics[0] = 'байт';
	$metrics[1] = 'кб';
	$metrics[2] = 'мб';
	$metrics[3] = 'гб';
	$metrics[4] = 'тб';
	$metric = 0;
	while(floor($size / 1024) > 0){
		$metric ++;
		$size /= 1024;
	}
	$result = round(ceil($size), 1) . " " .
		(isset($metrics[$metric]) ? $metrics[$metric] : '???');
	return $result;
}


function byte_size($size){
    $metrics[0] = 'байт';
    $metrics[1] = 'Кбайт';
    $metrics[2] = 'Мбайт';
    $metrics[3] = 'Гбайт';
    $metrics[4] = 'Тбайт';
    $metric = 0;         
    while(floor($size/1024) > 0){
         ++$metric;
         $size /= 1024;
     }        
     $ret =  round($size,1)." ".(isset($metrics[$metric])?$metrics[$metric]:'??');
    return $ret;
}

function dir_size($dirname)
{
    $totalsize = 0;

    if ($dirstream = opendir($dirname)) 
    {
        while (false !== ($filename = readdir($dirstream))) 
        {
            if ($filename != "." && $filename != "..")
            {
                if (is_file($dirname."/".$filename))
                {
                    $totalsize += filesize($dirname."/".$filename);
                }
      
                if (is_dir($dirname."/".$filename))
                {
                    $totalsize += dir_size($dirname."/".$filename);
                }
            }
        }
    }
    closedir($dirstream);
    return $totalsize;
}

function marpad()
{
	$uri = $_SERVER['REQUEST_URI'];
	if(!preg_match('/about/', $uri) && !preg_match('/404/', $uri)){
		echo 'marpad';
	}
}

function has_file($files, $type)
{
    if(!empty($files[$type]['name']))
    {
        return TRUE;
    }else
    {
        return FALSE;
    }
}

function scanner($path)
{
    $scandir = scandir(CWD.DV.$path);
    array_shift($scandir);
    array_shift($scandir);
    return $scandir;
}

function scan($path)
{
    $scandir = scandir($path);
    unset($scandir[array_search('.', $scandir, true)]);
    unset($scandir[array_search('..', $scandir, true)]);
    return $scandir;
}

function cwd($path)
{
    return getcwd().$path;
}

function file_build_path($segments) {
    return implode(DIRECTORY_SEPARATOR, func_get_args($segments));
}

function get_file_size($path, $file)
{
    return filesize(getcwd() . $path . DIRECTORY_SEPARATOR . $file);
}

function get_created_at_file($path_and_file)
{
    return date("H:i | d-m-Y", filectime($path_and_file));
}

function get_dir_size($path){
    $path = rtrim($path, '/');
    $size = 0;
    $dir = opendir($path);
    if (!$dir) {
        return 0;
    }

    while (false !== ($file = readdir($dir))) {
        if($file == '.' || $file == '..'){
            continue;  
        } else if (is_dir($path . $file)){
            $size += dir_size($path . DIRECTORY_SEPARATOR . $file);
        } else {
            $size += filesize($path . DIRECTORY_SEPARATOR . $file);
        }
    }
    closedir($dir);
    return $size;
}

function count_dir_files($path)
{
    $dir = opendir($path);
    $count = 0;
    while($file = readdir($dir)){
        if($file == '.' || $file == '..' || is_dir($dir . $file)){
            continue;
        }
        $count++;
    }
    return $count;
}

function preg($preg, $key)
{
    if(preg_match($preg, $key)){
        return TRUE;
    }
}

function breadcrumb_url($slice)
{
    $p1 = explode('/', request());
    return implode('/', array_slice($p1, 1, -$slice));
}

function breadcrumb_active($slice)
{
    $p1 = explode('/', request());
    $end = $slice == FALSE ? $p1 : array_slice($p1, 1, -$slice);
    return end($end);
}

function whiler($data)
{
    $out = [];
    while($row = $data->fetch(PDO::FETCH_OBJ)){
        $out[] = $row;
    }
    return $out;
}

function split($array, $json = 0) 
{
	if($array != 0)
	{
		sort($array);
			
	    foreach ($array as $key) 
	    {
	    	if($json == 0)
	    	{
	        	yield json_decode($key);
	    	}
	    	else if($json == 1)
	    	{
	        	yield $key;
	    	}
	    	else if($json == 2)
	    	{
	        	yield json_encode($key);
	    	}
	    }
	}
}

function valitronErrors($v)
{
    if(!$v->validate()){
        foreach($v->errors() as $error)
        {
            foreach($error as $item)
            {
                _message(300, $item);
            }
        }   
    }   
}