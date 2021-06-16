<?php

use LumturoNet\ContaoGlossarBundle\Models\Entry;

$GLOBALS['TL_MODELS']['tl_lt_glossar'] = Entry::class;
$GLOBALS['BE_MOD']['lumturo']['glossar'] = ['tables' => ['tl_lt_glossar']];
if(TL_MODE === 'FE') {
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/contaoglossar/glossar.js';
    $GLOBALS['TL_CSS'][] = 'bundles/contaoglossar/glossar.css';
}
