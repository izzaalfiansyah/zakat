<?php

function env($key = '')
{
	$env = parse_ini_file('.env');

	return $key ? $env[$key] : $env;
}