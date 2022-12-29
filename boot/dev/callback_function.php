<?php 

function return_each_char_in_array($p1)
{
	$return = [];
	foreach($p1 as $keys => $values)
		$return[$keys] = xss(form_char($values));
	return $return;
}

#возврат кроме некодированного
function return_uncoded_value($p1)
{
	return array_filter($p1, function($p3){
		return is_empty(ssl_decode($p3));
	});
}

#возврат кроме закодированного
function return_encoded_value($p1)
{
	return array_filter($p1, function($p3){
		return is_not_empty(ssl_decode($p3));
	});
}

#после энкоде проверяет все ключи и значения
function return_array_after_ssl_decode($p1)
{
	$keys = array_values(array_map(function ($item) {
		return ssl_decode($item);
	}, array_keys($p1)));

	$values = array_values(array_map(function ($item) {
		return ssl_decode($item);
	}, array_values($p1)));

	$array_merge = array_merge($keys, $values);
	return array_filter($array_merge, function($item){
		return is_empty($item);
	});
}

function ssl_decode_array($p1)
{
	$keys = array_values(array_map(function ($item) {
		return ssl_decode($item, "AES-128-ECB", "password");
	}, array_keys($p1)));

	$values = array_values(array_map(function ($item) {
		return ssl_decode($item, "AES-128-ECB", "password");
	}, array_values($p1)));
		
	return array_combine($keys, $values);
}

function ssl_decode_array_keys($p1)
{
	$keys = array_values(array_map(function ($item) {
		return ssl_decode($item);
	}, array_keys($p1)));

	$values = array_values(array_map(function ($item) {
		return $item;
	}, array_values($p1)));

	return array_combine($keys, $values);
}

function ssl_decode_array_values($p1)
{
	$keys = array_values(array_map(function ($item) {
		return $item;
	}, array_keys($p1)));

	$values = array_values(array_map(function ($item) {
		return ssl_decode($item);
	}, array_values($p1)));

	return array_combine($keys, $values);
}
