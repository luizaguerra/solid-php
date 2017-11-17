<?php

namespace Solid\Html;

class Html
{
    public function img(string $src)
    {
        return '<img src="' . $src . '">';
    }

    public function a($href, $anchor)
    {
        return '<a href="' . $href . '">' . $anchor . '</a>';
    }
}