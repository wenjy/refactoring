<?php
/**
 * @author: wenjy
 * @date: 下午9:36 2020/7/3
 */

/**
 * 代码对一个参数进行赋值
 * 以一个临时变量取代该参数的值
 * 对象是引用传参，对于php来说重新对参数赋值也不会改变原对象，只有对对象的属性操作才会
 */

class TestA
{
    public $a = 0;
}

function test(TestA $a)
{
    var_dump($a->a);
    $a->a = 1;
}

$a = new TestA();
test($a);
var_dump($a->a);
