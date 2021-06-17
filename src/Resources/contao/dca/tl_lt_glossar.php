<?php

use LumturoNet\ContaoGlossarBundle\Controller\WordController;

$GLOBALS['TL_DCA']['tl_lt_glossar'] = [
    'config' => [
        'dataContainer'    => 'Table',
        'enableVersioning' => true,
        'sql'              => [
            'keys' => [
                'id' => 'primary'
            ]
        ]
    ],
    'list'   => [
        'sorting' => [
            'mode'        => 0,
            'flag'        => 11,
            'panelLayout' => 'search'
        ],
        'label' => [
            'fields' => ['title'],
            'showColumns' => true
        ],
        'operations' => [
            'edit' => [
                'href'            => 'act=edit',
                'icon'            => 'edit.svg',
            ],
            'copy' => [
                'href'            => 'act=copy&amp;mode=paste',
                'icon'            => 'copy.svg',
                'attributes'      => 'onclick="Backend.getScrollOffset()"',
            ],
            'delete' => [
                'href'            => 'act=delete',
                'icon'            => 'delete.svg',
                'attributes'      => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
            ],
            'show' => [
                'href' => 'act=show',
                'icon' => 'show.svg'
            ]
        ]
    ],
    'fields' => [
        'id' => ['sql' => 'int(10) unsigned not null auto_increment'],
        'pid' => ['sql' => 'int(10) unsigned null', 'default' => null],
        'tstamp' => ['sql' => 'int(10) unsigned not null'],
        'title' => [
            'inputType' => 'text',
            'label'     => &$GLOBALS['TL_LANG']['tl_lt_glossar']['title'],
            'search'    => true,
            'eval'      => [
                'mandatory' => true,
                'unique'    => true,
                'maxlength' => 255,
            ],
            'save_callback' => [
                [WordController::class, 'generateSlugAction']
            ],
            'sql'       => 'varchar(255) null default ""',
        ],
        'slug' => [
            'sql' => 'varchar(255) null default ""'
        ],
        'description' => [
            'inputType' => 'textarea',
            'label'     => &$GLOBALS['TL_LANG']['tl_lt_glossar']['description'],
            'sql'       => 'text null default ""',
            'eval'      => [
                'mandatory' => true,
                'tl_class'  => 'clr'
            ]
        ]
    ],
    'palettes' => [
        'default' => 'slug,title,description'
    ],
];