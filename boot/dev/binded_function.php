<?php 

#возврат кроме некодированного
function return_other_than_uncoded($array){
    return array_except($array, return_uncoded_value(array_keys($array)));
}

#возврат кроме кодированного
function return_other_than_encoded($array){
    return array_except($array, return_encoded_value(array_keys($array)));
}

#декодировать закодированное ключи
function decode_encoded_keys($array)
{
    return ssl_decode_array_keys(return_uncoded_value($array));
}

#декодировать закодированный массив
function decode_encoded_array($array)
{
    return ssl_decode_array(return_encoded_value($array));
}

#исключает закодированные ключи
function excludes_encoded_keys($array, $except){
    return array_except($array, array_keys($except));
}

#массив каторый кейси кодировались а значение не кодировались и исключает полученный ключ
function array_except_encoded($array, $except){
    return excludes_encoded_keys($_POST, return_uncoded_value($except));
}


