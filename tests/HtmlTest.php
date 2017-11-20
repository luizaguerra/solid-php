<?php

namespace Tests\Solid\Html;
require_once (__DIR__.'/../src/Html.php');
use Solid\Html\Html;


class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagImgComSrc()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', $img);
    }

    public function testCriarTagAComImgAncora()
    {
        $html = new Html;
        $img = $html->img('img/photo.png');

        $a = $html->a('http://wwww.example.com.br', $img);

        $this->assertEquals('<a href="http://wwww.example.com.br"><img src="img/photo.png"></a>', $a);
    }

    public function testCriarTagAComClassEId()
    {
        $html = new Html;

        $a = $html->a('http://www.example.com.br', 'Meu Site');
        $a->attribute([
            'class'=>'btn btn-default'
        ]);

        $this->assertEquals('<a href="http://www.example.com.br" class="btn btn-default">Meu Site</a>', (string)$a);
    }

}