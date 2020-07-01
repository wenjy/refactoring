<?php
/**
 * @author: wenjy
 * @date: 下午10:17 2020/7/1
 */

/**
 * 一个函数的本体与名称同样清楚易懂，那么在函数调用点插入函数本体，然后移除该函数
 */

function getRatingOld()
{
    return (moreThanFiveLateDeliveries()) ? 2 : 1;
}

function moreThanFiveLateDeliveries($numberOfLateDeliveries = 0)
{
    return $numberOfLateDeliveries > 5;
}

// 删除函数
function getRating()
{
    $numberOfLateDeliveries = 0;
    return $numberOfLateDeliveries > 5 ? 2 : 1;
}
