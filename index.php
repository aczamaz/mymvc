<?php

require_once "app/core/develop.php";
// проверка адекватности url
$url = $_SERVER['REQUEST_URI'];
$countSlesh = substr_count($url,"/");

if($countSlesh>3 || $countSlesh==1)
{
	echo "неправильный путь держишь добрый молодец";
	return;
}

$url = trim($url,"/");
$urlArray = explode("/",$url);

if(count($urlArray)>=3)
{
	echo "неправильный путь держишь добрый молодец";
	return;
}

$controler = $urlArray[0];
$action = $urlArray[1];


//проверка сушествует ли контролер если да создать объект иначе сказать что такого нет
if(file_exists("app/Controlers/{$controler}Controler.php"))
{
	require_once "app/Controlers/" . $controler."Controler.php";
}
else
{
	echo "такого контролера нет";
	return;
}
$className = $controler."Controler";
$obj = new $className();

//проверка сушествует ли событие если да то вызвать его если нет сказать об этом
$methods = get_class_methods($className);
$findOrNor = array_search($action ."Action",$methods);
if ($findOrNor === false)
{
	echo "такого события нет";
}
else
{
	$actionName = $action ."Action";
	$obj->$actionName();
}




