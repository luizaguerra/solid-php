<?php

namespace Solid\Html\Tag;

class ImgTests extends \PHPUnit\Framework\TestCase
{
    public function testCriarTagImgComSrc()
    {
        $img = new Img('img/photo.png');

        $this->assertEquals('<img src="img/photo.png">', (string)$img);
    }

}

