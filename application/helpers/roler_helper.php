<?php

if(!function_exists('getMenu'))
{
  function getMenu($value)
  {
   switch ($value) {
    case "Agent":
        return "sidebar_agent";
        break;
    case "Admin":
        return "sidebar_admin";
        break;
    case "Branch Admin":
        return "sidebar_branch_admin";
        break;
    default:
        echo "role_is_not_recognized";
}
  }
}


if(!function_exists('time_since'))
{
function time_since($since) {
    $chunks = array(
        array(60 * 60 * 24 * 365 , 'year'),
        array(60 * 60 * 24 * 30 , 'month'),
        array(60 * 60 * 24 * 7, 'week'),
        array(60 * 60 * 24 , 'day'),
        array(60 * 60 , 'hour'),
        array(60 , 'minute'),
        array(1 , 'second')
    );

    for ($i = 0, $j = count($chunks); $i < $j; $i++) {
        $seconds = $chunks[$i][0];
        $name = $chunks[$i][1];
        if (($count = floor($since / $seconds)) != 0) {
            break;
        }
    }

    $print = ($count == 1) ? '1 '.$name : "$count {$name}s";
    return $print;
}
}
