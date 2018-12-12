### php命令行下彩色输出文字/信息


```php
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
```