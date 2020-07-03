<?php
/**
 * @author: wenjy
 * @date: 下午8:48 2020/7/3
 */

/**
 * 你有一个临时变量，只被一个简单的表达式赋值一次，而它妨碍了其他重构手法
 */

$basePrice = basePrice();
return $basePrice > 100;

function basePrice()
{
    return 123;
}

return basePrice() > 100;
