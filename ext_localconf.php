<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['ext_ttaddress']
    = 'EXT:ifbbaustria_athletendaten/Classes/Domain/Model/Address.php';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Rcaddressfield.Athletendaten',
        'List',
        [
            'Address' => 'list',
        ],
        // non-cacheable actions
        [
            'Address' => 'list',
        ]
    );