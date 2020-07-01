<?php
/**
 * @author: wenjy
 * @date: 下午9:56 2020/7/1
 */

/**
 * 看见一个过长的函数或者需要一段注释才能让人理解的代码，将这段代码放进一个独立的函数
 * 根据这个函数的意图来对它命名（以它"做什么"来命名，而不是以它"怎样做"命名）
 * 只要新函数的名称能够以更好的方式展示代码的意图，你就应该提炼它。但如果你想不出一个更有意义的名称，就别动
 */

function printOwingOld(int $amount)
{
    printBanner();

    // print details
    echo "aaa";
    echo "bbb";
}

function printBanner()
{
    echo "banner";
}

// 提炼出去
function printOwing(int $amount)
{
    printBanner();
    printDetail();
}

function printDetail()
{
    echo "aaa";
    echo "bbb";
}

