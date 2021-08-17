<?php
function camelize($input)
{
    $str=str_replace('_', '', ucwords($input,'_'));
    $str[0]=strtolower($str[0]);
    return $str;
}
$snakeCase = array("snake_case","camel_case");
$camelCase = (array) null;
foreach ($snakeCase as $str) {
    array_push($camelCase,camelize($str));
}
print_r($camelCase);