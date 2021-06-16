<?php

namespace LumturoNet\ContaoGlossarBundle;

class Install
{
    public static function moveTinyMCETemplate()
    {
        copy(__DIR__ . '/Resources/templates/be_tinyMCE.html5', __DIR__ . '/../templates/be_tinyMCE.html5');
    }
}