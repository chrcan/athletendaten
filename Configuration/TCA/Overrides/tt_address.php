<?php
defined('TYPO3_MODE') or die(); 

//$palette = ['Athletendaten'];

$newfields = [
    'onmstartklasse' => [
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.startklasse',
        'label' => 'Startklasse/n ÖNM',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim'
        ]
    ],
    'iomstartklasse' => [
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.startklasse',
        'label' => 'Startklasse/n IÖM',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim'
        ]
    ],
    'wettbewerb' => [
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.startklasse',
        'label' => 'Wettbewerb',
        'config' => [
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim'
        ]
    ],
    'startlizenz' => [
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.startlizenz',
        'label' => 'Jahreslizenz',
        'config' => [
            'type' => 'input',
            'rows' => 30,
            'eval' => 'trim'
        ]
    ],
    'startbuch' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.startbuch',
        'label' => 'Startbuch',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ]
    ],
    'iomstart' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.iomstart',
        'label' => 'Start zur IÖM',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'emquali' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.emquali',
        'label' => 'EM Qualifizierung',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'wmquali' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.wmquali',
        'label' => 'WM Qualifizierung',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'arnoldquali' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.arnoldquali',
        'label' => 'Arnold Classic Europe Qualifizierung',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'reisepassnummer' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.reisepassnummer',
        'label' => 'Reisepassnummer',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'reisepassland' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.reisepassland',
        'label' => 'Reisepassland',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
    'aufenthalt' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.aufenthalt',
        'label' => 'Aufenthalt in Österreich seit',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 7,
            'eval' => 'date',
            'default' => 'date,int',
        ],
    ],
    'genehmigung' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.genehmigung',
        'label' => 'Arbeitsgenehmigung in Österreich seit',
        'config' => [
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 7,
            'eval' => 'date',
            'default' => 'date,int',
        ],
    ],
    'reisepassimage' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.reisepassimage',
        'label' => 'Passbild Upload',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'reisepassimage',
            [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                ],
                'foreign_types' => [
                    '0' => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ]
                ],
                'foreign_match_fields' => [
                    'fieldname' => 'reisepassimage',
                    'tablenames' => 'tt_address',
                    'table_local' => 'sys_file',
                ],
                'maxitems' => 1
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
        
    ],
    'imageupload' => [
        'exclude' => true,
        //'label' => 'LLL:EXT:ifbb_athletendaten/Resources/Private/Language/locallang_db.xlf:tx_ifbbathletendaten_domain_model_athletendaten.imageupload',
        'label' => 'Reisepass Upload',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'imageupload',
            [
                'appearance' => [
                    'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
                ],
                'foreign_types' => [
                    '0' => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ],
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                        'showitem' => '
                        --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                        --palette--;;filePalette'
                    ]
                ],
                'foreign_match_fields' => [
                    'fieldname' => 'imageupload',
                    'tablenames' => 'tt_address',
                    'table_local' => 'sys_file',
                ],
                'maxitems' => 1
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
        
    ],
];

//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPaletts('tt_address', $palette);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_address', $newfields); 

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address','--div--;Athletendaten, onmstartklasse');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'onmstartklasse', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'iomstartklasse', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'wettbewerb', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'startlizenz', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'startbuch', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'iomstart', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'emquali', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'wmquali', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'arnoldquali', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'reisepassnummer', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'reisepassland', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'aufenthalt', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'genehmigung', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'reisepassimage', '');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'imageupload', '');
/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'aufenthalt', '', 'after:name');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'genehmigung', '', 'after:name');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'reisepassland', '', 'after:name');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_address', 'reisepassnummer', '', 'after:name');
*/
$GLOBALS['TCA']['tt_address']['palettes']['palette_atleten'] = [
    'canNotCollapse' => true,
    'showitem' => 'onmstartklasse,iomstartklasse,wettbewerb,startlizenz,startbuch,iomstart,emquali,wmquali,arnoldquali,reisepassnummer,reisepassland,aufenthalt,genehmigung,reisepassimage,imageupload'
];