<?php
/**
 * @author: wenjy
 * @date: 下午8:52 2020/7/3
 */

/**
 * 你的程序以一个临时变量保存某一表达式的运算结果
 * 将这个表达式提炼到一个独立函数中，然后新的函数可以被其他函数调用
 * 临时变量的问题在于：它们是暂时的，而且只能在所属的函数使用。这会迫使你写出更长的函数，因为这样你才能访问到所需要的临时变量
 */

function getPrice1()
{
    $quantity = 2;
    $itemPrice = 100;
    $basePrice = $quantity * $itemPrice;
    if ($basePrice > 1000) {
        return $basePrice * 0.90;
    }
    return  $basePrice * 0.95;
}

function getPrice2()
{
    if (($basePrice = basePrice()) > 1000) {
        return $basePrice * 0.90;
    }
    return  $basePrice * 0.95;
}

function basePrice()
{
    $quantity = 2;
    $itemPrice = 100;
    return $quantity * $itemPrice;
}
