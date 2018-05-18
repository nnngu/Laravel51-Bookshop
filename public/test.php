<?php
/**
 * Created by PhpStorm.
 * Author: nnngu
 * Date: 21/04/2018
 * Time: 19:04
 */

//use App\User;
//
//$users = User::all();
//
//foreach ($users as $user) {
//    echo $user->name;
//}

$arr = array(88, 44, 77, 11, 88, 55, 22, 99, 33, 66, 1);

$sort_arr = quick_sort($arr);

var_dump($sort_arr);

function quick_sort(array $list) {
    $len = count($list);
    if ($len <= 1) {
        return $list;
    }
    $pivotValue = $list[0];
    $left = array();
    $right = array();
    for ($i = 1; $i < $len; $i++) {
        if ($list[$i] < $pivotValue) {
            $left[] = $list[$i];
        } else {
            $right[] = $list[$i];
        }
    }
    $left = quick_sort($left);
    $right = quick_sort($right);
    return array_merge($left, array($pivotValue), $right);
}