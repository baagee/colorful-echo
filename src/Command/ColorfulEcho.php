<?php
/**
 * Desc:
 * User: baagee
 * Date: 2018/12/12
 * Time: 下午5:10
 */

namespace BaAGee\Command;
/**
 * Class ColorfulEcho
 * @package BaAGee\Command
 */
class ColorfulEcho
{
    /**
     * 保存字体颜色
     * @var string
     */
    private $font_color = '';
    /**
     *  保存背景颜色
     * @var string
     */
    private $background_color = '';
    /**
     * 保存样式
     * @var string
     */
    private $style = '';

    /**
     * 设置字体颜色
     * @param $color
     * @return $this
     */
    public function setFontColor($color)
    {
        $this->font_color = '3' . $color;
        return $this;
    }

    /**
     * 设置背景颜色
     * @param $color
     * @return $this
     */
    public function setBackgroundColor($color)
    {
        $this->background_color = '4' . $color;
        return $this;
    }

    /**
     * 设置样式
     * @param $style
     * @return $this
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * 重置颜色/样式
     * @return $this
     */
    public function reset()
    {
        $this->font_color       = '';
        $this->background_color = '';
        $this->style            = '';
        return $this;
    }

    /**
     * 输出额色字符串
     * @param $str
     */
    public function show($str)
    {
        $flag  = false;
        $start = "\033[";//m Hello,world! \033[0m';
        if (!empty($this->style)) {
            $start .= $this->style . ';';
            $flag  = true;
        }
        if (!empty($this->font_color)) {
            $start .= $this->font_color . ';';
            $flag  = true;
        }
        if (!empty($this->background_color)) {
            $start .= $this->background_color . ';';
            $flag  = true;
        }
        if ($flag) {
            $start .= "m" . $str . "\033[0m";
        } else {
            $start = $str;
        }
        echo $start;
    }
}