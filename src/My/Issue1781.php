<?php

namespace My;

class Issue1781
{
    public function myMethod($myParameter)
    {
        $title = $myParameter->getTitle();
        include __DIR__ . '/my_template.html';
    }
}
