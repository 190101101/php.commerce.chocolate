<?php 

#удаляет ключ с значением из массива;
function except($array, $keys) {
	return array_diff_key($array, array_flip((array) $keys));   
} 

function array_except($array, $keys) {
    return array_diff_key($array, array_flip((array) array_keys($keys)));
} 

function array_except_keys($array, $keys) {
    return array_diff_key(array_keys($array), array_flip((array) array_keys($keys)));
} 

function key_compare($a, $b)
{
    if ($a === $b) {
        return 0;
    } return ($a > $b) ? 1 : -1;
}

function compare_array_keys($p1, $p2)
{
    return array_diff_uassoc(array_keys($p1), $p2, "key_compare");
}

function compare_array($p1, $p2)
{
    return array_diff_uassoc($p1, $p2, "key_compare");
}

function combine($made, $data = [])
{
    $require = require 'libs/return/return_made_array.php';
    return array_combine($require[$made], $data);
}

function file_in_array($file, $path)
{
    if(in_array($file, scan($path)))
    {
        return TRUE;
    }
}
