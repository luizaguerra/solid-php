<?php

namespace Solid\Html;
require_once (__DIR__.'/../src/Tags.php');
use Solid\Html\Tags;


class TagsTests extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Tags;
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Tags;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://wwww.example.com.br', $img);

        $this->assertEquals('<a href="http://wwww.example.com.br"><img src="img/photo.png"></a>', $a);
    }

}