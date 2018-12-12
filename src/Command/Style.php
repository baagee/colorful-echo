<?php
/**
 * Desc: 基本样式
 * User: baagee
 * Date: 2018/12/12
 * Time: 下午5:07
 */

/*
-------------------------------
显示方式     |      效果
-------------------------------
0           |     终端默认设置
1           |     高亮显示
4           |     使用下划线
7           |     反白显示
-------------------------------*/

namespace BaAGee\Command;
/**
 * Class Style
 * @package BaAGee\Command
 */
class Style
{
    /**
     * 默认
     */
    const DEFAULT = 0;
    /**
     * 粗体
     */
    const BOLD = 1;
    /**
     * 下划线
     */
    const UNDERLINE = 4;
    /**
     * 反色
     */
    const REVERSE = 7;
}