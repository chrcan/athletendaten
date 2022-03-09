<?php

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['tt_address']['extender'][\FriendsOfTYPO3\TtAddress\Domain\Model\Address::class]['ext_ttaddress']
    = 'EXT:athletendaten/Classes/Domain/Model/Address.php';

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Rcaddressfield.Athletendaten',
        'List',
        [
            \Rcaddressfield\Athletendaten\Controller\AddressController::class => 'list'
            //'Address' => 'list'
        ],
        // non-cacheable actions
        [
            \Rcaddressfield\Athletendaten\Controller\AddressController::class => 'list'
            //'Address' => 'list'
        ]
    );