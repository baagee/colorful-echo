<?php
/**
 * Desc:
 * User: baagee
 * Date: 2018/12/12
 * Time: 下午5:22
 */
include_once '../vendor/autoload.php';

$colorful = new \BaAGee\Command\ColorfulEcho();
$colorful->setBackgroundColor(\BaAGee\Command\Color::BLUE)->show('hello world!');
echo PHP_EOL;
$colorful->reset()->setStyle(\BaAGee\Command\Style::BOLD)->show('sdgsdf');
echo PHP_EOL;
$colorful->reset()->setFontColor(\BaAGee\Command\Color::GREEN)->show('sdgsd');
echo PHP_EOL;
$colorful->setBackgroundColor(\BaAGee\Command\Color::WHITE)->show('dddd');
echo PHP_EOL;
$colorful->reset()->setBackgroundColor(\BaAGee\Command\Color::GREEN)->setStyle(\BaAGee\Command\Style::BOLD)->setFontColor(\BaAGee\Command\Color::RED)->show('dddd');
echo PHP_EOL;
//echo "\033[1;44;mhello world!\033[0m";

$colors = [
    \BaAGee\Command\Color::WHITE,
    \BaAGee\Command\Color::BLUE,
    \BaAGee\Command\Color::RED,
    \BaAGee\Command\Color::GREEN,
    \BaAGee\Command\Color::CRAY,
    \BaAGee\Command\Color::GRAY,
    \BaAGee\Command\Color::YELLOW,
    \BaAGee\Command\Color::PURPLE,
];
foreach ($colors as $color) {
    $colorful->reset()->setBackgroundColor($color)->show('sdfgsdfgdh8978');
    echo PHP_EOL;
    $colorful->reset()->setFontColor($color)->show('sdfgsdfgdh8978');
    echo PHP_EOL;
}
$styles = [
    \BaAGee\Command\Style::BOLD,
    \BaAGee\Command\Style::DEFAULT,
    \BaAGee\Command\Style::REVERSE,
    \BaAGee\Command\Style::UNDERLINE,
];
foreach ($styles as $style) {
    $colorful->reset()->setStyle($style)->show('hello 法式蛋糕 iu');
    echo PHP_EOL;
}