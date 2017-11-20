<?php

namespace Solid\Html;
require_once (__DIR__.'/../src/Attributes.php');
use Solid\Html\Attributes;


class AttributesTests extends \PHPUnit\Framework\TestCase
{
    public function testCriarAtributosHtmlParaTags()
    {
       $attributes = new Attributes([
           'class'=>'btn btn-default',
           'data-modal'=>'#login',
           'id'=>'login'
       ]);

       $this->assertEquals(' class="btn btn-default" data-modal="#login" id="login"', (string)$attributes);
    }

}