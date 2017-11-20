<?php

namespace Solid\Html\Tag;

class ImgTests extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagAComHrefAncora()
    {
        $a = new A('http://wwww.example.com.br', 'meu site');

        $this->assertEquals('<a href="http://wwww.example.com.br">meu site</a>', $a);
    }

}

